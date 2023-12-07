<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DASHBOARD</title>
</head>
<body>

<header>
    <h1>Project Dashboard</h1>

    <?php if (Auth::check()): ?>
    You are logged in as
        <?= auth()->user()->name ?>



    <a href="/console/logout">Logout </a>
    <a href="/console/dashboard">Dashboard</a>
    <a href="/">HOMEPAGE </a>
    <?php else: ?>
         <a href="/">Retrun to my HOOMEPAGE</a>


    <?php endif; ?>
</header>

<hr>
<section>
    <form method="post" action="/console/login" novalidate>
        <?= csrf_field() ?>

        <div>
            <label for="email">Email Adress:</label>

            <input type="email" name="email" id="email"
                   value="<?=old('email') ?>">



            <?php if($errors->first('email')): ?>
            <br>
            <span><?= $errors->first('email'); ?></span>

            <?php endif; ?>


        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" id="password">

            <?php if ($errors->first('password')): ?>
            <br>
            <span><?= $errors->first('password'); ?></span>

            <?php endif; ?>



        </div>


        <button type="submit"> Log In</button>


    </form>

</section>


</body>


</html>
