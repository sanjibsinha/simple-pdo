<?php

require_once 'connect.php';

//var_dump($con->connect());

class BindOutput
{
    
    public function fetch() {
        
        try {
            
            $connection = new Connect;
            $con = $connection->connect();
            
            if($con){

                $sql = "select * from subjects";
                $result = $con->prepare($sql);
                $result->execute();
                $result->bindColumn('name', $name);
                
                // column ID can also be used
                $result->bindColumn(4, $visible);               
                
                while ($row = $result->fetch()) {
                    $values[] = [$name, $visible];
                    //return $values;
                }
                return $values;
              }
 
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }        
    }
    
}

$select = new BindOutput;
//echo '<pre>';
//print_r($select->fetch());
//echo '</pre>';
foreach ($select->fetch() as $values) {
    //echo $values . "<br>";
    foreach ($values as $value) {
        echo $value . "<br>";
    }
}