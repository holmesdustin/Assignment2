<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="/template/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>

        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>
</div>
 <script>
        $("#button").click(function() {
            $.ajax({
                type: 'post',
                url: '../includes/functions.php',
                data: {
                    "random": true
                },
                dataType: "HTML",
                success: function(result) {
                    $("#randomPic").html(result);
                },
                error: function() {
                    alert("could not get comic");
                }
            });
            return false;
        });
    </script>
</body>
</html>