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
                <a href="{{url('admin')}}">balik</a>
                <a href="{{url('logout')}}">logout</a>
                <div class="title">list mahasiswa</div>
                @if(session('result'))
                 <div class="alert alert-success">
                    {{ session('result') }}
                    </div>
                    @endif
                <table>
                @if(count($ans)==0)
                <p>{{"Tidak ada yang ngelamar"}}</p>
                @endif
                    <tr>
                        <th>nama</th>
                        <th>mata kuliah</th>
                        <th>kelas</th>
                        <th>periode</th>
                        <th>Persetujuan</th>
                    </tr>
                    @foreach($ans as $hasil1)
                    <tr>
                        <td>{{$hasil1->nama}}</td>
                        <td>{{$hasil1->nama_mk}}</td>
                        <td>{{$hasil1->kelas}}</td>
                        <td>{{$hasil1->periode}}</td>
                        <td><a href="{{url('admin/set_asdos/'.$hasil1->id)}}">Daftar</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>