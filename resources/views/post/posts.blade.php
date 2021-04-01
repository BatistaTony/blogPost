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

     @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Menu</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
    @endif

    @auth


<ul>
        <a href="/make_post"<li>Make Post</li></a>
    </ul>

    @forelse($posts as $post)


    <div class="post">
       <a href="/post/<?php echo $post['id'] ?>"+><h1><?php echo $post['title']; ?></h1></a>
        <p><?php  echo $post['text']; ?></p>
    </div>



    <br/>
    <br/>

    @empty
    <h1>No posts available</h1>

    @endforelse


    @else
    <h1>You need to log in first</h1>


  @endauth


</body>
</html>
