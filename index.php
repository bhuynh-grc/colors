<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pick a Color</title>
</head>
<body>
    <h1>Pick a Color</h1>
    <form method = "post" action = "confirm.php">
        <lable><input type = "radio" value = "red" name ="color">Red</lable><br>
        <lable><input type = "radio" value = "blue" name ="color">Blue</lable><br>
        <lable><input type = "radio" value = "yellow" name ="color">Yellow</lable><br>
        <lable><input type = "radio" value = "black" name ="color">Black</lable><br>
        <input type ="submit" value = "Submit">
    </form>
</body>
</html>