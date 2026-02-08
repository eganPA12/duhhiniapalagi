<?php
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'Guest';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
</head>
<body>
    <h2>Thank You, <?php echo $username; ?>!</h2>
    <p>Your information has been received.</p>
    <!-- <p><a href="form.html">Go back</a></p> -->
    <p>You can go back to the <a href="form.html">form page</a>.</p>
</body>
</html>
