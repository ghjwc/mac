<?php

include("common.php");
// include("../view/index.html");

if($_SESSION) {

} else {
    echo "
    <script>
        location.href='index.html';
    </script>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="../view/style.css">
<body>
    <!-- header -->
    <div id="navbar">
        <ul>
            <li>
                <!-- <img src="https://i.ibb.co/hdtjCjW/731985.png" width="15px"> -->
                <b>홈페이지명</b></li>
            <li>
                <?php if($_SESSION) {
                  echo $_SESSION ['email'] . "님 환영합니다.";
                } else {
                  echo "손" . "님 환영합니다.";
                }
                 ?>
                <button onclick="myInfoUpdate()">myinfo</button>
                <button onclick="logout()">logout</button>
            </li>
            <li id="today">
                <p id="date"></p>
                <p id="dayNight"></p>
                <p id="time"></p>
            </li>
        </ul>
    </div>

    <!-- body -->
    <div id="container">
        
        <div class="folderout">
            <div class="folder">
                <div class="foldertop"></div>
                <div class="folderbox">
                    <div class="foldermain"></div>
                </div>
            </div>
            <div class="foldername">폴더명</div>
        </div>

        <div class="folderout">
            <div class="folder">
                <div class="foldertop"></div>
                <div class="folderbox">
                    <div class="foldermain"></div>
                </div>
            </div>
            <div class="foldername">폴더명</div>
        </div>

        <div class="folderout">
            <div class="folder">
                <div class="foldertop"></div>
                <div class="folderbox">
                    <div class="foldermain"></div>
                </div>
            </div>
            <div class="foldername">폴더명</div>
        </div>

        <div class="folderout">
            <div class="folder">
                <div class="foldertop"></div>
                <div class="folderbox">
                    <div class="foldermain"></div>
                </div>
            </div>
            <div class="foldername">폴더명</div>
        </div>

    <!-- footer -->
    <div id="dock_out">
        <div id="dock">

        </div>

    </div>
    

    <script src="../view/script.js"></script>
</body>
</html>