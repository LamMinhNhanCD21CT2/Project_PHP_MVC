<?php
    class giohang
    {
        function add_items($key,$quantity,$mycolor,$size)
        {
            $prod=new hanghoa();
            $pros=$prod->getHangHoaId($key);
            $hinh=$pros["hinh"];
            $tenhh=$pros["tenhh"];
            $cost=$pros["dongia"];
            $total=$quantity*$cost;
            $item=array(
                'mahh'=>$key,
                'hinh'=>$hinh,
                'ten'=>$tenhh,
                'mausac'=>$mycolor,
                'size'=>$size,
                'dongia'=>$cost,
                'soluong'=>$quantity,
                'total'=>$total
            );
            $_SESSION['cart'][]=$item;
        }
        function getTotal()
        {
            $subtotal=0;
            foreach($_SESSION['cart'] as $item)
            {
                $subtotal+=$item['total'];
            }
            return number_format($subtotal,2);
        }
        function delete_items($key) {
            unset($_SESSION['cart'][$key]);
        }

        function update_items($key, $quantity) {
            if($quantity <= 0) {
                $this->delete_items($key);
            } else {
                $_SESSION['cart'][$key]['soluong'] = $quantity;
                $total_new = $_SESSION['cart'][$key]['soluong']*$_SESSION['cart'][$key]['dongia'];
                $_SESSION['cart'][$key]['total'] = $total_new;
            }
        }

    }
?>