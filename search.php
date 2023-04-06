<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <?php
    include 'navbar.php';
    ?>
</head>

<body>



    <script>

        let form = document.getElementById("form");

        form.addEventListener("submit", function (e) {
            e.preventDefault();
            <?php
            header("Location: index.php?Name=.$_POST[Name]");
            ?>
        });
    </script>

</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>

</html>