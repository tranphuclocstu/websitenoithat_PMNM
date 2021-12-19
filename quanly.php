<!DOCTYPE html>
<html>
    <head>
        <title>Nội thất </title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!--theme-style-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!--//fonts-->
        <script src="js/jquery.min.js"></script>
        <!--script-->
    </head>
    <body>
        <h3>Trang Admin</h3>
       <div class="clearfix"> </div>
        <div class="sub-cate">
            <div class=" top-nav rsidebar span_1_of_left">
                <h3 class="cate">Quản lý</h3>
                <ul class="menu">
                    <li class="item1"><a href="admin.php">Quản lý sản phẩm<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
                    <ul class="cute">
                        <li class="subitem3"><a href="qlsp.php">Quản lý thông tin</a></li>
                        <li class="subitem1"><a href="qlloai.php">Quản lý loại</a></li>
                        <li class="subitem2"><a href="qlnhasanxuat.php">Quản lý nhà sản xuất</a></li>
                    </ul>
                </li>
                <li class="item2"><a href="admin.php">Quản lý khách hàng<img class="arrow-img " src="images/arrow1.png" alt=""/></a>
                <ul class="cute">
                    <li class="subitem1"><a href="qlkhachhang.php">Quản lý thông tin khách hàng</a></li>
                    
                </ul>
            </li>
             <li class="item2"><a href="admin.php">Quản lý đơn hàng<img class="arrow-img " src="images/arrow1.png" alt=""/></a>
                <ul class="cute">
                    <li class="subitem1"><a href="qldonhang.php">Quản lý thông tin đơn hàng</a></li>
                    
                </ul>
            </li>
            
        </ul>
    </div>
    <script type="text/javascript">
    $(function() {
    var menu_ul = $('.menu > li > ul'),
    menu_a  = $('.menu > li > a');
    menu_ul.hide();
    menu_a.click(function(e) {
    e.preventDefault();
    if(!$(this).hasClass('active')) {
    menu_a.removeClass('active');
    menu_ul.filter(':visible').slideUp('normal');
    $(this).addClass('active').next().stop(true,true).slideDown('normal');
    } else {
    $(this).removeClass('active');
    $(this).next().stop(true,true).slideUp('normal');
    }
    });
    
    });
    </script>
</div>
</body>
</html>