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

        <?php if(Auth::check()): ?>
            You are logged in as
            <?= auth()->user()->name ?>
            <a href="/console/logout/">Logout </a>      <!-- maybe bez / -->
            <a href="/console/dashboard">Dashboard</a>
            <a href="/">HOMEPAGE </a>
        <?php else: ?>
            <a href="/">Retrun to my HOOMEPAGE</a>


        <?php endif; ?>

    </header>

    <hr>
    <section>
        <ul id="dashboard">
        <li><a href ="/console/projects/list"> Manage Projects</a></li>
        <li><a href ="/console/types/list"> Manage Types</a></li>
        <li><a href ="/console/user/list"> Manage Users</a></li>
        </ul>

    </section>


</body>


</html>
