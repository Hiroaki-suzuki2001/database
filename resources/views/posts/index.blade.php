<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset ="UTF-8">
        <title>Blogs</title>
        <link rel="stylesheet" href="~/environment/blog/recources/css/blog.css">
    </head>

        <body>
            @foreach($posts as $post)
            <div id=headline>
                {{$post->title}}
            </div>
            @endforeach
            @foreach($posts as $post)
            <div id=Honbun>
                {{$post->body}}
            </div>
            @endforeach
            <div id=Sonota>
                ここにその他の記事が入ります
            </div>
        </body>
</html>

