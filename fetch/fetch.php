<?php

require_once 'pdo-connect.php';

//var_dump($con->connect());

class FetchQuery
{
    
    public function fetch() {
        
        try {
            $con = new Connection;
            $connect = $con->connect();
            if($connect){

                $sql = "select * from subjects";
                $result = $connect->query($sql);
                //var_dump($result);
                //object(PDOStatement)#3 (1) { ["queryString"]=> string(22) "select * from subjects" }
                
                while ($row = $result->fetch()) {
                    if($row['category_id'] == 1){                        
                        $name[] .= htmlspecialchars($row['name']);                        
                    }
                    
                }
                return $name;
                
                /*
                 * fetching all names
                while ($row = $result->fetch(\PDO::FETCH_ASSOC)) {
                     $name[] .= htmlspecialchars($row['name']);
                 }
                 return $name;
                
                */
                
              }
 
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }        
    }
    
}

$select = new FetchQuery();

foreach ($select->fetch() as $value) {
    echo $value . "<br>";
}