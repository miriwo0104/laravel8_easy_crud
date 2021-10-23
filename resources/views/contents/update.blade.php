<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集</title>
</head>
<body>
    <header></header>
    <main>
        <h1>編集</h1>
        <form action="{{ route('contents.save') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $content_info->id }}">
            <textarea name="content"  cols="30" rows="10">{{ $content_info->content }}</textarea>
            <input type="submit" value="投稿">
        </form>
    </main>
    <footer></footer>
</body>
</html>