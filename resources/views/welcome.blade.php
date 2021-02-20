<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="{{ URL::asset('css/business-casual.min.css') }}" rel="stylesheet" type="text/css" >

</head>
<body>

<img src="images/logo.png" alt="logo" width="110" height="100" style="float:left; margin-top:-2.2% ;padding-left:0.5%">
<h1 class="site-heading text-center text-white d-none d-lg-block">
    <!--<span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>-->
    <span class="site-heading-lower" style="color:#e6a756">Ranjith Motors & Auto Parts</span>
</h1>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" >
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ">
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/menu">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/subStockMenu">Menu</a>
                </li>

                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="products.html">Contact</a>
                </li>

            </ul>

        </div>
    </div>
    <div class="col-md-2 float-right">
        <form action="/searchDC" method="GET">
            {{csrf_field()}}
            <div class="input-group">
                <input type="search" name="searchBar" placeholder="" class="form-control">
                <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
            </div>
        </form>
</nav>
<br>
<div class="container-lg pt-5">
    <!--1st Row-->
    <div class="card-deck">
        <div class="card" style="height:30rem;width: 15rem;">
            <img class="card-img-top" src="images/factory.png" alt="Card image" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Stocks <br/> Management</h4>
                <p class="card-text">Operations related to stock management</p>
                <a href="/subStockMenu" class="btn btn-primary">Enter</a>
            </div>
        </div>
        <div class="card" style="height:30rem;width: 15rem;">
            <img class="card-img-top" src="images/product.png" alt="Card image" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Supplier & Buyer Management</h4>
                <p class="card-text">Operations related to supplier & buyer management</p>
                <a href="/subBuyerMenu" class="btn btn-primary">Enter</a>
            </div>
        </div>
        <div class="card" style="height:30rem;width: 15rem;">
            <img class="card-img-top" src="images/buyer.png" alt="Card image" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Order Management for Individual Buyers</h4>
                <p class="card-text">Operations related to individual order management</p>
                <a href="/orderManageMenu" class="btn btn-primary">Enter</a>
            </div>
        </div>
        <div class="card" style="height:30rem;width: 15rem;">
            <img class="card-img-top" src="images/investor.png" alt="Card image" style="width:100%;">
            <div class="card-body">
                <h4 class="card-title">Order Management for Wholesale Buyers</h4>
                <p class="card-text">Operations related to wholesale order management</p>
                <a href="#" class="btn btn-primary">Enter</a>
            </div>
        </div>
    </div>
    <br>
    <!--2nd Row-->
    <div class="card-deck">
        <div class="card" style="height:30rem;width: 15rem;">
            <img class="card-img-top" src="images/delivery.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Transport Management</h4>
                <p class="card-text">Operations related to transport management</p>
                <a href="/tmMenu" class="btn btn-primary">Enter</a>
            </div>
        </div>
        <div class="card" style="height:30rem;width: 15rem;">
            <img class="card-img-top" src="images/productivity.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Resource Management</h4>
                <p class="card-text">Operations related to resource management</p>
                <a href="/subResourceMenu" class="btn btn-primary">Enter</a>
            </div>
        </div>
        <div class="card" style="height:30rem;width: 15rem;">
            <img class="card-img-top" src="images/woman.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Employee Management</h4>
                <p class="card-text">Operations related to employee management</p>
                <a href="#" class="btn btn-primary">Enter</a>
            </div>
        </div>
        <div class="card" style="height:30rem;width: 15rem;">
            <img class="card-img-top" src="images/money.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Finance Management</h4>
                <p class="card-text">Operations related to finance management</p>
                <a href="/fmMenu" class="btn btn-primary">Enter</a>
            </div>
        </div>
    </div>
    <br>

    <!--3rd Row-->
    <div class="card-deck">
        <div class="card" style="width:400px;">
            <img class="card-img-top" src="images/competence.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Profile</h4>
                <p class="card-text">Manage your profile here</p>
                <a href="#" class="btn btn-primary">Enter</a>
            </div>
        </div>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/feedback.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Customer Feedback</h4>
                <p class="card-text">Check customer feedbacks</p>
                <a href="#" class="btn btn-primary">Enter</a>
            </div>
        </div>
        <div class="card" style="width:400px">
            <img class="card-img-top" src="images/files-and-folders.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Reports</h4>
                <p class="card-text">Generate several reports as your requirement</p>
                <a href="#" class="btn btn-primary">Enter</a>
            </div>
        </div>
    </div>
</div>
<br><br>

<footer class="footer text-faded text-center py-5">
    <div style = "text-align: left; margin-top:-2.2%; padding-left:0.5%;color:#e6a756">
        <h3 class="m-0 small"> 2020 Ranjith Motors And Auto Parts</h3>
        <h3 class="m-0 small"> Colombo Road,</h3>
        <h3 class="m-0 small"> Dambokka,</h3>
        <h3 class="m-0 small"> Kurunegala,Srilanka</h3>
        <h3 class="m-0 small"> 600000</h3>
    </div>

    <div class="container" style = "margin-top:-2.5%;color:#e6a756">
        <p class="m-0 small">&copy; 2020 Ranjith Motors All Rights Reserved</p>
    </div>

    <div style = "text-align: right; margin-top:-3.5%; padding-right:1%;color:#e6a756">
        <h3 class="m-0 small"> +94 372231201</h3>
        <h3 class="m-0 small"> +94 372222902</h3><br>
        <h3 class="m-0 small"> E: info@ranjithmotors.com</h3>
    </div>

</footer>



</body>
</html>
