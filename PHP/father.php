<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/father.css">
</head>
<body>
<header id="header">
        
        <ul>
            <li><a href="../PHP/statement.php" class="Active"> Statement </a></li>
            <li><a href="../PHP/blockunblock.php"> Block/Unblock </a></li>
            <li><a href="../PHP/Analitics.php">analytics</a></li>
        </ul>

        <img src="../ASSETS/father-icon.png" alt="father-icon-image">

        

    </header>
    <table>
        <tr>
            <th>Date</th>
            <th>Details</th>
            <th>Amount_DR/CR</th>
            <th>Balance</th>
        </tr>
<?php
include "../DATABASE/connection3.php";
  $select="SELECT * FROM `statement`";

$result=mysqli_query($conn,$select);
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
    <td><?php echo $row['Date'];?></td>
    <td><?php echo $row['Details'];?></td>
 -   <td><?php echo $row['Amount_DR_CR'];?></td>
    <td><?php echo $row['Balance'];?></td>
</tr>
<?php
  }
?>
</table>
</body>
</html>
  
