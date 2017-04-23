<?php include 'head.php'; ?>

<?php
    $db = mysqli_connect('localhost', 'root', 'gtrwjkR4ODOYhNIx', 'MyWebsite');
?>

<body>

<?php include 'header.php'; ?>

<main>
    <div id = "projectWrapper">
        <h2>
            Here's a list of projects I've worked on:
        </h2>
        <div id = "projects">
            <?php
                $query = "SELECT * FROM Projects ORDER BY projectStart DESC ";
                $result = mysqli_query($db, $query);

                $i = 1;

                while ($row = mysqli_fetch_assoc($result))
                {
                    $projectName = $row['projectName'];
                    $projectDesc = $row['projectDesc'];
                    $projectLink = $row['projectLink'];
                    $projectStart = $row['projectStart'];
                    $projectEnd = $row['projectEnd'];
                    ?>
                    <div class = "project">
                        <div class = "projectTitle">
                            <h2><?php echo $projectName ?> <a class = "fa fa-github"
                                                              href = "<?php echo $projectLink ?>"></a></h2>
                        </div>
                        <div class = "projectDate">
                            <span class = "startDate"><?php echo $projectStart ?></span> - <span
                                class = "endDate"><?php echo $projectEnd ?></span>
                        </div>
                        <div class = "projectDescription">
                            <?php
                                echo $projectDesc;
                            ?>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>

<script src="js/jquery.js"></script>
<script src="js/konami.js"></script>
<script src = "js/loremIpsum.js"></script>

</html>