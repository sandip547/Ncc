<?php
require_once("../DatabaseConnection/DatabaseConnection.php");
require_once("../Models/ProductModels/ProductDisplay.php");
require_once("../Controllers/GetDetails/GetProductDetails.php");
$gp = new GetProductDetails();
$cdd = $gp->getSearchDisplayProduct($_REQUEST['course_name']);
if($_REQUEST['course_name']) {
    foreach ($cdd as $name) {
        echo "<a style='position:relative;' href='course_review_page.php?course_id=".$name->getProductId()."><li style=' list-style:none; top:0; left:0;' value=". $name->getProductName() . '>' .
            $name->getProductName() .
            '</li></a>';
    }
}
?>