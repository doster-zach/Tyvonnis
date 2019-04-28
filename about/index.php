<!DOCTYPE html>
<html>
    <head>
        <title>Tyvannis -- About</title>
        <?php require '../partials/head.php'; ?>
    </head>
    <body>
        <?php require '../partials/nav.php'; ?>
        <div class="container-full">
            <div class="about hero-container">
                <div class="img-overlay">
                </div>
                <div class="hero-text-content">
                    <h1>About Tyvonni's</h1>
                    <h2>How we came to be</h2>    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about-quote">
                <p>
                Cooking is all about people.
                Food is maybe the only universal thing that really has the power to bring everyone together.
                No matter what culture,
                everywhere around the world, people get together to eat. 
                </p>
            </div>
            <div class="about-item-wrapper">
            <?php 
                $about_file_names = array("fruit-spread.jpg", "burrito-bar.jpg", "burger.jpg", "salad.jpg");
                $about_headers = array("Fruit Spreads", "Burrito Bar", "Premium Burgers", "Salads");
                $about_content = array("Donec rutrum eu leo in ullamcorper. Sed laoreet maximus ullamcorper. Ut efficitur, arcu id accumsan lobortis, dolor sapien suscipit quam, vitae eleifend mauris ex ac lorem. Curabitur feugiat orci ut venenatis rhoncus. Nam sodales placerat pellentesque. Mauris sodales viverra metus vel interdum. Praesent a ipsum mollis, tincidunt orci at, gravida est. Aliquam finibus tellus eget felis posuere ornare. Duis vestibulum justo id tellus dictum auctor. Ut porta pharetra dui, eu iaculis justo pretium a.","Donec rutrum eu leo in ullamcorper. Sed laoreet maximus ullamcorper. Ut efficitur, arcu id accumsan lobortis, dolor sapien suscipit quam, vitae eleifend mauris ex ac lorem. Curabitur feugiat orci ut venenatis rhoncus. Nam sodales placerat pellentesque. Mauris sodales viverra metus vel interdum. Praesent a ipsum mollis, tincidunt orci at, gravida est. Aliquam finibus tellus eget felis posuere ornare. Duis vestibulum justo id tellus dictum auctor. Ut porta pharetra dui, eu iaculis justo pretium a.","Donec rutrum eu leo in ullamcorper. Sed laoreet maximus ullamcorper. Ut efficitur, arcu id accumsan lobortis, dolor sapien suscipit quam, vitae eleifend mauris ex ac lorem. Curabitur feugiat orci ut venenatis rhoncus. Nam sodales placerat pellentesque. Mauris sodales viverra metus vel interdum. Praesent a ipsum mollis, tincidunt orci at, gravida est. Aliquam finibus tellus eget felis posuere ornare. Duis vestibulum justo id tellus dictum auctor. Ut porta pharetra dui, eu iaculis justo pretium a.","Donec rutrum eu leo in ullamcorper. Sed laoreet maximus ullamcorper. Ut efficitur, arcu id accumsan lobortis, dolor sapien suscipit quam, vitae eleifend mauris ex ac lorem. Curabitur feugiat orci ut venenatis rhoncus. Nam sodales placerat pellentesque. Mauris sodales viverra metus vel interdum. Praesent a ipsum mollis, tincidunt orci at, gravida est. Aliquam finibus tellus eget felis posuere ornare. Duis vestibulum justo id tellus dictum auctor. Ut porta pharetra dui, eu iaculis justo pretium a.");

                for($i = 0; $i < sizeof($about_file_names); $i++) {
                    $file_name = $about_file_names[$i];
                    $header = $about_headers[$i];
                    $content = $about_content[$i];
                    require '../partials/about-item.php';
                }
            ?>
            </div>
        </div>
        <?php require '../partials/footer.php'; ?>
    </body>
</html>