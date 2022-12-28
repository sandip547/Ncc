<?php
$pc = new GetProductCategory();
$catlist = $pc->getcategoryNameId();
?>
<form action="product.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 my-3">
            <label for="courseName" class="form-label text-blue-shade">Course name</label>
            <input type="text" class="form-control inputcolor fs-6" placeholder="Course name" name="cname"
                aria-label="courseName" id="courseName">
        </div>
        <div class="col-md-6 my-3">
            <label for="level" class="form-label text-blue-shade">Level</label>
            <select name="category" id="category" class="form-select form-select-lg inputcolor fs-6">
                <option value="na">
                    Select Category
                </option>
                <?php
                foreach ($catlist as $cia){
                ?>

                <option value="<?php echo $cia->getCategoryId();?>">
                    <?php echo $cia->getCategoryName();?>
                </option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-md-6 my-3">
            <label for="duration" class="form-label text-blue-shade">Duration (in hour)</label>
            <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
                <input type="text" class="form-control inputcolor fs-6" name="chour" placeholder="hour:min:sec" />

            </div>
        </div>

        <div class="col-md-6 my-3">
            <label for="Price" class="form-label text-blue-shade">Price</label>
            <input type="number" id="price" class="form-control inputcolor fs-6" name="cprice" placeholder="Price"
                aria-label="Price">
        </div>
        <div class="col-md-6 my-3">
            <label for="enrollmentValidity" class="form-label text-blue-shade">Enrollment Validity (0 for
                lifetime)</label>
            <select name="enrollvalidity" id="enrollvalidity" class="form-select form-select-lg inputcolor fs-6">
                <option value="na">
                    Select Enrollment Validity
                </option>
                    <option value="0">
                     Lifetime
                    </option>
                <option value="1">
                    3 Months
                </option>
                <option value="2">
                    6 Months
                </option>
                <option value="3">
                    12 Months
                </option>

            </select>

        </div>

        <div class="col-md-6 my-3">
            <label for="level" class="form-label text-blue-shade">Level</label>
            <select name="level" id="level" class="form-select form-select-lg inputcolor fs-6">
                <option value="na">
                    Select course level
                </option>
                <option value="1">
                    Begineer
                </option>
                <option value="2">
                    Intermediate
                </option>
                <option value="3">
                    Advanced
                </option>
            </select>
        </div>
        <div class="col-md-6 my-3">
            <label for="activeStatus" class="form-label text-blue-shade">Active Status</label>
            <select name="activeStatus" id="activeStatus" class="form-select form-select-lg inputcolor fs-6">
                <option value="1">
                    Active
                </option>
                <option value="0">
                    Not Active
                </option>
            </select>
        </div>
        <div class="my-3">
            <label for="description" class="form-label text-blue-shade">Description</label><br>
            <textarea name="description" id="description" rows="4" class="col-md-12"
                placeholder="Write course description here..."></textarea>
        </div>
        <div class="my-3">
            <label for="targetAudience" class="form-label text-blue-shade">Target Audience</label><br>
            <textarea name="targetAudience" id="targetAudience" rows="4" class="col-md-12"
                placeholder="Write course target audience here..."></textarea>
        </div>
        <div class="my-3">
            <label for="learning" class="form-label text-blue-shade">Course Learning</label><br>
            <textarea name="learning" id="learning" rows="4" class="col-md-12"
                placeholder="Write course learning here..."></textarea>
        </div>
        <div class="my-3">
            <label for="requirements" class="form-label text-blue-shade">Course Requirements</label><br>
            <textarea name="requirements" id="requirements" rows="4" class="col-md-12"
                placeholder="Write course requirements here..."></textarea>
        </div>

        <div class="my-3">
            <label for="requirements" class="form-label text-blue-shade">Upload Image</label><br>
            <input type="file" id="productImage" name="productImage" class="form-control form-control-custom fs-6 inputcolor"
                   placeholder="Product Image" aria-label="productImage" required>
        </div>
    </div>
    <div class="text-left my-3">
        <button class="btn bg-primary text-light font-weight-bold px-5" name="addproduct" style="border-radius:4px;"
            type="submit">Add Course</button>
    </div>
</form>