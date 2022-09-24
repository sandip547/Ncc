<?php
// if($logged){
//     include 'logged_in_header.php';
// }
// else{
include 'header.php';
// }
?>

<!-- Teachers Registration page -->
<section class="mb-5">
    <div class="container">
        <p class="h1 text my-5 text-center text-primary">"Teacher Registration"</p>

        <div>
            <img src="images/trek.jpg" alt="Teacher Registration" style="width:100%; opacity: 0.7 !important;">
            <div class="fs-4 fw-bold position-absolute" style="top: 70%; left: 50%; transform: translate(-50%, -50%); color: black;">
                Join us as a Trainer in CiviL Engineering Industry Expert
            </div>

        </div>
        <br><br><br>

        <p class="h2 text text-center">Got Civil Engineering Skills?</p>
        <p class="fs-6 text-center">Share, grow, get recognized and get handsomely paid!!</p>

        <p class="h3 text-orangered font-weight-bold">Courses and expert field required:</p>
        <ol class="text-blue-shade">
            <li>Hydropower</li>
            <li>Building design - RCC, steel and composite structure</li>
            <li>Estimation and Valuation</li>
            <li>Revit Architecture and Rendering using Lumion</li>
            <li>Interior design</li>
            <li>Project planning and scheduling</li>
            <li>Procurement</li>
            <li>GIS</li>
            <li>ANSYS - Workbench</li>
            <li>Geotech</li>
            <li>Water-supply</li>
            <li>Excel, VBA & Lisp-programming</li>
            <li>Civil-3D</li>
        </ol>
        <p class="h2 text my-5 text-center">Fill up the contact form below: </p>

        <div class="d-flex flex-wrap">
            <div class="col-md-6 my-3">
                <label for="name" class="form-label text-blue-shade">Your name</label>
                <input type="text" class="form-control inputcolor fs-6" placeholder="Your name" aria-label="Your name">
            </div>
            <div class="col-md-6 my-3">
                <label for="email" class="form-label text-blue-shade">Your email</label>
                <input type="text" class="form-control inputcolor fs-6" placeholder="Your email" aria-label="Your email">
            </div>
            <div class="col-md-6 my-3">
                <label for="phone" class="form-label text-blue-shade">Your phone number</label>
                <input type="tel" class="form-control inputcolor fs-6" placeholder="Phone number" aria-label="Phone number">
            </div>
            <div class="col-md-6 my-3">
                <label for="Qualification" class="form-label text-blue-shade">Qualification</label>
                <select name="Qualification" id="Qualification" class="form-select form-select-lg inputcolor fs-6">
                    <option value="bsc">
                        1) Bachelor in Civil Engineering
                    </option>
                    <option value="" msc>
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
                <label for="experience" class="form-label text-blue-shade">Experience (In years)</label>
                <input type="text" class="form-control inputcolor fs-6" placeholder="Experience" aria-label="experience">
            </div>
            <div class="col-md-6 my-3">
                <label for="Resume" class="form-label text-blue-shade">Resume/CV (Less than 10 Mb and pdf only)</label>
                <input type="file" class="form-control form-control-custom fs-6 inputcolor" placeholder="Upload Resume" aria-label="Upload Resume">
            </div>
            <div class="col-md-6 my-3">
                <label for="securityquestion" class="form-label text-blue-shade">Security Question</label>
                <input type="text" class="form-control inputcolor fs-6" placeholder="Answer Security Question" aria-label="Answer Security Question">
            </div>
        </div>
        <div class="text-left m-3">
            <button class="btn btn-primary clearfix rounded-2 hover-orangered fw-bold px-4" style="border-radius:4px;" type="submit">Submit</button>
        </div>
    </div>
    <br>
</section>

<?php
include 'footer.php'
?>