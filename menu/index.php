<!DOCTYPE html>
<html>
    <head>
        <title>Tyvannis -- Menu</title>
        <?php require '../partials/head.php'; ?>
    </head>
    <body>
        <?php require '../partials/nav.php'; ?>
        <div class="container-full">
            <div class="menu hero-container">
                <div class="img-overlay">
                </div>
                <div class="hero-text-content">
                    <h1>Our Menu</h1>
                    <h2>Build Your Catering Event</h2>    
                </div>
            </div>
        </div>
        <div class="container">
          <div class="menu-grid">
          <?php 
              $menu_file_names = array("fruit-spread.jpg", "burrito-bar.jpg", "burger.jpg", "salad.jpg", "chicken.jpg", "breakfast.jpg");
              $menu_display_names = array("Fruit Spreads", "Burrito Bar", "Premium Burgers", "Salads", "Chicken", "Breakfast");
              $menu_links = array("#","#","#","#","#","#");

              for($i = 0; $i < sizeof($menu_display_names); $i++) {
                  $file_name = $menu_file_names[$i];
                  $display_name = $menu_display_names[$i];
                  $item_link = $menu_links[$i];
                  require '../partials/menu-item.php';
              }
          ?>
          </div>
        </div>
        <?php require '../partials/footer.php'; ?>
    </body>
</html>