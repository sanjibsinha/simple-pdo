<?php

require_once 'connect.php';

class InsertingByQuery
{
    public function inserting() {
        
        try {
            
            $connect = new Connect;
            $con = $connect->connect();
            
            if($con){
                $statement = "insert into subjects (category_id, name, visible) values (2, 'Hacking', 0)";
                $result = $con->query($statement);
                return "Inserted successfully.";
            }else {
                return "Insertion Failed.";
            }
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
        
    }
    
}

$insert = new InsertingByQuery();

echo $insert->inserting(); // inserted successfully
