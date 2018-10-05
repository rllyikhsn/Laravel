;


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="card">
                    
                    <div class="card-header">
                        <?php echo e($post->title); ?> | 
                        
                        <small><?php echo e($post->category->name); ?></small>
                    </div>
                    <div class="card-body">
                        
                        <p><?php echo e($post->content); ?></p>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>