<?php
$title = 'Scope';


$guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender'],
];

// $guitar_names = array_column($guitars, 'name');

function pluck($array, $key)
{
    return array_map(function($item) use ($key)	{
        return is_object($item) ? $item->$key : $item[$key];
      }, $array);
}

$guitar_names = pluck($guitars, 'manufacturer');



// $greeting = 'hello, world';

// function sum($a, $b)
// {
//     global $greeting;
//     echo $greeting;
//     return $a + $b;
// }

// $result = sum(1, 2);

function output($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';

}

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
            <?php output($guitar_names); ?>
        </div>


    </body>

</html>