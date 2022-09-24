
<div class="input-group my-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>

<p class="h5 text-dark font-weight-bold">Product details</p>
    <div class="table-responsive my-5">
      <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
          <tr>
            <th></th>
            <th>ID</th>
            <th>Course name</th>
            <th>Duration</th>
            <th>Price</th>
            <th>Enrollment Validity</th>
            <th>Level</th>
            <th>Description</th>
            <th>Target Audience</th>
            <th>Course Learning</th>
            <th>Course Requirements</th>
            <th>Tag</th>
            <th>Release Date</th>
            <th>Entered Date</th>
            <th>Entered By</th>
            <th>Update date</th>
            <th>Updated by</th>
            <th>Active Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th><a href="#"><i class="bi bi-pencil text-danger"></i></a></th>
          <th>1</th>
            <th>Course name</th>
            <th>12 hr</th>
            <th>NPR 7000</th>
            <th>Lifetime</th>
            <th>Beginner</th>
            <th>this n that ...</th>
            <th>this n that ...</th>
            <th>this n that ...</th>
            <th>this n that ...</th>
            <th>12</th>
            <th>2022-03-21</th>
            <th>2022-03-21</th>
            <th>Sushma Shrestha</th>
            <th>2022-03-21</th>
            <th>Sushma Shrestha</th>
            <th>Active</th>
          </tr>
          <tr>
            <th><a href="#"><i class="bi bi-pencil text-danger"></i></a></th>
          <th>2</th>
            <th>Course name</th>
            <th>12 hr</th>
            <th>NPR 7000</th>
            <th>Lifetime</th>
            <th>Beginner</th>
            <th>this n that ...</th>
            <th>this n that ...</th>
            <th>this n that ...</th>
            <th>this n that ...</th>
            <th>12</th>
            <th>2022-03-21</th>
            <th>2022-03-21</th>
            <th>Sushma Shrestha</th>
            <th>2022-03-21</th>
            <th>Sushma Shrestha</th>
            <th>Active</th>
          </tr>
        </tbody>
      </table>
    </div>


<p class="h5 text-dark font-weight-bold">Edit chosen product details</p>

<div class="row">
    <div class="col-md-6 my-3">
        <label for="courseName" class="form-label text-blue-shade">Course name</label>
        <input type="text" class="form-control inputcolor fs-6" placeholder="Course name" aria-label="courseName" id="courseName">
    </div>
    <div class="col-md-6 my-3">
        <label for="duration" class="form-label text-blue-shade">Duration (in hour)</label>
        <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
            <input type="number" min="0" step="1" class="col-md-3 col-sm-3 border-0 rounded-2" placeholder="hour" /> <span> &nbsp;:&nbsp; </span><input type="number" min="0" max="59" class="col-md-3 col-sm-3 border-0 rounded-2" placeholder="min" />

        </div>
    </div>

    <div class="col-md-6 my-3">
        <label for="Price" class="form-label text-blue-shade">Price</label>
        <input type="number" id="price" class="form-control inputcolor fs-6" placeholder="Price" aria-label="Price">
    </div>
    <div class="col-md-6 my-3">
        <label for="enrollmentValidity" class="form-label text-blue-shade">Enrollment Validity (0 for lifetime)</label>
        <input type="number" id="enrollmentValidity" class="form-control inputcolor fs-6" placeholder="Enrollment Validity (in years)" aria-label="Enrollment Validity">

    </div>

    <div class="col-md-6 my-3">
        <label for="level" class="form-label text-blue-shade">Level</label>
        <select name="level" id="level" class="form-select form-select-lg inputcolor fs-6">
            <option value="na">
                Select course level
            </option>
            <option value="male">
                Begineer
            </option>
            <option value="female">
                Intermediate
            </option>
            <option value="other">
                Advanced
            </option>
        </select>
    </div>
    <div class="col-md-6 my-3">
        <label for="activeStatus" class="form-label text-blue-shade">Active Status</label>
        <select name="activeStatus" id="activeStatus" class="form-select form-select-lg inputcolor fs-6">
            <option value="Active">
                Active
            </option>
            <option value="Not Active">
                Not Active
            </option>
        </select>
    </div>
    <div class="my-3">
        <label for="description" class="form-label text-blue-shade">Description</label><br>
        <textarea name="description" id="description" rows="4" class="col-md-12" placeholder="Write course description here..."></textarea>
    </div>
    <div class="my-3">
        <label for="targetAudience" class="form-label text-blue-shade">Target Audience</label><br>
        <textarea name="targetAudience" id="targetAudience" rows="4" class="col-md-12" placeholder="Write course target audience here..."></textarea>
    </div>
    <div class="my-3">
        <label for="learning" class="form-label text-blue-shade">Course Learning</label><br>
        <textarea name="learning" id="learning" rows="4" class="col-md-12" placeholder="Write course learning here..."></textarea>
    </div>
    <div class="my-3">
        <label for="requirements" class="form-label text-blue-shade">Course Requirements</label><br>
        <textarea name="requirements" id="requirements" rows="4" class="col-md-12" placeholder="Write course requirements here..."></textarea>
    </div>
</div>
<div class="text-left my-3">
    <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit">Edit Course</button>
</div>