<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    .post {
        width:50%;
        height:auto;
        margin:0 auto;
    }


</style>

<body>

    <ul>
        <a href="/"<li>back</li></a>
    </ul>

    <div class="post">
        <h1>{{ $post['title'] }}</h1>
        <p>{{ $post['text'] }}</p>

        <form action="/post/{{ $post->id }}" method="post" >
        @method("DELETE")
        @csrf
        
        <button>Delete Post</button>
    </form>
    </div>



    <br/>
    <br/>


</body>
</html>
