<?php
$title = 'Functions';

function sum($a, $b)
{
    return $a + $b;
}

$result = sum(1, 2);

function output($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';

}

$guitars = [
    'Vela',
    'Explorer',
    'Strat',
];
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>PHP Funamentals:
            <?= $title ?>
        </title>
    </head>

    <body>

        <nav class="mt-0">
            <div class="m-4">
                <ul class="flex">
                    <li class="mr-6">
                        <a class="text-blue-500 hover:text-blue-800" href="#">PHP Fundamentals:
                            <?= $title; ?>
                        </a>
                    </li>
                    <li class="mr-6">
                        <a class="text-blue-500 hover:text-blue-800" href="#">Active</a>
                    </li>
                    <li class="mr-6">
                        <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
                    </li>
                    <li class="mr-6">
                        <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
                    </li>
                    <li class="mr-6">
                        <a class="text-gray-400 cursor-not-allowed" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="flex items-center justify-center">
            <?php output($guitars); ?>
        </div>


    </body>

</html>