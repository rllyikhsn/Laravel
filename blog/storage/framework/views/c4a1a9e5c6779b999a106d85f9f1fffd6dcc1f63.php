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
                <div class="card">
                    
                    <div class="card-header">Tambahkan Komentar</div>
                    <div class="card-body">
                        
                        <form action="<?php echo e(route('post.comment.store', $post)); ?>" class="form-horizontal" method="POST">
                            
                            <?php echo e(csrf_field()); ?>

                            
                            <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Berikan Komentar ...">
                            </textarea><br>
                            <input type="submit" value="Komentar" class="btn btn-primary">
                        </form>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>