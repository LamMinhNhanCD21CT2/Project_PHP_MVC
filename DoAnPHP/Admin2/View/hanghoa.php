<div class="col-md-4 col-md-offset-4 mt-3">
  <h3><b>DANH SÁCH HÀNG HÓA</b></h3>
</div>
<div class="row col-12 mb-3">
  <a href="index.php?action=hanghoa&act=insert">
    <button class="btn-primary"><h3>Thêm sản phẩm</h3></button>
  </a>
</div>
<div class="row">
  <table class="table" border="3px">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Hình</th>
        <th>Nhóm</th>
        <th>Mã loại</th>
        <th>Đặc biệt</th>
        <th>Số lượt xem</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Số lượng tồn</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
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
          <td><?php echo $set['giamgia']; ?></td>
          <td><img width="50px" height="50px" src="../Content/imagetourdien/<?php echo $set['hinh']; ?>" /></td>
          <td><?php echo $set['Nhom']; ?></td>
          <td><?php echo $set['maloai']; ?></td>
          <td><?php echo $set['dacbiet']; ?></td>
          <td><?php echo $set['soluotxem']; ?></td>
          <td><?php echo $set['ngaylap']; ?></td>
          <td><?php echo $set['mota']; ?></td>
          <td><?php echo $set['soluongton']; ?></td>
          <td><a href="index.php?action=hanghoa&act=edit&id=<?php echo $set['mahh']; ?>">Cập nhật</a></td>
          <td><a href="index.php?action=hanghoa&act=delete_action&id=<?php echo $set['mahh']?>">Xóa</a></td>
        </tr>
      <?php
      endwhile
      ?>
    </tbody>
  </table>
</div>