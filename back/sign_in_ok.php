<?php

include('common.php');

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select no, email, password, name, age, sex, location from newtable
        where email = '$email'";

$result = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($result);

// print_r($db_pw);

if($db_pw) {

    if($password == $db_pw['password']) {
        $_SESSION['no'] = $db_pw['no'];
        $_SESSION['email'] = $db_pw['email'];
        $_SESSION['password'] = $db_pw['password'];
        // $_SESSION['name'] = $db_pw['name'];
        // $_SESSION['age'] = $db_pw['age'];
        // $_SESSION['sex'] = $db_pw['sex'];
        // $_SESSION['location'] = $db_pw['location'];

        echo "
        <script>
            location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('비밀번호가 틀립니다.')
            history.back()
        </script>
        ";
    }
} else {
    echo "
        <script>
            history.back()
        </script>
        ";
}

?>