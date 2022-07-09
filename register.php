<?php
// require_once 'functions.php';

// if (isset($_COOKIE['login'])) {
//     header('location: index.php');
//     exit;
// }

// $resultAlert = regist();
// if ($resultAlert === '') {
//     header('location: index.php');
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akbarazy | Massage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Comfortaa:wght@300;400;600;700&family=Mulish:wght@300;400;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,700&family=Questrial&family=Quicksand:wght@300;400;600;700&family=Rajdhani:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="static/css/register-style.css">
</head>

<body style="background-color: #e3e3e3 !important;">
    <!-- section regist -->

    <div class="container">
        <form action="" method="post" class="form-signin py-5 px-4 regist text-center text-white" style="border-radius: 5px;">
            <h1 class="h3 mb-2 font-weight-normal">REGISTER</h1>

            <?php // echo $resultAlert; 
            ?>
            <div class="alert alert-danger mt-4" role="alert" style="border: 1px solid #e0616e">
                A simple danger alert—check it out!
            </div>

            <div class="input-group text-left mt-3">
                <label for="name">Username</label>
                <input type="text" name="name" id="name" class="form-control text-white" maxlength="15" autocomplete="off" required>
            </div>

            <button class="btn btn-lg btn-danger btn-block mt-4 mb-3" type="submit" name="submit">REGISTER</button>
        </form>
    </div>

    <!-- end regist -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="static/js/register-script.js"></script>
</body>

</html>