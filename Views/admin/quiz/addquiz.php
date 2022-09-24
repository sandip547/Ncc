<div class="fs-5 text-primary">
    Select course for quiz:
</div>
<div class="input-group mb-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search course by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>

<div class="table-responsive my-5">
    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
            <tr class="text-center">
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
                <th class="px-3"><button type="button" class="btn btn-primary">Select</button></th>
                <th class="px-3">1</th>
                <th class="px-3">Course name</th>
                <th class="px-3">12 hr</th>
                <th class="px-3">NPR 7000</th>
                <th class="px-3">Lifetime</th>
                <th class="px-3">Beginner</th>
                <th class="px-3">this n that ...</th>
                <th class="px-3">this n that ...</th>
                <th class="px-3">this n that ...</th>
                <th class="px-3">this n that ...</th>
                <th class="px-3">12</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">Sushma Shrestha</th>
                <th class="px-3">2022-03-21</th>
                <th class="px-3">Sushma Shrestha</th>
                <th class="px-3">Active</th>
            </tr>

            <th class="px-3"><button type="button" class="btn btn-primary">Select</button></th>
            <th class="px-3">2</th>
            <th class="px-3">Course name</th>
            <th class="px-3">12 hr</th>
            <th class="px-3">NPR 7000</th>
            <th class="px-3">Lifetime</th>
            <th class="px-3">Beginner</th>
            <th class="px-3">this n that ...</th>
            <th class="px-3">this n that ...</th>
            <th class="px-3">this n that ...</th>
            <th class="px-3">this n that ...</th>
            <th class="px-3">12</th>
            <th class="px-3">2022-03-21</th>
            <th class="px-3">2022-03-21</th>
            <th class="px-3">Sushma Shrestha</th>
            <th class="px-3">2022-03-21</th>
            <th class="px-3">Sushma Shrestha</th>
            <th class="px-3">Active</th>
            </tr>

        </tbody>
    </table>
</div>
<p class="h5 text-dark font-weight-bold">Add Quiz</p>
<div class="row align-items-center my-2">
    <div class="col-md-3 text-orangered font-weight-bold fs-6">
        <label for="courseName" class="form-label">Course name : </label>
    </div>
    <div class="col-md-7">
        <input type="text" class="form-control inputcolor fs-6" placeholder="Course name" aria-label="courseName" id="courseName" value="Course name that was selected" disabled>
    </div>
</div>
<div class="row align-items-center my-2">
    <div class="col-md-3 text-orangered font-weight-bold fs-6">
        <label for="quiztitle" class="form-label ">Quiz Title: </label>
    </div>
    <div class="col-md-7">
        <input type="text" id="quiztitle" class="form-control inputcolor fs-6" placeholder="Quiz Title">
    </div>
</div>
<hr class="bg-primary my-5">
<div>
    <div class="my-4 d-flex flex-wrap justify-content-between">
        <div class="col-md-6 d-flex flex-wrap my-4">
            <div class="col-md-4 text-orangered font-weight-bold fs-6">
                <label for="level" class="form-label ">No of options : </label>
            </div>
            <div class="col-md-3">
                <select name="level" id="level" class="form-select form-select-lg inputcolor fs-6">
                    
                    <option value="2">
                       2
                    </option>
                    <option value="3">
                        3
                    </option>
                    <option value="4">
                        4
                    </option>
                    <option value="5">
                        5
                    </option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary rounded-3 my-4">Add Question</button>
    </div>
    <div class="mb-4">
        <div class="text-blue-shade fs-6 fw-bold d-flex my-2 align-items-center"><label class="">Q1. </label><input class="form-control" type="text"></div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst1">
            <input class="form-control" type="text">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst2">
            <input class="form-control" type="text">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst3">
            <input class="form-control" type="text">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst4">
            <input class="form-control" type="text">
        </div>
    </div>
</div>
<hr class="bg-primary my-5">
<div>
    <div class="my-4 d-flex flex-wrap justify-content-between">
        <div class="col-md-6 d-flex flex-wrap my-4">
            <div class="col-md-4 text-orangered font-weight-bold fs-6">
                <label for="level" class="form-label ">No of options : </label>
            </div>
            <div class="col-md-3">
                <select name="level" id="level" class="form-select form-select-lg inputcolor fs-6">
                    
                    <option value="2">
                       2
                    </option>
                    <option value="3">
                        3
                    </option>
                    <option value="4">
                        4
                    </option>
                    <option value="5">
                        5
                    </option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary rounded-3 my-4">Add Question</button>
    </div>
    <div class="mb-4">
        <div class="text-blue-shade fs-6 fw-bold d-flex my-2 align-items-center"><label class="">Q2. </label><input class="form-control" type="text"></div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst1">
            <input class="form-control" type="text">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst2">
            <input class="form-control" type="text">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst3">
            <input class="form-control" type="text">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst4">
            <input class="form-control" type="text">
        </div>
    </div>
</div>
<hr class="bg-primary my-5">
<div>
    <div class="my-4 d-flex flex-wrap justify-content-between">
        <div class="col-md-6 d-flex flex-wrap my-4">
            <div class="col-md-4 text-orangered font-weight-bold fs-6">
                <label for="level" class="form-label ">No of options : </label>
            </div>
            <div class="col-md-3">
                <select name="level" id="level" class="form-select form-select-lg inputcolor fs-6">
                    
                    <option value="2">
                       2
                    </option>
                    <option value="3">
                        3
                    </option>
                    <option value="4">
                        4
                    </option>
                    <option value="5">
                        5
                    </option>
                </select>
            </div>
        </div>
        <button class="btn btn-primary rounded-3 my-4">Add Question</button>
    </div>
</div>
<hr class="bg-primary my-5">
<div class="text-center">
    <button type="button" class="btn btn-primary fs-5 px-3 py-2 rounded-3">Add Quiz</button>
</div>

