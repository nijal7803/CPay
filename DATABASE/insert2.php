<?php
    include "connection3.php";

    if(isset($_POST['regi']))
     {
        $Date=$_POST['Date'];
        $Details=$_POST['Details'];
        $Amount_DR_CR=$_POST['Amount_DR_CR'];
        $Balance=$_POST['Balance'];
        $ins= "INSERT INTO `statement`(`Date`,`Details`,`Amount_DR_CR`,`Balance`)
        VALUES('$Date','$Details','$Amount_DR_CR','$Balance')";
        $result=mysqli_query($conn,$ins);
        if($result)
        {
            echo "data inserted";
        }
        else
        {
            echo "try again";   
        }
    }
    else
    {
        echo "errror";
    } 
    ?>
   