<?php

require_once 'pdo-connect.php';

class FetchAll
{
    public function fetchAll() {
        
        $connection = new Connection;
        
        $con = $connection->connect();
        
        try {
            if($con){
                
                $statement = "select * from subjects";
                
                $rows = $con->query($statement);
                
                
                /*
                 * it gives us two typres of array data-associative and numeric
                 * Array
                 * 
                 * echo '<pre>';
                print_r($rows->fetchAll());
                echo '</pre>';
                 * 
                 * 
(
    [0] => Array
        (
            [subject_id] => 1
            [0] => 1
            [category_id] => 1
            [1] => 1
            [name] => Old man and the sea
            [2] => Old man and the sea
            [visible] => 1
            [3] => 1
        ) ...
                 * 
                 */
                
                
                /*
                 * echo '<pre>';
                print_r($rows->fetchAll(\PDO::FETCH_ASSOC));
                echo '</pre>';
                 * 
                 * 
                 * Array
(
    [0] => Array
        (
            [subject_id] => 1
            [category_id] => 1
            [name] => Old man and the sea
            [visible] => 1
        ) ...
                 * 
                 */
                
                echo '<pre>';
                print_r($rows->fetchAll(\PDO::FETCH_NUM));
                echo '</pre>';
                
                /*
                 * Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 1
            [2] => Old man and the sea
            [3] => 1
        )...
                 * 
                 * 
                 * 
                 * 
                 */
                
                
                
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }
}

$fetchAll = new FetchAll;

$fetchAll->fetchAll();