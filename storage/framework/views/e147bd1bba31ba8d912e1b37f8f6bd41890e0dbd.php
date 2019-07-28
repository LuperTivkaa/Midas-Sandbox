<?php $__env->startSection('main-content'); ?>
<div class="container">
    
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">NEW PRODUCT CATEGORY</span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 subject-header">
            <span><a href="/product/category"><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="All Products">view_list</i></a></span>
        </div>
    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/product/category/store">
            <?php echo e(csrf_field()); ?>


            <div class="row">

                <div class="input-field col s12">
                    <input id="category_name" name="category_name" type="text" class="validate" required
                        placeholder="Category Name" autofocus>
                    <label for="category_name">Category Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="description" name="description" type="text" class="validate" required
                        placeholder="Category Description">
                    <label for="description">Category Description</label>
                </div>
            </div>

            <button type="submit" class="btn">Add</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>