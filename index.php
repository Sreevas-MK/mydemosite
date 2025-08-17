<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Website</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <!-- Your important hostname display code -->
        <?php
        $output = shell_exec('echo $HOSTNAME');
        echo "<h1><center><pre>$output</pre></center></h1>";
        echo "<h1><center>Application version 1</center></h1>";
        ?>
        
        <!-- Simplified Image Gallery Section -->
        <div class="image-gallery">
            <img src="assets/images/image1.jpg" alt="Image 1">
            <img src="assets/images/image2.jpg" alt="Image 2">
            <img src="assets/images/image3.jpg" alt="Image 3">
        </div>
    </div>
</body>
</html>
