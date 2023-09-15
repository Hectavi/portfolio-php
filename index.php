<!DOCTYPE html>
<html lang="en">
<?php
/**
 * @author Héctor Tarascó
 * @version 23.09.1
 */
require_once(__DIR__ . '/includes/header.inc.php');
?>

<body>
    <?php
    require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/nav.inc.php');
    ?>
    <div id='content'>
        <?php
        require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/about.inc.php');
        require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/resume.inc.php');
        require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/projects.inc.php');
        require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/hobbies.inc.php');
        ?>
    </div>
    <?php
    require_once(__DIR__ . '/home/hectarvic/lamp/apache2/htdocs/includes/footer.inc.php');
    ?>
</body>

</html>
