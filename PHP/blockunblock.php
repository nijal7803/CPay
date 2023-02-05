<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/block.css">
    <title>Father Page</title>
</head>

<body>
    <div id="main">

        <p id="user">Patel Nijal</p>

        <a href="#" id="block" onclick="blocked()">Block</a>

    </div>
    <script>
        blocked = () => {
            if (document.getElementById('block').innerHTML === "Block") {
                document.getElementById('block').innerHTML = "Unblock";
                document.getElementById('block').style.backgroundColor='green';
            }
            else {
                document.getElementById('block').innerHTML = "Block";
                document.getElementById('block').style.backgroundColor='red';
            }



        }
    </script>
</body>