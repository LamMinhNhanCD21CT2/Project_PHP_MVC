<div class="col-md-4 col-md-offset-4 mt-4">
  <h3><b>HÀNG TỒN KHO</b></h3>
</div>
<div class="row">
  <table class="table" border="2px">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Đơn giá</th>
        <th>Hình</th>
        <th>Nhóm</th>
        <th>Mã loại</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Số lượng tồn</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new hanghoa();
      $reuslt = $hh->getHangHoaAll();
      while ($set = $reuslt->fetch()) :
      ?>
        <tr>
          <td><?php echo $set['mahh']; ?> </td>
          <td><?php echo $set['tenhh']; ?></td>
          <td><?php echo $set['dongia']; ?> .VNĐ</td>
          <td><img width="50px" height="50px" src="Content/imagetourdien/<?php echo $set['hinh']; ?>" /></td>
          <td><?php echo $set['Nhom']; ?></td>
          <td><?php echo $set['maloai']; ?></td>
          <td><?php echo $set['ngaylap']; ?></td>
          <td><?php echo $set['mota']; ?></td>
          <td><?php echo $set['soluongton']; ?></td>
        </tr>
      <?php
      endwhile
      ?>
    </tbody>
  </table>
</div>