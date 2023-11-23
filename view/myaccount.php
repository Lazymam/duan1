<?php
        if(isset($_SESSION['s_user'])&&(count($_SESSION)>0)){
            extract($_SESSION['s_user']);

        }
?>
<div class="containerfull">
        <div class="bgbanner">Trang Cá Nhân</div>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="boxleft mr2pt menutrai">
                <h1>DÀNH CHO BẠN</h1><br><br>
                <a href="#">Cập nhật thông tin</a>
                <a href="#">Lịch sử mua hàng</a>
                <a href="#">Thoát hệ thống</a>
            </div>
            <div class="boxright">
                <h1>Cá Nhân</h1><br>
                <div class="containerfull mr30">
                <form action="index.php?pg=updateuser" method="post">
  <div class="row">
    <div class="col-25">
      <label for="username">Tên đăng nhập</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" value="<?=$username?>" name="username" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">Mật khẩu</label>
    </div>
    <div class="col-75">
      <input type="password" id="password" value="<?=$password?>" name="password" placeholder="Password..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" value="<?=$email?>" name="email" placeholder="Email..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="diachi">Địa chỉ</label>
    </div>
    <div class="col-75">
      <input type="text" id="diachi" value="<?=$diachi?>" name="diachi" placeholder="Địa chỉ của bạn là..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="dienthoai">Điện thoại</label>
    </div>
    <div class="col-75">
      <input type="text" id="dienthoai" value="<?=$dienthoai?>" name="dienthoai" placeholder="Số điện thoại của bạn là..">
    </div>
  </div>

  <br>
  <div class="row">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="submit" name="capnhat" value="Cập nhật">
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