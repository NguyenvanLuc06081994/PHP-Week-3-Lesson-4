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
    <input type="text" name="phoneNumber" placeholder="Phone Number">
    <input type="submit" value="Submit">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $phoneNumber = $_POST["phoneNumber"];
        function checkPhoneNumber($phoneNumber){
            $regexp = "/^\(\d{2}\)-\(0\d{9}\)$/";
            if (preg_match($regexp,$phoneNumber)){
                return "So Dien Thoai Dung";
            }else{
                throw new Exception("So Dien Thoai Chua Dung");
            }
        }

        try {
            echo checkPhoneNumber($phoneNumber);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
?>
</body>
</html>
