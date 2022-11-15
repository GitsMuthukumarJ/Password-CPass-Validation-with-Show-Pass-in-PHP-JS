<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
        <style>
            html,
            body {
                height: 100%;
            }

            body {
                display: -ms-flexbox;
                display: -webkit-box;
                display: flex;
                -ms-flex-align: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: center;
                justify-content: center;
                background-color: #f5f5f5;
            }

            form {
                padding-top: 10px;
                font-size: 14px;
                margin-top: 30px;
            }

            .card-title {
                font-weight: 300;
            }

            .btn {
                font-size: 14px;
                margin-top: 20px;
            }

            .login-form {
                width: 320px;
                margin: 20px;
            }

            .sign-up {
                text-align: center;
                padding: 20px 0 0;
            }

            span {
                font-size: 14px;
            }

            html,
            body {
                height: 100%;
            }

            body {
                display: -ms-flexbox;
                display: -webkit-box;
                display: flex;
                -ms-flex-align: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: center;
                justify-content: center;
                background-color: #f5f5f5;
            }

            form {
                padding-top: 10px;
                font-size: 14px;
                margin-top: 30px;
            }

            .card-title {
                font-weight: 300;
            }

            .btn {
                font-size: 14px;
                margin-top: 20px;
            }

            .login-form {
                width: 320px;
                margin: 20px;
            }

            .sign-up {
                text-align: center;
                padding: 20px 0 0;
            }

            span {
                font-size: 14px;
            }
        </style>

        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Forgot/Reset Password</h3>

                <div class="card-text">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Please enter your secure new password here</label>
                            <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Create password" required>
                            </br>
                            <input type="password" name="cpassword" id="cpassword" class="form-control form-control-sm" placeholder="Confirm Password" onkeyup="validate_password()" required>
                            <span id="wrong_pass_alert"></span><br>
                            <input type="email" name="email" value="<?php echo $email; ?>" hidden>
                            <input type="checkbox" onclick="myFunction()"> Show Password
                        </div>

                        <button type="submit" value="submit" name="submit" id="hidereset" class="btn btn-primary btn-block">Reset Password</button>
                    </form>

                    <span style="color:red;">* Password length must be atleast 8 charactors</span>
                </div>
            </div>
        </div>

<script>
    function validate_password() {
        var pass = document.getElementById('password').value;
        var confirm_pass = document.getElementById('cpassword').value;
        if (pass != confirm_pass) {
            document.getElementById('wrong_pass_alert').style.color = 'red';
            document.getElementById('wrong_pass_alert').innerHTML = '☒ Use same password';
            hidereset.style.display = "none";
        } else {
            document.getElementById('wrong_pass_alert').style.color = 'green';
            document.getElementById('wrong_pass_alert').innerHTML = '🗹 Password Matched';
            hidereset.style.display = "block";
        }
    }
</script>
