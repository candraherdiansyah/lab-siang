<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Data Post</legend>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
            </tr>
            @foreach ($p as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>
                        <a href="{{ url('post/  ' . $post->id) }}">{{ $post->title }}</a>
                    </td>
                    <td>{{ $post['content'] }}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>

</html>
