<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/ProductModels/Product.php");
class SaveProduct{
    private $connection;

    function __construct(){
        $this->connection = new DatabaseConnection();
    }

    function SaveProductDetails($pd){
        $path= "product/images/".$pd->getImage();
        try{
        mysqli_begin_transaction($this->connection->getConnection());

        $query = "insert into course(courseName,description,learning,requirements,targetAudience,instructorId,categoryId,tag,level,duration,price,releaseDate,enteredDate,enteredBy,enrollmentValidity,activeStatus,image)
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        echo $pd->getLearning().$pd->getRequirements();
        $this->connection->executePrepare($query,"sssssiiiisisssiis",array($pd->getProductName(),$pd->getDescription(),$pd->getLearning(),$pd->getRequirements(),
                                                                           $pd->getTargetAudience(),$pd->getInstructorId(),$pd->getCategoryId(),$pd->getTag(),
                                                                           $pd->getLevel(),$pd->getDuration(),$pd->getPrice(),$pd->getReleaseDate(),$pd->getEnteredDate(),
                                                                           $pd->getEnteredBy(),$pd->getEnrollmentValidity(),$pd->getActiveStatus(),$path));
        mysqli_commit($this->connection->getConnection());
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"../../".$path);
        }catch(mysqli_sql_exception $e){
            mysqli_rollback($mysqli);
            throw $exception;
        }
        mysqli_close($this->connection->getConnection());


    }
}



?>