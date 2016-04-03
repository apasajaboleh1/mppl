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
                <a href="{{url('admin/get_asdos')}}">penerimaan asdos</a>
                <a href="{{url('logout')}}">logout</a>
                <div class="title">cari periode</div>
                <form name="cari" method="post" action="">
                {{ csrf_field() }}
                <label>Periode</label><br>
                <select name="periode">
                @if($res)
                @foreach($res as $hasil)
                    <option value="{{$hasil}}">{{$hasil}}</option>
                @endforeach
                @endif
                </select>
                <input type="submit" value="cari"></input>
                </form>
                <div class="title">list mahasiswa</div>
                <table>
                    <tr>
                        <th>nama</th>
                        <th>mata kuliah</th>
                        <th>kelas</th>
                        <th>periode</th>
                    </tr>
                    @foreach($tmp1 as $hasil1)
                    <tr>
                        <td>{{$hasil1->nama}}</td>
                        <td>{{$hasil1->nama_mk}}</td>
                        <td>{{$hasil1->kelas}}</td>
                        <td>{{$hasil1->periode}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>