<?php
    $html_cart='';
    $i=1;
    foreach($_SESSION['giohang'] as $sp){
        extract($sp);
        $tt=(int)$price*(int)$soluong;
        $html_cart.='
        <tr>
        <td>'.$i.'</td>
        <td><img src="layout/images/'.$img.'" alt="" style="with:100px" "></td>
        <td>'.$name.'</td>
        <td>'.$price.'</td>
        <td>'.$soluong.'</td>
        <td>'.$tt.'</td>
        <td><a href="#">Xóa</a></td>
    </tr>
    ';
    $i++;
    }
?>
<div class="containerfull">
        <div class="bgbanner">GIỎ HÀNG</div>
    </div>

    <section class="containerfull">
        <div class="container">
            <div class="col9 viewcart">
                <h2>ĐƠN HÀNG</h2>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?=$html_cart;?>                
            </table>
            <a href="index.php?pg=viewcart&del=1">Xóa rỗng đơn hàng</a>
        </div>
        <div class="col3">
            <h2>ĐƠN HÀNG</h2>
            <div class="total">
                <h3><?=$tongdonhang?></h3>
            </div>
            <div class="coupon">
                <form action="index.php?pg=viewcart$voucher=1" method="post">
                    <input type="hidden" name="tongdonhang" value="<?=$tongdonhang?>">
                    <input type="text"name="mavoucher" placeholder="Nhập voucher">
                    <button type="submit">Áp mã voucher</button>
                </form>
            </div>
            <div class="total">
                <h3>Tổng thanh toán: <?=$thanhtoan?></h3>
            </div>
            <button>Thanh toán</button>
        </div>


        </div>
    </section>