<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-2xl font-bold sm:text-xl">
            Delete Term
        </h1>

        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
            <div>Are you sure you want to delete <?= $model->term ?></div>
            <div class="flex justify-center mt-20 px-8">
                <form action="" method="POST" class="max-w-2xl">
                    <input type="hidden" name="term" value="<?= $model->term; ?>" />
                    <div class="flex flex-wrap border shadow rounded-lg p-3">

                        <div class="flex flex-col gap-2 w-full border-gray-400">
                            <div class="flex justify-end">
                                <button
                                    class="py-1.5 px-3 m-1 text-center bg-blue-700 border rounded-md text-white  hover:bg-blue-500 hover:text-gray-100"
                                    type="submit">Delete</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->