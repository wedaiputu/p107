<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Posts</h3>
    @foreach ($post as $post)
        <div>
            <h4>{{ $post['title'] }}</h4>
            <p>{{ $post['content'] }}</p>
            <p><strong>Author:</strong> {{ $post['author'] }}</p>
            <p><strong>Date:</strong> {{ $post['date'] }}</p>
        </div>
        <hr>
    @endforeach
</body>
</html>