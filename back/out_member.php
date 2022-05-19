<?php 

include("common.php");

$user_no = $_SESSION['no'];

$sql = "delete from newtable where no = $user_no";

$result = $conn -> query($sql);

if($result) {
    echo "
    <script>
        alert('탈퇴 완료')
        location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('탈퇴 실패')
        history.back();
    </script>
    ";
}

?>