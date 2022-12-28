<?php
//equire_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/ProductModels/ProductCategoryDelete.php");
class SaveProductCategory{

     private $connection;

     function __construct(){
        $this -> connection = new DatabaseConnection();
     }

     function saveCategory($ci){
            $query = "insert into category(categoryName,activeStatus,enteredDate,enteredBy) values(?,?,?,?)";
            $this->connection->executePrepare($query,"sisi",array($ci->getCategoryName(),$ci->getActiveStatus(),
                                                    $ci->getEnteredDate(),$ci->getEnteredBy()));
            mysqli_close($this->connection->getConnection());

        }

     function updateCategory($cu){
            $query = "update category set categoryname=?,activestatus=?,updatedate=?,updatedby=? where categoryid=?";
            $this->connection->executePrepare($query,"sisii",array($cu->getCategoryName(),$cu->getActiveStatus(),
                                                                   $cu->getUpdateDate(),$cu->getUpdatedBy(),$cu->getCategoryId()));
            mysqli_close($this->connection->getConnection());
        }

     function deleteCategory($cd){
            $query = "delete from category where categoryid=?";
            $this->connection->executePrepare($query,"i",array($cd->getProductCategoryId()));
            mysqli_close($this->connection->getConnection());
        }
}

?>