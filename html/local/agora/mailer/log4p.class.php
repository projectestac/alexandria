<?php
/**
 * This class takes, process, save and show log during the live of the object monitored
 *
 *
 * @author IECISA @mmartinez
 * @version 1.1
 *
 */
final class log4p {

    /**
     * Variables to use
     */
    private $log = array();
    private $savetofile;
    private $debug;

    /**
     * Call this method to get singleton
     *
     * @return mailsender
     */
    public static function instance($savetofile = false, $savetofilepath = '', $debug = false) {
        static $inst = null;
        if ($inst === null) {
            $inst = new log4p($savetofile, $savetofilepath, $debug);
        }
        return $inst;
    }


    /**
     * Class constructor
     *
     * @param bool $savetofile -> set the functionality savetofile on or off
     * @param string $savetofilepath -> path and file name where the log have to be saved when $state is set to true
     */
    private function __construct($savetofile = false, $savetofilepath = '', $debug = false) {
        $this->debug = $debug;

        if ($savetofile == false) {
            $this->savetofile = false;
            $this->add('log4p: its off becouse the parameters to switch it on sets it', 'WARNING');
            return;
        }

        // Set default path location
        if (empty($savetofilepath)) {
            // Get actuall path
            $pwd = dirname(__FILE__);
            $pwd = str_replace('\\', '/', $pwd);
            // Go one folder up
            $pwdarray = explode ('/', $pwd);
            $pwd = "";
            for ($i = 0; $i < count($pwdarray) - 1; $i++) {
                $pwd .= $pwdarray[$i].'/';
            }
            $savetofilepath = $pwd.'log';
        }

        $this->savetofile = $this->loadsavetofile($savetofilepath);
    }

    /**
     * Class destructor
     *
     * Used to close de file pointer
     */
    function __destruct() {
        $this->add('log4p: Closing log file', 'DEBUG');
        if ($this->filelogpointer && !fclose($this->filelogpointer)) {
            $this->add('Logger: trying to close file log pointer failed');
        }
        $this->filelogpointer = false;
        $this->savetofile = false;
    }

    /**
     * Add entry to the log
     *
     * @param string $str  -> log entry text
     * @param string $type -> posible values ERROR, WARNING, INFO
     */
    function add($str, $type = 'INFO*') {

        if ($type == 'DEBUG' && !$this->debug) {
            // Debug not allowed
            return;
        }

        // Alowed type values
        $typesallowed = array('ERROR', 'WARNING', 'INFO*', 'DEBUG');

        if (!in_array($type, $typesallowed)) {
                $type = 'UNKNOWN';
        }

        // Add log to our variable
        $this->log[] = date('[Y-m-d H:i:s] ').' *'.$type.'*   '.$str;

        // Save log to file if its switched on
        if ($this->savetofile) {
            $this->addtofile($this->log[count($this->log) - 1]);
        }

        return;
    }

    /**
     * Save log entry in a file
     *
     * @param string $str       -> log entry text
     * @param string $delimiter -> characters used to diference one line from other
     */
    private function addtofile ($str = '', $delimiter = "\n") {

        // Check if parameter is not empty
        if (empty($str)) {
            return false;
        }

        // Save in file
        if (!fwrite($this->filelogpointer, $str.$delimiter)) {
            $this->savetofile = false;
            $this->add('log4p: addtofile cant write in log file. Save to file has been switch to off.', 'ERROR');
            return false;
        }

        return true;
    }

    /**
     * Convert log array to a string using the defined delimiter
     *
     * @param  string $delimiter -> characters used to diference one line from other
     * @return string            -> string with all the entries in log separated by the delimeter
     */
    public function get_log ($delimiter = "\n") {
        if (empty($this->log)) {
            return false;
        }
        return implode($delimiter, $this->log);
    }

    /**
     * Print de log generated by the class
     *
     * @return string -> full string with the log
     */
    public function print_log() {
        if ($log = $this->get_log('<br>')) {
            echo '<br><br><b>Log generated on '.date("d-m-Y H:i:s").':</b><br>'.$log;
        }
    }

    /**
     * Function that put the saver on or off if savetofilepath exits and is writable
     *
     * @param  bool   $state          -> set the function savetofile on or off
     * @param  string $savetofilepath -> path and file name where the log have to be saved when $state is set to true
     * @param  string $delimiter      -> characters used to diference one line from other
     * @return bool                   -> true if saver could be switched to on or false if not
     */
    private function loadsavetofile($savetofilepath = "", $delimiter = "\n", $site = false) {

        $this->filelogpointer = false;
        // Check if parameters are set to true and are correct
        if (empty($savetofilepath)) {
            $this->add('log4p: its off becouse the parameters to switch it on sets it', 'WARNING');
            return false;
        }

        // Prepare savetofilepath parameter
        $savetofilepath = str_replace('\\', '/', $savetofilepath);

        // Delete filename if needed
        $stringtosearch = '.log';
        if (substr($savetofilepath, - strlen($stringtosearch)) === $stringtosearch) {
            $filepatharray = explode("/", $savetofilepath);
            array_pop($filepatharray);
            $savetofilepath = implode("/", $filepatharray);
        }

        // Check if exits log folder
        if (!is_dir($savetofilepath)) {
            if (!@mkdir($savetofilepath)) {
                $this->add('log4p: folder not exits and its imposible to create it', 'WARNING');
                return false;
            }
        }
        // Add Filename
        $outputfile = $savetofilepath.'/mailsender'.$site.'_'.date("Ymd").'.log';

        // Zip old files
        $site = $site ? '_'.$site : "";
        $search = $savetofilepath.'/mailsender'.$site.'_'.date("Y", strtotime("-1 day"));
        foreach (glob($search.'*.log') as $filename) {
            if ($outputfile != $filename) {
                // If not is current cron file, zip it
                $gzfilename = $filename.'.gz';
                $fp = gzopen ($gzfilename, 'w9');
                gzwrite ($fp, file_get_contents($filename));
                gzclose($fp);
                if (filesize($gzfilename) > 0) {
                    // If gz file is created, remove unzipped origin file
                    unlink($filename);
                }
            }
        }

        // Erase old files
        $search = $savetofilepath.'/mailsender'.$site.'_'.date("Ym", strtotime("-2 month"));
        foreach (glob($search.'*.gz') as $filename) {
            unlink($filename);
        }

        // Open or create log file
        if (!$file = fopen($outputfile, "a+")) {
            $this->add('log4p: file not exits and its imposible to create it', 'WARNING');
            return false;
        }

        // Test if its posible to save in file
        if (!fwrite($file, $delimiter)) {
            $this->add('log4p: imposible to write in log file. Save to file has been switch to off.', 'ERROR');
            return false;
        }

        $this->filelogpointer = $file;
        $this->add('log4p: loaded correctly in '.$outputfile);
        return true;
    }
}