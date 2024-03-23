<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-2xl font-bold sm:text-xl">
            Glossary
        </h1>
        <!-- <p class="mt-3 text-lg text-gray-300">Cover is a one-page template for building simple and beautiful home pages
            using Tailwind CSS.</p> -->
        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
            <!-- CONTENT GOES HERE  -->
            <table class="min-w-full text-center text-md font-light text-surface">

            <?php foreach ($model as $item) : ?>

                    <tr class="border-b border-neutral-200">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">
                            <?= $item->term; ?>
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