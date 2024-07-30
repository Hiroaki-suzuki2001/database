<!DOCTYPE =html>
<html lang='ja'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
    </head>
    <body>
        <h1 class="title">
            {{$post->title}} <!--postsからtitleのカラムを取得して表示-->
        </h1>
        <div class="body_section">
            <h3>本文</h3>
            <p>{{$post->body}}</p>
        </div>
        <div class ="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>