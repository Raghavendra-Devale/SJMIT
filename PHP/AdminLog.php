<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginAdmin</title>
</head>
<body>
    <?php
        echo "Admin Login <br>";
        $user = $_POST['uname'];
        $Pass = $_POST['pwd'];
        
        if($user=="admin" && $Pass=="admin@123")
        {
            $url = 'http://localhost/SJMIT/HTML/Add_Faculty.html';
            $linkText = 'Add Faculty';
            echo "<a href='$url'>$linkText</a> <br>";

            $url2 = '#';
            $linkText2 = 'Remove Faculty';
            echo "<a href='$url2'>$linkText2</a> <br>";

            $url3 = '#';
            $linkText3 = 'Remove Student';
            echo "<a href='$url2'>$linkText3</a> <br>";
        }
        else{
            echo "<br>Invalid user name or password";
        }
        
    ?>
</body>
</html>