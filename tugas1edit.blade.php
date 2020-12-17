<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Kategori</title>
</head>
<body>

<center>
    <h1>Edit  Data Kategori ID :{{ $eDT->id }}</h1>
        <form method="POST" action="http://localhost:8000/prak10/{{$eDT->id}}">
            @csrf()
            @method('PUT')
            <div class="txlabel">Kategori</div>
            <div class="inputext"><input type="text" name="txkat" value="{{ $eDT->kategori }}"></div>
            <br>
            <div class="txlabel">Deskripsi</div>
            <div class="inputext"><input type="text" name="txdesk" value="{{ $eDT->keteragan }}"></div>
            <br>
            <div class="tombol">
            <input type="submit" class="btn" name="btnkirim" value="Update Data">
            </div>
            <br>
        </form>

        <form method="post" action="http://localhost:8000/prak10/{{$eDT->id}}">
            @csrf()
            @method('DELETE')
            <div class="tombol">
            <input type="submit" class="btn" name="btnkirim" value="Delete Data">
            </div>
        </form>
        </center>
</body>
</html>