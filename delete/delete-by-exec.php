<?php

require_once 'connect.php';

class DeletingByExec
{
    public function delete() {
        
        try {
            
            $connect = new Connect;
            $con = $connect->connect();
            
            if($con){
                $statement = "delete from subjects where name='Hacking'";
                $result = $con->exec($statement);
                return "{$result} deleted successfully from database.";
            }else {
                return "Insertion Failed.";
            }
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
        
    }
    
}

$delete = new DeletingByExec();
echo $delete->delete(); // 3 deleted successfully from database.
