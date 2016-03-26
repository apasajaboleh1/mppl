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
            table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
        </style>
    </head>
    <body>
        <nav>
            
        </nav>>
        <div class="container">
            <div class="content">
                <p>{{ "Login as ".Session::get('name')}}</p>
                @if(session('result'))
                 <div class="alert alert-success">
                    {{ session('result') }}
                    </div>
                    @endif
                <a href="{{url('mahasiswa')}}">Balik</a>
                <a href="{{url('logout')}}">logout</a>
                <div class="title">List Asdos Yang tersedia</div>
                <form name="cari" method="post" action="">
                {{ csrf_field() }}
                @if(count($tmp1)==0)
                <p>{{"Not Found"}}</p>
                @endif
                <label>Periode</label><br>
                <select name="id">
                @foreach($tmp1 as $hasil)
                    <option value="{{$hasil->id}}">{{$hasil->nama_mk."  (".$hasil->kelas.")"}}</option>
                @endforeach
                </select>
                <input type="submit" value="cari"></input>
                </form>
            </div>
        </div>
    </body>
</html>