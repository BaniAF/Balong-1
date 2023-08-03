<?php $__env->startSection('content'); ?>
    

    
    <div class="flex">
        
        <div class="flex">
            <div class="hero bg-blue-400 ml-20 px-6 mx-3 mt-3">
                <div class="hero-content flex-col justify-items-center">
                    <img src="https://source.unsplash.com/random/800x600/?2" class="max-w-sm rounded-lg shadow-2xl" />
                    <div class="align-baseline">
                        <?php $__currentLoopData = $artikel->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h1 class="text-2xl font-bold hover:text-red-500 justify-items-center">
                                <a href="<?php echo e(route('articles.show', $article)); ?>"><?php echo e($article->judulPost); ?></a>
                            </h1>
                            <p class="py-2">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                                exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="divider lg:divider-horizontal p-4"></div>
        
        
        
    </div>

    
    <div class="flex">
        
        <div class="flex flex-wrap gap-1 bg-green-400 ml-9 my-4 mr-2 w-2/3 items-center justify-center">
            
            <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-2 my-1  ">
                    <div class="card bg-gray-500 dark:bg-white shadow-xl w-48 items-center">
                        <figure class="">
                            <img src="https://source.unsplash.com/random/800x600/?1" alt="Gambar Berita" class="lazyload" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title dark:text-black text-white hover:text-red-500 text-sm">
                                <a href="<?php echo e(route('post.show', $article)); ?>"><?php echo e($article->judulPost); ?></a>
                            </h2>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        
        <div class="bg-red-500 flex-1 w-1/3 mr-12 my-4 ml-1 p-5 md:w-">
            <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumumanItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <?php if($pengumumanItem->image): ?>
                        <img src="<?php echo e(asset('images/' . $pengumumanItem->image)); ?>" alt="Pengumuman Image"
                            class="w-auto h-96 scale-95">
                    <?php endif; ?>
                    <h2>ini bagian pengumuman</h2>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BANNN\Desktop\Balong-1\resources\views/frontend/landing.blade.php ENDPATH**/ ?>