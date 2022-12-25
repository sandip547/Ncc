<form action="category.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 my-3">
            <label for="categoryName" class="form-label text-blue-shade">Category name</label>
            <input type="text" class="form-control inputcolor fs-6" placeholder="Category name" name="categoryName" minlength="3" required 
                aria-label="categoryName" id="categoryName">
        </div>


        <div class="col-md-6 my-3">
            <label for="activeStatus" class="form-label text-blue-shade">Active Status</label>
            <select name="activeStatus" id="activeStatus" required class="form-select form-select-lg inputcolor fs-6" required>
                <option value="">
                    Select Active Status
                </option>
                <option value="1">
                    Active
                </option>
                <option value="0">
                    Not Active
                </option>
            </select>
        </div>
    </div>
    <div class="text-left my-3">
        <button class="btn bg-primary text-light font-weight-bold px-5" name="addcategory" style="border-radius:4px;" type="submit">Add
            Category</button>
    </div>
</form>