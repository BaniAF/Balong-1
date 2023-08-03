<?php $__env->startSection('content'); ?>
    <div class="flex mx-10 my-10 ">
        
        <div class="w-2/3 mx-5 p-4 my-5">
            <h1 class="font-bold text-4xl p-1"> Judul Artikel : <?php echo e($article->judulPost); ?></h1>
            <h2 class="font-bold p-1"> . kategori : <?php echo e($article->kategori->namaKategori); ?></h2>
            <?php if($article->fotoPost): ?>
                <img src="<?php echo e(asset('uploads/' . $article->fotoPost)); ?>" alt="Article Image">
            <?php endif; ?>

            <p><?php echo $article->isiPost; ?></p>

            
        </div>

        
        <div class="w-1/3 p-5 mr-10 ml-5 my-1 border-2">
            <div class="border-l-4 border-indigo-500 p-4 ">
                <h3 class="text-md font-bold md:font-normal text-md sm:text-md">Artikel Terkait:</h3>
            </div>
            <div class="">
                <ul>
                    <?php $__currentLoopData = $relatedArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="grid grid-cols-1 hover:text-yellow-300 mt-4">
                            <li class="text-sm p-0">
                                <a href="<?php echo e(route('post.show', $relatedArticle)); ?>"><?php echo e($relatedArticle->judulArtikel); ?></a>
                                <div class="divider m-1"></div>
                            </li>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BANNN\Desktop\Balong-1\resources\views/frontend/articles/show.blade.php ENDPATH**/ ?>