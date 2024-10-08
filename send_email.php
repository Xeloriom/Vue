<?php
$messageResponse = ''; // Variable pour stocker la réponse

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = 'houirib@gmail.com'; // Remplacez par votre adresse e-mail
    $subject = 'New Contact Form Submission';
    $body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        $messageResponse = 'Message sent successfully!';
    } else {
        $messageResponse = 'Message could not be sent.';
    }
} else {
    $messageResponse = 'Invalid request.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/parallax-js@3.1.0/dist/parallax.min.js"></script>
</head>
<body>

    <section class="wrapper">

        <div class="container">

            <div id="scene" class="scene" data-hover-only="false">

                <div class="circle" data-depth="1.2"></div>

                <div class="one" data-depth="0.9">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <div class="two" data-depth="0.60">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <div class="three" data-depth="0.40">
                    <div class="content">
                        <span class="piece"></span>
                        <span class="piece"></span>
                        <span class="piece"></span>
                    </div>
                </div>

                <p class="p404" data-depth="0.50"><color="#ed1b24">Merci </p>
                <p class="p404" data-depth="0.10">Merci</p>

            </div>

            <div class="text">
                <article>
                    <p><?php echo $messageResponse; ?></p> <!-- Afficher le message de réponse -->
                </article>
            </div>

        </div>
    </section>
</body>
<script>
    // Parallax Code
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
</script>
</html>