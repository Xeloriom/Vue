<!-- about -->
<div class="about">
   <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links logo"></a>
</div>
<!-- end about -->

    <nav>
        <div class="menu">
            <p class="website_name">CONGRESSWOMAN ANN MATIBAG</p>
            <div class="menu_links">
               
            </div>
            <div class="menu_icon">
                <span class="icon"></span>
            </div>
        </div>
    </nav>

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

                <p class="p404" data-depth="0.50"><color="#ed1b24">AMB</p>
                <p class="p404" data-depth="0.10">AMB</p>

            </div>

            <div class="text">
                <article>
                    <p>Congresswoman Ann Matibag Official website is Under Maintenance</p>
                    <a href='https://www.facebook.com/CongresswomanAnnMatibag/'><button>VISIT OUR FACEBOOK PAGE</button></a>
                </article>
            </div>

        </div>
    </section>
<?php
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
        echo 'Message sent successfully!';
    } else {
        echo 'Message could not be sent.';
    }
} else {
    echo 'Invalid request.';
}