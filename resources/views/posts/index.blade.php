<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset ="UTF-8">
        <title>Blogs</title>
        <link rel="stylesheet" href="~/environment/blog/recources/css/blog.css">
    </head>

        <body>
            <h1>Blog names</h1>
            <div class ='posts'>
                @foreach($posts as $post)
                    <div class='post'>
                        <h2 class ='title'><a href ="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                        <p class ='body'>{{$post->body}}</p>
                    </div>
                @endforeach
            </div>
            <div class ='paginate'>{{$posts -> links()}}</div>

        </body>
</html>

