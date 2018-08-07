<?php

require_once 'pdo-connect.php';

class FetchColumns
{
    
    public function fetchColumns() {
        
        try {
            $con = new Connection;
            $connect = $con->connect();
            if($connect){

                $sql = "select * from subjects";
                $result = $connect->query($sql);
                
                // we are returning column number 2, that is name
                while ($col = $result->fetchColumn(2)) {
                    
                    $cols[] .= $col;
                    
                }
                return $cols;
              }
 
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }        
    }
    
}

$select = new FetchColumns;

foreach ($select->fetchColumns() as $value) {
    echo $value . "<br>";
}
/*
 * Old man and the sea
WutheringHeights
Bleak House
Design Patterns
Python
History of the universe
 * 
 * 
 */