<?php $__env->startSection('main-content'); ?>
<div class="container">
    
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">NEW PRODUCT</span>
            <span><a href="/products"><i class="small material-icons tooltipped" data-position="bottom"
                        data-tooltip="All Products">view_list</i></a></span>
        </div>
    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/product/store">
            <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="input-field col s12">
                    <input id="product_name" name="product_name" type="text" class="validate" required>
                    <label for="product_name">Product Name</label>
                </div>

                <div class="input-field col s12">
                    <input id="description" name="description" type="text" class="validate" required>
                    <label for="description">Product Description</label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <input id="unit_cost" name="unit_cost" type="text" class="validate" required>
                    <label for="unit_cost">Unit Cost</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="tenor" name="tenor" type="text" class="validate" required>
                    <label for="tenor">Tenor</label>
                </div>

            </div>

            <button type="submit" class="btn">Add</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.admin-app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>