<?php include 'head.php'; ?>

<body>

<?php include 'header.php'; ?>

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
    <div id = "contactInfo">
        <h3>Thank you, <?php echo $contactName ?>!</h3>
        <p>
            Here's the information you submitted:
        </p>
        <p>
            Email: <?php echo $contactEmail ?>
        </p>
        <p>
            Phone: <?php echo $contactPhone ?>
        </p>
        <p>
            Comment: <br> <?php echo $contactComment ?>
        </p>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>

<script src = "js/jquery.js"></script>
<script src = "js/konami.js"></script>

</html>