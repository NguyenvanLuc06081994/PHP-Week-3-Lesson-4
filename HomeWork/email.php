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
    <input type="text" name="email" placeholder="email">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST["email"];
    function checkEmail($email)
    {
        $regexp = "/^[A-Za-z]+[A-Za-z0-9]*@\w+(\.\w+)$/";
        if (preg_match_all($regexp, $email)) {
            return "email dung";
        } else {
            throw new Exception("Khong phai email dung");
        }
    }

    try {
        echo checkEmail($email);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
</body>
</html>