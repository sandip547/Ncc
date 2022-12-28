<?php
//require_once("../../DatabaseConnection/DatabaseConnection.php");
//require_once("../../Models/ProductModels/CategoryGet.php");
//require_once("../../Models/ProductModels/CategoryNameSearch.php");

class GetProductCategory{
    private $connection;

    function __construct(){
        $this->connection = new DatabaseConnection();
    }

    function  getcategoryNameId(){
        $query = "select categoryId,categoryName from category";
        $result = $this->connection->executeQuery($query);
        $catlist = array();
        while($row = mysqli_fetch_array($result)){
            array_push($catlist, new DisplayCategoryList($row['0'],$row['1']));
        }
        return $catlist;
    }
    function getCategoryDetails(){
        $query = "select * from category";
        $result = $this->connection->executeQuery($query);
        $category_details = array();
        while($row = mysqli_fetch_array($result)){
            array_push($category_details,new CategoryGet($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]));
        }
        mysqli_close($this->connection->getConnection());
        return $category_details;
    }
    function getCategoryName($category_name){
        $query = "select * from category where categoryName = ?";
        $result = $this->connection->executePrepareReturn($query,"s",array($category_name->getCategoryName()));
        $category_name = array();
        while($row = mysqli_fetch_array($result)){
            array_push($category_name,new CategoryGet($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6]));
        }
        mysqli_close($this->connection->getConnection());
        return $category_name;
    }
}

?>