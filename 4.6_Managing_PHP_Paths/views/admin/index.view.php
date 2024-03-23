<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-2xl font-bold sm:text-xl">
            <?= isset($view_bag) && $view_bag['title'] ? $view_bag['title'] : ''; ?>
        </h1>
      
        <!-- SEARCH  -->
        <div>
            <form class="max-w-md mt-10" action="" method="GET">
                <label for="search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="search" name="search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>
        <!-- END SEARCH  -->


        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
            <!-- CONTENT GOES HERE  -->
            <table class="min-w-full text-center text-md font-light text-surface">

                <?php foreach ($model as $item): ?>

                    <tr class="border-b border-neutral-200">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                            <a class="text-blue-500 hover:underline" href="detail.php?term=<?= $item->term; ?>">
                                <?= $item->term; ?>
                            </a>
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                            <?= $item->definition; ?>
                        </td>
                    </tr>

                <?php endforeach; ?>


            </table>

        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->