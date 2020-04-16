
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Kết Quả học tập</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
	$hk1 = $_POST['mark_1'];
	$hk2 = $_POST['mark_2'];
	if(isset($hk1) && isset($hk2)) {
		$hk3 = ($hk1 + $hk2*2)/3;
	}
	if($hk3 >= 8){
		$ranked = "Giỏi";
	}
	elseif (6.5 < $hk3 && $hk3 < 8) {
		$ranked = "Khá";
	}
	elseif (5 < $hk3 && $hk3 < 6.5) {
		$ranked = "Trung bình";
	}
	else {
		$ranked = "Yếu";
	}
	
	?>
	<div class="result-form">
		<form action="" method="POST">
			<div class="title-form">
				<h1>KẾT QUẢ HỌC TẬP</h1>
			</div>
			<div class="content-form">
				<label for="mark_1">Điểm HKI:</label>
				<input type="text" name="mark_1"><br>

				<label for="mark_2">Điểm HKII:</label>
				<input type="text" name="mark_2"><br>

				<label for="medium-mark">Điểm trung bình:</label>
				<input type="text" name="medium-mark" disabled value="<?php if(isset($hk3)) echo $hk3; ?>"><br>

				<label for="result">Kết quả:</label>
				<input type="text" name="result" disabled value="<?php 
				if(isset($hk3) && $hk3 >= 5){
					echo "Được lên lớp";
				}
				else {
					echo "Ở lại lớp";
				}
				?>"><br>

				<label for="ranked">Xếp loại học lực:</label>
				<input type="text" name="ranked" disabled value="<?php if(isset($ranked)) echo $ranked; ?>"><br>
				
				<button>Xem kết quả</button>
			</div>
		</form>
	</div>
</body>
</html>