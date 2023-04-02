<?php
    class hoadon{
        function __construct(){}
        public function InsertOrder($makh)
        {
            $db= new connect();
            $date = new Datetime("now");
            $datecreate = $date->format("Y-m-d");
            $query="insert into hoadon1(masohd,makh,ngaydat,tongtien)values(NULL,$makh,'$datecreate',0)";
            $db->exec($query);
            $int=$db->getInstance("select masohd from hoadon1 order by masohd desc limit 1");
            return $int[0];
        }
        function inserOrderDetail($masohd,$mahh,$soluong,$mausac,$size,$thanhtien)
        {
            $db=new connect();
            $query= "insert into cthoadon1(masohd,mahh,soluongmua,mausac,size,thanhtien,tinhtrang)
            values($masohd,$mahh,$soluong,'$mausac',$size,$thanhtien,0)";
            $db->exec($query);
        }
        function updateOrderTotal($sohd,$tongtien)
        {
            $db = new connect();
            $query =" update hoadon1 set tongtien=$tongtien where masohd=$sohd";
            $db->exec($query);
        }
        function getOrder($sohdid)
        {
            $db = new connect();
            $select=" select b.masohd,a.tenkh,a.diachi,a.sodienthoai,b.ngaydat from khachhang1 a 
            INNER join hoadon1 b on a.makh=b.makh where b.masohd=$sohdid";
            $result = $db ->getInstance($select);
            return $result;
        }
        function getOrderDetail($sohdid)
        {
            $db = new connect();
            $select=" select a.tenhh,a.dongia ,b.mausac , b.size , b.soluongmua, b.thanhtien from hanghoa a
            INNER join cthoadon1 b on a.mahh=b.mahh where masohd=$sohdid"; 
            $result = $db ->getList($select);
            return $result;
        }
    }
?>