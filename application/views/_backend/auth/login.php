<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $setting[0]->setting_appname; ?> | Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="<?php echo base_url(); ?>assets/core-images/<?php echo $setting[0]->setting_logo; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
    <style type="text/css">
        .fontPoppins {

            font-family: 'Poppins', sans-serif;

        }

        * {
            font-family: "Poppins", sans-serif;
        }

        .wrapper {
            background-color: #ececec;
            padding: 0px 20px 0 20px;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .row {
            width: 900px;
            height: 550px;
            border-radius: 10px;
            background: #ffff;
            box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
        }

        .side-image {
            background-image: url(<?php echo base_url() . '/assets/core-images/' . $setting[0]->setting_background ?>);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            border-radius: 10px 0px 0 10px;
        }

        .right {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .input-box {
            width: 330px;
            box-sizing: border-box;
        }

        .input-box header {
            font-weight: 700;
            text-align: center;
            margin-bottom: 45px;
            font-size: 20px;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            position: relative;
            padding: 0 10px 0 10px;
        }

        .input {
            height: 45px;
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            outline: none;
            margin-bottom: 20px;
            color: #40414a;
        }

        .input-box .input-field label {
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: 0.5s;
        }

        .input-field .input:focus~label {
            top: -10px;
            font-size: 13px;
        }

        .input-field .input:valid~label {
            top: -10px;
            font-size: 13px;
            color: #5d5076;
        }

        .input-field .input:focus,
        .input-field .input:valid {
            border-bottom: 1px solid #743ae1;
        }

        .submit {
            border: none;
            outline: none;
            height: 45px;
            background: #ececec;
            border-radius: 5px;
            transition: 0.4s;
        }

        .submit:hover {
            background: rgba(37, 95, 156, 0.9);
            color: #ffff;
        }

        .sign-in {
            text-align: center;
            font-size: small;
            margin-top: 25px;
        }

        .span a {
            text-decoration: none;
            font-weight: 700;
            color: #0000;
            transition: 0.5s;
        }

        .span a:hover {
            text-decoration: underline;
            color: #0000;
        }

        @media only screen and (max-width: 768px) {
            .side-image {
                border-radius: 10px 10px 0 0;
            }

            .row {
                max-width: 420px;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-- Image -->
                    <div class="text">
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Login Page</header>
                        <?php
                        if ($this->session->flashdata('alert')) {
                            echo $this->session->flashdata('alert');
                            unset($_SESSION['alert']);
                        }
                        ?>
                        <!-- Start Form Login -->
                        <?php echo form_open("sign/validate", "class='login-form'"); ?>
                        <div class="input-field">
                            <?php echo csrf(); ?>
                            <input type="text" class="input" name="username" id="username" required autocomplete="off" value=" " />
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" class="input" id="password" required value="" />
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Sign Up" />
                        </div>
                        <?php echo form_close(); ?>
                        <!-- End Form Login -->

                        <div class="sign-in">
                            <b>&copy; <?php echo $setting[0]->setting_owner_name; ?> 🔥 2022
                            </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>