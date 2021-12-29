<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規投稿</title>
</head>
<body>
    <header></header>
    <main>
        <h1>新規投稿</h1>
        <form action="{{ route('contents.create') }}" method="post">
            @csrf
            @error('content')
                {{ $message }}
                <br>
            @enderror
            <textarea name="content"  cols="30" rows="10"></textarea>
            <input type="submit" value="投稿">
        </form>
    </main>
    <footer></footer>
</body>
</html>