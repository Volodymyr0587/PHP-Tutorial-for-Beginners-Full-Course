<?php
$title = 'GET Input';

include ('../inc/header.php');
require_once ('../inc/functions.php');

$category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT); 
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

if ($category == false) {
    $category = 1;
} 
if ($limit == false) {
    $limit = 10;
}
?>

<div class="flex items-center justify-center">
    <h1 class="text-2xl">
        <?= $title ?>
    </h1>
</div>

<div class="grid grid-cols-4 gap-4 m-12">

    <div>
        Showing category:
        <?= $category; ?>. Limit
        <?= $limit; ?>
    </div>

    <div class="block rounded-lg bg-white p-6 text-surface shadow-secondary-1">
        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
        <p class="mb-4 text-base">

        </p>
        <a href="#"
            class="inline-block bg-blue-500 rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2">
            Button
        </a>
    </div>

</div>

<?php include ('../inc/footer.php'); ?>