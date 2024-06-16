<!doctype html>
<html>
    <title>Werehousing</title>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    </head>

    <body>
        <div class="flex h-screen flex-col justify-center px-6 py-12 lg:px-8 items-center">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" placeholder=" Enter Your Email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <br>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" placeholder=" 5-20 Characters" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
                </form>
                <?php if($errors->any()): ?>
                    <?php echo e($errors); ?>

                <?php endif; ?>
                <p class="mt-10 text-center text-sm text-gray-500">
                    Don't have an account?
                    <a href="<?php echo e(route('index_register')); ?>" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">
                        Sign up
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\NATHANIEL ORION\Downloads\WereHousing-main\WereHousing-main\resources\views/login.blade.php ENDPATH**/ ?>