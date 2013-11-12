<?php

/*
 * Class used to store information in the question attempt step data
 */

/**
 * Description of step
 *
 * @author dani
 */
class qtype_wirisstep {
    public static $MAX_ATTEMPS_SHORTANSWER_WIRIS = 2;
    
    private $step;
    
    public function __construct() {
        $this->step = null;
    }
    
    public function load($step) {
        if (!($step instanceof question_attempt_step_read_only)) {
            $this->step = $step;
            // It is a regrade or the first attempt
            try {
                $this->reset_attempts();
                return;
            } catch (moodle_exception $ex) {
                // We assume it is read only so continue...
                $this->step = null;
            }
        }
        $s = var_export($step,true);
        if (isset($step->get_id)) {
            // Moodle 2.3 or superior
            $this->step_id = $step->get_id();
        } else {
            // Moodle 2.2
            if (preg_match("/'id' *=> *'(.*)'/",$s,$matches)) {
                $this->step_id = $matches[1];
            } else {
                $this->step_id = 0;
            }
        }
        if (preg_match("/'extraprefix' *=> *'(.*)'/",$s,$matches)) {
            $this->extraprefix = $matches[1];
        } else {
            $this->extraprefix = "";
        }
    }

    /**
     * Sets a attempt step data value
     * @global type $CFG
     * @param type $name the name of the property to set
     * @param type $value the value
     * @param type $quizBool whether it is question level or subquestion level
     * @throws dml_exception
     */
    public function set_var($name, $value, $subquesBool) {
        if ($subquesBool && $this->step!=null) {
            $this->step->set_qt_var('_'.$name,$value);
            return;
        }

        if (!isset($this->step_id) || $this->step_id==0) {
            // It doees not exist, do not even try to find in the db
            return null;
        }

        $DB=$this->get_db();
        
        $name = $this->get_step_var_internal($name, $subquesBool);

        $gc = $DB->get_record('question_attempt_step_data',array('attemptstepid'=>$this->step_id,'name'=>$name),'value');
        if ($gc==null) {
            $gc = new Object();
            $gc->attemptstepid = $this->step_id;
            $gc->name = $name;
            $gc->value = $value;
            $DB->insert_record('question_attempt_step_data',$gc);
        } else {
            $DB->set_field('question_attempt_step_data','value',$value,array('attemptstepid'=>$this->step_id,'name'=>$name));
        }
        
    }

    /**
     * 
     * @param type $name
     * @param type $subquesBool whether the variable is from the subquestion or the parent (only cloze).
     * @return null
     */
    public function get_var($name, $subquesBool) {
        if ($subquesBool && $this->step!=null) {
            return $this->step->get_qt_var('_'.$name);
        }

        if (!isset($this->step_id) || $this->step_id==0) {
            // It doees not exist, do not even try to find in the db
            return null;
        }
        
        $DB=$this->get_db();
        
        $name = $this->get_step_var_internal($name, $subquesBool);

        $gc = $DB->get_record('question_attempt_step_data',array('attemptstepid'=>$this->step_id,'name'=>$name),'value');
        if ($gc==null) {
            $r = null;
        } else {
            $r = $gc->value;
        }

        return $r;
    }

    private function get_step_var_internal($name, $subquesBool) {
        if ($subquesBool && strlen($this->extraprefix)>0) {
            // the prefix is needed when it is a subquestion of a cloze 
            // (multianswer) question type
            return '_' . $this->extraprefix . $name;
        } else {
            return '_' . $name;
        }
    }
    
    private function get_db() {
        global $wiris_DB;
        if (!isset($wiris_DB)) {
            global $CFG;
            // Create a new connection because the default one is inside a transaction
            // and a rollback is done afterwards
            if (!$wiris_DB = moodle_database::get_driver_instance($CFG->dbtype, $CFG->dblibrary)) {
                throw new dml_exception('dbdriverproblem', "Unknown driver $CFG->dblibrary/$CFG->dbtype");
            }
            $wiris_DB->connect($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname, $CFG->prefix, $CFG->dboptions);
        }
        return $wiris_DB;
    }
    
    /**
     * Returns whether the max number of attempts limit is reached
     */
    public function is_attempt_limit_reached() {
        $c = $this->get_var('gc',true);
        if (is_null($c)) {
            return false;
        }
        return $c>=qtype_wirisstep::$MAX_ATTEMPS_SHORTANSWER_WIRIS;
    }
    
    /**
     * Increment number of failed attempts
     */
    public function inc_attempts() {
        $c = $this->get_var('gc',true);
        if (is_null($c)) {
            $c = 0;
        }
        $this->set_var('gc',$c+1,true);
    }

    /**
     * Set number of failed attempts to zero
     */
    public function reset_attempts() {
        $this->set_var('gc',0,true);
    }

    /**
     * Whether there is any error in the question or in the parent
     * @return boolean
     */
    public function is_error() {
        $c = $this->get_var('gc',false); // false to look into the parent
        if (!is_null($c) && $c>0) {
            return true;
        }
        return false;
    }
    
    /**
     * Returns the number of failed attempts
     * @return int 
     */
    public function get_attempts() {
        $c = $this->get_var('gc',true);
        if ($c==null) {
            return 0;
        }
        return $c;
    }

    public function get_randomseed() {
        // The issue here is that the randomseed was not stored properly in
        // subquestions in old versions of quizzes. Thus, we get it from the 
        // parent
        $qi_xml = $this->get_var('qi',false); // get the seed from the parent!
        if (is_null($qi_xml)) {
            return null;
        }
        $rb = com_wiris_quizzes_api_QuizzesBuilder::getInstance();
        $qi = $rb->readQuestionInstance($qi_xml);

        $wrap = com_wiris_quizzes_wrap_Wrapper::getInstance();
        $wrap->start();
        $randomseed = $qi->instance->userData->randomSeed;
        $wrap->stop();

        return $randomseed;
    }

}

?>
