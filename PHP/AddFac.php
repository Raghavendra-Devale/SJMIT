<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FacAdd</title>
</head>
<body>
    <?php

        // Connecting Database
        $con=mysql_connect("localhost","root","");
        mysql_select_db("sjm",$con);

        // Assingnig Variables
        $Fname = $_POST['FacName'];
        $EmpId = $_POST['EID'];
        $Qual = $_POST['qual'];
        $Exp = $_POST['exp'];
        $Spec = $_POST['Spec'];
        $Uname = $_POST['uname'];
        $Pass = $_POST['pwd'];

        // Query to insert into
        $sql="insert into faculty values('$Fname','$EmpId','$Qual','$Exp','$Spec','$Uname','$Pass')";
		mysql_query($sql);				
        
        echo "Added Faculty";
    ?>
</body>
</html>