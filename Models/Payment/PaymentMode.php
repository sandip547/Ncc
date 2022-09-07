<?php
class PaymentMode{
    private $payment_mode;
    private $payment_name;
    private $status;

    function __construct($payment_mode,$payment_name,$status){
    $this->$payment_mode = $payment_mode;
    $this->$payment_name = $payment_name;
    $this->$status = $status;
    }

    function setPaymentMode($payment_mode){
    $this->payment_mode = $payment_mode;

    }

    function getPaymentMode(){
    return $this->payment_mode;
    }

    function setPaymentName($payment_name){
    $this->payment_name = $payment_name;
    }

    function getPaymentName(){
    return $this->payment_name;
    }

    function setStatus($status){
    $this->status = $status;
    }

    function getStatus(){
    return $this->status;
    }

}
?>