<?php

require_once 'pdo-connect.php';

class RowAndColumnCount
{
    
    public function countRows() {
        
        try {
            $con = new Connection;
            $connect = $con->connect();
            if($connect){
                $sql = "select * from subjects";
                $result = $connect->query($sql);
                $countRows = $result->rowCount();
                return $countRows;                
              }
 
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }        
    }
    
    public function countColumns() {
        try {
            $con = new Connection;
            $connect = $con->connect();
            if($connect){
                $sql = "select * from subjects";
                $result = $connect->query($sql);
                $countColumns = $result->columnCount();
                return $countColumns;                
              }
 
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }    
}

$rowCount = new RowAndColumnCount();

echo $rowCount->countRows(); // 6

$columnCount = new RowAndColumnCount();

echo $columnCount->countColumns(); //4


