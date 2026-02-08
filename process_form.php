<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = urlencode($_POST['username']);
    header("Location: thank_you.php?username=$username");
    exit();
} else {
    header("Location: form.html");
    exit();
}
?>
