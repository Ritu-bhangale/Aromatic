<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aromatic</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/lighthaus" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
</head>

<body>
    <header>
        <div class="header1">
            <div class="logo">
                <img src="logo.png" alt="Logo" class="hvr-pop">
            </div>
            <!-- <div class="search">
                <input type="text" class="search-text">
                <i class="fas fa-search fa-1x"></i>
            </div>
            <div class="number">
                <i class="fas fa-phone fa-2x fa-flip-horizontal"></i>
                <p>+214(365)7890</p>
            </div> -->
            <div class="navbar">
                <div class="navbar-left">
                    <a href="#home" class="hvr-float-shadow">Home</a>
                    <a href="#catalog" class="women hvr-float-shadow">Catalog</a>
                    <a href="#shop" class="hvr-float-shadow">Shop</a>
                    <a href="#blog" class="catlog hvr-float-shadow">Blog</a>
                    <a href="#customer" class="hvr-float-shadow">Customer Zone</a>
                </div>
                <div class="navbar-right">
                    <a id="myBtn"><i class="fa fa-heart fa-2x header-heart hvr-grow" onclick=modalDisplay()></i></a>
                    <i class="fas fa-user-alt fa-2x hvr-grow"></i>
                    <p><b><?php echo $_SESSION['email']; ?></b><br><a href="index.php">Login In</a></p>
                    <i class="fas fa-shopping-bag fa-2x header-cart hvr-grow" onclick=modalFirstDisplay()></i>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="home" id="home">
            <div class="home-left">
                <h1 class="firsth1 hvr-shrink">Welcome to Aromatic Perfume Store</h1>
                <p>Not only do we have the experience of selling perfumes, we also have the expertise to match. Our
                    staff are trained and developed so that they are the most knowledgeable sales advisors within the
                    perfume industry.</p>
                <a href="#shop"><button class="hvr-sweep-to-right">Shop Now</button></a>
            </div>
        </div>
    </section>
    <section>
        <section>
            <div class="about" id="catalog">
                <h1 class="hvr-underline-from-left">Choose Your Style</h1>
                <div class="about-img ">
                    <div class="about-left">
                        <a href="catlog.xml">
                        <img src="for her.png"></a>
                    </div>
                    <div class="about-right">
                        <img src="for him.png" class="him">
                        <img src="gifts.png">
                    </div>
                </div>
        </section>
        <section>
            <div class="shopdiv" id="shop">
                <h1 class="hvr-underline-from-left">BestSellers</h1>
                <div class="shop-plots">
                    <div class="plots-top">
                        <div class="plot">
                            <i class="far fa-heart"></i>
                            <!-- on hover change the class to far->fas -->
                            <img src="gucci.png" alt="gucci" class="hvr-pop">
                            <h4>Favourable sweet Jasmine</h4>
                            <h2>Gucci</h2>
                            <div class="tags">
                                <!-- <button class="butn smallest hvr-radial-out" onclick="smallTag()">100ml</button>
                                    <button class="butn middle hvr-radial-out" >150ml</button>
                                    <button class="butn largest hvr-radial-out" >200ml</button> -->
                                <p class="price"><span>1500$</span></p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <button class="buy hvr-sweep-to-right">Buy Now</button>
                        </div>
                        <div class="plot">
                            <i class="far fa-heart"></i>
                            <img src="versace.png" alt="versace" class="hvr-pop">
                            <div class="plot-written">
                            <h4>Favourable sweet Jasmine</h4>
                            <h2>Versace</h2></div>
                            <div class="tags">
                                <!-- <button class="butn smallest hvr-radial-out" onclick="smallTag()">100ml</button>
                                    <button class="butn middle hvr-radial-out" >150ml</button>
                                    <button class="butn largest hvr-radial-out" >200ml</button> -->
                                <p class="price"><span>1500$</span></p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                                <button class="buy hvr-sweep-to-right">Buy Now</button>
                            
                        </div>
                        <div class="plot">
                            <i class="far fa-heart"></i>
                            <img src="ghostsweet.png" alt="ghostsweet" class="hvr-pop">
                            <h4>Exclusively for Your parties.</h4>
                            <h2>Ghost Sweetheat</h2>
                            <div class="tags">
                                <!-- <button class="butn smallest hvr-radial-out" onclick="smallTag()">100ml</button>
                                    <button class="butn middle hvr-radial-out" >150ml</button>
                                    <button class="butn largest hvr-radial-out" >200ml</button> -->
                                <p class="price"><span>1500$</span></p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <button class="buy hvr-sweep-to-right">Buy Now</button>
                        </div>
                    </div>
                    <div class="plots-bottom">
                        <div class="plot">
                            <i class="far fa-heart"></i>
                            <img src="guess.png" alt="guess" class="hvr-pop">
                            <h4>Melodius tunner</h4>
                            <h2>Guess</h2>
                            <div class="tags">
                                <!-- <button class="butn smallest hvr-radial-out" onclick="smallTag()">100ml</button>
                            <button class="butn middle hvr-radial-out" >150ml</button>
                            <button class="butn largest hvr-radial-out" >200ml</button> -->
                                <p class="price"><span>1500$</span></p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <button class="buy hvr-sweep-to-right">Buy Now</button>
                        </div>
                        <div class="plot">
                            <i class="far fa-heart"></i>
                            <img src="lanvin.png" alt="lanvin" class="hvr-pop">
                            <h4>Exclusively for Your parties.</h4>
                            <h2>Lanvin</h2>
                            <div class="tags">
                                <!-- <button class="butn smallest hvr-radial-out" onclick="smallTag()">100ml</button>
                                <button class="butn middle hvr-radial-out" >150ml</button>
                                <button class="butn largest hvr-radial-out" >200ml</button> -->
                                <p class="price"><span>1500$</span></p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <button class="buy hvr-sweep-to-right">Buy Now</button>
                        </div>
                        <div class="plot">
                            <i class="far fa-heart"></i>
                            <!-- on hover change the class to far->fas -->
                            <img src="rimmel.png" alt="rimmel" class="hvr-pop">
                            <h4>Sweet jasmine</h4>
                            <h2>Rimmel</h2>
                            <div class="tags">
                                <!-- <button class="butn smallest hvr-radial-out" onclick="smallTag()">100ml</button>
                                    <button class="butn middle hvr-radial-out" >150ml</button>
                                    <button class="butn largest hvr-radial-out" >200ml</button> -->
                                <p class="price"><span>1500$</span></p>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <button class="buy hvr-sweep-to-right">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section>
                <div class="checkout">
                <div class="cart-items">
                    <div class="cart-row">
                        <div class="cart-item cart-column">
                            <img class="cart-item-image" src="gucci.png" width="100" height="100">
                            <span class="cart-item-title">Gucci</span>
                        </div>
                        <span class="cart-price cart-column">$240</span>
                        <div class="cart-quantity cart-column">
                            <input class="cart-quantity-input" type="number" value="1">
                            <button class="btn btn-danger" type="button">Remove</button>
                        </div>
                    </div>
                </div>
                <div class="cart-items">
                    <div class="cart-row">
                        <div class="cart-item cart-column">
                            <img class="cart-item-image" src="gucci.png" width="100" height="100">
                            <span class="cart-item-title">Gucci</span>
                        </div>
                        <span class="cart-price cart-column">$240</span>
                        <div class="cart-quantity cart-column">
                            <input class="cart-quantity-input" type="number" value="1">
                            <button class="btn btn-danger" type="button">Remove</button>
                        </div>
                    </div>
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">$480</span>
                </div>
                <button class="btn btn-primary-btn-purchase" type="button">Purchase</button>
            </div>
            </section> -->
        <section>
            <div class="process" id="blog">
                <div class="process-left">
                    <h2 class="hvr-underline-from-left">Be The First To Know</h2>
                    <p>To stay upto date with all news in the world of perfume subscribe to our newsletter and get 10%
                        discount on your first order.</p>
                    <div class="subscribe-box">
                        <div class="text">
                            <input type="text" placeholder="Enter your E-Mail Address" class="subscribe-text">
                        </div>
                        <div class="submit">
                            <input type="button" value="Subscribe" class="subscribe-text">
                        </div>
                    </div>
                </div>
                <img src="brand.jpg" class="img-first">
                <img src="perfume.jpg" class="img-second">
            </div>
        </section>
        <section>
            <div class="review" id="customer">
                <h1 class="hvr-underline-from-left">Reviews</h1>
                <div class="review-paper">
                    <div class="paper paper1">
                        <div class="paper-top">
                            <div class="paper-top-left">
                                <h2><span>Louisa Dark</span></h2>
                                <h6>Washington,Dc</h6>
                            </div>
                            <div class="paper-top-right">
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                            </div>
                        </div>
                        <p><span class="span-p">It starts out with a robust blend of bergamot and black currant, so if
                                you don???t like either of these notes you might not like this either. The jasmine and
                                mimosa are a nice touch since they counteract the bergamot and black currant???s tartness
                                without downplaying it. I wish it lasted longer; I barely managed to get five hours on
                                moisturized skin. It reminds me of a slightly weaker, less sweet Lalique
                                Amethyst.</span></p>
                    </div>
                    <div class="paper paper2">
                        <div class="paper-top">
                            <div class="paper-top-left">
                                <h2><span>Anne Frank</span></h2>
                                <h6>Washington,Dc</h6>
                            </div>
                            <div class="paper-top-right">
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                            </div>
                        </div>
                        <p><span class="span-p">This fragrance when I purchased it in 1999/2000 was a pure compliment
                                getter. The girls asked me what it was, My Aunts asked me what it was. I went into a
                                shops people asked me what I was wearing. The Air Hostess asked me if I would write down
                                the name of what I was wearing. Hell even men were asking me what I was waering. I have
                                never had so many compliments form a fragrance apart from a few others.</span></p>
                    </div>
                    <div class="paper paper3">
                        <div class="paper-top">
                            <div class="paper-top-left">
                                <h2><span>Aqua Celestia</span></h2>
                                <h6>Washington,Dc</h6>
                            </div>
                            <div class="paper-top-right">
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                            </div>
                        </div>
                        <p><span class="span-p">It si spicy, nutmeg, cardamon, sweet undertones. I remember in the
                                Millenium having a women come up and lick my head and said you smell so good I could eat
                                you! Alas her BF did not like this and my GF did not either that she hidd the bottle and
                                prohibitted me from wearing this. This is like the miracle juice. </span></p>
                    </div>
                    <div class="paper paper4">
                        <div class="paper-top">
                            <div class="paper-top-left">
                                <h2><span>Marie Obama</span></h2>
                                <h6>Washington,Dc</h6>
                            </div>
                            <div class="paper-top-right">
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                                <span class="fa fa-star checked fa-sm"></span>
                            </div>
                        </div>
                        <p><span class="span-p"> I own over 3000 bottles of fragrances, and this, Catalyst by Halston,
                                Hugo Boss Motion and A-Men have shone out it would be my desert Island fragrance. It
                                envokes special moments when we were young! Alas nowaday I smell of Tiger Balm and Pure
                                Malt, not the Mugler version and Carlsberg Special Brew</span></p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section>
            <div class="services">
                <div class="premium card">
                    <i class="fas fa-suitcase fa-2x"></i>
                    <h3>Premium Customer Care</h3>
                    <p>A team of pharmacists and experts in beauty and customer care informs,clarifies and advises you
                        via website,email.</p>
                </div>
                <div class="starreview card">
                    <i class="far fa-star fa-2x"></i>
                    <h3>4.8/5 Stars Customer Reviews</h3>
                    <p>Find out what more than 5000 real customers have to say about care to beauty in here.</p>
                </div>
                <div class="genuine card">
                    <i class="fas fa-shopping-bag fa-2x"></i>
                    <h3>100% Genuine Products In Stock</h3>
                    <p>We only sell original products purchased directly from the manufacturer,stocked on our shelves
                        and ready to be shipped.</p>
                </div>
            </div>
            <div class="column">
                <h3 class="clavin-h3">Calvin Klein</h3>
                <h3 class="guess-h3">GUESS</h3>
                <h3 class="naurica-h3">NAURICA</h3>
                <h3 class="lanvin-h3">Lanvin</h3>
                <h3 class="rimmel-h3">Rimmel</h3>
            </div>
        </section>
        <div class="pop">
            <div class="top-pop">
                <i class="fas fa-times" onclick="crossDisplay()"></i>
                <h2>Your Favourites</h2>
            </div>
            <div class="select"></div>
        </div>
        <div class="popTwo">
            <div class="top-popTwo">
                <i class="fas fa-times fa-2x" onclick="crossFirstDisplay()"></i>
                <h2>Items in your cart</h2>
            </div>
            <div class="bottom-pop-two">
            <div class="bottom-popleft">
            <div class="cart"></div></div>
            <div class="bottom-popright">
                <h2>Total Summary of your order:</h2>
                <hr color="#d16e99">
                <h5>Total Items:<span class="items-display">0</span></h5>
                <h5>Total price:<span class="price-display">0$</span></h5>
                <a href="shop.xhtml"><button class="hvr-sweep-to-right">Proceed to Pay</button></a>
            </div>
        </div>
        </div>
        <footer>
            <div class="columns">
                <div class="column1">
                    <img src="logo.png" alt="logo">
                </div>
                <div class="column2 row">
                    <h4>Brands</h4>
                    <p>Gucci</p>
                    <p>Guess</p>
                    <p>Ghost</p>
                    <p>Calvin Klein</p>
                    <p>Vera Wang</p>
                </div>
                <div class="column3 row">
                    <h4>Customer Zone</h4>
                    <p>How to buy online</p>
                    <p>My account</p>
                    <p>Payment & Delivery</p>
                    <p>Privacy Policy</p>
                    <p>Contact Us</p>
                </div>
                <div class="column3 row">
                    <h4>Customer Zone</h4>
                    <p>How to buy online</p>
                    <p>My account</p>
                    <p>Payment & Delivery</p>
                    <p>Privacy Policy</p>
                    <p>Contact Us</p>
                </div>
                <div class="column4 row">
                    <h2>Social Media</h2>
                    <div class="social">
                        <i class="fab fa-instagram fa-2x"></i>
                        <i class="fab fa-facebook-f fa-2x"></i>
                        <i class="fab fa-twitter fa-2x"></i>
                        <i class="fab fa-youtube fa-2x"></i>
                    </div>
                    <div class="column5">
                        <h2>Payment Methods</h2>
                        <div class="Payment Methods">
                            <i class="fab fa-paypal fa-2x"></i>
                            <i class="fab fa-amazon-pay fa-2x"></i>
                            <i class="fab fa-credit-card fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="index.js"></script>
</body>
</html>