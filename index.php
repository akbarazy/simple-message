<?php
include_once 'config.php';

if (!isset($_COOKIE['signin'])) {
    header('location: signin.php');
    exit;
}

if (isset($_GET['logout'])) {
    $id = $_COOKIE['signin'];
    mysqli_query($connect, "DELETE FROM usersignin WHERE id = $id");

    setcookie('signin', '', time() - 3600);
    header('location: signin.php');
    exit;
}

$id = $_COOKIE['signin'];
$yourProfile = mysqli_query($connect, "SELECT * FROM usersignin WHERE id = $id");
$yourProfile = mysqli_fetch_assoc($yourProfile);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akbarazy | Message</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Comfortaa:wght@300;400;600;700&family=Mulish:wght@300;400;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,700&family=Questrial&family=Quicksand:wght@300;400;600;700&family=Rajdhani:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="static/css/home-style.css">
</head>

<body style="background-color: #e3e3e3 !important;">
    <!-- section home -->

    <div class="container">
        <div class="form-signin py-5 px-4 regist text-center text-white" style="border-radius: 5px;">
            <h1 class="h3 mb-2 font-weight-normal">AKBARAZY MESSAGE</h1>
            <hr>

            <div class="your-profile text-left">
                <div class="your-name pr-3">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <span>&nbsp;<?php echo $yourProfile['name']; ?></span>
                </div>
                <div class="logout ml-auto btn btn-lg btn-danger">
                    <a href="index.php?logout=true" class="nav-link p-0">Logout</a>
                </div>
            </div>

            <h4 class="mt-5">OTHER'S PEOPLE</h4>
            <hr>

            <div class="other-people"></div>
        </div>
    </div>

    <!-- end home -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="static/js/hr-script.js"></script>
    <script src="static/ajax/home-ajax.js"></script>
</body>

</html>