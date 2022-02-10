<?php
define('VG_ACCESS', true);

header('Content-Type:text/html; charset=utf-8');
session_start();

require_once 'config.php';
require_once 'lib/functions.php';

require_once ('local/templates/.default/header.php');
?>
<div class="container">
    <?php
    require_once('local/templates/components/people_comp/templates/default/template.php');
    ?>
</div>
<?php
require_once ('local/templates/.default/footer.php');
?>