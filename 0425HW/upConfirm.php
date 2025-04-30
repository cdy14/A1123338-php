<?php
$uName = $_POST["name"];
$uEmail = $_POST["email"];
$uPhoto = $_POST["photo"];

$link = mysqli_connect(
    'localhost',
    'root',
    '',
    '0425hw'
);

mysqli_set_charset($link, "utf8");

$sql = "INSERT INTO user (Name, email, photo) VALUES ('$uName', '$uEmail', '$uPhoto')";

if (mysqli_query($link, $sql)) {
    header("Location:sendMail.php?uName=" . urlencode($uName));
    echo "資料新增成功<br>";
} else {
    echo "錯誤:" . mysqli_error($link);
    echo "資料新增失敗<br>";
    echo "<a href='form.php'><button type='button'>回到註冊頁面</button></a><br>";
}

mysqli_close($link);
?>