<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        background-color: #551a8b
    }
    .navbar-nav {
        display: flex;
        list-style-type: none;



    }
    /* .navbar-nav::marker {
color: #007bff;

    } */

    .navbar {
        /* background-color: #343a40; */
        padding: 10px 0;
        /* border-bottom: 2px solid #e0e0e0; */
        /* display: flex;
        justify-content: center;
        align-items: center; */
    }

    .navbar-brand {
        font-size: 1.5rem;
        /* color: #ffffff; */
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
    }

    .navbar-nav .nav-link {
        /* color: #ffffff; */
        font-size: 1rem;
        margin-left: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
        text-decoration: none
    }

    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link:hover {
        color: #007bff;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        background-color: #ffffff;
    }

    .collapse {
        justify-content: flex-end;
    }

    .container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<body>
    
    <nav class="navbar navbar-expand-lg minimalist-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('movies.index') }}">MyWebsite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('movies.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('movies.create') }}">create movie</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    
</body>
</html>


