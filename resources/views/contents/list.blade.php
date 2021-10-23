<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>投稿一覧</title>
</head>
<body>
    <header></header>
    <main>
        <h1>投稿内容</h1>
        <ul>
            <li><a href="{{ route('contents.create') }}">新規投稿</a></li>
        </ul>

        @foreach ($content_infos as $content_info)
            <div>{{ $content_info->content }}</div>
            <div>{{ $content_info->updated_at }}</div>
            <a href="{{ route('contents.update', ['content_id' => $content_info->id]) }}">編集</a>
            <a href="{{ route('contents.delete', ['content_id' => $content_info->id]) }}">削除</a>
            <br>
            <br>
        @endforeach
    </main>
    <footer></footer>
</body>
</html>