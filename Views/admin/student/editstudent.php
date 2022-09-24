<div class="input-group my-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>

<p class="h5 text-dark font-weight-bold">Student details</p>
<div class="table-responsive mb-5">
    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
            <tr class="text-center">
                <th></th>
                <th>ID</th>
                <th>Full name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Username</th>
                <th>Password</th>
                <th>Mobile number</th>
                <th>Address</th>
                <th>Regsitration Date</th>
                <th>Expiry Date</th>
                <th>Active Status</th>
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="px-3"><a href="#"><i class="bi bi-pencil"></i></a></th>
                <th class="px-3">1</th>
                <th class="px-3">Sushma Shrestha</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">xsa@cdsd.cdc</th>
                <th class="px-3">Female</th>
                <th class="px-3">Sushma123</th>
                <th class="px-3">sushma##12517</th>
                <th class="px-3">9999999999</th>
                <th class="px-3">Chauthe</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">2022-06-21</th>
                <th class="px-3">Active</th>
                <th class="px-3">2022-04-21</th>
            </tr>
            <tr>
                <th class="px-3"><a href="#"><i class="bi bi-pencil"></i></a></th>
                <th class="px-3">1</th>
                <th class="px-3">Sushma Shrestha</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">xsa@cdsd.cdc</th>
                <th class="px-3">Female</th>
                <th class="px-3">Sushma123</th>
                <th class="px-3">sushma##12517</th>
                <th class="px-3">9999999999</th>
                <th class="px-3">Chauthe</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">2022-06-21</th>
                <th class="px-3">Active</th>
                <th class="px-3">2022-04-21</th>
            </tr>
            <tr>
                <th class="px-3"><a href="#"><i class="bi bi-pencil"></i></a></th>
                <th class="px-3">1</th>
                <th class="px-3">Sushma Shrestha</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">xsa@cdsd.cdc</th>
                <th class="px-3">Female</th>
                <th class="px-3">Sushma123</th>
                <th class="px-3">sushma##12517</th>
                <th class="px-3">9999999999</th>
                <th class="px-3">Chauthe</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">2022-06-21</th>
                <th class="px-3">Active</th>
                <th class="px-3">2022-04-21</th>
            </tr>
        </tbody>
    </table>
</div>


<p class="h5 text-dark font-weight-bold">Edit chosen Student details</p>


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
        <label for="gender" class="form-label text-blue-shade">Gender</label>
        <select name="gender" id="gender" class="form-select form-select-lg inputcolor fs-6">
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
        <input type="text" id="userName" class="form-control inputcolor fs-6" placeholder="Username" aria-label="userName">
    </div>
    <div class="col-md-6 my-3">
        <label for="password" class="form-label text-blue-shade">Password</label>
        <input type="password" id="password" class="form-control inputcolor fs-6" aria-label="password">
    </div>
    <div class="col-md-6 my-3">
        <label for="mobileNo" class="form-label text-blue-shade">Mobile Number</label>
        <input type="tel" id="mobileNo" class="form-control inputcolor fs-6" placeholder="Mobile Number" aria-label="Mobile Number">
    </div>
    <div class="col-md-6 my-3">
        <label for="mobileNo" class="form-label text-blue-shade">Address</label>
        <input type="tel" id="mobileNo" class="form-control inputcolor fs-6" placeholder="Address" aria-label="Mobile Number">
    </div>
    <div class="col-md-6 my-3">
        <label for="registrationDate" class="form-label text-blue-shade">Registration Date</label>
        <input type="date" id="registrationDate" class="form-control inputcolor fs-6" aria-label="registrationDate">
    </div>
    <div class="col-md-6 my-3">
        <label for="expiryDate" class="form-label text-blue-shade">Expiry Date</label>
        <input type="date" id="expiryDate" class="form-control inputcolor fs-6" aria-label="expiryDate">
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
        <label for="lastLogin" class="form-label text-blue-shade">Last Login</label>
        <input type="date" id="lastLogin" class="form-control inputcolor fs-6" aria-label="lastLogin">
    </div>

</div>

<div class="text-left my-3">
    <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit">Edit Student</button>
</div>