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
<p class="h5 text-dark font-weight-bold">View Quiz</p>
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
        <label for="courseName" class="form-label">Quiz name : </label>
    </div>
    <div class="col-md-7">
        <select name="level" id="level" class="form-select form-select-lg inputcolor fs-6">
            <option value="Quiz name 1">
                Quiz name 1
            </option>
            <option value="Quiz name 2">
                Quiz name 2
            </option>
            <option value="Quiz name 3">
                Quiz name 3
            </option>
            <option value="Quiz name 4">
                Quiz name 4
            </option>
        </select>
    </div>
</div>


<div class="text-center">
    <button type="button" class="btn btn-primary fs-5 px-3 py-2 rounded-3" data-toggle="modal" data-target="#deletequizmodal">Delete Quiz</button>
</div>


<div class="modal fade" id="deletequizmodal" tabindex="-1" role="dialog" aria-labelledby="deletequizmodalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletequizmodalTitle">Quiz title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="my-3">
                    <div class="text-blue-shade fs-6 fw-bold">Q1. What is this?</div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst1">
                        <label class="form-check-label" for="questionfirst1">
                            Apple
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst2">
                        <label class="form-check-label" for="questionfirst2">
                            Mango
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst3">
                        <label class="form-check-label" for="questionfirst3">
                            Orange
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst4">
                        <label class="form-check-label" for="questionfirst4">
                            Strawberry
                        </label>
                    </div>
                </div>
                <div class="my-3">
                    <div class="text-blue-shade fs-6 fw-bold">Q1. What is this?</div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst1">
                        <label class="form-check-label" for="questionfirst1">
                            Apple
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst2">
                        <label class="form-check-label" for="questionfirst2">
                            Mango
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst3">
                        <label class="form-check-label" for="questionfirst3">
                            Orange
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questionfirst" id="questionfirst4">
                        <label class="form-check-label" for="questionfirst4">
                            Strawberry
                        </label>
                    </div>
                </div>
                <div>
                    <button class="bg-danger text-light border-0 rounded-4 px-3 py-2 fs-6"><i class="bi bi-trash"></i> Delete Quiz</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>