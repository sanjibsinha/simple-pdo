<?php

require_once 'connect.php';

class InsertingByExec
{
    public function inserting() {
        
        try {
            
            $connect = new Connect;
            $con = $connect->connect();
            
            if($con){
                $statement = "insert into subjects (category_id, name, visible) values (2, 'C++', 1)";
                $result = $con->exec($statement);
                return "{$result} Inserted successfully and last inserted ID is {$con->lastInsertID()}";
            }else {
                return "Insertion Failed.";
            }
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
        
    }
    
}

$insert = new InsertingByExec;

echo $insert->inserting(); // 1 Inserted successfully and last inserted ID is 11
