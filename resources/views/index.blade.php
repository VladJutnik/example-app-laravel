<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пример странциы</title>
</head>
<body>
<h1>Авторы: wdwdwdwdwdwdwdwd wdwdw </h1>
<a href="/login">Твой вход</a>
@foreach($users as $key => $user)
    <ul><b> <a href="autor.php?id={{$user->id}}">{{$user->name}}</a></b></ul>
    @foreach($user->books as $book)
        <li>{{$book->name}}</li>
    @endforeach
@endforeach
<?/*
foreach ($users as $key => $user):
endforeach;
*/?>
</body>
</html>
