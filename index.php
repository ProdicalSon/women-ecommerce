<!DOCTYPE html>
<html lang="en">
<head>
    <!-- FONTS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap');
    </style>
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/e4c074505f.js" crossorigin="anonymous"></script>
    <!-- STYLES -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VogueVixen || Home</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <a href="index.php"><img src="images/logo.svg" alt="VogueVixen Logo"></a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for products">
            <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
        </div>
        <ul>
            <li class="category-main">
                <a href="#">Categories <i class="fa-sharp fa-solid fa-caret-down"></i></a>
                <ul class="categories">
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Bottoms</a></li>
                    <li><a href="#">Lingerie</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#"><i class="fa-sharp fa-solid fa-cart-shopping" title="Cart" id="cart"></i></a></li>
            <li><a href="login.php"><i class="fa-solid fa-user" title="Account"></i></a></li>
        </ul>
    </nav>

    <!-- HERO SECTION -->
    <div class="home-main">
        <div class="logo-hero">
            <img src="images/V.svg" alt="VogueVixen Hero Logo">
        </div>
        <p>Unleash your inner style maven and slay every look with our trendy collection! Shop now and make heads turn wherever you go!</p>
    </div>

    <!-- DRESSES SECTION -->
    <section id="dresses">
        <p class="caption-title">DRESSES</p>
        <p id="title-caption">--- Step up your dress game with our selection ---</p>
        <div class="cards">
            <div class="clothes-example">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Anisa Ribbed Mini Dress - Black</p>
                <p id="clothes-price">USD $12.99</p>
            </div>
            <div class="clothes-example" id="card2">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Kristiana Chainmail Mini Dress - Pink</p>
                <p id="clothes-price">USD $39.99</p>
            </div>
            <div class="clothes-example" id="card3">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Star Is Born Sequin Dress - Navy</p>
                <p id="clothes-price">USD $39.99</p>
            </div>
            <div class="clothes-example" id="card4">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Better Days Ahead Sweatshirt Dress - Pink</p>
                <p id="clothes-price">USD $14.99</p>
            </div>
        </div>
        <a href="#" class="clothes-example-seemore">See More</a>
    </section>

    <!-- TOPS SECTION -->
    <section id="tops">
        <p class="caption-title">TOPS</p>
        <p id="title-caption">--- From classic to trendy, our tops have got you covered. Shop now! ---</p>
        <div class="cards">
            <div class="clothes-example" id="card5">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Krystan Cami Top - Camel</p>
                <p id="clothes-price">USD $6.00</p>
            </div>
            <div class="clothes-example" id="card6">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Floral Emotions Top - Black/Combo</p>
                <p id="clothes-price">USD $29.99</p>
            </div>
            <div class="clothes-example" id="card7">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Star Is Born Sequin Dress - Navy</p>
                <p id="clothes-price">USD $39.99</p>
            </div>
            <div class="clothes-example" id="card8">
                <i class="fa-solid fa-cart-plus"></i>
                <p>Better Days Ahead Sweatshirt Dress - Pink</p>
                <p id="clothes-price">USD $14.99</p>
            </div>
        </div>
        <a href="#" class="clothes-example-seemore">See More</a>
    </section>
</body>
</html>