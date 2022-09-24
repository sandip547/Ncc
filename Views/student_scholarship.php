<?php
// if($logged_id){
// include 'logged_in_header.php';
// }
// else{
include 'header.php';
// }
?>
<!-- Student Scholarship page -->
<section>
    <div class="container">
        <p class="h1 text my-5 text-center text-primary">"Student Scholarship"</p>

        <p class="text-center text-danger" style="font-size:12px; font-weight: bold;">If you are college students (Bachleor or Master) in Civil Engineering, you are eligible for some percentage discount as scholarship</p>

        <p class="h4 text font-weight-bold">Please fill this form to avail this scholarship </p>

        <div class="d-flex flex-wrap">
            <div class="col-md-6 my-4">
                <label for="name" class="form-label text-blue-shade">Your name</label>
                <input type="text" class="form-control inputcolor fs-6" aria-label="Your name">
            </div>
            <div class="col-md-6 my-4">
                <label for="email" class="form-label text-blue-shade">Your email</label>
                <input type="text" class="form-control inputcolor fs-6" aria-label="Your email">
            </div>
            <div class="col-md-6 my-4">
                <label for="phone" class="form-label text-blue-shade">Phone No</label>
                <input type="tel" class="form-control inputcolor fs-6" aria-label="Phone number">
            </div>
            <div class="col-md-6 my-4">
                <label for="Qualification" class="form-label text-blue-shade">Qualification</label>
                <select name="Qualification" id="Qualification" class="form-select inputcolor fs-6">
                    <option value="bsc">
                        1) Bachelor in Civil Engineering
                    </option>
                    <option value="" msc>
                        2) Master in Civil Engineering
                    </option>
                </select>
            </div>
            <div class="col-md-6 my-4">
                <label for="courserec" class="form-label text-blue-shade">Course for Scholarship in recorded class (Refer: www.skill-veda.com/courses)</label>
                <input type="text" class="form-control inputcolor fs-6" aria-label="courserec">
            </div>



            <div class="col-md-6 my-4">
                <label for="courselive" class="form-label text-blue-shade">Course for Scholarship in Live class (Refer: https://forms.gle/AEDEHrduXAMAGLJZA)</label>
                <select name="courselive" id="courselive" class="form-select inputcolor fs-6">
                    <option value="BCCDD">
                        Building Code commentary & Ductile Detailing (NBC 105 & IS 456)
                    </option>

                </select>
            </div>
            <div class="col-md-6 my-4">
                <label for="Resume" class="form-label text-blue-shade">Latest semester marksheet (Less than 5 Mb ,pdf file only)</label>
                <input type="file" class="form-control inputcolor form-control-custom fs-6" placeholder="Upload Resume" aria-label="Upload Resume">
            </div>
            <div class="col-md-6 my-4">
                <label for="securityquestion" class="form-label text-blue-shade">Security Question</label>
                <input type="text" class="form-control inputcolor fs-6" aria-label="Answer Security Question">
            </div>
        </div>
        <div class="mx-auto mb-5 mt-3 pb-5 d-grid gap-2 col-6">
            <button class="btn bg-primary text-light font-weight-bold px-4 rounded-2 p-2 fs-5" type="submit">Submit</button>
        </div>
    </div>
</section>
<?php
include 'footer.php'
?>