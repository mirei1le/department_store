<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <!--  SEARCH BUTTON & TITLE STARTS HERE !-->
    
    <h1>SHOPAHOLICS</h1>
    <form action="#" method="get" class="search-bar">
    <input type="text" name="q" placeholder="Search products, brands..." required>
    <button type="submit">🔍</button>
</form>

    <ul>
        <!-- MENU ITEMS START HERE !-->
        
        <ul>
        <?php
        $menu_items = [
            "Home Page" => "index.php",
            "Home Store" => "homeStore.php",
            "Technology" => "technology.php",
            "Skincare" => "skincare.php",
            "Makeup" => "makeup.php"
        ];
        foreach ($menu_items as $name => $link) {
            echo "<li><a href='" . htmlspecialchars($link) . "'>" . htmlspecialchars($name) . "</a></li>";
        }
        ?>
            </ul>
    </ul>
    <div class="product-card">
        <div class="product-image">
            <img src="IMG/sofa.jpg" alt="Baxiosofa">
            <i class="fa-regular fa-heart wishlist-icon"></i>
        </div>
        <div class="product-details">
            <p class="product-brand">CREAM</p>
            <h3 class="product-title">Baxio Sofa</h3>
            
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                
            </div>

            <p class="product-price">€128.75</p>
            <button class="add-to-bag">Add to bag</button>
        </div>
    </div>
    

    

   

</body>
</html>
