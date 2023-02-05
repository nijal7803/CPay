<html>
    <head>
        <title>Hii</title>
       <style>
        .frm1{
                 border:2px solid black;
                 margin:200px 300px 300px 600px;
                 height:auto;
                 width:250px;
                 background-color:darkred;
                 color:white;
                 padding-top:20px;
                 padding-bottom:20px;
                 padding-right:20px;
                 padding-left:20px;
    
        }
        .l1{
            margin-left:30px;
            margin-right:10px;
        }
        .l2{
            margin-left:10px;
        }
        .l3{
            width:100px;
            margin-bottom:15px;
        }
        .d2{
            width:100px;
            margin-bottom:15px;
        }
        .d1{  
            margin-left:40px;
        }
        .d3{
            margin-left:30px;
        }
        .btn{
            margin-left:90px;
            margin-top:25px;
        }
        .a1{
            margin-bottom:15px;
        }
       </style>
    </head>
    <body>
    <form class="frm1" method="POST" action="insert2.php">
            <label>Date</label>
            <input class="a1" type="date" name="Date">
            <label>Details</label>
            <input class="a1" type="text" name="Details">
            <label>Amount_DR/CR</label>
            <input class="a1" type="text" name="Amount_DR_CR">
            <label class="l2">Balance</label>
            <input class="a1" type="text" name="Balance">
             <button class="btn" type="submit" name="regi">Resister</button>
            
</form>
</body>
</html>        