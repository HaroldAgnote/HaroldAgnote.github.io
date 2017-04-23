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
    $db = mysqli_connect('localhost','root','','MyWebsite');
?>

<main>
    <div id = "todaysDate">Today is ...</div>

    <div id = "blog">
        <div id = "feed">
            <div id = "newsItems">
                <h2>News Feed</h2>

                <?php
                    $query = "SELECT * FROM Articles ORDER BY TIMESTAMP DESC ";
                    $result = mysqli_query($db, $query);

                    $i = 1;

                    while($row = mysqli_fetch_assoc($result))
                    {
                        $timeStamp = $row['TIMESTAMP'];
                        $articleTitle = $row['articleName'];
                        $articleDesc = $row['articleDesc'];
                        ?>

                        <div class = "newsItem">
                            <h4 class = "newsTitle"><?php echo $articleTitle; ?></h4>
                            <p class = "newsDesc">
                                <?php echo $articleDesc; ?>
                            </p>
                            <p>
                                <?php echo $timeStamp; ?>
                            </p>
                        </div>

                        <?php
                    }
                ?>

            </div>

            <div id = "currentActivity">
                <h2 id = "whatDoing">What am I up to?</h2>

                <h3>Currently...</h3>
                <ul>
                    <li>Doing stuff</li>
                    <li>Doing things</li>
                </ul>

                <div id = "learning">
                    <h3>Right now I'm learning...</h3>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                    </ul>
                </div>

                <div id = "working">
                    <h3>Working on...</h3>
                    <ul>
                        <li>Building my personal Website</li>
                        <li>Circular Array Queue Project</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id = "archive">
            <h2>Archive</h2>
            <div id = "archiveLog">
                <ul>
                    <li>April</li>
                    <li>March</li>
                    <li>February</li>
                    <li>January</li>
                    <li>December</li>
                    <li>November</li>
                </ul>
            </div>
        </div>
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
<script src = "js/date.js"></script>
<script src="js/konami.js"></script>
</html>