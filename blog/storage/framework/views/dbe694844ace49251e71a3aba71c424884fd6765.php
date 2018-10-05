<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        
                        <div class="card-header">
                            <?php echo e($post->title); ?>

                            <div class="float-right">
                                
                                <form action="<?php echo e(route('post.destroy', $post)); ?>" class="" method="post">
                                    
                                    <?php echo e(csrf_field()); ?>

                                    
                                    <?php echo e(method_field('DELETE')); ?>

                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <p><?php echo e($post->content); ?></p>
                        </div>
                    </div><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>