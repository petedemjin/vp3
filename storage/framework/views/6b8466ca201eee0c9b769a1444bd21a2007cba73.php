

<?php $__env->startSection('content'); ?>
    <div class="content-middle">

        <div class="panel panel-default">

            <div class="panel-heading">Редактировать товар</div>


            <form action="<?php echo e(route('categories.save', ['id' => $category->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <table class="table table-bordered">
                    <tr>
                        <td>Название</td>
                        <td>
                            <input type="text" name="title" value="<?php echo e($category->title); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Описание</td>
                        <td>
                            <input type="text" name="description" value="<?php echo e($category->description); ?>">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="сохранить">
            </form>


        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\localhost\loftschool\test3\resources\views/categories/edit.blade.php ENDPATH**/ ?>