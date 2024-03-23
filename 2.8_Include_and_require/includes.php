<?php
$title = 'Includes';

include('../inc/header.php');
require_once('../inc/functions.php');

$guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender'],
];

$guitar_names = pluck($guitars, 'name');

?>

<div class="flex items-center justify-center">
    <?php output($guitar_names); ?>
</div>


<?php include('../inc/footer.php'); ?>