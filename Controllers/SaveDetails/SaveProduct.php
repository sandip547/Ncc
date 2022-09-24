<?php
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/ProductModels/Product.php");
require_once("../../Models/ProductModels/ProductGet.php");
require_once("../../Models/ProductModels/ProductTopic.php");
require_once("../../Models/ProductModels/PorductTopicUpdate.php");
require_once("../../Models/ProductModels/GetProductName.php");
class SaveProduct{
    private $connection;

    function __construct(){
        $this->connection = new DatabaseConnection();
    }

    function getProductId($product_name){
        $query = "SELECT courseId FROM course WHERE courseName = ?";
        $result= $this->connection->executePrepareReturn($query,"s",array($product_name));
        return mysqli_fetch_row($result)[0];
    }

    function saveProductDetails($pd){
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
            mysqli_rollback($this->connection->getConnection());
            throw $e;
        }
        mysqli_close($this->connection->getConnection());

    }

    function updateProductDetails($pd){
        $query="UPDATE course SET
        courseName=?,description=?,learning=?,requirements=?,targetAudience=?,instructorId=?,
        categoryId=?,tag=?,level=?,duration=?,price=?,releaseDate=?,enteredDate=?,
        enteredBy=?,enrollmentValidity=?,activeStatus=?,image=? where courseId=?" ;
        $this->connection->executePrepare($query,"sssssiiiisisssiisi",array($pd->getProductName(),$pd->getDescription(),$pd->getLearning(),$pd->getRequirements(),
                                                                     $pd->getTargetAudience(),$pd->getInstructorId(),$pd->getCategoryId(),$pd->getTag(),
                                                                     $pd->getLevel(),$pd->getDuration(),$pd->getPrice(),$pd->getReleaseDate(),$pd->getEnteredDate(),
                                                                     $pd->getEnteredBy(),$pd->getEnrollmentValidity(),$pd->getActiveStatus(),$pd->getImage(),$this->getProductId($pd->getProductName())));
        mysqli_close($this->connection->getConnection());
    }

    function deleteProductDetails($id){
        $query = "DELETE FROM course WHERE courseId = ?";
        $status = True;
        $result = $this->connection->executePrepare($query,"s",array($id));
        if($result==True){ return $status;}
        else{ $status = False; }
        return $status;
    }

    function insertProductTopic($pt){
        $query = "insert into coursetopic(courseId,srNo,topicName,duration,enteredBy,enteredDate) values(?,?,?,?,?,?)";
        $result = $this->connection->executePrepare($query,"iisssi",array($pt->getCourseId(),$pt->getSrNo(),$pt->getTopicName(),
                                                                               $pt->getDuration(),$pt->getEnteredBy(),$pt->getEnteredDate()));
        mysqli_close($this->connection->getConnection());
    }

    function updateProductTopic($upt){

        $query = "update coursetopic set courseId=?,srNo=?,topicName=?,duration=?,updatedBy=?,updateDate=? where topicId=?";
        $result = $this->connection->executePrepare($query,"iissisi",array($this->getProductId($upt->getCourseName()),$upt->getSrNo(),$upt->getTopicName(),
                                                                                $upt->getDuration(),$upt->getUpdatedBy(),$upt->getUpdatedDate(),$upt->getTopicId()));
        mysqli_close($this->connection->getConnection());


    }
}

/*$sp = new SaveProduct();
echo date("Y-m-d h:i:s");
//$sp->updateProductDetails(new Product("hydroPowerElectricity","this is really nce","hydropower 1","Basic knowledge","civil engineers",1,64,1,2,"60 min",1500,date("Y-m-d h:i:s"),date("Y-m-d h:i:s"),1,1,1,"hh"));
$sp->UpdateProductTopic(new ProductTopicUpdate(3,"hydroPower",2,"this is new","1500",1,date("Y-m-d h:i:s")));
*/

?>