<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        
                        <div class="card-header">
                            
                            <a href="<?php echo e(route('post.show', $post)); ?>"> <?php echo e($post->title); ?></a>
                            <div class="float-right">
                                
                                <form action="<?php echo e(route('post.destroy', $post)); ?>" class="" method="post">

                                    <a href="<?php echo e(route('post.edit', $post)); ?>" class="btn btn-sm btn-primary">Edit</a>
                                    
                                    <?php echo e(csrf_field()); ?>

                                    
                                    <?php echo e(method_field('DELETE')); ?>

                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            
                            <p><?php echo e(str_limit($post->content, 100, ' ...')); ?></p>
                        </div>
                    </div><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>