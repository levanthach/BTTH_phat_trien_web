
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Theo dõi học tập</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="result-form">
		<form action="./result.php" method="POST">
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
	</div>
</body>
</html>