<?php

// if (!isset($title)) {
//     $title = '';
// }
?>

<!DOCTYPE html>
<html lang="en" class="h-full">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>PHP Funamentals:
            <?= $view_bag['title']; ?>
        </title>
    </head>

    <body class="flex h-full">
        <div class="w-full flex flex-col mx-auto size-full">
            <!-- ========== HEADER ========== -->
            <!-- max-w-[50rem] -->
            <header class="mb-auto flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full text-sm py-4 bg-blue-500">
                <nav class="w-full px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
                    <div class="flex items-center justify-between">
                        <a class="flex-none text-xl font-semibold text-white"
                            href="#" aria-label="Brand">PHP Fundamentals: </a>
                        
                    </div>
                    <div id="navbar-collapse-with-animation"
                        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                        <div
                            class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                            <a class="font-medium"
                                href="#" aria-current="page">
                                About
                            </a>
                            <a class="font-medium text-gray-400 hover:text-gray-500"
                                href="#">Account</a>
                            <a class="font-medium text-gray-400 hover:text-gray-500"
                                href="#">Work</a>
                            <a class="font-medium text-gray-400 hover:text-gray-500"
                                href="#">Blog</a>
                        </div>
                    </div>
                </nav>
            </header>
           
            <!-- ========== END HEADER ========== -->