<!DOCTYPE html>
<html>

<head>
    <title>ISMART STORE</title>
    <base href="http://https://ismart-php.herokuapp.com/" />
    <!-- <base href="http://localhost/projectIsmart/" /> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />

    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
</head>

<body>
    <div id="site">
        <div id="container">
            <div id="header-wp">
                <div id="head-top" class="clearfix">
                    <div class="wp-inner">
                        <a href="" title="" id="payment-link" class="fl-left">Hình thức thanh toán</a>
                        <div id="main-menu-wp" class="fl-right">
                            <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="?" title="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="san-pham" title="">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="bai-viet" title="">Blog</a>
                                </li>

                                <li>
                                    <a href="gioi-thieu-1" title="">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="lien-he-2" title="">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div id="head-body" class="clearfix">
                    <div class="wp-inner">
                        <a href="?" title="" id="logo" class="fl-left"><img src="public/images/logo.png" /></a>
                        <div id="search-wp" class="fl-left">
                            <form method="GET" action="">
                                <input type="text" name="search" id="s" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                <input type="hidden" name="search" value="home">
                                <input type="submit" value="Tìm kiếm" id="sm-s" name="btn_search">
                            </form>
                        </div>
                        <div id="action-wp" class="fl-right">
                            <a href="tel:078.804.8699" title="" id="advisory-wp" class="fl-left">
                                <span class="title">Tư vấn</span>
                                <span class="phone">078.804.8699</span>
                            </a>
                            <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <a href="gio-hang" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span id="num"><?php if (!empty($_SESSION['cart']['info'])) echo $_SESSION['cart']['info']['num_order'] ?></span>
                            </a>
                            <div id="cart-wp" class="fl-right">
                                <div id="btn-cart">

                                    <a href="gio-hang" class=""> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    <span id="num">
                                        <?php
                                        if (!empty($_SESSION['cart']['info']))
                                            echo $_SESSION['cart']['info']['num_order'];
                                        else
                                            echo 0;
                                        ?>
                                    </span>
                                </div>
                                <?php
                                if (!empty($_SESSION['cart']['buy'])) {
                                ?>
                                    <div id="dropdown">
                                        <p class="desc">Có <span><?php if (!empty($_SESSION['cart']['info']))  echo $_SESSION['cart']['info']['num_order']; ?> sản phẩm</span> trong giỏ hàng</p>
                                        <ul class="list-cart">
                                            <?php
                                            foreach ($_SESSION['cart']['buy'] as $item) {
                                            ?>
                                                <li class="clearfix">
                                                    <a href="san-pham/<?php echo $item['product_link'] ?>-<?php echo $item['product_id'] ?>.html" title="" class="thumb fl-left">
                                                        <img src="admin/<?php echo $item['product_thumb']; ?>" alt="">
                                                    </a>
                                                    <div class="info fl-right">
                                                        <a href="san-pham/<?php echo $item['product_link'] ?>-<?php echo $item['product_id'] ?>.html" title="" class="product-name"><?php echo $item['product_name']; ?></a>
                                                        <p class="price"><?php echo currency_format($item['original_price']) ?></p>
                                                        <p class="qty">Số lượng: <span><?php if (!empty($_SESSION['cart']['buy'])) echo $_SESSION['cart']['buy'][$item['product_id']]['qty']; ?></span></p>
                                                    </div>
                                                </li>
                                            <?php
                                            }

                                            ?>
                                        </ul>
                                        <div class="total-price clearfix">
                                            <p class="title fl-left">Tổng:</p>
                                            <p class="price fl-right"><?php if (!empty($_SESSION['cart']['info'])) echo currency_format($_SESSION['cart']['info']['total']); ?></p>
                                        </div>
                                        <div class="action-cart clearfix">
                                            <a href="gio-hang" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <a href="thanh-toan" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>