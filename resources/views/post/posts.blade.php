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
        <a href="/make_post"<li>Make Post</li></a>
    </ul>

    @forelse($posts as $post)

   
    <div class="post">
       <a href="/post?id=<?php echo $post['id'] ?>"+><h1><?php echo $post['title']; ?></h1></a>
        <p><?php  echo $post['text']; ?></p>
    </div>



    <br/>
    <br/>

    @empty
    <h1>No posts available</h1>

    @endforelse

</body>
</html>
