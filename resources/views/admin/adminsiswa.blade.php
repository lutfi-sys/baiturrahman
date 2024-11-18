<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #ffffff;
            height: 8vh;
            top: 0;
            right: 0;
        }

        .header-nav {
            padding-top: 10px;
            padding-right: 50px;
            text-align: right;
            color: #43917a
        }

        .sidebar {
            background-color: #ffffff;
            color: rgb(14, 138, 62);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            padding: 20px;
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

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .logo {
            width: 130px;
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

        .content-form {
            background-color: #ffffff;
            color: rgb(14, 138, 62);
            border-bottom-style: solid;
            border-color: #43917a;
            position: fixed;
            width: 75%;
            padding: 20px;
            transition: all 0.3s ease;

        }

        .label {
            color: #43917a;
            text-indent: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="header-nav">
            <?php
            date_default_timezone_set('America/New_York');
            echo 'Today : ' . date('d-m-Y') . '';
            ?>
            <button
                style="display: inline-block; border-style: none; width: 100px; color:white; height: 40px; background-color: #43917a; border-radius:10px; ">logout</button>
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
                <li style=" background-color: #f4f4f4;  color: #43917a; border-radius: 5px;"><a href="/home"><i
                            class="fas fa-home"></i> Dashboard</a></li>
                {{-- <li><a href="/berita"><i class="fas fa-chart-bar"></i> Berita</a></li>
                <li><a href="/profil"><i class="fas fa-chart-bar"></i> Profil</a></li>
                <li><a href="/surat"><i class="fas fa-chart-bar"></i> Persuratan</a></li>
                <li><a href="/pegawai"><i class="fas fa-users"></i> Pegawai</a></li> --}}
                <li><a href="/ppdb"><i class="fas fa-file-alt"></i> Informasi PPDB</a></li>
                {{-- <li><a href="/sosmed"><i class="fas fa-play"></i> Sosial Media</a></li> --}}
                <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="content-header">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb" class="container mt-1">
                <ol class="breadcrumb" style="background-color: #ffffff;  width: 94%; ">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        {{-- tampilan konten --}}
        <div class="content-admin">
            <div class="row">
                <div class="col-lg-7" id="">
                    <div class="row  p-lg-0 " style="margin-left: 10%;">
                        {{-- <div class="col-lg-4 rounded " style="background-color: rgb(32, 160, 81); top:30px; height: 100px;">
                            <h5 style="color: whitesmoke"><b>Pegawai</b></h5>
                            <h1 style="text-align: center; color:rgb(143, 242, 181)"><b>20</b></h1>
                        </div>
                        <div class="col-lg-4 rounded " style="background-color: rgb(14, 138, 62); left:50px; top:30px; ">
                            <h5 style="color: whitesmoke"><b>Perita</b></h5>
                            <h1 style="text-align: center; color:rgb(143, 242, 181)"><b>5</b></h1>
                        </div> --}}
                    </div>

                </div>
            </div>

        </div>



    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
