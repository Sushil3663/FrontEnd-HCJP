<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/0ee3a01dbb.js"></script>
</head>
<body>

<section id="header">
    <a href="#"><img src="E IMAGE/logo.png" class="logo" alt="logo"></a>

    <div>
        <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="bag"><a class="active" href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
            <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </div>
    <div id="mobile">
        <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="page">
    <h2>Let's talk</h2>
    <P>LEAVE A MESSAGE.We like to hear from you!</P>
</section>

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="E IMAGE/eyerphone1.jpg" alt=""></td>
                <td>Eyerphone</td>
                <td>$50.00</td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="E IMAGE/samsung1.png" alt=""></td>
                <td>Samsung</td>
                <td>$200.00</td>
                <td><input type="number" value="1"></td>
                <td>$200.00</td>
            </tr>
            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="E IMAGE/key2.png" alt=""></td>
                <td>Keyboard</td>
                <td>$50.00</td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="E IMAGE/hp2.png" alt=""></td>
                <td>Laptop</td>
                <td>$800.00</td>
                <td><input type="number" value="1"></td>
                <td>$800.00</td>
            </tr>
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupan">
        <h3>Apply Coupan</h3>
        <div>
            <input type="text" placeholder="Enter your coupan">
            <button class="normal">Apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h3>Cart total</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$1100</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$1100</strong></td>
            </tr>
        </table>
        <button>Proceed to checkout</button>
    </div>
</section>

<footer class="section-p1">
    <div class="col">
        <img class="logo" src="E IMAGE/logo.png" alt="This is logo">
        <h4>Contact</h4>
        <p><strong>Address:</strong>Kathmandu,Koteshwor-Narephat-5</p>
        <p><strong>Phone:</strong>014-547-248, 9619589661</p>
        <p><strong>Hours:</strong>9:00 - 8:00, Sun - Fri</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Condition</a>
        <a href="#">Contact Us</a>
    </div>

    
    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track my Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="img/pay/app.jpg" alt="App">
            <img src="img/pay/play.jpg" alt="play">
        </div>
        <p>Secure Payment Gateways</p>
        <img src="img/pay/pay.png" alt="">

    </div>
    <div class="copyright">
        <p>@ 2022, Wisdom,KTM - Red Store E-Gadget Website </p>
    </div>
</footer>


<script src="script.js"></script>
</body>
</html>







