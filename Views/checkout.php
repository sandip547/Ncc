<?php
require_once("../DatabaseConnection/DatabaseConnection.php");
require_once("../Models/Enrollment/Cart.php");
require_once("../Models/Enrollment/SaveEnrollment.php");
require_once("../Controllers/Registration/SessionManagement.php");
require_once ("../Controllers/SaveDetails/SaveEnrollmentDetails.php");
require_once ("Notification/Notification.php");
require_once("../SendMail/SendMail.php");

include 'header.php';
$sm = new SessionManagement();
$sm->checkLoginSession(isset($_SESSION["username"]),isset($_SESSION["user"]));
$sc = new SaveCartDetails();

if(isset($_GET["sendEnrollment"])){
    $sm = new SendMail();
    $notify = new Notification();
    $sed = new SaveEnrollmentDetails();
    $check = false;
    foreach ($_SESSION["listelements"] as $course){
    if($sed->saveEnrollment(new SaveEnrollment($course->getProductId(),$sc->getStudentIdOn($_SESSION["username"])))) {
            $check = true;
        }
    else{
        $notify->alertRegistrationSuccess("Enrollment","Your Enrollment is not successful");
    }

    }
    if($check){
        $sm->sendPurchaseDetails($_SESSION["listelements"]);
        $notify->alertRegistrationSuccess("Enrollment","Your Enrollment is being processed");
        unset($_SESSION["listelements"]);
        unset($_SESSION["allTotal"]);
        $_SESSION['listelements'] = array();
        $_SESSION['count'] = 0;
        $_SESSION['allTotal'] = 0;
        ?>
        <script>window.location.href="index";</script>
            <?php
    }
}

?>

    <!-- My cart page -->
    <div class="col-md-10 m-auto">
        <div>

                        <?php
                        if(isset($_SESSION['listelements'])) {
                        ?>
            <h1 class="text-primary m-5 text-center">Confirm</h1>
            <div class="my-5">
                <div class="table-responsive">
                    <table class="table table-sm style-table">
                        <thead class="style-thead">
                        <tr class="style-tr">
                            <th></th>
                            <th colspan="3">Product</th>
                            <th>Price</th>

                        </tr>
                        </thead>


                    <tbody class="style-tbody">
                    <?php

                        foreach($_SESSION["listelements"] as $element){
                    ?>

                        <tr class="style-tr">
                            <td data-label="Remove" class="text-danger style-td"><button class="bg-transparent border-0"><i class="bi bi-trash-fill text-danger"></i></button></td>
                            <td data-label="Product" class="style-td"><?php echo $element->getProductName(); ?></td>
                            <td data-label="Price" class="style-td">NPR<?php echo $element->getProductPrice(); ?></td>


                        </tr>
                            <?php
                        }
                    }
?>

                        </tbody>
                    </table>
                </div>
                <!--     <div class="d-flex flex-wrap justify-content-between mx-5" id="couponline">
                         <div class="d-flex flex-wrap">
                             <div class="my-2">
                                 <input type="text" name="Couponcode" id="Couponcode" placeholder="Coupon code" class="form-control border fs-6" style="height: 30px !important;">
                             </div>
                             <div class="m-2">
                                 <button class="bg-primary border-0 text-light px-2 rounded-3">Apply Coupon</button>
                             </div>
                         </div>
                         <div class="my-2" id="inlinebutton">
                             <button class="bg-primary border-0 text-light px-2 rounded-3" disabled style="opacity: .6;">Update Cart</button>
                         </div>
                     </div> -->
                <div class="d-flex flex-wrap justify-content-end">
                    <div class="col-md-6 my-5">

                        <div class="table-responsive">
                            <?php
                            if(isset($_SESSION["allTotal"])){

                            ?>

                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="border-0 fw-bold fs-5" colspan="2">Cart Totals</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Subtotal</td>
                                    <td data-label="Subtotal">NPR <?php echo $_SESSION["allTotal"]; ?></td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Total</td>
                                    <td data-label="Total">NPR <?php echo $_SESSION["allTotal"]; ?> <span class="text-secondary" style="font-size: 12px;"></td>

                                </tr>
                                <tr>
                                    <td class="fw-bold" style="color:forestgreen;">Please check your mail for further details</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-grid gap-2">

                            <a href="checkout.php?sendEnrollment="><button class="btn btn-primary">Confirm Enrollment</button></a>
                        </div>
                    </div>
                            <?php
                            }
                            ?>

                </div>
            </div>

        </div>
    </div>
    </main>
    </div>
    </div>
<?php
include 'footer.php'
?>