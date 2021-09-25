<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Home</title>
    </head>
    <body>
        <h2 style="text-align: center;" >Hasil Database dengan Laravel</h2>
        <p><b>Menampilkan semua data dari tabel article pada database minggu4_model</b></p>
        <ol> 
            @foreach ($articles as $article) 
            <li>{{ $article }}</li>
            @endforeach
        </ol>
    </body>
</html>