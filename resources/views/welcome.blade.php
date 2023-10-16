
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/../assets/img/logo.png">
        <title>Waste Management Application</title>

        <!-- Add your CSS styles for body and background -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
                background: linear-gradient(to bottom, #3498db, #ffffff); /* Gradient background */
                color: #fff; /* Text color */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .navbar {
                background-color: #f33; /* Navbar background color */
                color: #fff; /* Navbar text color */
                text-align: center;
                padding: 20px;
                border-radius: 10px;
                opacity: 0.8; /* Adjust the transparency of the navbar */
            }
            .navbar a {
                text-decoration: none;
                margin: 10px;
                color: #fff; /* Navbar link color */
            }
            .buttons {
                text-align: center;
                margin-top: 20px;
            }
            .buttons a {
                text-decoration: none;
                margin: 10px;
                padding: 10px 20px;
                background-color: #333; /* Button background color */
                color: #fff; /* Button text color */
                border-radius: 5px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="navbar">
            <h1>Waste Management Application</h1>
        </div>
        <div class="buttons">
            <a href="{{ url('/home') }}">Home</a>
            @if (Route::has('login'))
                @auth
                    <!-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> -->
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </body>
</html>
