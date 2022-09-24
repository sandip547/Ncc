<?php
require_once("../DatabaseConnection/DatabaseConnection.php");
require_once("../Models/ProductModels/ProductGet.php");
require_once("../Models/ProductModels/ProductDisplay.php");
require_once("../Models/ProductModels/ProductTopicGet.php");
class GetProductDetails{
    private $connection;
    function __construct(){
        $this->connection = new DatabaseConnection();
    }

    function getSearchProduct($name){
        $query = "select * from course where courseName=?";
        $result=$this->connection->executePrepareReturn($query,"s",array($name));
        $product = array();
        if($result===false){
            return false;
        }else{
            while($row=mysqli_fetch_array($result)){
                array_push($product,new ProductGet($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$this->getStaffName($row[6]),$this->getCategoryName($row[7]),$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14],$row[15],$row[16],$row[17],$row[18],$row[19]));

            }
        }
        return $product;

    }

    function getSearchDisplayProduct($name){
        $sql = "SELECT courseName,level,image,duration,price FROM course where courseName=?";
        $result = $this->connection->executePrepareReturn($sql,"s",array($name));
        $product_display = array();
        while($row = mysqli_fetch_array($result)){
            array_push($product_display,new ProductDisplay($row[0],$row[1],$row[2],$row[3],$row[4]));
            }
       return $product_display;
    }

    function getCategoryName($id){
        $query = "select categoryName from category where categoryId=?";
        $result=$this->connection->executePrepareReturn($query,"i",array($id));
        return mysqli_fetch_row($result)[0];

    }

    function getStaffName($id){
       $query = "select fullName from staff where staffId=?";
       $result=$this->connection->executePrepareReturn($query,"i",array($id));
       return mysqli_fetch_row($result)[0];

    }

    function getProductDetails(){
        $sql = "SELECT * FROM course";
        $result = $this->connection->executeQuery($sql);
        $product = array();
        while($row = mysqli_fetch_array($result)){
            array_push($product,new ProductGet($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$this->getStaffName($row[6]),$this->getCategoryName($row[7]),$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14],$row[15],$row[16],$row[17],$row[18],$row[19]));
        }
        return $product;
    }

    function getLevel($level){
        $level_name = "";
        if($level == 0){
            $level_name = "Basic";
        }
        else if($level == 1){
            $level_name = "Intermediate";
        }
        else if($level == 2){
            $level_name = "Advance";
        }
        return $level_name;
    }
    function getProductDisplayDetails(){
        $sql = "SELECT courseName,level,image,duration,price FROM course";
        $result = $this->connection->executeQuery($sql);
        $product_display = array();
        while($row = mysqli_fetch_array($result)){
            array_push($product_display,new ProductDisplay($row[0],$this->getLevel($row[1]),$row[2],$row[3],$row[4]));
        }
        return $product_display;
    }
    function getProductName($product_id){
        $query = "SELECT courseName FROM course WHERE courseID=?";
        $result = $this->connection->executePrepareReturn($query,"i",array($product_id));
        return mysqli_fetch_row($result)[0];

    }

    function getProductTopicDetails(){
        $query = "select * from coursetopic";
        $result = $this->connection->executeQuery($query);
        $product_topic = array();
        while($row = mysqli_fetch_array($result)){
            array_push($product_topic,new ProductTopicGet($row[0],$this->getProductName($row[1]),$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]));
        }
        return $product_topic;
    }


}
/*$gc = new GetProductDetails();
$res = $gc->getProductTopicDetails();
foreach($res as $value){
    echo $value->getCourseName()." " .$value->getTopicName()." ". $value->getEnteredDate() ;
    break;
}
*/
?>