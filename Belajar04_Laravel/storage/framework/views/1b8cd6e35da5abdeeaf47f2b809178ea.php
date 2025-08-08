<?php $__env->startSection('sectionx','hellox'); ?>;

<?php $__env->startSection('menu'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('menu'); ?>
    <h1>Hello guys, ini adalah menu 1</h1>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/aldebaran/Project/Laravel-Project/Project-002/Belajar04_Laravel/resources/views/children.blade.php ENDPATH**/ ?>