<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">
    <link rel = "stylesheet" type = "text/css" href = "css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Bangers|Bevan|Roboto" rel="stylesheet">
    <title>Harold Agnote</title>

</head>

<body>
<header>
    <h1 id = "myName">Harold Agnote</h1>
    <div id = "intro">
        <img id = "mePic" src = "images/me.png" alt = "This is a picture of me!">
        <p id = "smallDesc">
            Hi! My name is Harold Agnote. I am an aspiring software engineer who loves programming.
        </p>
    </div>
</header>
<nav>
    <a href="index.php">Home</a>
    <a href="about.html">About</a>
    <a href="projects.html">Projects</a>
    <a href="contact.html">Contact</a>
</nav>

<?php
    $websiteURL = 'haroldagnote.net';

    $contactName = $_POST["contactName"];
    $contactEmail = $_POST["contactEmail"];
    $contactPhone = $_POST["contactPhone"];
    $contactComment = $_POST["contactComment"];

    // Multiple recipients
    $to = 'haroldagnote38@hotmail.com'; // note the comma

    // Subject
    $submitMessage = ' submitted a Contact Form at ';

    $subject = $contactName;
    $subject .= $submitMessage;
    $subject .= $websiteURL;

    // Message
    $message = '
<html>
<head>
  <title>' . $contactName . '\'s message' . '</title>
</head>
<body>
  <p>Here is ' . $contactName . '\'s message' . '</p>
  <p>
    Email: ' . $contactEmail . '
  </p>
    Phone: ' . $contactPhone . '
  <p>
    Comment: <br>
    ' . $contactComment . '
  </p>
</body>
</html>
';

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';

    $headers[] = 'From: <acehunter327@gmail.com>';

    // Mail it
    mail($to, $subject, $message, implode("\r\n", $headers));
?>

<main>
    <div id="contactInfo">
        <h3>Thank you, <?php echo $contactName?>!</h3>
        <p>
            Here's the information you submitted:
        </p>
        <p>
            Email: <?php echo $contactEmail?>
        </p>
        <p>
            Phone: <?php echo $contactPhone?>
        </p>
        <p>
            Comment: <br> <?php echo $contactComment?>
        </p>
    </div>
</main>
<footer>
    <a href = "mailto:haroldagnote38@hotmail.com">
        <div class="fa fa-envelope-o"></div>
    </a>
    <a href = "https://github.com/HaroldAgnote"><div class="fa fa-github"></div></a>
    <a href = "https://linkedin.com/in/HaroldAgnote"><div class="fa fa-linkedin"></div></a>
</footer>
</body>

<script src="js/jquery.js"></script>
<script src="js/konami.js"></script>

</html>