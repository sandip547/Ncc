<?php
//require_once("../../DatabaseConnection/DatabaseConnection.php");
//require_once("../../Models/Staff/StaffGet.php");
// require_once("../../Models/ProductModels/Product.php");
// require_once("../../Models/ProductModels/ProductGet.php");
// require_once("../../Models/ProductModels/ProductTopic.php");
// require_once("../../Models/ProductModels/ProductTopicUpdate.php");
// require_once("../../Models/ProductModels/GetProductName.php");
class SaveStaff
{
    private $connection;
    private $encrypt;

    function __construct()
    {
        $this->connection = new DatabaseConnection();
        $this->encrypt = new EncDec();
    }

    function getStaffId($username)
    {
        $query = "select staffid from staff where username=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($username));
        return mysqli_fetch_row($result)[0];
    }

    function uploadFile($file, $target_file)
    {
        
        $uploadOk = 1;
        $pdfFile = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        //upload
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($file["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($pdfFile != "pdf") {
            echo "Sorry, only PDF files are allowed.";
            $uploadOk = 0;
        }
        // upload
        if ($uploadOk) {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                $uploadOk = 1;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        return $uploadOk;
    }
    function deleteStaffDetails($du)
    {
        $query = "delete from staff where staffId=?";
        $this->connection->executePrepare($query, "i", array($du->getTeacherUser()));
    }

    public function  saveStaffDetails($sd, $file)
    {

        try {
            mysqli_begin_transaction($this->connection->getConnection());
            $target_dir = "../Uploads/CV/";
            $target_file = $target_dir . date("Y-m-d-h-i-s-") . basename($file["name"]);
            $uploadOk = $this->uploadFile($file, $target_file);
            if($uploadOk){
                $query = "insert into staff(fullName,dob,email,gender,phoneNo,mobileNo,address,joinDate,qualification,subjectExpertise,noOfExperience, cvLocation,activeStatus, type, userName, password, retireDate) 
                values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $this->connection->executePrepare($query, "sssssssssssssssss", array($sd->getFullName(), $sd->getDob(), $sd->getEmail(), $sd->getGender(), $sd->getPhoneNo(),
                    $sd->getMobileNo(), $sd->getAddress(), $sd->getJoinDate(), $sd->getQualification(), $sd->getSubjectExpertise(),
                    $sd->getNoOfExperience(), $target_file, $sd->getActiveStatus(), $sd->getType(), $sd->getUserName(), $this->encrypt->encrypt($sd->getPassword()),
                    $sd->getRetireDate()));

            }
       
            mysqli_commit($this->connection->getConnection());
        } catch (mysqli_sql_exception $e) {
            mysqli_rollback($this->connection->getConnection());
            throw $e;
        }
        return true;
    }

    public function updateStaffDetails($sd, $file)
    {

        try {
            mysqli_begin_transaction($this->connection->getConnection());
            $target_dir = "../Uploads/CV/";
           
            if ($file["name"] != "") {

                $target_file = $target_dir . date("Y-m-d-h-i-s-") . basename($file["name"]);
                $uploadOk = $this->uploadFile($file, $target_file);
                if ($uploadOk) {
                    $query = "UPDATE staff SET fullName=?,dob=?,email=?,gender=?,phoneNo=?,mobileNo=?,address=?,joinDate=?,qualification=?,subjectExpertise=?,noOfExperience=?, cvLocation=?,activeStatus=?, type=?, userName=?, retireDate=? where staffId=?";
                    $this->connection->executePrepare($query, "sssiiissssisiissi", array($sd->getFullName(), $sd->getDob(), $sd->getEmail(), $sd->getGender(), $sd->getPhoneNo(), $sd->getMobileNo(), $sd->getAddress(), $sd->getJoinDate(), $sd->getQualification(), $sd->getSubjectExpertise(), $sd->getNoOfExperience(), $target_file, $sd->getActiveStatus(), $sd->getType(), $sd->getUserName(), $sd->getRetireDate(), $sd->getStaffId()));
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {

                $query = "UPDATE staff SET fullName=?,dob=?,email=?,gender=?,phoneNo=?,mobileNo=?,address=?,joinDate=?,qualification=?,subjectExpertise=?,noOfExperience=?,activeStatus=?, type=?, userName=?, retireDate=? where staffId=?";
                $this->connection->executePrepare($query, "sssiiissssiiissi", array($sd->getFullName(), $sd->getDob(), $sd->getEmail(), $sd->getGender(), $sd->getPhoneNo(), $sd->getMobileNo(), $sd->getAddress(), $sd->getJoinDate(), $sd->getQualification(), $sd->getSubjectExpertise(), $sd->getNoOfExperience(), $sd->getActiveStatus(), $sd->getType(), $sd->getUserName(), $sd->getRetireDate(), $sd->getStaffId()));
            }
            mysqli_commit($this->connection->getConnection());
        } catch (mysqli_sql_exception $e) {
            mysqli_rollback($this->connection->getConnection());
            throw $e;
        }
        return true;
    }
}

/*$sp = new SaveProduct();
echo date("Y-m-d h:i:s");
//$sp->updateProductDetails(new Product("hydroPowerElectricity","this is really nce","hydropower 1","Basic knowledge","civil engineers",1,64,1,2,"60 min",1500,date("Y-m-d h:i:s"),date("Y-m-d h:i:s"),1,1,1,"hh"));
$sp->UpdateProductTopic(new ProductTopicUpdate(3,"hydroPower",2,"this is new","1500",1,date("Y-m-d h:i:s")));
*/