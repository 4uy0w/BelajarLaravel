<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $__env->startSection('menu'); ?>
        Ini adalah bagian dari kehidupan 
    <?php echo $__env->yieldSection(); ?> 
    <div class="menu">
        <?php echo $__env->yieldContent('menu'); ?>;
    </div>
</body>
</html><?php /**PATH /home/aldebaran/Project/Laravel-Project/Project-002/Belajar04_Laravel/resources/views/layout/app.blade.php ENDPATH**/ ?>