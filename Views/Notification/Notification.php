<?php
class Notification{

    function alertRegistrationSuccess(){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registration Successful</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Welcome to NCC Engineering
                    </div>
                    <div class="modal-footer">
                        <a  class="btn btn-primary"  href="login.php">Close</a>
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
    function alertNotSuccess(){
        ?>
        <div id="simpleModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Please enter details properly</h5>
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