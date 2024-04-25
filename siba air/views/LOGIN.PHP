<?php
//lets call the user function page
include_once('C:\xampp\htdocs\airline res-\project\lib/functions/userfunction.php');

if (isset($_POST['btnLogin'])) {

    //now we needs to call the Authentication function

    $result = Authentication($_POST['userName'], $_POST['userPwd']);

    echo ($result);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login page</title>
    <!-- Link bootstrap css -->
    <link rel="stylesheet" href="../assets/css/x/bootstrap.min.css">

    <!-- Link jquery and Javascript -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="margin-top:80px;background-image:url('../assets/images/loginbg.jpg');background-size:cover;background-position:center;padding-left:20px;padding-top:20px;padding-right:20px;padding-bottom:20px">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-dark  mb-3" style="background-color:rgba(255, 255, 255, 0.5)">
                    <div class="card-header">
                        Login to Smart Wing Airways 
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group mt-3">
                                <label for="">Enter Your userName</label>
                                <input type="text" name="userName" id="userName" class="form-control" placeholder="Enter Your userName">
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Enter Your Password</label>
                                <input type="password" name="userPwd" id="userPwd" class="form-control" placeholder="Enter Your Password">
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-sm" name="btnLogin" style="background-color: black;"> Login </button>
                                <input type="reset" class="btn btn-info btn-sm" style="background-color:lightblue;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php require_once('modal/message.php'); ?>

            <script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
            <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

            <script type="text/javascript">
                $(document).on('submit', '#form-login', function(event) {
                    event.preventDefault();
                    /* Act on the event */
                    // console.log('test');
                    var un = $('#un').val();
                    var pwd = $('#pwd').val();

                    $.ajax({
                        url: '../data/login.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            un: un,
                            pwd: pwd
                        },
                        success: function(data) {
                            // console.log(data);
                            if (data.valid == true) {
                                window.location = data.url;
                            } else {
                                $('#modal-message').find('#body-cont').text(data.msg);
                                $('#modal-message').modal('show');
                                $('#un').val("");
                                $('#pwd').val("");
                                $('#un').focus();
                            }
                        },
                        error: function() {
                            alert('Error: L99+');
                        } //
                    });
                });
            </script>
            <div class="col-md-6">
                <div class="card" style="background-color:rgba(255, 255, 255, 0.5)">
                    <div class="card-header">

                        Registration
                    </div>
                    <div class="card-body">
                        <form action="../route/users/registration.php" method="post">
                            <div class="form-group mt-2">
                                <label for="">Enter Your Name</label>
                                <input type="text" name="userName" id="userName" placeholder="Enter Your Name" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Enter Your Email Address</label>
                                <input type="email" name="userEmail" id="userEmail" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Please Enter Your Password</label>
                                <input type="password" name="userPwd" id="userPwd" placeholder="Enter Your Password" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Please Enter Your Phone Number</label>
                                <input type="text" name="userPhone" id="userPhone" placeholder="Enter Your Phone" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Please Enter Your Passport Number</label>
                                <input type="text" name="userNic" id="userNic" placeholder="Enter Your NIC" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" name="btnSave" id="btnsave" class="btn btn-success btn-sm">
                                <input type="reset" class="btn btn-danger btn-sm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>