<?php
if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array();
}
$act="giohang";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch($act){
    case 'giohang':
        if(isset($_POST["mahh"]))
        {
            $mahh=$_POST["mahh"];
            $soluong=$_POST["soluong"];
            $mausac=$_POST["mymausac"];
            $size=$_POST["size"];
            $gh=new giohang();
            $gh->add_items($mahh,$soluong,$mausac,$size);
        }
        include "./View/cart.php";
        break;
    case 'delete_item':
        if(isset($_GET['id']))
        {
            // echo '<script> alert("hello");</script>';
            $key=$_GET['id'];
            $gh= new giohang();
            $gh->delete_items($key);
            // delete_items
        }
        include "./View/cart.php";
        break;
    case 'update_item':
        
        break;
}
?>