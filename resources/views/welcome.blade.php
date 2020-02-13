<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/welcome.css">
    <title>Mohamed El Yousfi</title>
</head>
<body>
    <div class="banner">
        <h1> Mohamed El Yousfi</h1>

        <form method="POST" action="/messages">
            @csrf
            <label for="slug">Unieke code</label><br><input type="text" name="slug" id="slug"><br>
            <button type="submit">Indienen!</button>
        </form>
    </div>
    <div class="text">
        Wanneer je jouw unieke code indient, dan krijg je een leuk berichtje te zien :)
    </div>


</body>
</html>
