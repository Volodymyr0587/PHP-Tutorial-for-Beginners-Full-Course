<?php
$title = 'For loop';

$favoriteGuitars = [
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
            <h1 class="py-4">My Favorite Guitars</h1>
        </div>

        
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light text-surface">
                            <thead class="border-b border-neutral-200 font-medium">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Guitars</th>
                                    <!-- <th scope="col" class="px-6 py-4">First</th>
                                    <th scope="col" class="px-6 py-4">Last</th>
                                    <th scope="col" class="px-6 py-4">Handle</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($favoriteGuitars); $i++ ): ?>
                                <tr class="border-b border-neutral-200">
                                    <td class="
                                        whitespace-nowrap 
                                        px-6 py-4 
                                        font-medium 
                                        <?= $i % 2 == 0 ? 'bg-yellow-200' : 'bg-blue-200' ?>"
                                    >
                                        <?= $favoriteGuitars[$i]; ?>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>