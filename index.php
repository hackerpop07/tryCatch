<?php
$array = range(1, 100);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        if ($_POST['input'] < 0 || $_POST['input'] > 100) {
            throw new Exception(" 0 less number than 100 ");
        }
        echo $array[$_POST['input']];

    } catch (Exception $exception) {
        echo "loi: ", $exception->getMessage();
    }
}

?>
<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input name="input" type="number" placeholder="number">
    <button type="submit">Tim</button>
</form>
</body>
</html>
