<?PHP
    //This php script contains all the stuff to backup/restore
    //feedback mods

    //This is the "graphical" structure of the feedback mod:
    //
    //                     feedback---------------------------------feedback_tracking
    //                    (CL,pk->id)                            (UL, pk->id, fk->feedback,completed)
    //                        |                                           |
    //                        |                                           |
    //                        |                                           |
    //                 feedback_template                            feedback_completed
    //                   (CL,pk->id)                           (UL, pk->id, fk->feedback)
    //                        |                                           |
    //                        |                                           |
    //                        |                                           |
    //                 feedback_item---------------------------------feedback_value
    //        (ML,pk->id, fk->feedback, fk->template)       (UL, pk->id, fk->item, fk->completed)
    //
    // Meaning: pk->primary key field of the table
    //          fk->foreign key to link with parent
    //          CL->course level info
    //          ML->modul level info
    //          UL->userid level info
    //          message->text of each feedback_posting
    //
    //-----------------------------------------------------------
    
    function feedback_restore_mods($mod,$restore) {

      global $CFG;
      
      $allValues = array();
      $allTrackings = array();

      $status = true;

      //Get record from backup_ids
      $data = backup_getid($restore->backup_unique_code,$mod->modtype,$mod->id);
      if ($data) {
         //Now get completed xmlized object   
         $info = $data->info;
         
         //check of older backupversion of feedback
         $version = intval(backup_todb($info['MOD']['#']['VERSION']['0']['#']));
         
         //Now, build the feedback record structure
         $feedback->course = $restore->course_id;
         $feedback->name = backup_todb($info['MOD']['#']['NAME']['0']['#']);
         $feedback->summary = backup_todb($info['MOD']['#']['SUMMARY']['0']['#']);
         $feedback->anonymous = backup_todb($info['MOD']['#']['ANONYMOUS']['0']['#']);
         $feedback->email_notification = backup_todb($info['MOD']['#']['EMAILNOTIFICATION']['0']['#']);
         $feedback->multiple_submit = backup_todb($info['MOD']['#']['MULTIPLESUBMIT']['0']['#']);
         $feedback->timemodified = backup_todb($info['MOD']['#']['TIMEMODIFIED']['0']['#']);

         //The structure is equal to the db, so insert the feedback
         $newid = insert_record ("feedback",$feedback);

         //Do some output     
         echo "<ul><li>".get_string("modulename","feedback")." \"".$feedback->name."\"<br />";
         backup_flush(300);

         if ($newid) {
            //Now, build the feedback_item record structure
            $items = $info['MOD']['#']['ITEMS']['0']['#']['ITEM'];
            for($i = 0; $i < sizeof($items); $i++) {
               $item_info = $items[$i];
               $item->feedback = $newid;
               $item->template = 0;
               $item->name = backup_todb($item_info['#']['NAME']['0']['#']);
               $item->presentation = stripslashes(backup_todb($item_info['#']['PRESENTATION']['0']['#']));
               if($version >= 1) {
                  $item->typ = backup_todb($item_info['#']['TYP']['0']['#']);
                  $item->hasvalue = backup_todb($item_info['#']['HASVALUE']['0']['#']);
               } else {
                  $oldtyp = intval(backup_todb($item_info['#']['TYP']['0']['#']));
                  switch($oldtyp) {
                     case 0:
                        $item->typ = 'label';
                        $item->hasvalue = 0;
                        break;
                     case 1:
                        $item->typ = 'textfield';
                        $item->hasvalue = 1;
                        break;
                     case 2:
                        $item->typ = 'textarea';
                        $item->hasvalue = 1;
                        break;
                     case 3:
                        $item->typ = 'radio';
                        $item->hasvalue = 1;
                        break;
                     case 4:
                        $item->typ = 'check';
                        $item->hasvalue = 1;
                        break;
                     case 5:
                        $item->typ = 'dropdown';
                        $item->hasvalue = 1;
                        break;
                  }
               }
               $item->position = backup_todb($item_info['#']['POSITION']['0']['#']);
               $item->required = backup_todb($item_info['#']['REQUIRED']['0']['#']);
               //put this new item into the database
               $newitemid = insert_record('feedback_item', $item);

               //Now check if want to restore user data and do it.
               if ($restore->mods['feedback']->userinfo) {
                  $values = $item_info['#']['FBVALUES']['0']['#']['FBVALUE'];
                  for($ii = 0; $ii < sizeof($values); $ii++) {
                     $value_info = $values[$ii];
                     $value->id = '';
                     $value->item = $newitemid;
                     $value->completed = 0;
                     $value->tmp_completed = backup_todb($value_info['#']['COMPLETED']['0']['#']);
                     $value->value = backup_todb($value_info['#']['VAL']['0']['#']);
                     //put this new value into the database
                     $newvalueid = insert_record('feedback_value', $value);
                     $value->id = $newvalueid;
                     $allValues[] = $value;
                  }
               }
            }
            //Now check if want to restore user data again and do it.
            if ($restore->mods['feedback']->userinfo) {
               //restore tracking-data
               $trackings = $info['MOD']['#']['TRACKINGS']['0']['#']['TRACKING'];
               for($i = 0; $i < sizeof($trackings); $i++) {
                  $tracking_info = $trackings[$i];
                  $tracking->id = '';
                  $tracking->userid = backup_todb($tracking_info['#']['USERID']['0']['#']); //have to change later
                  $tracking->feedback = $newid;
                  $tracking->completed = backup_todb($tracking_info['#']['COMPLETED']['0']['#']); //have to change later
                  $tracking->count = backup_todb($tracking_info['#']['COUNT']['0']['#']);
                  if($tracking->userid > 0) {
                     //We have to recode the userid field
                     $user = backup_getid($restore->backup_unique_code,"user",$completed->userid);
                     if ($user) {
                        $tracking->userid = $user->new_id;
                     }
                  }
                  
                  //save the tracking
                  $newtrackingid = insert_record('feedback_tracking', $tracking);
                  $tracking->id = $newtrackingid;
                  $allTrackings[] = $tracking;
               }
               
               //restore completeds
               $completeds = $info['MOD']['#']['COMPLETEDS']['0']['#']['COMPLETED'];
               for($i = 0; $i < sizeof($completeds); $i++) {
                  $completed_info = $completeds[$i];
                  $completed->feedback = $newid;
                  $completed->userid = backup_todb($completed_info['#']['USERID']['0']['#']);
                  $completed->timemodified = backup_todb($completed_info['#']['TIMEMODIFIED']['0']['#']);
                  if($completed->userid > 0) {
                     //We have to recode the userid field
                     $user = backup_getid($restore->backup_unique_code,"user",$completed->userid);
                     if ($user) {
                        $completed->userid = $user->new_id;
                     }
                  }
                  //later this have to be changed
                  $oldcompletedid = backup_todb($completed_info['#']['ID']['0']['#']);
                  
                  //save the completed
                  $newcompletedid = insert_record('feedback_completed', $completed);
                  
                  //the newcompletedid have to be changed at every values
                  $tochangevals = get_records('feedback_value', 'tmp_completed', $oldcompletedid);
                  if($tochangevals) {
                     foreach($tochangevals as $tmpVal) {
                        $tmpVal->completed = $newcompletedid;
                        $tmpVal->tmp_completed = 0;
                        update_record('feedback_value', $tmpVal);
                     }
                  }
               
                  //the newcompletedid have to be changed at every tracking
                  $tochangetracks = get_records('feedback_tracking', 'completed', $oldcompletedid);
                  if($tochangetracks) {
                     foreach($tochangetracks as $tmpTrack) {
                        $tmpTrack->completed = $newcompletedid;
                        $tmpTrack->tmp_completed = 0;
                        update_record('feedback_tracking', $tmpTrack);
                     }
                  }
               }
            }
            
            //We have the newid, update backup_ids
            backup_putid($restore->backup_unique_code,$mod->modtype, $mod->id, $newid);
         } else {
            $status = false;
         }

         //Finalize ul        
         echo "</ul>";
     
      } else {
         $status = false;
      }

     return $status;
   }

    //This function returns a log record with all the necessay transformations
    //done. It's used by restore_log_module() to restore modules log.
    function feedback_restore_logs($restore,$log) {

         $status = false;
         
         //Depending of the action, we recode different things
         switch ($log->action) {
         case "add":
            if ($log->cmid) {
               //Get the new_id of the module (to recode the info field)
               $mod = backup_getid($restore->backup_unique_code,$log->module,$log->info);
               if ($mod) {
                  $log->url = "view.php?id=".$log->cmid;
                  $log->info = $mod->new_id;
                  $status = true;
               }
            }
            break;
         case "update":
            if ($log->cmid) {
               //Get the new_id of the module (to recode the info field)
               $mod = backup_getid($restore->backup_unique_code,$log->module,$log->info);
               if ($mod) {
                  $log->url = "view.php?id=".$log->cmid;
                  $log->info = $mod->new_id;
                  $status = true;
               }
            }
            break;
         case "view":
            if ($log->cmid) {
               //Get the new_id of the module (to recode the info field)
               $mod = backup_getid($restore->backup_unique_code,$log->module,$log->info);
               if ($mod) {
                  $log->url = "view.php?id=".$log->cmid;
                  $log->info = $mod->new_id;
                  $status = true;
               }
            }
            break;
         case "view all":
            $log->url = "index.php?id=".$log->course;
            $status = true;
            break;
         default:
            echo "action (".$log->module."-".$log->action.") unknow. Not restored<br />";                 //Debug
            break;
         }

         if ($status) {
            $status = $log;
         }
         return $status;
   }

?>
