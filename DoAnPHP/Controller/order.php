<?php
    $hd= new hoadon();
    $sohd=$hd->InsertOrder($_SESSION['makh']);
    //có được mã số hóa đơn thì tiến hành insert vào chi tiết hóa đơn
    $_SESSION['masohd']=$sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key =>$item){
        $hd->inserOrderDetail($sohd,$item['mahh'],$item['soluong'],$item['mausac'],$item['size'],$item['total']);
        $total+=$item['total'];
    }
    //Viết phương thức update tổng tiền vào lại bảng hóa đơn
    $hd->updateOrderTotal($sohd,$total);
    include "View/order.php";
?>