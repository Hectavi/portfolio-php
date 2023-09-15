<!DOCTYPE html>
<html lang="en">
<?php
/**
 * @author Héctor Tarascó
 * @version 23.09
 */
require_once(__DIR__ . '/includes/header.inc.php');
?>

<body>
    <?php
    require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/nav.inc.php');

    echo "<div id='content'>";

    require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/about.inc.php');
    require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/resume.inc.php');
    require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/projects.inc.php');
    require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/hobbies.inc.php');

    echo "</div>";

    require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/footer.inc.php');
    ?>
</body>

</html>
