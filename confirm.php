<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    } else {
        header("Location: index.html");
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact form -Confirm-</title>
    </head>
    <body>
        <h1>[Confirm]</h1>
        <p>Confirm the following</p>
        <table>
            <tr><td>Name:</td><td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>Email:</td><td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>Subject:</td><td><?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'); ?></td></tr>
            <tr><td>Message:</td><td><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        </table>
        <form method="post" action="send.php">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="subject" value="<?php echo $subject; ?>">
            <input type="hidden" name="message" value="<?php echo $message; ?>">
            <button type="button" onclick="history.back()">Back</button>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>