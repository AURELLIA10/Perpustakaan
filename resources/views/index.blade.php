
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan sebagai salah satu sumber belajar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<div class="container" style="background:#ccc">
            <div class="alert alert-info text-center">
                <h4 style="margin-bottom: 10px"><b>Selamat datang </b>di Perpustakaan Bersama</h4>
            </div>
            <div>
                
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>

                <li class="nav-item">
                 <a class="nav-link" href="/buku">Data Buku</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/pinjam">Gallery Buku</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/pinjam">Peminjam</a>
                </li>
  
            </ul>
        </div>
    </nav>
</div>
<div class="col-md-12 mt-3">
    <img src="{{ asset('image') }}/banner.jpeg" width="100%" height="280px">
</div>
            <div>
                @yield('content')
            </div>
            <div class="col-md-12">
        <div class="row" style="background:#ccc">
      
        </div>
    </div>
        </div>
	
        <script>
  // Menangani klik tombol Tambah Buku
  document.getElementById("btnTambahBuku").addEventListener("click", function() {
    // Menampilkan modal
    $('#modalBukuTambah').modal('show');
  });
  document.getElementById("btnEditBuku").addEventListener("click", function() {
    // Menampilkan modal
    $('#modalBukuEdit').modal('show');
  });
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>


</body>
</html>
