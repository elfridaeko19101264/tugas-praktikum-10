<!DOCTYPE html>
<html>
<head>

	<title>Tambah Data Kategori</title>
</head>
<body>

<center>
    <h1>Menambahkan Data Kategori</h1>

        @if(count($errors) > 0)
            <div>
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="http://localhost:8000/prak10">
            @csrf()
            @method('POST')
            <div class="txlabel">Kategori</div>
            <div class="inputext"><input type="text" name="txkat">
            @if($errors->has("txkat"))
                <span>Tidak Boleh Kosong</span>
            @endif
            </div>
            <div class="txlabel">Deskripsi</div>
            <div class="inputext"><input type="text" name="txdesk">
            @if($errors->has("txdesk"))
                <span>Tidak Boleh Kosong</span>
            @endif
            </div>
            <br>
            <div class="tombol">
            <input type="submit" class="btn" name="btnkirim" value="Buat Data">
            </div>
        </form>
        </center>
</body>
</html>