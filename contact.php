<?php include 'head.php'; ?>

<body>

<?php include 'header.php'; ?>

<main>
    <div id="contactDiv">
        <p>
            Want to send me a message? <br>
            Use this form so that you can reach out to me and I'll get back to you as soon as possible!
        </p>
        <form action = "contact_confirmation.php" method = "post" id = "contactForm">
            <label for = "contactName">Name: </label><input type="text" name="contactName" id="contactName">
            <label for = "contactEmail">Email: </label><input type="email" name = "contactEmail" id="contactEmail">
            <label for = "contactPhone">Phone: </label><input type="tel" name="contactPhone" id="contactPhone">
            <label for = "contactComment">Comment:</label> <textarea name="contactComment" id="contactComment" rows = "10" cols="50"></textarea>
            <div id="formButtons">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>

        </form>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>

<script src="js/jquery.js"></script>
<script src="js/konami.js"></script>

</html>