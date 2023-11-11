<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cửa hàng Pizza của Phi Nam</title>
    <link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="Shortcut Icon" href="images/logo.jpg" type="image/x-icon" />
    <!-- Wow Animate library -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/animate.min.css">
    <script src="bootstrap/js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
      <script>
         function loadMap() {
            var mapOptions = {
               center:new google.maps.LatLng(20.593684, 78.96288), zoom:12,
               mapTypeId:google.maps.MapTypeId.ROADMAP
            };
                
            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
         }
      </script>
    <style>
    .test {
        font-size: 50px;
        color: yellow;
    }
    </style>
    <script>
    function displayHide() {
        $('.img-circle').hide(400);
    }

    function displayShow() {
        $('.img-circle').show(400);
    }
    $(document).ready(function() {


    });
    </script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php require_once "config.php" ?>
    <?php
    if (isset($_POST["add"])) {
        $stt = $_POST["stt"];
        $hoten = $_POST["hoten"];
        $people = $_POST["people"];
        $date = $_POST["date"];
        $messge = $_POST["message"];

        // Kiểm tra xem mã sinh viên đã tồn tại hay chưa
        $checkQuery = "SELECT * FROM pizza2 WHERE stt = '$stt'";
        $result = $conn->query($checkQuery);
        if ($result->num_rows > 0) {
            echo "<script>alert('Mã sinh viên đã tồn tại!');</script>";
        } else {
            // Thực hiện truy vấn INSERT
            $insertQuery = "INSERT INTO pizza2 (stt, Hoten, people, date, message) VALUES ('$stt', N'$hoten', '$people', '$date', '$message')";
            if ($conn->query($insertQuery)) {
                echo "<script>alert('Thêm thành công!');</script>";
            } else {
                echo "<script>alert('Thêm thất bại!');</script>";
            }
        }
    }
    $conn->close();
    ?>

    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#myPage">&nbsp; Pizza &nbsp;</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#myPage">Trang Chủ</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#about">Về chúng tôi</a></li>
                            <li><a href="#contact">Liên Hệ</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </header>
        <!-- /header -->
        <section class="wow bounceIn" data-wow-offset="10">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/banner.jpg" width="100%">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Có gì mới không bạn!</h1>
                                <p>Cuộc đời còn dài và tươi đẹp,  tại sao lại buồn?</p>
                                <a href="#menu" class="btn btn-lg btn-primary">Hãy nói cho Phi Nam biết</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="images/pizza.jpg" width="100%">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>thin <br>Bánh PIZZA mỏng</h1>
                                <p>Bình tĩnh và tận hưởng cuộc sống!</p>
                                <a href="#menu" class="btn btn-lg btn-primary">cho tôi xem menu</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="images/list3.jpg" width="100%">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Tận hưởng cuộc sống của bạn!.</h1>
                                <p>Cuộc đời còn rất dài và rất đẹp! Thưởng thức nó!</p>
                                <a href="#menu" class="btn btn-lg btn-primary">Tôi muốn mua nó</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"></a>
            </div>
        </section>
        <section>
            <marquee behavior="alternate" direction="left" loop="" bgcolor="yellow"><big><big><big><big><b>Khuyến mãi đặc biệt nhân dịp Lễ Giáng Sinh!!!</b></big></big>
                </big>
                </big>
            </marquee>
        </section>
        <section>
            <a href="mailto:email@yahoo.com">Email TNT</a>
        </section>
        <section id="menu">
            <div class="page-header text-center wow rubberBand">
                <h1>MENU <small> (sự lựa chọn tốt nhất của bạn)</small></h1>
            </div>
            <div id="menuList" class="container">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#pizza" role="tab" data-toggle="tab">pizza</a></li>
                    <li><a href="#salads" role="tab" data-toggle="tab">salads</a></li>
                    <li><a href="#starter" role="tab" data-toggle="tab">starter</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="pizza">
                        <div class="row wow bounceInUp" data-wow-delay="0.1s">
                            <div class="col-md-8">
                                <h2>Margherita <span class="label label-default test">Giá rẻ</span></h2>
                                <h3>Cà chua tươi, mozzarella tươi, húng quế tươi</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">40.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.3s">
                            <div class="col-md-8">
                                <h2>Formaggio</h2>
                                <h3>Bốn loại phô mai (mozzarella, parmesan, pecorino, jarlsberg)</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">45.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.5s">
                            <div class="col-md-8">
                                <h2>Thịt gà</h2>
                                <h3>Cà chua tươi, mozzarella, thịt gà, hành tây</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">60.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.5s">
                            <div class="col-md-8">
                                <h2>Quả dứa</h2>
                                <h3>Cà chua tươi, phô mai mozzarella, dứa tươi, thịt xông khói, húng quế tươi</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">40.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.6s">
                            <div class="col-md-8">
                                <h2>Thịt <span class="label label-danger">Hot!</span></h2>
                                <h3>Cà chua tươi, mozzarella, pepporoni nóng, xúc xích nóng, bò, gà</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">100.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.7s">
                            <div class="col-md-8">
                                <h2>Parma <span class="label label-default">new</span></h2>
                                <h3>Cà chua tươi, phô mai mozzarella, parma, thịt xông khói, rau arugula tươi</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">120.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="tab-pane fade" id="salads">
                        <div class="row wow bounceInUp" data-wow-delay="0.1s">
                            <div class="col-md-8">
                                <h2>Lasagna <span class="label label-default">Phổ biến</span></h2>
                                <h3>Sốt đặc biệt, mozzarella, phô mai parmesan, bò xay</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">35.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.3s">
                            <div class="col-md-8">
                                <h2>Bánh bao ý</h2>
                                <h3>Bánh bao ý nhân phô mai</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">20.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.5s">
                            <div class="col-md-8">
                                <h2>Mì ý cổ điển</h2>
                                <h3>Cà chua tươi, hành tây, thịt bò xay</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">25.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.7s">
                            <div class="col-md-8">
                                <h2>Mì ống Hải Sản</h2>
                                <h3>Cá hồi, tôm, tôm hùm, tỏi</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">45.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="tab-pane fade" id="starter">
                        <div class="row wow bounceInUp" data-wow-delay="0.1s">
                            <div class="col-md-8">
                                <h2>Súp hôm nay <span class="label label-default">Theo mùa</span></h2>
                                <h3>hỏi người phục vụ</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">15.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.3s">
                            <div class="col-md-8">
                                <h2>Bruschetta</h2>
                                <h3>Bánh mì với sốt pesto, cà chua, hành, tỏi</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">20.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.5s">
                            <div class="col-md-8">
                                <h2>Bánh mỳ bơ tỏi</h2>
                                <h3>Ciabatta nướng, bơ tỏi, hành tây</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">15.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row wow bounceInUp" data-wow-delay="0.7s">
                            <div class="col-md-8">
                                <h2>Tomozzarella</h2>
                                <h3>Cà chua và mozzarella</h3>
                            </div>
                            <div class="col-md-4">
                                <h2><span class="label label-success">22.000đ</span></h2>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="page-header text-center  wow rubberBand">
                <h1>Về chúng tôi</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow bounceInUp">
                        <h2>Nhà hàng pizza do Phi Nam Thành lập tại Việt Nam và hiện tại đang nghiên cứu để có thể tạo ra nhiều loại pizza ngon, bổ , rẻ và để mọi người có thể thưởng thức nhiều loại pizza hơn. Chân thành cảm ơn mọi người đã đến ủng hộ của hàng của chúng tôi.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9  wow bounceInUp" data-wow-delay="0.5s">
                        <h2><b>Đầu bếp?</b> Phi Nam</h2>
                        <h2><b>Chúng tôi</b>tự hào về cửa hàng của chúng tôi.</h2>
                    </div>
                    <div class="col-md-3 wow bounceInUp">
                        <br>
                        <img src="images/logo.jpg" alt="instagram7" class="img-circle" width="40%" onmouseover="displayHide()" onmouseout="displayShow()">
                    </div>
                </div>
                <div class="row aboutImg">
                    <img src="images/about.jpg" alt="about" width="100%" class="img-rounded wow flipInX" data-wow-delay="0.7s">
                    <div class="khoiMo container"></div>
                </div>
                <div class="row wow bounceInUp" data-wow-delay="0.3s">
                    <h2><b>Giờ mở cửa</b></h2>
                </div>
                <div class="container">
                    <div class="row wow bounceInUp" data-wow-delay="0.8s">
                        <div class="col-md-5 col-md-offset-2">
                            <h2>Thứ 2 và thứ 3: Đóng cửa <br>

                        Thứ 4: 10.00 - 24.00 <br>

                        Thứ 5: 10:00 - 24:00</h2>
                        </div>
                        <div class="col-md-5"></div>
                        <h2>Thứ 6: 10:00 - 12:00 <br>

                        Thứ 7: 10:00 - 23:00 <br>

                        Chủ nhật: Đóng cửa</h2>
                    </div>
                </div>
            </div>
        </section>
        <section>
           <body onload = "loadMap()">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.3923892074067!2d107.58676861436099!3d16.45565723333789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a146f8a9688b%3A0x94a0b536f8c9fc44!2zMTc2IFBoYW4gQ2h1IFRyaW5oLCBQaMaw4bubYyBWxKluaCwgVGjDoG5oIHBo4buRIEh14bq_LCBUaOG7q2EgVGhpw6puIEh14bq_IDU0MDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1679845781571!5m2!1svi!2sus" width="1280" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </body>
        </section> <!-- end googlemap -->
        <section id="contact">
            <div class="page-header text-center  wow rubberBand">
                <h1>Liên Hệ</h1>
            </div>
            <div class="container">
                <div class="row">
                    <h2 class="wow bounceInUp">Tìm chúng tôi tại một số địa chỉ tại một số nơi hoặc gọi cho chúng tôi theo số 05050515-122330</h2>
                    <h2 class="wow bounceInUp" data-wow-delay="0.5s"><span class="label-info">FYI!</span> Chúng tôi cung cấp dịch vụ ăn uống trọn gói cho mọi sự kiện dù lớn hay nhỏ. Chúng tôi hiểu nhu cầu của bạn và chúng tôi sẽ phục vụ các món ăn để đáp ứng các tiêu chí lớn nhất của tất cả, cả hình thức và hương vị.</h2>
                    <h2 class="wow bounceInUp" data-wow-delay="0.8s"><b>Đặt</b>  bàn, yêu cầu món đặc biệt của ngày hôm nay hoặc chỉ cần gửi tin nhắn cho chúng tôi:</h2>
                    <br>
                </div>
                <div class="row">
                    <form action="" method="get" accept-charset="utf-8">
                        <input type="text" name="name" id="name" class="input form-control input-lg" placeholder="Tên" required="required" onchange="checkValue(this.id)">
                        <label id="err_name"></label>
                        <br>
                        <br>
                        <input type="number" name="people" id="people" class="input form-control input-lg" placeholder="Bao nhiêu người?" min="{1}" max="{20}" step="" required="required" onchange="checkValue(this.id)">
                        <label id="err_people"></label>
                        <br>
                        <br>
                        <input type="date" name="date" id="date" class="input form-control input-lg" placeholder="25" required="required" onchange="checkValue(this.id)">
                        <label id="err_date"></label>
                        <br>
                        <br>
                        <input type="text" name="message" id="message" class="input form-control input-lg" placeholder="Tin nhắn \ Yêu cầu đặc biệt" required="required" onchange="checkValue(this.id)">
                        <label id="err_message"></label>
                        <br>
                        <br>
                        <input type="button" id="login" name="Login" value="Gửi tin nhắn" class="btn btn-primary btn-lg wow rubberBand container" data-wow-delay="0.5s" onclick="checkLogin()">
                    </form>
                </div>
            </div>
        </section>
        <footer class="text-center wow rotateInDownLeft">
            <div class="container">
                <div class="row">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-md-offset-1">
                        <h4><big><big><big>Coppyright @2023 Nhà hàng Pizza của Phi Nam</big></big></big></h4>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <a href="#myPage" type="button" class="btn btn-info wow rubberBand" data-wow-delay="2.2s" data-wow-duration="2s"><big><big>Trở lại đầu trang</big></big></a>
                    </div>
                </div>
            </div>
                        <a href="https://www.facebook.com/phinam.2004/"><img src="logo.jpg" alt=" GIỮ BÌNH TĨNH VÀ TẬN HƯỞNG CUỘC SỐNG CỦA BẠN"/></a>
        </footer>
    </div>
    <!-- end container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/jquery/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Code Thanh cuon muot ma! -->
    <script src="js/javascript.js"></script>
</body>

</html>