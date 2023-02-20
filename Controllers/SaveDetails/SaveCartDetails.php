<?php
require_once("CalculateIndividual.php");
require_once("CalculateTotal.php");

class SaveCartDetails
{
    private $connection;

    function __construct(){
        $this->connection = new DatabaseConnection();
    }
    function getStudentIdOn($username)
    {
        $query = "select studentId from student where username=?";
        $result = $this->connection->executePrepareReturn($query, "s", array($username));
        $row = mysqli_fetch_row($result);
        return $row[0];
    }
    function checkStatusOfAddProduct($courseId,$coureName,$coursePrice){
        $checkStatus = false;
        if(isset($courseId) && isset($coureNamec) && isset($coursePrice)){
            $checkStatus = true;
        }
        return $checkStatus;
    }
    function getPriceStatus($courseId,$price){
        $check = false;
        $query = "select price from course where courseId=?";
        $result = $this->connection->executePrepareReturn($query,"i",array($courseId));
        if($price==mysqli_fetch_row($result)[0]){
            $check = true;
        }
        return $check;
        }


    function addelementToCart($addElement)
    {

        $ct = new CalculateTotal();
        $ci = new CalculateIndividual();

        $cartArray = $addElement;

        $addTocart = True;
        $temp = sizeof($_SESSION['listelements']);
        $prv = $temp;
        $sizeofSessionElement = sizeof($_SESSION['listelements']);
        foreach($_SESSION['listelements'] as $listElement) {
            if ($listElement->getProductId() == $addElement->getProductId()) {
                $addTocart = False;
            }

        }
        //TO Do
        if ($addTocart) {
            array_push($_SESSION['listelements'], $cartArray);
            $_SESSION['count'] = $_SESSION['count'] + 1;
            $ct->cTotal();
        }

    }
    function removeElemetFromCart($id){

        $ct = new CalculateTotal();
        $count = 0;

        foreach ($_SESSION["listelements"] as $element) {
            if($element->getProductId() == $id) {
                unset($_SESSION['listelements'][$count ]);
                echo $count;
            }
            $count= $count + 1;
        }
        $_SESSION['listelements'] = array_values($_SESSION['listelements']);
        $_SESSION['count'] = $_SESSION['count'] -1;
        #remove decrease the value of all total also
        if($_SESSION['count'] > 0){

            $ct->cTotal();
        }
        else{
            $_SESSION['count'] = 0;
            $_SESSION['allTotal'] = 0;
        }

        ?>
        <script>window.location.href="cart.php"</script>
        <?php

    }
}



?>