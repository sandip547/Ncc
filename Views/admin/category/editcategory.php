
<div class="input-group my-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>

<p class="h5 text-dark font-weight-bold">Category details</p>
    <div class="table-responsive my-5">
      <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
          <tr>
            <th></th>
            <th>ID</th>
            <th>Category name</th>
            <th>Active Status</th>
            <th>Entered Date</th>
            <th>Entered By</th>
            <th>Update date</th>
            <th>Updated by</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th><a href="#"><i class="bi bi-pencil text-danger"></i></a></th>
            <th>1</th>
            <th>Category name</th>
            <th>Active</th>
            <th>2022-03-21</th>
            <th>Sushma Shrestha</th>
            <th>2022-03-21</th>
            <th>Sushma Shrestha</th>
          </tr>
          <tr>
            <th><a href="#"><i class="bi bi-pencil text-danger"></i></a></th>
            <th>2</th>
            <th>Category name</th>
            <th>Active</th>
            <th>2022-03-21</th>
            <th>Sushma Shrestha</th>
            <th>2022-03-21</th>
            <th>Sushma Shrestha</th>
          </tr>
        </tbody>
      </table>
    </div>


<p class="h5 text-dark font-weight-bold">Edit chosen category details</p>
<div class="row">
    <div class="col-md-6 my-3">
        <label for="categoryName" class="form-label text-blue-shade">Category name</label>
        <input type="text" class="form-control inputcolor fs-6" placeholder="Category name" aria-label="categoryName" id="categoryName">
    </div>
   
    
    <div class="col-md-6 my-3">
        <label for="activeStatus" class="form-label text-blue-shade">activeStatus</label>
        <select name="activeStatus" id="activeStatus" class="form-select form-select-lg inputcolor fs-6">
            <option value="na">
                Select Active Status
            </option>
            <option value="active">
                Active
            </option>
            <option value="not active">
                Not Active
            </option>
        </select>
    </div>
</div>
<div class="text-left">
    <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit">Edit Category</button>
</div>