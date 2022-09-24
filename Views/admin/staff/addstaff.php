<div class="row">
    <div class="col-md-6 my-3">
        <label for="fullName" class="form-label text-blue-shade">Full Name</label>
        <input type="text" id="fullName" class="form-control inputcolor fs-6" placeholder="Full Name" aria-label="fullName">
    </div>
    <div class="col-md-6 my-3">
        <label for="dob" class="form-label text-blue-shade">Date of Birth</label>
        <input type="date" id="dob" class="form-control inputcolor fs-6" aria-label="dob">
    </div>
    <div class="col-md-6 my-3">
        <label for="email" class="form-label text-blue-shade">E-mail</label>
        <input type="email" class="form-control inputcolor fs-6" placeholder="E-mail" aria-label="email">
    </div>
    <div class="col-md-6 my-3">
        <label for="phoneNo" class="form-label text-blue-shade">Phone Number</label>
        <input type="tel" id="phoneNo" class="form-control inputcolor fs-6" placeholder="Phone Number" aria-label="Phone Number">
    </div>
    <div class="col-md-6 my-3">
        <label for="mobileNo" class="form-label text-blue-shade">Address</label>
        <input type="tel" id="mobileNo" class="form-control inputcolor fs-6" placeholder="Address" aria-label="Mobile Number">
    </div>
    <div class="col-md-6 my-3">
        <label for="joinDate" class="form-label text-blue-shade">Join Date</label>
        <input type="date" id="joinDate" class="form-control inputcolor fs-6" aria-label="joinDate">
    </div>
    <div class="col-md-6 my-3">
        <label for="Qualification" class="form-label text-blue-shade">Qualification (Choose highest)</label>
        <select name="Qualification" id="Qualification" class="form-select form-select-lg inputcolor fs-6">
            <option value="bsc">
                1) Bachelor in Civil Engineering
            </option>
            <option value="msc">
                2) Master in Civil Engineering
            </option>
        </select>
    </div>
    <div class="col-md-6 my-3">
        <label for="Expertise" class="form-label text-blue-shade">Subject Expertise</label>
        <select name="Expertise" id="Expertise" class="form-select form-select-lg inputcolor fs-6" required>
            <option value="bsc">
                1) Hydropower
            </option>
            <option value="" msc>
                2) Building design - RCC, steel and composite structure
            </option>
            <option value="">
                3) Estimation and Valuation
            </option>
            <option value="">
                4) Revit Architecture and Rendering using Lumion
            </option>
            <option value="">
                5) Interior design
            </option>
            <option value="">
                6) Project planning and scheduling
            </option>
            <option value="">
                7) Procurement
            </option>
            <option value="">
                8) GIS
            </option>
            <option value="">
                9) ANSYS - Workbench
            </option>
            <option value="">
                10) Geotech
            </option>
            <option value="">
                11) Water-supply
            </option>
            <option value="">
                12) Excel, VBA & Lisp-programming
            </option>
            <option value="">
                13) Civil-3D
            </option>
        </select>
    </div>
    <div class="col-md-6 my-3">
        <label for="noOfExperience" class="form-label text-blue-shade">Experience (In years)</label>
        <input type="number" class="form-control inputcolor fs-6" placeholder="Experience (In years)" aria-label="noOfExperience">
    </div>
    <div class="col-md-6 my-3">
        <label for="cvLocation" class="form-label text-blue-shade">Resume/CV (Less than 10 Mb and pdf only)</label>
        <input type="file" id="cvLocation" class="form-control form-control-custom fs-6 inputcolor" placeholder="Upload Resume" aria-label="Upload Resume">
    </div>
    <div class="col-md-6 my-3">
        <label for="activeStatus" class="form-label text-blue-shade">Active Status</label>
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
    <div class="col-md-6 my-3">
        <label for="type" class="form-label text-blue-shade">Staff Type</label>
        <select name="type" id="type" class="form-select form-select-lg inputcolor fs-6">
            <option value="1">
                1 - Staff
            </option>
            <option value="2">
                2 - Admin
            </option>
            <option value="3">
                3 - Instructor
            </option>
        </select>
    </div>
    <div class="col-md-6 my-3">
        <label for="userName" class="form-label text-blue-shade">Username</label>
        <input type="text" id="userName" class="form-control inputcolor fs-6" placeholder="Username" aria-label="userName">
    </div>
    <div class="col-md-6 my-3">
        <label for="retireDate" class="form-label text-blue-shade">Retire Date</label>
        <input type="date" id="retireDate" class="form-control inputcolor fs-6" aria-label="retireDate">
    </div>
    <div class="col-md-6 my-3">
        <label for="password" class="form-label text-blue-shade">Password</label>
        <input type="password" id="password" class="form-control inputcolor fs-6" aria-label="password">
    </div>
    <div class="col-md-6 my-3">
        <label for="cpassword" class="form-label text-blue-shade">Confirm Password</label>
        <input type="password" id="cpassword" class="form-control inputcolor fs-6" aria-label="cpassword">
    </div>
</div>

<div class="text-left my-3">
    <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit">Add Staff</button>
</div>