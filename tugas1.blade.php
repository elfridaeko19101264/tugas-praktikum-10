<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    width : 1000px;
    border: 1px solid black;
    border-collapse: collapse;
    padding :10px;
    font-family: tahoma;
}

h1 {
    font-family:tahoma;
}

.link-button{
		text-decoration: none;
		background-color: #eeeeee;
		color: #00CED1;
		padding: 2px 6px 2px 6px;
		border: 1px solid #c2c2c2;
		border-radius:2px;
        font-family: tahoma;
	}


</style>
	<title>Daftar Kategori</title>
</head>
<body>
    <center>
        <h1>Data Kategori</h1>
        <h3 style="font-family:tahoma;">Jumlah data:  {{ $JRek }}</h3>
        
        
        <table>
            <thead>
                <tr>
                    <th style="background-color: #00CED1;" ></th>
                    <th style="background-color: #00CED1;">ID Kategori</th>
                    <th style="background-color: #00CED1;">Kategori</th>
                    <th style="background-color: #00CED1;">Keterangan</th>
                    <th style="background-color: #00CED1;"> Aksi </th>
                </tr>
            </thead>

            <tbody>
            @foreach($KData as $dt=>$nval )
                <tr>
                    <td>{{ $dt+1 }}</td>
                    <td> {{ $nval->id }}</td>
                    <td> {{ $nval->kategori }} </td>
                    <td> {{ $nval->keteragan }} </td>
                    <td><a href="http://localhost:8000/prak10/{{ $nval->id }}/edit" class="link-button">Edit</a></td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <h3>
        <a href="http://localhost:8000/prak10/create" class="link-button">Tambah Data</a>
        </h3>

        

    </center>
</body>
</html>