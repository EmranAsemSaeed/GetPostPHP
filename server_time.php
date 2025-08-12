<?php


//TimeZone Aden
date_default_timezone_set('Asia/Aden');

$nowTime = date('Y-m-d H:i:s');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server Time</title>
</head>
<body>
    <h2>Current Server Time</h2>
    <p><?php echo $nowTime; ?></p>
</body>
</html>
