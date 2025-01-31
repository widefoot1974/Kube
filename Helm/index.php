<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Nginx!</title>
    <style>
        html { color-scheme: light dark; }
        body { width: 35em; margin: 0 auto; font-family: Tahoma, Verdana, Arial, sans-serif; }
    </style>
</head>
<body>
    <h1>Welcome to Nginx!</h1>
    <p>Hostname: <?php echo gethostname(); ?></p>
    <p>Server IP Address: <?php echo $_SERVER['SERVER_ADDR']; ?></p>
    <p>Client IP Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
</body>
</html>

