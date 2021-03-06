<?php

require_once 'connect.php';

class BindArrayClss
{
    public $cat_id;
    public $name;
    public $visible;

    public function inserting($categry_id, $name, $visible) {
        
        try {
            
            $this->cat_id = $categry_id;
            $this->name = $name;
            $this->visible = $visible;
            
            $connection = new Connect;
            $con = $connection->connect();
            
            if($con){
                
                $statement = "insert into subjects (category_id, name, visible) values (:category_id, :name, :visible)";
                $result = $con->prepare($statement);
                
                $values = [
                    
                    ":category_id" => $categry_id,
                    ":name" => $name,
                    ":visible" => $visible                    
                    
                ];
                                
                $res = $result->execute($values);
                return $res;
            }
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }
}

$category_id = filter_var($_POST['cat_id'], FILTER_DEFAULT);
$name = filter_var($_POST['name'], FILTER_DEFAULT);
$visible = filter_var($_POST['visible'], FILTER_DEFAULT);


$placeholder = new BindArrayClss;

echo $placeholder->inserting(intval($category_id), $name, intval($visible));
