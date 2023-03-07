<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nexus, premium HTML5 &amp; CSS3 template</title>

    <!-- Favicons Icon -->
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/revslider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mobile-menu.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" type="text/css">


    <!-- Google Fonts -->
    <link href='<?php echo base_url(); ?>assets/css_2/css?family=Lato:400,900,700' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url(); ?>assets/css_2/css-1?family=Raleway:400,500,600,700,900,800,300' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url(); ?>assets/css_2/css-2?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url(); ?>assets/css_2/css-3?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
</head>

<body class="index">
    <div id="page">

        <!-- Header -->
        <div class="header-banner">
            <div class="assetBlock">
                <div style="height: 20px; overflow: hidden;" id="slideshow">
                    <p style="display: block;">Super Market! - <span>50%</span> OFF on fresh Vegetables &gt;</p>
                    <p style="display: none;"><span>15%</span> Discount! - on Ayurvedic Foods &gt;</p>
                </div>
            </div>
        </div>

        <header class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                            <div class="phone hidden-xs">
                                <div class="phone-box"><strong>Call:</strong> <span>+(888) 123-4567 </span></div>
                            </div>
                            <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                            <div class="top-cart-contain">
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"> <i class="fa fa-shopping-bag"></i>
                                            <div class="cart-box"><span id="cart-total">2</span></div>
                                        </a></div>
                                    <div>
                                        <div style="display: none;" class="top-cart-content arrow_box">
                                            <div class="block-subtitle">Recently added item(s)</div>
                                            <ul id="cart-sidebar" class="mini-products-list">
                                                <li class="item even"> <a class="product-image" href="product_detail.html" title="Downloadable Product "><img alt="Downloadable Product " src="<?php echo base_url();?>assets/images/products-images/product1.jpg" width="80"></a>
                                                    <div class="detail-item">
                                                        <div class="product-details"> <a href="#" title="Remove This Item" onclick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                                                            <p class="product-name"> <a href="product_detail.html" title="Sample Product">Sample Product</a> </p>
                                                        </div>
                                                        <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                                                    </div>

                                                    <!--div class="edit-remove"></div-->
                                                </li>
                                                <li class="item last odd"> <a class="product-image" href="product_detail.html" title=" Lucky Brand Janis "><img alt="Sample Product" src="<?php echo base_url();?>assets/images/products-images/product2.jpg" width="80"></a>
                                                    <div class="detail-item">
                                                        <div class="product-details"> <a href="#" title="Remove This Item" onclick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                                                            <p class="product-name"> <a href="product_detail.html" title=" Lucky Brand Janis ">Sample Product</a> </p>
                                                        </div>
                                                        <div class="product-details-bottom"> <span class="price">$320.00</span>

                                                            <!--p-->
                                                            <span class="title-desc">Qty:</span> <strong>2</strong>
                                                            <!--/p-->

                                                            <!--p-->

                                                            <!--p-->
                                                        </div>
                                                    </div>

                                                    <!--div class="edit-remove"></div-->
                                                </li>
                                            </ul>
                                            <div class="top-subtotal">Subtotal: <span class="price">$480.00</span></div>
                                            <div class="actions">
                                                <button class="btn-checkout" type="button"><span>Checkout</span></button>
                                                <button class="view-cart" type="button"><span>View Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
                                    <input value="" type="hidden">
                                    <input id="enable_module" value="1" type="hidden">
                                    <input class="effect_to_cart" value="1" type="hidden">
                                    <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                                </div>
                            </div>
                            <!-- Header Top Links -->
                            <div class="toplinks">
                                <div class="links">
                                    <div class="login"><a title="Login" href="login.html"><span class="hidden-xs">Log In</span></a></div>
                                    <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs"><i class="fa fa-heart">&nbsp;</i><span class="wishlist-items">0</span></span></a></div>
                                </div>
                            </div>
                            <!-- End Header Top Links -->
                            <!-- Header Language -->
                            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="<?php echo base_url(); ?>assets/images/english.png" alt="language"> EN <span class="caret"></span> </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?php echo base_url(); ?>assets/images/english.png" alt="language"> English </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?php echo base_url(); ?>assets/images/francais.png" alt="language"> French </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?php echo base_url(); ?>assets/images/german.png" alt="language"> German </a></li>
                                </ul>
                            </div>

                            <!-- End Header Language -->
                            <!-- Header Currency -->
                            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                                </ul>
                            </div>

                            <!-- End Header Currency -->
                            <div class="collapse navbar-collapse">
                                <form class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button type="reset" class="btn btn-default"> <span class="glyphicon glyphicon-remove"> <span class="sr-only">Close</span> </span> </button>
                                            <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->