<html>
    <head>
        <title>Hii</title>
        <style>
             table{
                position:absolute;
                top:70px;
                left:0px;
                width:100%;
             }
             table td,table th{
                border:1px solid white;
                padding:8px;
                border-collapse:collapse;
                background-color:black;
                color:white;
             }
             table th{
                padding-top:12px;
                padding-bottom:12px;
                text-align:left;
                background-color:#094b69;
                color:white;
             }
        </style>
</head>
<body>
    <table>
        <tr>
            <th>Date</th>
            <th>Details</th>
            <th>Amount_DR/CR</th>
            <th>Balance</th>
        </tr>
  <?php
include "connection3.php";
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