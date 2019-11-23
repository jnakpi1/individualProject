<?php
$_SESSION['billName'] = $_POST['billName'];
$_SESSION['bill'] = $_POST['bill'];
?>

<!DOCTYPE html>s
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results Page </title>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landing-2.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">RentingIsEasy</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-reviews">Reviews</a></li>
                <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="GetStarted.html" target="_blank"><span class="pb_rounded-4 px-4">Get Started</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<section class="overlay cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1">
    <div class="container mt-lg-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 relative align-self-center">
                <div action="#" class="bg-white rounded pb_form_v1">
                    <h2 class="mb-4 mt-0 text-center">Report Page</h2>

                    <div>
                        Welcome Your bill for: <?php echo $_POST["billName"]; ?><br>
                        Came out to the amount of: <?php echo $_POST["bill"]; ?>
                    </div>



                    </form>
                </div>
            </div>
        </div>
</section>
</body>
</html>