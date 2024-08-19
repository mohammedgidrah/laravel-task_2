<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .minimalist-card {
        border-radius: 0;
        background-color: #f8f9fa;
        box-shadow: none;
        border: 1px solid #e0e0e0;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .minimalist-header {
        font-size: 1.6rem;
        font-weight: bold;
        padding: 20px;
        background-color: #0008ff;
        color: #fff;
        border-bottom: 2px solid #e0e0e0;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .minimalist-card .card-body {
        padding: 30px;
        background-color: #fff;
        color: #555;
    }

    .minimalist-card .card-title {
        margin-bottom: 15px;
        font-weight: bold;
        font-size: 1.8rem;
        color: #222;
    }

    .minimalist-card .card-text {
        margin-bottom: 20px;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .minimalist-card .card-text strong {
        color: #333;
    }

    .minimalist-card:hover {
        background-color: #f5f5f5;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
</style>


<body>
    

    <div class="card mt-4 border-0 minimalist-card" style="max-width: 600px; margin: auto;">
        <div class="card-header text-center minimalist-header">
            <strong>Post Info</strong>
        </div>
        <div class="card-body p-4">
            <h5 class="card-title"><strong>Name:</strong>{{ $movies->movie_name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $movies->movie_description }}</p>
            <p class="card-text"><strong>Genre:</strong> {{ $movies->movie_gener }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $movies->created_at->format('M d, Y H:i') }}</p>
        </div>
    </div>
    
</body>
</html>
