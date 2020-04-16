<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Thông tin đặt chỗ</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="result-form">
    <div class="title-form">
      <h1>THÔNG TIN ĐẶT CHỖ</h1>
    </div>
    <div class="content-form">
      <div><strong>Thông tin khách hàng</strong></div>
      <p class="show_text">Họ tên: <?php if(isset($_POST['customer-name']))
      { echo "<span class='capitalize'>" .$_POST['customer-name'] . "</span>";}?>  - Độ tuổi: <?php if(isset($_POST['age'])) echo $_POST['age']; ?> / Giới tính: <?php if(isset($_POST['gender'])) echo $_POST['gender'];?></p>
      <p class="show_text">Địa chỉ: <?php if(isset($_POST['address'])){ echo "<span class='capitalize'>" .$_POST['address'] . "</span>"; }?></p>
      <div><strong>Thông tin đặt chỗ</strong></div>
      <p class="show_text">Số khách tham dự bửa tiệc: <?php if(isset($_POST['customers'])) echo $_POST['customers'];?> - Ngày đặt tiệc: <?php echo date('d-m-Y') ?></p>
      <p class="show_text">Loại tiệc: <?php 
      if(isset($_POST['opt'])){
        foreach ($_POST['opt'] as $value) {
          echo $value . ' ';
        }
      }
      ?>
      / Địa điểm: <?php if(isset($_POST['site'])) echo $_POST['site'];?></p>
      <div>
        <strong><em>Các yêu cầu kèm theo:</em></strong>
      </div>
      <?php if(isset($_POST['todo']))
      {
        $requires = $_POST['todo'];
        $rt = explode("&nbsp;",$requires);
        foreach ($rt as $value) {
          echo "<pre>";
          echo $value;
          echo "</pre>";
        }
      }
      ?>

      <em style="text-align: center; display: block">Quý khách biết nhà hàng của chúng tôi thông qua: <?php 
      if(isset($_POST['know'])){
        foreach ($_POST['know'] as $value) {
          echo $value . ' , ';
        }
      }

      ?></em> 
      <p class="show_text">Chúng tôi nhận được thông tin của quý khách vào lúc: 
        <?php 
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        echo "<strong>".date("h:i:s") . ' - ' . date('d-m-Y'). "</strong>";

        ?>
      </p>

    </div>
  </div>
</body>
</html>
