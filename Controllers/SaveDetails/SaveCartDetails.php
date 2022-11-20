<?php
require_once("CalculateIndividual.php");
require_once("CalculateTotal.php");

class SaveCartDetails
{

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
}



?>