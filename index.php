<?php include 'head.php'; ?>

<body>

<?php include 'header.php'; ?>


<?php
    $db = mysqli_connect('localhost', 'root', 'gtrwjkR4ODOYhNIx', 'MyWebsite');
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
                    <li>April 2017</li>
                </ul>
            </div>
        </div>
    </div>


</main>

<?php include 'footer.php'; ?>

</body>

<script src="js/jquery.js"></script>
<script src="js/konami.js"></script>
<script src = "js/date.js"></script>

</html>