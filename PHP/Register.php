<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
            //connecting to db  
            $con=mysql_connect("localhost","root","");
            mysql_select_db("sjm",$con);

            $name = $_POST['Sname'];
            $usn = $_POST['Usn'];
            $sec = $_POST['Sec'];
            $address = $_POST['Address'];
            $phone = $_POST['Phone'];
            $caste = $_POST['Caste'];
            $branch = $_POST['branch'];
            $sem = $_POST['semes'];
            $UID = $_POST['UID'];
            $PWD = $_POST['password'];

            //query to insert
            $sql="insert into students values('$name','$usn','$sec','$address','$phone','$caste','$branch','$sem','$UID','$PWD')";
		    mysql_query($sql);				

            echo 'Name: ' . $name . '<br>';
            echo 'USN: ' . $usn . '<br>';
            echo 'Section: ' . $sec . '<br>';
            echo 'Address: ' . $address . '<br>';
            echo 'Phone: ' . $phone . '<br>';
            echo 'Caste: ' . $caste . '<br>';
            echo 'Branch: ' . $branch . '<br>';
            echo 'Semester: ' . $sem . '<br>';
        
    ?>

</body>
</html>