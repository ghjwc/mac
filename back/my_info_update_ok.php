<?php

include('common.php');

print_r($_POST);

$email = $_POST['email'];
$prepassword = $_POST['prepassword'];
$afterpassword = $_POST['afterpassword'];

if($prepassword != $_SESSION['password']) {
    echo "
    <script>
        alert('기존 비밀번호가 일치하지 않습니다.')
        history.back();
    </script>
    ";
} else {
    $sql = "update newtable set
            password = '$afterpassword'
            where email = '$email'
            ";
    $result = $conn -> query($sql);

    if($result) {
        session_destroy();
        echo "
        <script>
            alert('수정 성공')
            location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            history.back();
        </script>
        ";
    }
}


?>