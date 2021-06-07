<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

	<form action="includes/post.php" method="POST">
		<label for="">Img</label>
		<input type="text" name=img placeholder="Название картинки">
		<label for="">Title</label>
		<input type="text" name=title placeholder="Введите загаловок">
		<label for="">category</label>
		<select name="category" id="">
            <option value="Soft furniture">Soft furniture</option>
            <option value="Kids toys">Kids toys</option>
            <option value="Office furniture">Office furniture</option>
        </select>
		<label for="">Subtitle</label>
		<input type="text" name=subtitle placeholder="Введите подзагаловок">
		<button name=submit>Add</button>
	</form>
</body>
</html>