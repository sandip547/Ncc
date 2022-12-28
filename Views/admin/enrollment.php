<?php
session_start();
$page = 'payment';
include 'admin header.php';
$details = ['', '', '', '', '',];

?>

    <div class="text-justify p-0 m-0 ml-4 course-info">

        <div class="col-11 text-justify p-0 m-0">
            <div class="input-group my-5">
                <input type="search" id="form1" class="form-control fs-6"
                       placeholder="Search by enrollment id or name..." />
                <button type="button" class="bg-primary text-light px-3" style="border: none;">
                    <i class="bi bi-search"></i>
                </button>
            </div>

            <p class="h5 text-dark font-weight-bold">Payment data list</p>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm text-normal">
                    <thead class="thead-light">
                    <tr class="text-center">
                        <th></th>
                        <th>Payment ID</th>
                        <th>Enrollment ID</th>
                        <th>Full name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Mobile number</th>
                        <th>Address</th>
                        <th>Payment Mode</th>
                        <th>Payment Date</th>
                        <th>Payment Account Number</th>
                        <th>Bank Name</th>
                        <th>Amount</th>
                        <th>Check Number</th>
                        <th>Status</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($details as $det) { ?>
                        <tr>
                            <th class="px-3"><button type="button" class="btn btn-primary" data-toggle="modal"
                                                     data-target="#exampleModalLong">View</button></th>
                            <th class="px-3">1</th>
                            <th class="px-3">2453</th>
                            <th class="px-3">Sushma Shrestha</th>
                            <th class="px-3">Sushma123</th>
                            <th class="px-3">xsa@cdsd.cdc</th>
                            <th class="px-3">9999999999</th>
                            <th class="px-3">Chauthe</th>
                            <th class="px-3">Khalti</th>
                            <th class="px-3">2022-03-21</th>
                            <th class="px-3">098654212452323</th>
                            <th class="px-3">Nabil bank</th>
                            <th class="px-3">10000</th>
                            <th class="px-3">56786</th>
                            <th class="px-3">Completed</th>
                        </tr>

                        <?php
                    }
                    ?>

                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example" class="mb-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link text-primary" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link text-primary" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-primary" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-primary" href="#">3</a></li>
                    <li class="page-item"><a class="page-link text-primary" href="#">4</a></li>
                    <li class="page-item"><a class="page-link text-primary" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link text-primary" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Student details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="fullName" class="form-label">Full Name</label>

                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    Sushma Shrestha
                                </div>
                            </div>
                            <div class="row my-2 align-items-center">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="userName" class="form-label">Username</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    Sushma123
                                </div>
                            </div>
                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="email" class="form-label">E-mail</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    xsa@cdsd.cdc
                                </div>
                            </div>

                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="mobileNo" class="form-label">Mobile Number</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    9999999999
                                </div>
                            </div>

                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="address" class="form-label">Address</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    Chauthe
                                </div>
                            </div>

                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="Payment mode" class="form-label">Payment Mode</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    Khalti
                                </div>
                            </div>

                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="paymentDate" class="form-label">Payment Date</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    2022-03-21
                                </div>
                            </div>
                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label class="form-label">Payment Account Number</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    098654212452323
                                </div>
                            </div>
                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label class="form-label">Bank Name</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    Nabil Bank
                                </div>
                            </div>
                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label class="form-label">Amount</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    10000
                                </div>
                            </div>
                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label class="form-label">Check Number</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    56786
                                </div>
                            </div>

                            <div class="row my-2 align-items-center">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="status" class="form-label">Status</label>
                                </div>
                                <div class="col-md-7 text-blue-shade fs-6">
                                    Completed
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </main>
    </div>
    </div>

<?php
include 'footer.php'
?>