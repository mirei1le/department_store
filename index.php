<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <h1>SHOPAHOLICS</h1>
    <form action="#" method="get" class="search-bar">
    <input type="text" name="q" placeholder="Search products, brands..." required>
    <button type="submit">🔍</button>
</form>

    <ul>
        <?php
        $menu_items = [
            "Home Store" => "#homeStore",
            "Technology" => "#technology",
            "Skincare" => "#skincare",
            "Makeup" => "#makeup"
        ];
        foreach ($menu_items as $name => $link) {
            echo "<li><a href='" . htmlspecialchars($link) . "'>" . htmlspecialchars($name) . "</a></li>";
        }
        ?>
    </ul>

    

    <?php
    echo "SHOPAHOLICS";
    ?>

</body>
</html>
