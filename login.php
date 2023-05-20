<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</head>
<body>

<?php  include 'nav.php'; ?>
   
 
    <form class=" d-flex justify-content-center p-5" name="loginform" method="post" action="/action_page.php">
        
            <div class="border rounded border-dark p-4">
                <h3>Sign In Form</h3>
                <label>Email</label><br>
                <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Your Email">
                <label>Password</label><br>
                <input class="form-control mb-2" type="password" name="password" id="password" placeholder="Password">
                <input class="bg-dark text-white form-control mb-2" type="submit" name="btnlogin" id="btnlogin" value="Sign In">
                <p><a href="" id="forgotpass">Forgot Password?</a></p>
                <hr>
                <p>Do not have an account<a href="register.php" id="signup"> Register</a></p>
                
            </div>
        </div>
    </div>
    </form>
    </div>
</div>

<?php  include 'footer.php'; ?>

</body>
</html>





