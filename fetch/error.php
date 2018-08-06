<?php

require_once 'pdo-connect.php';

class ErrorFinding
{
    public function findError() {
        
        try {
            $con = new Connection;
            $connect = $con->connect();
            if($connect){
                
                // to find the exact error we make it intentionally vulnerable
                // originally the table name was subjects
                $sql = "select * from subject";
                
                $rows = $connect->query($sql);
                
                // to pinpoint the error we need the PDO connection object
                $error = $connect->errorInfo();                
                echo $error[2]; //Table 'test.subject' doesn't exist
                
                while ($row = $rows->fetch()) {
                    if($row['category_id'] == 1){                        
                        $name[] .= htmlspecialchars($row['name']);                        
                    }
                    
                }
                return $name;
                
                
             }
              
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }        
    }
    
    
        
}

$error = new ErrorFinding;

foreach ($error->findError() as $value) {
    echo $value . "<br>";
}