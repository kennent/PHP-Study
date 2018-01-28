<?php
    $result = setcookie("message", "", time() - 3600);
    // $_COOKIE = []; <- 쿠키가 제대로 삭제되지 않음
    // $reulst = isSet($_COOKIE);
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <title>Chapter10</title>
    <link href="style/index.css" rel="stylesheet">
</head>
<body>
<div>
<?php
    if ($result) {
        echo "쿠키를 삭제했습니다<hr>";
        echo '<a href="check_cookie.php">쿠키를 확인하는 페이지로';
    } else echo '<span class="error">쿠키 삭제에 오류가 발생했습니다</span><br>';
?>
</div>
</body>
</html>