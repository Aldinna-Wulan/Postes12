<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="widht=device-widht, initial-scale=1">
	<title>Kalkulator</title>
	<!--link css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="Kalkulator.js"></script>
</head>
<body>

<a href="utama.php">Kembali Ke Menu Utama</a></p>
    
	<div class="container">
		<form name="form">
			<input class="hasil" name="hasil">
		</form>
		<table>
			<tr>
				<td><input type="button" class="button name-button" value="C" onclick="clean()"></td>
				<td><input type="button" class="button name-button" value="<" onclick="back()"></td>
				<td><input type="button" class="button name-button" value="/" onclick="insert('/')"></td>
				<td><input type="button" class="button name-button" value="x" onclick="back('*')"></td>
			</tr>
			<tr>
				<td><input type="button" class="button" value="7" onclick="insert(7)"></td>
				<td><input type="button" class="button" value="8" onclick="insert(8)"></td>
				<td><input type="button" class="button" value="9" onclick="insert(9)"></td>
				<td><input type="button" class="button name-button" value="-" onclick="insert('-')"></td>
			</tr>
			<tr>
				<td><input type="button" class="button" value="4" onclick="insert(4)"></td>
				<td><input type="button" class="button" value="5" onclick="insert(5)"></td>
				<td><input type="button" class="button" value="6" onclick="insert(6)"></td>
				<td><input type="button" class="button name-button" value="+" onclick="insert('+')"></td>
			</tr>
			<tr>
				<td><input type="button" class="button" value="1" onclick="insert(1)"></td>
				<td><input type="button" class="button" value="2" onclick="insert(2)"></td>
				<td><input type="button" class="button" value="3" onclick="insert(3)"></td>
				<td rowspan="4"><input style="height: 105px;" type="button" class="button name-button" value="=" onclick="equal()"></td>
			</tr>
			<tr>
				<td><input type="button" class="button" value="0" onclick="insert(0)"></td>
				<td><input type="button" class="button" value="00" onclick="insert(00)"></td>
				<td><input type="button" class="button" value="." onclick="insert('.')" ></td>
			</tr>
		</table>
</body>
</html>

