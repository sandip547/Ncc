<?php
require_once("../Controllers/Registration/SessionManagement.php");
require_once("../DatabaseConnection/DatabaseConnection.php");
require_once("../Models/Enrollment/Cart.php");
include 'header.php';
$sm = new SessionManagement();
$sm->checkLoginSession(isset($_SESSION["username"]),isset($_SESSION["user"]));
$sc = new SaveCartDetails();
$sc->addelementToCart(new Cart(1,"cloud computing",5000));
$sc->addelementToCart(new Cart(2,"cloud computing",6000));
$sc->addelementToCart(new Cart(3,"cloud computing",6000));
// }
?>

<!-- My cart page -->
<div class="col-md-10 m-auto">
    <div>
        <h1 class="text-primary m-5 text-center">"My Cart"</h1>
        <div class="my-5">
            <div class="table-responsive">
                <table class="table table-sm style-table">
                    <thead class="style-thead">
                        <tr class="style-tr">
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
                            <td class="cartimage"><img src="images/profile.jpg" alt="" width="40px"></td>
                            <td data-label="Product" class="style-td"><?php echo $element->getProductName(); ?></td>
                            <td data-label="Price" class="style-td">NPR<?php echo $element->getProductPrice(); ?></td>


                        </tr>
                            <?php
                        }
                            ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex flex-wrap justify-content-between mx-5" id="couponline">
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
            </div>
            <div class="d-flex flex-wrap justify-content-end">
                <div class="col-md-6 my-5">
                    
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="border-0 fw-bold fs-5" colspan="2">Cart Totals</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Subtotal</td>
                                    <td data-label="Subtotal">NPR500</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Total</td>
                                    <td data-label="Total">NPR<?php echo $_SESSION["allTotal"]; ?> <span class="text-secondary" style="font-size: 12px;">(Includes</span> NPR1,784 <span class="text-secondary" style="font-size: 12px;">Vat 13% Estimated for Nepal)</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary">Proceed to CheckOut</button>
                    </div>
                </div>
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