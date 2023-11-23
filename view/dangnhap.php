<?php
?>
<div class="containerfull">
        <div class="bgbanner">ĐĂNG NHẬP</div>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="boxleft mr2pt menutrai">
                <h1>DÀNH CHO BẠN</h1><br><br>
                <a href="#">Cập nhật thông tin</a>
                <a href="#">Lịch sử mua hàng</a>
                <a href="#">Thoát hệ thống</a>
                <!-- <a href="#">Cà phê</a>
                <a href="#">Trái cây</a>
                <a href="#">Trà</a>
                <a href="#">Bánh</a> -->
            </div>
            <div class="boxright">
                <h1>ĐĂNG NHẬP</h1><br>
                <div class="containerfull mr30">
                    <h2 style="color:red">
                    <?php
                        if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap'])) {
                            echo $_SESSION['tb_dangnhap'];
                            unset($_SESSION['tb_dangnhap']);
                        }
                        
                    ?>
                    </h2>
                <form action="index.php?pg=login" method="post">
  <div class="row">
    <div class="col-25">
      <label for="username">Tên đăng nhập</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" name="username" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">Mật khẩu</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" name="password" placeholder="Password..">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" name="dangnhap" value="Submit">
  </div>
  </form>  
                    <!-- <div class="box25 mr15 mb">
                        <div class="best"></div>
                        <img src="layout/images/sp1.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp2.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp3.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp4.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp5.jpg" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp6.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp7.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div>
                    <div class="box25 mr15 mb">
                        <img src="layout/images/sp8.webp" alt="">
                        <span class="price">$1000</span>
                        <button>Đặt hàng</button>
                    </div> -->
                </div>
            </div>


        </div>
    </section>