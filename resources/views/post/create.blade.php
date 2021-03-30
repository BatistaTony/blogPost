<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    #formulario {
        width:50%;
        height:auto;
        margin:0 auto;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        margin-top:30px;
    }

    #formulario input  {
        height:30px;
        width:100%;
    }

    #formulario textarea  {
        height:300px;
        width:100%;
        margin-top:10px;
    }

    button  {
        margin-top:20px;
        width:50%;
        height:50px;
        font-size:14pt;
    }

    .error {
        color:red;
        font-size:12pt;
        margin-top:15px;
    }

</style>

<body>

    <form id="formulario" action="/post" method="post">

    <input type="text" autocomplete="off" name="title" id="">

    <p class="error">@error('title') {{ $message }} @enderror</p>

    <textarea name="text" id="" cols="30" rows="10"></textarea>
    <p class="error">@error('text')  {{ $message }} @enderror</p>

    @csrf

    <button>post</button>

    </form>
</body>
</html>
