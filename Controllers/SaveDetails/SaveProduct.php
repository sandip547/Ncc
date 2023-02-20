<?php
//require_once("../../DatabaseConnection/DatabaseConnection.php");
// require_once("../../Models/ProductModels/Product.php");
// require_once("../../Models/ProductModels/ProductGet.php");
// require_once("../../Models/ProductModels/ProductTopic.php");
// require_once("../../Models/ProductModels/ProductTopicUpdate.php");
// require_once("../../Models/ProductModels/GetProductName.php");
class SaveProduct
{
    private $connection;

    function __construct()
    {
        $this->connection = new DatabaseConnection();
    }
    function getStaffId($username)
    {
        $query = "select staffid from staff where username=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($username));
        return mysqli_fetch_row($result)[0];
    }
    function getProductId($product_name)
    {
        $query = "SELECT courseId FROM course WHERE courseName = ?";
        $result = $this->connection->executePrepareReturn($query, "s", array($product_name));
        return mysqli_fetch_row($result)[0];
    }

    function saveProfileImage($profile_image){

        $target_dir = "profileimages/";

        $target_file = $target_dir.$profile_image->getProfileImage();
        $uploadOk = move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
        if($uploadOk){
            $query = "update student set profile_image = ? where username=?";
            $this->connection->executePrepareReturn($query, "ss",array($target_file,$profile_image->getStudentId()));
        }
    }

    function getProfileImage($username){
        $query = "select profile_image from student where username=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($username));
        return mysqli_fetch_row($result)[0];
    }

    function saveProductDetails($pd)
    {

        try {
            $check = false;
            mysqli_begin_transaction($this->connection->getConnection());
            $target_dir = "../product/images/";
            $target_file = $target_dir.basename($pd->getImage()["name"]);
            $uploadOk = move_uploaded_file($pd->getImage()["tmp_name"], $target_file);
            if($uploadOk) {
                $query = "insert into course(courseName,description,learning,requirements,targetAudience,instructorId,categoryId,tag,level,duration,price,releaseDate,enteredDate,enteredBy,enrollmentValidity,activeStatus,image)
                            values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                $this->connection->executePrepare($query, "sssssiiiisisssiis", array(
                    $pd->getProductName(), $pd->getDescription(), nl2br($pd->getLearning()), nl2br($pd->getRequirements()),
                    nl2br($pd->getTargetAudience()), $pd->getInstructorId(), $pd->getCategoryId(), $pd->getTag(),
                    $pd->getLevel(), $pd->getDuration(), $pd->getPrice(), $pd->getReleaseDate(), $pd->getEnteredDate(),
                    $pd->getEnteredBy(), $pd->getEnrollmentValidity(), $pd->getActiveStatus(), $target_file
                ));
                $check = true;
            }
                mysqli_commit($this->connection->getConnection());

        } catch (mysqli_sql_exception $e) {
            mysqli_rollback($this->connection->getConnection());
            throw $e;
        }
        mysqli_close($this->connection->getConnection());
        return $check;
    }

    function updateProductDetails($pd)
    {
        try {
        $check = false;
        mysqli_begin_transaction($this->connection->getConnection());
        $query = "UPDATE course SET
        courseName=?,description=?,learning=?,requirements=?,targetAudience=?,instructorId=?,
        categoryId=?,tag=?,level=?,duration=?,price=?,releaseDate=?,enteredDate=?,
        enteredBy=?,enrollmentValidity=?,activeStatus=?,image=? where courseId=?";
        if($this->connection->executePrepare($query, "sssssiiiisisssiisi", array(
            $pd->getProductName(), $pd->getDescription(), $pd->getLearning(), $pd->getRequirements(),
            $pd->getTargetAudience(), $pd->getInstructorId(), $pd->getCategoryId(), $pd->getTag(),
            $pd->getLevel(), $pd->getDuration(), $pd->getPrice(), $pd->getReleaseDate(), $pd->getEnteredDate(),
            $pd->getEnteredBy(), $pd->getEnrollmentValidity(), $pd->getActiveStatus(), $pd->getImage(), $this->getProductId($pd->getProductName())
        ))){
            $check = true;
        }
        } catch (mysqli_sql_exception $e) {
            mysqli_rollback($this->connection->getConnection());
            throw $e;
        }
        mysqli_close($this->connection->getConnection());
        return $check;
    }
    function updateProductMinWithImage($up)
    {


            $target_dir = "../product/images/";
            $target_file = $target_dir.date("Y-m-d-h-i-s-").basename($up->getImage()["name"]);
            $uplaodok = move_uploaded_file($up->getImage()["tmp_name"],$target_file);
            $query = "UPDATE course SET
        courseName=?,description=?,learning=?,requirements=?,targetAudience=?,instructorId=?,
        level=?,duration=?,price=?,updateDate=?,
        updatedBy=?,enrollmentValidity=?,activeStatus=?,image=? where courseId=?";
            if($uplaodok) {
                $this->connection->executePrepare($query, "sssssiisisiiisi", array(
                    $up->getProductName(), $up->getDescription(), $up->getLearning(), $up->getRequirements(),
                    $up->getTargetAudience(), $up->getInstructorId(), $up->getLevel(), $up->getDuration(),
                    $up->getPrice(), $up->getUpdateDate(), $up->getUpdatedBy(), $up->getEnrollmentValidity(),$up->getActiveStatus(),
                    $target_file,$up->getProductId()
                ));
                $check = true;
            }

        mysqli_close($this->connection->getConnection());
        return $check;
    }
    function updateProductMin($up)
    {



        $query = "UPDATE course SET
        courseName=?,description=?,learning=?,requirements=?,targetAudience=?,instructorId=?,
        level=?,duration=?,price=?,updateDate=?,
        updatedBy=?,enrollmentValidity=?,activeStatus=? where courseId=?";
            $this->connection->executePrepare($query, "sssssiisisiiii", array(
            $up->getProductName(), $up->getDescription(), $up->getLearning(), $up->getRequirements(),
            $up->getTargetAudience(), $up->getInstructorId(), $up->getLevel(), $up->getDuration(),
            $up->getPrice(), $up->getUpdateDate(), $up->getUpdatedBy(),$up->getEnrollmentValidity(), $up->getActiveStatus(),
            $up->getProductId()
        ));


    }

    function deleteProductDetails($id)
    {
        $query = "DELETE FROM course WHERE courseId = ?";
        $status = True;
        $result = $this->connection->executePrepare($query, "i", array($id));
        if ($result == True) {
            return $status;
        } else {
            $status = False;
        }
        return $status;
    }

    function insertProductTopic($pt)
    {
        $query = "insert into coursetopic(courseId,srNo,topicName,duration,enteredBy,enteredDate) values(?,?,?,?,?,?)";
        $result = $this->connection->executePrepare($query, "iisssi", array(
            $pt->getCourseId(), $pt->getSrNo(), $pt->getTopicName(),
            $pt->getDuration(), $pt->getEnteredBy(), $pt->getEnteredDate()
        ));
        mysqli_close($this->connection->getConnection());
    }

    function updateProductTopic($upt)
    {

        $query = "update coursetopic set courseId=?,srNo=?,topicName=?,duration=?,updatedBy=?,updateDate=? where topicId=?";
        $result = $this->connection->executePrepare($query, "iissisi", array(
            $this->getProductId($upt->getCourseName()), $upt->getSrNo(), $upt->getTopicName(),
            $upt->getDuration(), $upt->getUpdatedBy(), $upt->getUpdatedDate(), $upt->getTopicId()
        ));
        mysqli_close($this->connection->getConnection());
    }
}

/*$sp = new SaveProduct();
echo date("Y-m-d h:i:s");
//$sp->updateProductDetails(new Product("hydroPowerElectricity","this is really nce","hydropower 1","Basic knowledge","civil engineers",1,64,1,2,"60 min",1500,date("Y-m-d h:i:s"),date("Y-m-d h:i:s"),1,1,1,"hh"));
$sp->UpdateProductTopic(new ProductTopicUpdate(3,"hydroPower",2,"this is new","1500",1,date("Y-m-d h:i:s")));
*/