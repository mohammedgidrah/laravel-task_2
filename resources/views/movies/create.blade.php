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
        background-color: #f4f4f4;
        padding: 20px;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        margin-bottom: 20px;
        color: #333;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }
    .form-control {
        width: 100%;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ddd;
        box-sizing: border-box;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .text-center {
        text-align: center;
    }
    #submit_btn{
        background-color: #007bff;
        color: white;
        text-align: center;
        cursor: pointer;
        border-radius: 5px;
        padding: 10px 20px;
    }
</style>
<body>
    
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="movie_name">Movie Name</label>
            <input type="text" name="movie_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="movie_description">Movie Description</label>
            <textarea name="movie_description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="movie_gener" class="form-control" required>
        </div>

        <button id="submit_btn" type="submit" class="btn btn-success">Save</button>
    </form>
</body>
</html>
