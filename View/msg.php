<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>

<body>
    <form action="../Controller/msgController.php" method="POST">
        <label for="to">TO:</label>
        <input type="email" name="to" id="to" placeholder="Email..">
        <br>
        <label for="subject">Subject</label>
        <input type="text" name="subject" to="subject" placeholder="Subject..">
        <br>
        <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Type message"></textarea>
        <button type="submit">Send</button>
    </form>

    <?php
    if (isset($_COOKIE["msg"])) {
        echo $_COOKIE["msg"];
    }
    ?>
</body>

</html>