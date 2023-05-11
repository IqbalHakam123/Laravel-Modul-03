<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME</title>
    <?php echo app('Illuminate\Foundation\Vite')('resource/sass/app.scss'); ?>
</head>
<body>
    <div class="container m-5">
        
        <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/main.svg')); ?>" alt="image">
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resource/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\USER\Desktop\laraveliqbal\resources\views/welcome.blade.php ENDPATH**/ ?>