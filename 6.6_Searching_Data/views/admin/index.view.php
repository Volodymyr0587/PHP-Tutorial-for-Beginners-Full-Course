<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
     <!-- Create New Term link -->
    <div class="mt-20 ml-10">
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" 
        href="create.php">Create New Term</a>           
    </div>
    <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-2xl font-bold sm:text-xl">
            <?= isset($view_bag) && $view_bag['title'] ? $view_bag['title'] : ''; ?>
        </h1>
    
        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
            <!-- CONTENT GOES HERE  -->
            <table class="min-w-full text-center text-md font-light text-surface">

                <?php foreach ($model as $item): ?>

                    <tr class="border-b border-neutral-200">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                            <a class="text-blue-500 hover:underline" href="edit.php?key=<?= $item->id; ?>">
                                Edit
                            </a>
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium">                          
                                <?= $item->term; ?>
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                            <?= $item->definition; ?>
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                            <a class="text-red-500 hover:underline" href="delete.php?key=<?= $item->id; ?>">
                                Delete
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>


            </table>

        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->