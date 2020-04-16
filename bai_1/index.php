
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Kết Quả học tập</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="result-form">
		<form action="./result.php" method="POST">
			<div class="title-form">
				<h1>KẾT QUẢ HỌC TẬP</h1>
			</div>
			<div class="content-form">
				<label for="mark_1">Điểm HKI:</label>
				<input type="text" name="mark_1"><br>

				<label for="mark_2">Điểm HKII:</label>
				<input type="text" name="mark_2"><br>

				<label for="medium-mark">Điểm trung bình:</label>
				<input type="text" name="medium-mark" disabled value=""><br>

				<label for="result">Kết quả:</label>
				<input type="text" name="result" disabled value=""><br>

				<label for="ranked">Xếp loại học lực:</label>
				<input type="text" name="ranked" disabled value=""><br>
				
				<button>Xem kết quả</button>
			</div>
		</form>
	</div>
</body>
</html>