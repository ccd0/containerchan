<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($_GET["t"]) ?></title>
    <script src="settings.js"></script>
    <script src="playersettings.js"></script>
</head>
<body>
    <video controls loop src="<?php echo htmlspecialchars($_GET["v"]) ?>">
        Your browser does not support HTML5 video.
    </video>
</body>
</html>