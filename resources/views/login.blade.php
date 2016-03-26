<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: top;
            }
            .content {
                text-align: center;
                display: inline-block;
            }
            .title {
                font-size: 96px;
            }
            p{
                color:red;
                font-size: 20px;
                font-family: serif,sans-serif;
            }
        </style>
    </head>
    <body>
        <nav>
            
        </nav>>
        <div class="container">
            <div class="content">
                <div class="title">Form Login</div>
                <p>{{ ($message != '' ? $message : '') }}</p>
                <form name="login" method="post" action="">
                {{ csrf_field() }}
                <label for="">Username</label><br>
                <input type="text" name="username"><br><br>
                <label for="">Password</label><br>
                <input type="password" name="password"><br><br>
                <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </body>
</html>