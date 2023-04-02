<meta charset="UTF-8">
<section class="mt-5 col-md-4 col-md-offset-4 mt-3">
<div class="card mt-3">
<h3><b>THỐNG KÊ</b></h3>
    </div>
    <div class="card-body">

      <div class="">
        <div>
          <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          Ngày:
          <input type="number" name="so_ngay" value=""><hr>
          Tháng:<input type="number" name="so_thang" value=""><hr>
          Năm:<input type="number" name="so_nam" value=""> đến nay <hr>
          <button class="btn-success" type="submit" name="thong_ke"> Thống kê</button>
          </form>
        </div>
        <div id="chart_div"></div>
      </div>
    </div>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1.0', {
        'packages': ['corechart']
      });
      google.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
        // B1: tạo bảng 
        var data = new google.visualization.DataTable();
        // + lấy dự liệu từ database ra để tạo dòng
        var tenhh = new Array();
        var soluongban = new Array();
        var dataten = 0;
        var slb = 0;
        var rows = new Array();

        <?php
        $hh = new hanghoa();
        $ngay = $_POST['so_ngay'];
        $thang = $_POST['so_thang'];
        $nam = $_POST['so_nam'];

        $result = $hh->getThongKeMatHang($ngay, $thang, $nam);
        while ($set = $result->fetch()) {
          $tenhh = $set['tenhh'];
          $soluong = $set['soluong'];
          echo "tenhh.push('" . $tenhh . "');";
          echo "soluongban.push('" . $soluong . "');";
        }
        ?>

        // tạo dòng
        for (var i = 0; i < tenhh.length; i++) {
          dataten = tenhh[i];
          slb = parseInt(soluongban[i]);
          rows.push([dataten, slb]);
        }
        // tạo cột
        data.addColumn('string', 'Hàng Hóa');
        data.addColumn('number', 'Số lượng bán');
        data.addRows(rows);
        // B2: tạo option
        var options = {
          title: 'Thống kê mặt hàng đã bán',
          'width': 600,
          'height': 400,
          'backgroundColor': '#fff',
          is3D: true,
        };

        // B3: tiến hành vẽ khi có dữ liệu (database) và options
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);


      }
    </script>
</section>
   