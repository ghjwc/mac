<?php

include('common.php');
if($_SESSION['email'] == '') {
    echo "
        <script>
            alert('비정상접근하지마라.')
            location.href='index.php';
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
<div id="navbar">
        <ul>
            <li>
                <!-- <img src="https://i.ibb.co/hdtjCjW/731985.png" width="15px"> -->
                <b>홈페이지명</b></li>
            
            <li id="today">
                <p id="date"></p>
                <p id="dayNight"></p>
                <p id="time"></p>
            </li>
        </ul>
    </div>

    <!-- body -->
    <div id="container">

        <div class="wrapedit">
            <div class="editinfo">
                <form action="my_info_update_ok.php" method="post">
                    <p>정보 수정</p>
                    <input name="email" value="<?php echo $_SESSION['email']; ?>" type="text" readonly>
                    <input name="prepassword" type="password" placeholder="기존 비밀번호">
                    <input name="afterpassword" type="password" placeholder="바꿀 비밀번호">
                    <button type="submit">수정 완료</button>
                </form>

                <button onclick="outMember()" type="submit">탈퇴하기</button>
            </div>
            
        </div>
    </div>
    
    <!-- footer -->
    <div id="dock_out">
        <div id="dock">

        </div>

    </div>
    
</body>
</html>

<script src="../view/script.js"></script>

<script>

function outMember() {

    var checkPassword = prompt('비밀번호를 입력하세요.');
    var sessionPassword = '<?php echo $_SESSION['password'] ?>';

    if(checkPassword == sessionPassword) {
        location.href = 'out_member.php';
    } else {
        alert('비밀번호를 수정할 수 없습니다.');
    }
    
    location.href = 'out_member.php';
}

</script>