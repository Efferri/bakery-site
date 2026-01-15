<?php
/*
$number = 34;
$word = "example";
echo " A number is $number and a word is $word.";
$value1 = 50;
$value2 = 100;
$total = $value1 + $value2;
echo " The total is $total.";
*/
?>
<!doctype html>
<html>
    <head>
        <title>Johnson's Bakery</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="css/bootstrap.bundle.js"></script>
        <link rel="stylesheet" href="css/fontAwesome/all.css">
        <link rel="stylesheet" href="css/site.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #005EB8">
            <div class="container-fluid" style="padding-top: 1rem; padding-bottom: 1.25rem;">
                <a class="navbar-brand" href="index.php"><span class="brand-text">Johnson's</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">></span></button>
                <div class ="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-row align-items-center me-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><span class="header-text me-3">Shop</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lessonBooking.php"><span class="header-text me-3">Lessons</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="account.php"><span class="header-text me-3">Account</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="card.php"><i class ="fa-solid fa-cart-shopping fs-3 make-white"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #FFB81C">
            <ul class="navbar-nav ms-auto mb-1 mb-lg-0 d-flex flex-row align-items-center me-3">
                <div class="container-fluid" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
                    <form class="d-flex" role="search" action="search.php" method="GET">
                        <input class="form-control me-2" type="search" name="query" placeholder="Search Products..." aria-label="Search" required>
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </ul>
    </body>
</html>


