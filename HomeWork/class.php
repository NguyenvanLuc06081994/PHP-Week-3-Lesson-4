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
<form action="" method="post">
    <input type="text" name="class" placeholder="Class Name">\
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $className = $_POST["class"];
    function checkClassName($className)
    {
        $regexp = "/^[CPL]{1}\d{4}[GHIKLM]$/";
        if (preg_match($regexp, $className)) {
            return "Ten Lop Hop Le";
        } else {
             throw new Exception("Ten Lop Khong Hop Le.");
        }
    }

    try {
        echo checkClassName($className);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
</body>
</html>
