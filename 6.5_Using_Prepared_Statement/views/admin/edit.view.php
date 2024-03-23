<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-2xl font-bold sm:text-xl">
            Create Term
        </h1>

        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
            <!-- CONTENT GOES HERE  -->
            <!-- <form action="" method="POST" class="flex items-center gap-x-4">
                <div>
                    <label for="term">Term:</label>
                    <input type="text" name="term" id="term"
                        class="w-1/3 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400" />
                </div>
                <div>
                    <label for="definition">Definition:</label>
                    <textarea name="definition" id="definition" 
                    class="w-full h-32 px-4 py-3 border-2 border-gray-300 rounded-sm outline-none focus:border-blue-400"></textarea>
                </div>
            </form> -->

            <div class="flex justify-center mt-20 px-8">
                <form action="" method="POST" class="max-w-2xl">
                    <input type="hidden" name="original-term" value="<?= $model->term; ?>" />
                    <div class="flex flex-wrap border shadow rounded-lg p-3">
                        <h2 class="text-xl text-gray-600 pb-2">Edit Term:</h2>

                        <div class="flex flex-col gap-2 w-full border-gray-400">

                            <div>
                                <label for="term" class="text-gray-600">
                                    Term: 
                                </label>
                                <input name="term" id="term" value="<?= $model->term; ?>"
                                    class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow"
                                    type="text">
                            </div>

                            <div>
                                <label class="text-gray-600">Definition:</label>
                                <textarea name="definition" id="definition"
                                    class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow"
                                ><?= $model->definition; ?></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    class="py-1.5 px-3 m-1 text-center bg-blue-700 border rounded-md text-white  hover:bg-blue-500 hover:text-gray-100"
                                    type="submit">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->