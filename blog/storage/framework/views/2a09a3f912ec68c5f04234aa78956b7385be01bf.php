;


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    
                    <div class="card-header">Edit Post</div>
                    <div class="card-body">
                        
                        <form action="<?php echo e(route('post.update', $post)); ?>" method="post">
                            
                            <?php echo e(csrf_field()); ?>

                            
                            <?php echo e(method_field('PATCH')); ?>

                            <div class="form-group">
                                <label for="">Title</label>
                                
                                <input type="text" class="form-control" name="title" placeholder="Post Title" value="<?php echo e($post->title); ?>">
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="">Category</label>
                                
                                <select name="categori_id" id="" class="form-control">
                                    
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="">Content</label>
                                
                                <textarea name="content" id="" class="form-control" cols="30" rows="10" placeholder="Post Content" ><?php echo e($post->content); ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>