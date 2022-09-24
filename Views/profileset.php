<!-- Profile tab inside Setting -->
<div class="col-md-11 my-3 mx-0 ml-2" id="profile">
    <div class="profile-header-cover"></div>
    <div class="d-flex justify-content-end text-right">
        <div class="thislogo1 bg-light rounded-pill d-flex align-items-center justify-content-center text-center mr-5" style="width: 30px; height:30px;--bs-text-opacity: .5;">
            <a href="#"><i class="bi bi-trash3-fill text-orangered"></i></a>
        </div>
    </div>
    <div class="profile-header-content d-flex flex-wrap justify-content-between">
        <img src="images/profile.jpg" width="150px" height="150px" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-5 mb-1 rounded-pill" style="z-index: 1;bottom: 100%;transform: translate(10%, 40%)" id="profileimage">
        <div class="d-flex align-items-end mt-4 mx-1">
            <a href="#" class="btn mt-5 btn-orangered" style="bottom: 100%; transform: translate(-10%, -20%);">Edit Profile</a>
        </div>
    </div>
</div>

<div class="d-flex flex-wrap mt-5 p-0 mx-0">
    <div class="col-md-5 col-sm-12 my-4">
        <label for="firstname" class="form-label text-blue-shade">First Name</label>
        <input type="text" class="form-control fs-6 inputcolor" aria-label="First name">
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="lastname" class="form-label text-blue-shade">Last Name</label>
        <input type="text" class="form-control fs-6 inputcolor" aria-label="Last Name">
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="username" class="form-label text-blue-shade">User Name</label>
        <input type="text" class="form-control fs-6 inputcolor" aria-label="User name">
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="phone" class="form-label text-blue-shade">Phone Number</label>
        <input type="tel" class="form-control fs-6 inputcolor" aria-label="Phone Number">
    </div>
    <div class="col-md-10 col-sm-12 my-4">
        <label for="bio" class="form-label text-blue-shade">Bio</label>

        <textarea class="form-control fs-6 inputcolor" rows="3" placeholder="Write something here...."></textarea>
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="displayname" class="form-label text-blue-shade">Display Name Publicly as</label>
        <select name="displayname" id="displayname" class="form-select inputcolor">
            <option value="Kaira">
                Kaira
            </option>
            <option value="Tamrakar">
                Tamrakar
            </option>
        </select>
        <p style="font-size: 12px;">The display name is shown in all public fields, such as the author name, instructor name, student name, and name that will be printed on the certificate.</p>
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="websiteurl" class="form-label text-blue-shade">Website URL</label>
        <input type="text" class="form-control fs-6 inputcolor" aria-label="websiteurl" placeholder="https://example.com/">
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="githuburl" class="form-label text-blue-shade">Github URL</label>
        <input type="text" class="form-control fs-6 inputcolor" aria-label="githuburl" placeholder="https://github.com/username">
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="facebookurl" class="form-label text-blue-shade">Facbook URL</label>
        <input type="text" class="form-control fs-6 inputcolor" aria-label="facebookurl" placeholder="https://facebook.com/username">
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="twitterurl" class="form-label text-blue-shade">Twitter URL</label>
        <input type="text" class="form-control fs-6 inputcolor" aria-label="twitterurl" placeholder="https://twitter.com/username">
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="linkedin" class="form-label text-blue-shade">Linkedin URL</label>
        <input type="text" class="form-control fs-6 inputcolor" aria-label="linkedin" placeholder="https://linkedin.com/username">
    </div>
    <div class="col-md-10">
        <button type="submit" class="btn btn-primary clearfix rounded-2">UPDATE PROFILE</button>
    </div>
    <br><br>
</div>
<br><br><br><br>