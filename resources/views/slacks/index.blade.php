<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <form action="{{ route('slack.send') }}" method="post">
            @csrf
            @error('str')
                {{ $message }}
                <br>
            @enderror
            <input type="text" name="str">
            <button type="submit">送信</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>