<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Roen Ecommerce</title>
</head>
<body>

<?php  include 'nav.php'; ?>

<div class="container">
        <h1 class="m-4">Accessories</h1>
    <div class="d-flex flex-wrap justify-content-m-center">

    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top" src="./resources/asus.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">ASUS Laptop E210MA-TB</h5>
            <p class="card-text"style="color:red; "><b>₱12,495.00</b></p>
            <a href="#" class="btn btn-dark">Add To Cart</a>
        </div>
    </div>    

    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top" src="./resources/iphone.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Apple iphone 14 PRO Max</h5>
            <p class="card-text"style="color:red; "><b>₱67,000.00</b></p>
            <a href="#" class="btn btn-dark">Add To Cart</a>
        </div>
    </div>    

    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top" src="./resources/headphones.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Bluetooth Headphones</h5>
            <p class="card-text"style="color:red; "><b>₱1,500.00</b></p>
            <a href="#" class="btn btn-dark">Add To Cart</a>
        </div>
    </div>    

    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top" src="./resources/speaker.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Fantech Speaker</h5>
            <p class="card-text"style="color:red; "><b>₱ 500.00</b></p>
            <a href="#" class="btn btn-dark">Add To Cart</a>
        </div>

    </div>    
    <div class="m-5"></div>
    

    </div>
</div>

<?php  include 'footer.php'; ?>
</body>
</html>

