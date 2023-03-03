<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $setting[0]->setting_appname; ?> | Shortcut</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" ty>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<style type="text/css">
    body {
        height: 100vh;
        max-height: 100vh;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('<?php echo base_url(); ?>assets/core-front/img/Xyhsbd.jpg');
        font-family: 'Inter', sans-serif;
        color: #1A1A1A;
        position: relative;
    }


    .btn {
        padding: 12px 10px;
    }

    .btn-primary {
        background-color: #fff;
        color: #1A1A1A;
        border: 2px solid #939393;
        box-shadow: 9px 8px 0px rgba(0, 0, 0, 0.25);
        border-radius: 8px;
        transition: all 0.5s;
        width: 300px;
    }

    .btn-primary:hover {
        background-color: #E3E3E3;
        color: #1A1A1A;
        border: 2px solid #939393;
        box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.25);
        border-radius: 8px;
    }

    h4 {
        line-height: 131.02%;
        letter-spacing: 0.065em;
        font-weight: 600;
    }

    section {
        height: 95vh;
        width: 100%;
    }

    footer {
        height: 5vh;
        width: 100%;
    }
</style>
</head>

<body>
    <section class="d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-center align-items-center flex-column">
            <img class="img-fluid" width="140" src="<?php echo base_url() . 'assets/core-front/img/avatars.png' ?>">
            <h4 class="text-center font-weight-bolder my-4">SOFTWARE ENGINEER & <br> UI/UX DESIGNER 🔥</h4>
            <div class="d-flex flex-column">
                <?php foreach ($shortcut as $s) { ?>
                    <a target="blamk" href="<?php echo $s->shortcut_link ?>" class="btn btn-primary my-2"><img src="<?= $s->shortcut_icon_link ?>" width="20"> <?php echo $s->shortcut_title ?></a>
                <?php } ?>
            </div>
        </div>
    </section>

    <footer class="text-center">
        &copy; Iqbal Tahir | 2023
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>