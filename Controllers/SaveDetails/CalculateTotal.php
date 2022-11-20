<?php
require_once("CalculateIndividual.php");

class CalculateTotal
{

//To Do
    function cTotal()
    {
        $alltotal = 0;
        $value = 0;
        $ci = new CalculateIndividual();
        foreach ($_SESSION["listelements"] as $listElement) {
            {

                $price = $listElement->getProductPrice();
                $quan = 1;
                $value = $ci->addToCart($price, 1);
                $alltotal = $alltotal + $value;
                echo $alltotal."he";

            }
            $_SESSION['allTotal'] = $alltotal;

        }

    }
}
