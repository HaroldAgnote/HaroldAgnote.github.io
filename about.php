<?php include 'head.php'; ?>

<body>

<?php include 'header.php'; ?>

<main>
    <div id="aboutMe">
        <div id="profession">
            <h2>About Me</h2>
            <div class="description" id="introduction">
                <script>
                    document.getElementById("introduction").innerHTML = lorem;
                </script>
            </div>
            <h2>What am I doing?</h2>
            <div class="description" id="where">
                <script>
                    document.getElementById("where").innerHTML = lorem;
                </script>
            </div>
            <h2>What do I know?</h2>
            <div class="description" id="know">
                <script>
                    document.getElementById("know").innerHTML = lorem;
                </script>
            </div>
            <h2>What is my future?</h2>
            <div class="description" id="future">
                <script>
                    document.getElementById("future").innerHTML = lorem;
                </script>
            </div>
        </div>
        <div id="fluff">
            <h2>Fun Facts</h2>
            <div class="description" id = "fun">
                <script>
                    document.getElementById("fun").innerHTML = lorem + lorem;
                </script>
            </div>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
</body>


</html>