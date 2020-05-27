<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['code'];
    function validate($str)
    {
        $pattern = "/^[C|A|D][0-9]{4}[G|H|I|K|L|M]$/";
        if (preg_match($pattern, $str)) {
            echo("Co lop hoc");
        } else {
            echo("Khong co  lop hoc");
        }
    }

    validate($str);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Nhap ten lop hoc:
    <input type="text" name="code"/>
    <button type="submit">Tim Kiem</button>
</form>

</body>
</html>
