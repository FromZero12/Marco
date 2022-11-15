<?php $__env->startSection('title', '| Basket'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center mb-5">Basket</h1>
            <div class="row row-cols-2 justify-content-md-center">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3 col m-1" style="max-width: 540px;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo e($d->image_path); ?>" class="card-img-top" alt="..." height="150vh"">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-evenly ">
                                <h5 class="card-title"><?php echo e($d->name); ?></h5>
                                <div class="h-50 overflow-auto mb-2">
                                    <p class="card-text fw-bold" style="text-align: justify">Rp.<?php echo e($d->price); ?></p>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example" style="width: 40%">
                                    <form action="/basket/<?php echo e($d->id); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-dark text-center" type="submit">-</button>
                                    </form>
                                    <input type="text" value="<?php echo e($d->qty); ?>" class="text-center" style="width: 33%">
                                    <form action="/basket/<?php echo e($d->id); ?>" method="POST" enctype="multipart/form-data" >
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('patch'); ?>
                                        <button type="submit" class="btn btn-dark text-center">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\OneDrive\Documents\Semester 5\Web Programming\tugas_glsc\resources\views/basket.blade.php ENDPATH**/ ?>