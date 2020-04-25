<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/welcome.css">
    <title>KindMessage | {{ $message->slug }}</title>
</head>
<body>
    <div class="banner">
        <h1> {{ $message->name }}</h1>
    </div>
    <div class="text">
    <p>
        {{ $message->message }}
    </p>

    </div>
    <div class="content">

    <h2> Reacties </h2>
        <div class="comment">
            <form method="POST" action="">
                @csrf
                <input type="text" name="content">
                <button type="submit"> Reageren </button>
            </form>
        </div>
    <div class="comments">
        @foreach($comments as $comment)
            <div class="single_comment">

                <p class="content">{{ $comment->content }}  <div class="created_at">{{ $comment->created_at ?? "Geen datum door een domme fout van Mohamed"}}</div></p>

            </div>
        @endforeach
    </div>
    </div>

</body>
</html>
