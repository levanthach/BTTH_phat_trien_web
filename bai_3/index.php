<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Thông tin đặt chỗ</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="result-form">
		<form action="./result.php" method="POST">
			<div class="title-form">
				<h1>THÔNG TIN ĐẶT CHỖ</h1>
			</div>
			<div class="content-form">
        <div class="half-col">
         <p class="class text-red">Số khách tham dự bửa tiệc của quý khách:</p>
         <input type="text" name="customers" class="count_customers">

         <p class="date text-red">Ngày:</p>
         <input type="text" name="date" value="<?php echo date('d-m-Y') ?>">
       </div>

       <p>Loại tiệc:</p>
       <input type="checkbox" id="opt1" name="opt[]" value="- Tiệc sáng">Tiệc sáng
       <input type="checkbox" id="opt2" name="opt[]" value="- Tại trưa">Tiệc trưa
       <input type="checkbox" id="opt2" name="opt[]" value="- Tại tối">Tiệc tối
       <br>
       <p>Địa điểm:</p>
       <input type="radio" name="site" value="Trong nhà">
       <label for="home">Trong nhà</label>
       <input type="radio" name="site" value="Ngoài trời">
       <label for="site">Ngoài trời</label>
       <div class="half-col">
        <p class="class">Tên quý khách:</p>
        <input type="text" name="customer-name">

        <p class="date">Địa chỉ liên lạc:</p>
        <input type="text" name="address">

        <br>
        <p class="age">Độ tuổi:</p>
        <select id="age" name="age">
         <option value="Dưới 19 tuổi">Dưới 19 tuổi</option>
         <option value="Từ 19 đến 34 tuổi">Từ 19 đến 34 tuổi</option>
         <option value="Từ 35 đến 45 tuổi">Từ 35 đến 45 tuổi</option>
       </select>

       <p class="gender">Giới tính:</p>
       <input type="radio" id="male" name="gender" value="Nam">
       <label for="male">Nam</label>
       <input type="radio" id="female" name="gender" value="Nữ">
       <label for="female">Nữ</label><br>

       <p class="know">Quý khách biết đến nhà hàng chúng tôi:</p>
       <select id="know" name="know[]" multiple size = 3>
         <option value="Báo chí">Báo chí</option>
         <option value="Đài phát thanh" checked>Đài phát thanh</option>
         <option value="Ti vi">Ti vi</option>
       </select>

     </div>
     <div>
      <p>Các yêu cầu khác của quý khách: </p></div>
      <textarea name="todo" rows="6"></textarea>

      <button>Đặt chổ</button>
    </div>
  </form>
</div>
</body>
</html>