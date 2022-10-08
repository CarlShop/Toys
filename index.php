<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page.html</title>
    <link rel="stylesheet" type="text/css"
    href="Home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div id="wrap">
        <header id="header">
            <div id="logo"><img src="./Images/Logo-toys.jpg"></div>
            <nav id="menu-top">
                <ul class="level1">
                    <li><a href="index.php">Home.php</a></li>
                    <li><a href="Product.php">Product</a></li>
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="Sign Up.php">Registration</a></li>
                    <li><a href="cart.php">Cart <i class="fas fa-cart-plus"></i></a></li>
                    
                </ul>
            </nav>
        </header>
        <div id="welcome">
            <marquee direction="left" behavior="scroll" scrollamount="5">
                Welcome to my website online - Toy shop
            </marquee>
        </div>

        <div class="marquee">
            <marquee direction="down" width="12" height="22" behavior="alternate" >
                <b> <marquee behavior="alternate">
                   N
                 </marquee>
               </marquee>
                <b> <marquee direction="down" width="12" height="22" behavior="alternate" >
                 <marquee behavior="alternate">
                   E
                 </marquee>
               </marquee>
                <b> <marquee direction="down" width="15" height="22" behavior="alternate" >
                 <marquee behavior="alternate">
                   W
                 </marquee>
               </marquee>
                <b> <marquee direction="down" width="16" height="24" behavior="alternate" >
                 <marquee behavior="alternate">
                   P
                 </marquee>
               </marquee>
                <b> <marquee direction="down" width="16" height="24" behavior="alternate" >
                 <marquee behavior="alternate">
                   R
                 </marquee>
               </marquee>
               <marquee direction="down" width="12" height="22" behavior="alternate" >
                <b>   <marquee behavior="alternate">
                   O
                 </marquee>
               </marquee>
               <marquee direction="down" width="12" height="22" behavior="alternate" >
                 <b>  <marquee behavior="alternate">
                   D
                 </marquee>
               </marquee>
               <marquee direction="down" width="12" height="22" behavior="alternate" >
                <b>  <marquee behavior="alternate">
                  U
                </marquee>
              </marquee>
              <marquee direction="down" width="12" height="22" behavior="alternate" >
                <b>  <marquee behavior="alternate">
                  C
                </marquee>
              </marquee>
              <marquee direction="down" width="12" height="22" behavior="alternate" >
                <b>  <marquee behavior="alternate">
                  T
                </marquee>
              </marquee>
    
        </div>

        <div id="content">
            <section class="section-content">
                <div class="product">
                    <div class="img"><a href="#"><img src="./Images/2.jpg"></a></div>
                    <div class="name"></div>
                    <p class="price">2.000.000vnd</p>
                    <button type="button" class="btn-cart">Add to cart</button>
                </div>   
            </section>
    
            <section class="section-content">
                <div class="product">
                    <div class="img"><a href="#"><img src="./Images/3.jpg"></a></div>
                    <div class="name"></div>
                    <p class="price">1.500.000vnd</p>
                    <button type="button" class="btn-cart">Add to cart</button>
                </div>  
            </section>
    
            <section class="section-content">
                <div class="product">
                    <div class="img"><a href="#"><img src="./Images/robot.jpg"></a></div>
                    <div class="name"></div>
                    <p class="price">2.500.000vnd</p>
                    <button type="button" class="btn-cart">Add to cart</button>
                </div>  
            </section>
    
            <section class="section-content">
                <div class="product">
                    <div class="img"><a href="#"><img src="./Images/oto.jpg"></a></div>
                    <div class="name"></div>
                    <p class="price">2.000.000vnd</p>
                    <button type="button" class="btn-cart">Add to cart</button>
                </div>  
            </section>
        </div>
    </div>
</body>
</html>