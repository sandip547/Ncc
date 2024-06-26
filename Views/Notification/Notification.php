<?php
class Notification{

    function alertRegistrationSuccess($message='Welcome to NCC Engineering', $title='Registration Success'){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $title ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <?php echo $message ?>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn btn-primary" data-dismiss="modal" aria-label="Close"  href="#">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#simpleModal").modal('show');
            }
        </script>

<?php

    }
    function redirectLoginPage(){
        ?>
        <script>window.location.href="login.php";</script>
        <?php
    }
    function alertNotSuccess($alert_message){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $alert_message; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Welcome to NCC Engineering
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#simpleModal").modal('show');
            }
        </script>

        <?php

    }
    function AddSuccess(){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Information Added Successfully</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        NCC Engineering
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#simpleModal").modal('show');
            }
        </script>

        <?php

    }
    function alertUpdateSuccess(){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Information Updated Successfully</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       NCC Engineering
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#simpleModal").modal('show');
            }
        </script>

        <?php

    }

    function alertDeleteSuccess(){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Information Deleted Successfully</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        NCC Engineering
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#simpleModal").modal('show');
            }
        </script>

        <?php

    }

    function alertFillAgain(){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Please enter the details correctly</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        NCC Engineering
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#simpleModal").modal('show');
            }
        </script>

        <?php

    }

    function passwordChangedSuccess(){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Password Changed Successfully</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Welcome to NCC Engineering
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            window.onload = function () {
                OpenBootstrapPopup();
            };
            function OpenBootstrapPopup() {
                $("#simpleModal").modal('show');
            }
        </script>

        <?php

    }
}

?>