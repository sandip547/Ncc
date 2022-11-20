<?php
require_once("SaveProduct.php");
if(isset($_POST['submit'])){
    $sp = new SaveProduct();
    $sp->saveProductDetails(new Product("hydroPowerElectricity","this is really nice course","hydropower 1","Basic knowledge","civil engineers",1,64,1,2,"60 min",15000,date("Y-m-d h:i:s"),date("Y-m-d h:i:s"),1,1,1,$_FILES['fileToUpload']['name']));

}
?>
<!DOCTYPE html>
<html>
<body>

<form action="Test.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>