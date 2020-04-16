<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Theo dõi học tập</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="result-form">
		<form action="" method="POST">
			<div class="title-form">
				<h1>THEO DÕI HỌC TẬP</h1>
			</div>
			<div class="content-form">
				<label for="full-name">Họ tên học sinh:</label>
        <input type="text" name="full-name"><br>

        <label for="teacher">Giáo viên phụ trách:</label>
        <input type="text" name="teacher"><br>

        <div class="half-col">
         <label for="class">Lớp:</label>
         <input type="text" name="class">

         <label for="date">Ngày:</label>
         <input type="text" name="date">

       </div>

       <label for="todo-list" class="todo-list">Những việc phân công chưa làm:</label><br>
       <textarea name="todo" rows="6"></textarea>

       <p>Chọn hình thức hoàn thành</p>
       <input type="checkbox" id="opt1" name="opt[]" value="Tại lớp ">

       <span>Những việc chưa hoàn thành sẽ được hoàn thành ngay tại lớp</span><br>

       <input type="checkbox" id="opt2" name="opt[]" value="- Tại nhà">
       <span>Sẽ hoàn thành những việc chưa làm tại nhà và nộp lại cho giáo viên vào ngày hôm sau</span><br>

       <button>Ghi nhận</button>
     </div>
   </form>
   <p class="result_submit">Kết quả sau khi nhấn <strong><em>Ghi nhận </em></strong></p>
   <div class="show_info">
    <h4>Thông tin phiếu theo dõi </h4>
    <p>Tên học sinh: <?php if(isset($_POST["full-name"])) echo $_POST["full-name"]?> - Lớp: <?php if(isset($_POST["class"])) echo $_POST["class"]?></p>
    <p>Ngày đăng ký: <?php if(isset($_POST["date"])) echo $_POST["date"] ?> - Giáo viên phụ trách: <?php if(isset($_POST["teacher"])) echo $_POST["teacher"]?></p>
    <p>Những công việc đã được phân công nhưng chưa hoàn thành</p>
    <p><?php if(isset($_POST["todo"])) echo $_POST["todo"]?></p>
    <p>Cam kết sẽ hoàn thành tại: 
      <?php 
      if(!empty($_POST['opt'])){
        $list_checkbox = $_POST['opt'];
        foreach($list_checkbox as $value) {
          echo $value;
        }
      }
      ?>
    </p>
  </div>
</div>
</body>
</html>