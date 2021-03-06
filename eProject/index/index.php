
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../img/logo/logoBBtop.png">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bagbag</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="../img/logo/logoBB.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./product.php" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="./gallery/gallery.php" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="./feedback/feedback.php" class="nav-link">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contact_us/contact.php" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>		
            <li data-target="#slides" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/header/1.png">
                <div class="carousel-caption">
                    <h1 class="display-2">Bagbag Shop</h1>
                    <h3>New bag New style</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/header/2.jfif">
                <div class="carousel-caption">
                    <h1 class="display-2">Bagbag Shop</h1>
                    <h3>New bag New style</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/header/3.jfif">
                <div class="carousel-caption">
                    <h1 class="display-2">Bagbag Shop</h1>
                    <h3>New bag New style</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/header/4.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Bagbag Shop</h1>
                    <h3>New bag New style</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-6">
                <i class="fas fa-truck"></i>
                <h3>Free Delivery</h3>
                <p>Free Shipping on all order</p>
            </div>
            <div class="col-6">
                <i class="fa fa-refresh" aria-hidden="true"></i>
                <h3>Return Policy</h3>
                <p>Free Shipping on all order</p>
            </div>
            <div class="col-6">
                <i class="fas fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>Free Shipping on all order</p>
            </div>
            <div class="col-6">
                <i class="fas fa-coins"></i>
                <h3>Secure Payment</h3>
                <p>Free Shipping on all order</p>
            </div>
        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <hr>
            <div class="col-12">
                <h1 class="display-4">New Bagbag</h1>
            </div>
            <hr>
        </div>
    </div>
    <div class="container-fluid padding">
        <div class="row padding">
            <?php
                $connect = mysqli_connect('localhost','root','','bag');
                $query ='SELECT * FROM bagbag ORDER by bagID DESC LIMIT 12';
                $result = mysqli_query($connect, $query);

                if($result):
                    if(mysqli_num_rows($result)>0):
                        while($bagbag = mysqli_fetch_assoc($result)):
                        //    print_r($bagbag);
            ?> 
            <div class="col-sm-6 col-md-4 col-lg-3">
                <form method="post" action="order/order.php?action=add&id=<?php echo $bagbag['bagID']; ?>">
                    <div style='border: 1px solid rgb(255,183,11); background-color: #f1f1f1; border-radius: 5px; padding: 16px 16px 8px 16px; margin-bottom: 20px;'>
                        <img src="<?php echo $bagbag['img']; ?>" class="img-responsive" style="width:240px;height:240px;"/>
                        <h4 class="text-info"><?php echo $bagbag['name'];?></h4>
                        <h5> <?php echo substr($bagbag['specification'], 0, 150);?> ... </h5>
                        <h4>$ <?php echo $bagbag['price']; ?></h4>
                        <input type="hidden" name="name" value="<?php echo $bagbag['name'];?>" />
                        <input type="hidden" name="price" value="<?php echo $bagbag['price'];?>" />
                        <input type="submit" name="Buy_now" class="btn btn-info"  value="Buy now" style="margin:3px;"/>
                    </div>
                </form>
                
            </div>
            <?php
                        endwhile;
                    endif;
                endif;   
            ?>
        </div>
    </div>
    
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <hr>
            <div class="col-12">
                <h1 class="display-4">Top bag trends in 2019</h1>
            </div>
            <hr>
        </div>
    </div>
    <div class="contrainer-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>Crochet</h2>
                <p>Spotted on the spring 2019 runways: duffle bags, but make it fashion.
                    Labels like Coach and Calvin Klein debuted petite versions of your favorite weekenders and effectively made the silhouette cool for everyday wear.
                    If you want to be an early adopter, retailer Moda Operandi has already released styles, even though we're still mid-winter.
                    Embrace the cylindrical shape in addition to the boxier styles of recent years.</p>
                <p>Spotted on the spring 2019 runways: duffle bags, but make it fashion.
                    Labels like Coach and Calvin Klein debuted petite versions of your favorite weekenders and effectively made the silhouette cool for everyday wear.
                    If you want to be an early adopter, retailer Moda Operandi has already released styles, even though we're still mid-winter.
                    Embrace the cylindrical shape in addition to the boxier styles of recent years.</p>
                <p>Spotted on the spring 2019 runways: duffle bags, but make it fashion.
                    Labels like Coach and Calvin Klein debuted petite versions of your favorite weekenders and effectively made the silhouette cool for everyday wear.
                    If you want to be an early adopter, retailer Moda Operandi has already released styles, even though we're still mid-winter.
                    Embrace the cylindrical shape in addition to the boxier styles of recent years.</p>
            </div>
            <div class="col-lg-6">
                <img src="../img/news/toptrend1.jpg" class="img-fluid" style="width:98%;" alt="">
            </div>
        </div>
    </div>
    <div class="contrainer-fluid padding">
        <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <img src="../img/news/toptrend2.jpg" class="img-fluid" style="width:98%;" alt="">
        </div>
        
            <div class="col-lg-6">
                <h2>Miniature</h2>
                <p>You promised yourself you'd learn to crochet, but never actually got around to it—dammit. Pas de problème, the designers came to your rescue.
                    Crochet totes and backpacks were spotted on the runways of Monse, Isabel Marant, and Chanel, painting an overall boho and summery resort vibe for the season.
                    Whether you're searching for a casual tote to bring to the beach or a semi-fancy one for dinner, there are more than enough crochet options to meet every desire.</p>
                <p>You promised yourself you'd learn to crochet, but never actually got around to it—dammit. Pas de problème, the designers came to your rescue.
                    Crochet totes and backpacks were spotted on the runways of Monse, Isabel Marant, and Chanel, painting an overall boho and summery resort vibe for the season.
                    Whether you're searching for a casual tote to bring to the beach or a semi-fancy one for dinner, there are more than enough crochet options to meet every desire.</p>
                <p>You promised yourself you'd learn to crochet, but never actually got around to it—dammit. Pas de problème, the designers came to your rescue.
                    Crochet totes and backpacks were spotted on the runways of Monse, Isabel Marant, and Chanel, painting an overall boho and summery resort vibe for the season.
                    Whether you're searching for a casual tote to bring to the beach or a semi-fancy one for dinner, there are more than enough crochet options to meet every desire.</p>
            </div>
        </div>
    </div>
    <div class="contrainer-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>Lanyard Bags</h2>
                <p>Designers like Brandon Maxwell and Burberry flirted with the idea of taking your favorite accessories and shrinking them into pieces no bigger than your palms.
                    The runways were dotted with miniature crossbody bags that probably hold nothing more than a few coins.
                    While highly impractical, these tiny purses are dainty and cute for special occasions.
                    Pro tip: Put a tile tracker on these suckers if you're always misplacing your belongings. </p>
                <p>Designers like Brandon Maxwell and Burberry flirted with the idea of taking your favorite accessories and shrinking them into pieces no bigger than your palms.
                    The runways were dotted with miniature crossbody bags that probably hold nothing more than a few coins.
                    While highly impractical, these tiny purses are dainty and cute for special occasions.
                    Pro tip: Put a tile tracker on these suckers if you're always misplacing your belongings. </p>
                <p>Designers like Brandon Maxwell and Burberry flirted with the idea of taking your favorite accessories and shrinking them into pieces no bigger than your palms.
                    The runways were dotted with miniature crossbody bags that probably hold nothing more than a few coins.
                    While highly impractical, these tiny purses are dainty and cute for special occasions.
                    Pro tip: Put a tile tracker on these suckers if you're always misplacing your belongings. </p>
            </div>
            <div class="col-lg-6">
                <img src="../img/news/toptrend3.jpg" class="img-fluid" style="width:98%;" alt="">
            </div>
        </div>
    </div>
    <div class="contrainer-fluid padding">
        <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <img src="../img/news/toptrend4.jpg" class="img-fluid" style="width:98%;" alt="">
        </div>
        
            <div class="col-lg-6">
                <h2>Single Loop Handle</h2>
                <p>Touristy accessories are in style (iust go with it). À la the fanny packs of last year, brands such as Gabriela Hearst and Erdem debuted lanyard bags around their models' neck during the spring/summer 2019 shows.
                    Burberry even layered two on one chain. Though I'm surprised this style made a come back, I can't deny their usefulness.
                    Lanyards allow you to carry the necessities without lugging a tote around—a plus if you're planning to attend any music festivals this summer.</p>
                <p>Touristy accessories are in style (iust go with it). À la the fanny packs of last year, brands such as Gabriela Hearst and Erdem debuted lanyard bags around their models' neck during the spring/summer 2019 shows.
                    Burberry even layered two on one chain. Though I'm surprised this style made a come back, I can't deny their usefulness.
                    Lanyards allow you to carry the necessities without lugging a tote around—a plus if you're planning to attend any music festivals this summer.</p>
                <p>Touristy accessories are in style (iust go with it). À la the fanny packs of last year, brands such as Gabriela Hearst and Erdem debuted lanyard bags around their models' neck during the spring/summer 2019 shows.
                    Burberry even layered two on one chain. Though I'm surprised this style made a come back, I can't deny their usefulness.
                    Lanyards allow you to carry the necessities without lugging a tote around—a plus if you're planning to attend any music festivals this summer.</p>
            </div>
        </div>
    </div>
    <div class="contrainer-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>Duffle Bag–Inspired</h2>
                <p>Emporio Armani, Marc Jacons, Dion Lee, and Adeam all released looped single-handle bags on the runways last year.
                    The style looks clean and sophisticated, especially when the material is a luxe leather.
                    The innovative design has already made its way to Net-a-Porter and fast fashion hot spots like Topshop.</p>
                <p>Emporio Armani, Marc Jacons, Dion Lee, and Adeam all released looped single-handle bags on the runways last year.
                    The style looks clean and sophisticated, especially when the material is a luxe leather.
                    The innovative design has already made its way to Net-a-Porter and fast fashion hot spots like Topshop.</p>
                <p>Emporio Armani, Marc Jacons, Dion Lee, and Adeam all released looped single-handle bags on the runways last year.
                    The style looks clean and sophisticated, especially when the material is a luxe leather.
                    The innovative design has already made its way to Net-a-Porter and fast fashion hot spots like Topshop.</p>
            </div>
            <div class="col-lg-6">
                <img src="../img/news/toptrend5.jpg" class="img-fluid" style="width:98%;" alt="">
            </div>
        </div>
    </div>
    <footer style="background-color: rgb(141,207,244); color: #1e1e1e;">
        <div class="container-fluid padding">
            <div class="row">
                <div class="col-md-3">
                    <img src="../img/logo/logo.png" alt="">
                </div>
                <?php
                    $connect = mysqli_connect('localhost','root','','bag');
                    $query ='SELECT * FROM contact limit 1';
                    $result = mysqli_query($connect, $query);

                    if($result):
                        if(mysqli_num_rows($result)>0):
                            while($contact = mysqli_fetch_assoc($result)):
                            //    print_r($bagbag);
                ?> 
                <div class="col-md-3">
                    <hr class="light">
                    <h5>Info</h5>
                    <hr class="light">
                    <p>Hotline: <?php echo $contact['phonenumber']?> </p>
                    <p>Email: <?php echo $contact['email']?></p>
                    <p>Address: <?php echo $contact['address']?></p>
                </div>
                <?php
                            endwhile;
                        endif;
                    endif;   
                ?>
                <div class="col-md-3">
                    <hr class="light">
                    <h5>Working hours</h5>
                    <hr class="light">
                    <p>Monday-Friday: 8am - 6pm</p>
                    <p>Weekend: 8am - 5pm</p>
                </div>
                <div class="col-md-3 text-center">
                    <hr class="light">
                    <h5>About Us</h5>
                    <hr class="light">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>