<!doctype html>
<html>

<head>
    <title>Look at me Login</title>
</head>

<body>
<h2>Welcome <?php echo $user->name?>. Thanks for logging in.</h2>
<a href="{{ URL::to('logout') }}">Logout</a>
</body>