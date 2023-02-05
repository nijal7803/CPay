<html>
    <head>
        <title>Hii</title>
</head>
<body>
    <?php
    $hostname="localhost";
    $username="root";
    $password="";
    $dname="payment";
    $conn=mysqli_connect($hostname,$username,$password,$dname);
    if($conn)
    {
       /*echo "connect successfully";*/
    }   
    else
    {
        echo "try again";
    }
   ?>
  </body>
  </html>
