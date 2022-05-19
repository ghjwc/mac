<?php

include('common.php');

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$location = $_POST['location'];

$sql = "insert into newtable set
        email = '$email',
        password = '$password',
        name = '$name',
        age = '$age',
        sex = '$sex',
        location = '$location'
        ";

$result = $conn -> query($sql);

if($result) {
    echo "
    <script>
        location.href = 'index.php'
    </script>
    ";
} else {
    echo "
    <script>
        alert('회원가입에 실패했습니다.');
        history.back();
    </script>
    ";
}

?>