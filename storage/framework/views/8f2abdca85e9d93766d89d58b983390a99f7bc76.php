

<?php $__env->startSection('content'); ?>
    <div class="content-middle">
        Список категорий...

        <div class="panel panel-default">

            <div class="panel-heading">Редактировать товар</div>


            <form action="<?php echo e(route('goods.save', ['id' => $good->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <table class="table table-bordered">
                    <tr>
                        <td>Название</td>
                        <td>
                            <input type="text" name="title" value="<?php echo e($good->title); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Цена</td>
                        <td>
                            <input type="text" name="price" value="<?php echo e($good->price); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Описание</td>
                        <td>
                            <input type="text" name="description" value="<?php echo e($good->description); ?>">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="сохранить">
            </form>


        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\localhost\loftschool\test3\resources\views/goods/edit.blade.php ENDPATH**/ ?>