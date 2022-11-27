<form action="student.php" method="post">
    <div class="row">
        <div class="col-md-6 my-3">
            <label for="fullName" class="form-label text-blue-shade">Full Name</label>
            <input type="text" required minlength="3" name="fullName" id="fullName" class="form-control inputcolor fs-6" placeholder="Full Name"
                aria-label="fullName">
        </div>
        <div class="col-md-6 my-3">
            <label for="dob" class="form-label text-blue-shade">Date of Birth</label>
            <input type="date" required name="dob" id="dob" class="form-control inputcolor fs-6" aria-label="dob">
        </div>
        <div class="col-md-6 my-3">
            <label for="email" class="form-label text-blue-shade">E-mail</label>
            <input type="email" required name="email" class="form-control inputcolor fs-6" placeholder="E-mail" aria-label="email">
        </div>
        <div class="col-md-6 my-3">
            <label for="gender" class="form-label text-blue-shade">Gender</label>
            <select name="gender"  name="gender" id="gender" class="form-select form-select-lg inputcolor fs-6">
                <option value="1">
                    Male
                </option>
                <option value="2">
                    Female
                </option>
                <option value="3">
                    Other
                </option>
            </select>
        </div>
        <div class="col-md-6 my-3">
            <label for="userName" class="form-label text-blue-shade">Username</label>
            <input type="text" required name="username" id="userName" class="form-control inputcolor fs-6" placeholder="Username"
                aria-label="userName">
        </div>
        <div class="col-md-6 my-3">
            <label for="password" class="form-label text-blue-shade">Password</label>
            <input type="password" required name="password" id="password" class="form-control inputcolor fs-6" aria-label="password">
        </div>
        <div class="col-md-6 my-3">
            <label for="cpassword" class="form-label text-blue-shade">Password</label>
            <input type="password" required name="cpassword" id="cpassword" class="form-control inputcolor fs-6" aria-label="password">
        </div>
        <div class="col-md-6 my-3">
            <label for="mobileNo" class="form-label text-blue-shade">Mobile Number</label>
            <input type="tel" required name="mobileNumber" id="mobileNo" class="form-control inputcolor fs-6" placeholder="Mobile Number"
                aria-label="Mobile Number">
        </div>
        <div class="col-md-6 my-3">
            <label for="address" class="form-label text-blue-shade">Address</label>
            <input type="text" required name="address" id="address" class="form-control inputcolor fs-6" placeholder="Address"
                aria-label="Mobile Number">
        </div>
        <div class="col-md-6 my-3">
            <label for="registrationDate" class="form-label text-blue-shade">Registration Date</label>
            <input type="date" required id="registrationDate" class="form-control inputcolor fs-6" aria-label="registrationDate">
        </div>
        <div class="col-md-6 my-3">
            <label for="expiryDate" class="form-label text-blue-shade">Expiry Date</label>
            <input type="date" required id="expiryDate" class="form-control inputcolor fs-6" aria-label="expiryDate">
        </div>
        <div class="col-md-6 my-3">
            <label for="activeStatus" class="form-label text-blue-shade">Active Status</label>
            <select name="activeStatus" required id="activeStatus" class="form-select form-select-lg inputcolor fs-6">
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
        <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit"
            name="register">Add
            Student</button>
    </div>
</form>