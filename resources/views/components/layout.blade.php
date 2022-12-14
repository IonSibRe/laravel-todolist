<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    <title>Custom Todo List</title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-inner">
            <div class="navbar-logo-wrap">
                <a href="/" class="navbar-logo">
                    Todo List
                </a>
            </div>
            <div class="navbar-auth-wrap">
                @auth
                <div class="navbar-auth-user-wrap">
                    <p class="navbar-auth-user-text">Welcome {{auth()->user()->username}}</p>
                    <form action="/users/logout" method="POST">
                        @csrf
                        <button type="submit" class="navbar-auth-link navbar-auth-user-logout">Logout</button>
                    </form>
                </div>
                @else
                <div class="navbar-auth-guest-wrap">
                    <a href="/users/register" class="navbar-auth-link navbar-auth-user-login">Register</a>
                    <a href="/users/login" class="navbar-auth-link navbar-auth-user-login">Login</a>
                </div>
                @endauth
            </div>
        </div>
    </nav>
    <main>
        {{$slot}}
    </main>
</body>

</html>