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
    <input type="text" name="account" placeholder="Account">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $account = $_POST["account"];
    function checkAccount($account)
    {
        $regexp = "/^\w{6,}$/";
        if (preg_match($regexp, $account)) {
            return "Account hop le";
        } else {
            throw new Exception("Tai Khoan khong hop le");
        }
    }

    try {
        echo checkAccount($account);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
</body>
</html>