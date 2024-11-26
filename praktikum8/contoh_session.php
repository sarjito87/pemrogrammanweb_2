<?php
session_start();
if(!$_SESSION['count']){
    $_SESSION['count'] = 1;
}else{
    $oldval = $_SESSION['count'];
    $_SESSION['count'] = $oldval + 1;
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Implementasi Session</h1>
    <p>Anda sudah mengunjungi halaman sebanyak
        <?php
            if ($_SESSION['count']){
                echo $_SESSION['count'];
            }
        ?> kali.

    </p>
</body>
</html>