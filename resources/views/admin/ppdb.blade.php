<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
   <style>
        html {
            scroll-behavior: smooth;
         }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }
        .header{
            background-color: #ffffff;
            height: 8vh;
            position: sticky; top: 0;
            top: 0;
            right: 0;
        }
        .header-nav{
            padding-top: 10px;
            padding-right: 50px;
            text-align: right;
            color: #43917a
        }
        .sidebar {
            background-color: #ffffff;
            color: rgb(14, 138, 62);
            height: 1000vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            padding: 20px;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar-nav ul {
            list-style: none;
            padding: 0;
        }

        .sidebar-nav li {
            margin-bottom: 10px;
        }

        .sidebar-nav li a {
            display: block;
            padding: 10px;
            color: #43917a;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar-nav li a:hover {
            background-color: #f4f4f4;
            border-style: solid;
            border-width: 3px;
            border-color: #43917a;
            color: #43917a;
        }

        /* Untuk seluruh scrollbar */
        ::-webkit-scrollbar {
            width: 12px;               /* Lebar scrollbar vertikal */
            height: 12px;              /* Tinggi scrollbar horizontal */
        }

        /* Bagian track dari scrollbar */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;       /* Warna track */
        }

        /* Bagian thumb dari scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: #888;    /* Warna thumb */
            border-radius: 10px;       /* Sudut bulat pada thumb */
            border: 3px solid #f1f1f1; /* Memberikan padding di sekeliling thumb */
        }

        /* Hover effect pada thumb */
        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;    /* Warna thumb saat dihover */
        }

        /* Untuk scrollbar horizontal */
        ::-webkit-scrollbar-thumb:horizontal {
            background-color: #888;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            height: calc(100vh - 8vh);
            transition: all 0.3s ease;
            overflow-y: auto;
        }

        .content::-webkit-scrollbar{
          width: 8px;
        }

        .content::-webkit-scrollbar-thumb{
          background-color: #555
        }

        .content {
            scrollbar-width: thin;
            scrollbar-color: #555 #f1f1f1;
        }

        .logo {
            width: 150px;
            height: 150px;
            margin: 0 auto;
            margin-bottom: 20px;
            border-radius: 50%;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
        }

        .content-form{
            
            background-color: #ffffff;
            color: rgb(14, 138, 62);
            border-bottom-style: solid;
            border-color: #43917a;
            position: relative; top: 20px; left: 60px;;
            width: 90%;
            padding: 20px;
            transition: all 0.3s ease;

        }
        .label {
            color: #43917a;
            text-indent: 20px; 
        }

        .content-table{
          
        }
        
    </style>
</head>
<body>
    <div class="header">
        <div class="header-nav">
            <?php 
            date_default_timezone_set("America/New_York");
            echo "Today : ". date("d-m-Y")."";
            ?>
            <button style="display: inline-block; border-style: none; width: 100px; color:white; height: 40px; background-color: #43917a; border-radius:10px; ">logout</button>
        </div>
    </div>
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
        </div>
        <div class="sidebar-nav">
            <ul>
              <li><a href="/home"><i class="fas fa-home"></i> Dashboard</a></li>
              <li><a href="/berita"><i class="fa fa-newspaper" ></i> Berita</a></li>
              <li><a href="/profil"><i class="fa fa-address-card"></i> Profil</a></li>
              <li><a href="/surat"><i class="fa fa-envelope"></i> Persuratan</a></li>
              <li><a href="/pegawai"><i class="fas fa-users"></i> Pegawai</a></li>
              <li style=" background-color: #f4f4f4;  color: #43917a; border-radius: 5px;"><a href="/ppdb"><i class="fas fa-file-alt"></i> Informasi PPDB</a></li>
              <li><a href="/sosmed"><i class="fas fa-play"></i> Sosial Media</a></li>
              <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="content-header">
            <div class="loc" style="padding-left:5%">
                <ol class="breadcrumb" style="background-color: #ffffff;  width: 94%; ">
                    <li class="breadcrumb-item"><a href="/beranda">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">PPDB</li>
                  </ol>
            </div>
        </div>
        <div class="content-form">
            <div class="">
                <div id="accordion2" class="" role="tablist" aria-multiselectable="false" style="margin-bottom: 5px; ">
                <div class="" style="border-bottom:1px solid #bababa">
                  <div class="" role="tab" id="headingThree2">
                    <h6 class="">
                      <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="true" aria-controls="collapseThree2">
                        Daftar Sekolah <span><i class="fa fa-plus-square tx-30"  aria-hidden="true"></i></span>
                      </a>
                    </h6>
                  </div>
                  <div id="collapseThree2" class="collapse show" role="tabpanel" aria-labelledby="headingThree2">
                    <div class="card-block pd-20">
            
             <form class="" method="POST" action="" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label"><b>Nama</b></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-2 col-form-label"><b>NIK</b></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>
                        <label for="nik" class="col-sm-2 col-form-label"><b>NIK</b></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>
                      </div>
                    <div class="mb-3 row">
                        <label for="asal" class="col-sm-2 col-form-label"><b>Sekolah Asal</b></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="asal" name="asal" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nilai" class="col-sm-2 col-form-label" ><b>Nilai Rata-Rata</b></label>
                        <div class="col-sm-10">
                        <input type="text" name="nilai" id="nilai" class="form-control " placeholder="" aria-describedby="helpId" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="akta" class="col-sm-2 col-form-label"><b>Akta Kelahiran</b></label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="akta" name="akta" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kk" class="col-sm-2 col-form-label"><b>Kartu Keluarga</b></label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="kk" name="kk" required>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="ijazah" class="col-sm-2 col-form-label"><b>Ijazah</b></label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="ijazah" name="ijazah" required>
                        </div>
                      </div>
                    
                      <button class="btn btn-success col-12  mt-2 update" type="submit"></span> Simpan</button>
             </form>
            </div>
          </div><!-- collapse -->
        </div><!-- card -->
      </div><!-- accordion -->
    </div>
    <div class="content-table">
        <div class="container bg-white p-3 mt-3">
          
        
         </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>