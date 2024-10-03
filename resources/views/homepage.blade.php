
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content='Samhan Logistics menyediakan berbagai layanan pengiriman (Ekspres, Kargo, FTL/ LTL, LCL, Alat Berat dan Manajemen Rantai Pasokan) yang terintegrasi teknologi mutakhir. Sehingga, Samhan Logistics selalu berkeinginan "Menghadirkan Kemudahan" bagi seluruh kebutuhan pelanggan.'>
    <link rel="stylesheet" href="https://samhanlogistic.com/assets/samhan/css/samhan.css">


    <style> @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Rubik&display=swap'); </style>
    
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Josefin+Sans:wght@300;500&family=Open+Sans:ital@1&display=swap');
    </style>

    <link rel="icon" type="image/png" href="https://samhanlogistic.com/assets/samhan/image/iconsamsan.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://samhanlogistic.com/assets/samhan/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://samhanlogistic.com/assets/samhan/css/animate.min.css">
    
    <script src="https://samhanlogistic.com/assets/samhan/js/jquery-3.5.0.js"></script>
	
	<script src="https://samhanlogistic.com/assets/samhan/js/bootstrap.min.js"></script>

	<!-- owl-carousel -->
    <link rel="stylesheet" href="https://samhanlogistic.com/assets/samhan/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://samhanlogistic.com/assets/samhan/owl/assets/owl.theme.default.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	
	
	<!--FANCYBOX-->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<link
	  rel="stylesheet"
	  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
	/>


	<link rel="stylesheet" href="https://samhanlogistic.com/assets/samhan/navbar.css">
    <title>SAMHAN LOGISTIC</title>
    <style>
        :root{
            --border:2px solid black;
        }
        body{
            margin:0px;
            padding:0px;
        }
        
		.nav-item{
			margin-left:30px;
		}
		.nav-item a{
		    font-size:1rem;
		    
		}
		.nav-link {
		    font-weight:bold!important;
		}
       .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {
            color: rgba(255,0,0,.9)!important;
        }
        .dropdown-menu {
            border: none!important;
            /* border-radius: 0.25rem; */
        }
        .navbar{
            /* border: var(--border);*/
        }
        .menukiri{
            position: relative;
            left: 0;
        }
        .boxform{
            border-radius: 10px;
            border:var(--border);
            text-align: center;
            padding:10px;
        }
        
        .box{
            border: var(--border);
        }
        .text-justify {
          
          text-align: justify;
        }
        .paket{
            padding: 0px!important;
        }
        .paket .col .box{
            min-height: 380px;
        }
        /* footer{
            background: linear-gradient(to right, #dedede,#857f7f);
        } */
        .footcontent{
            position: relative;
            background-color: #E62029;
            color: white;
            padding-bottom:70px!important;
            /* font-weight: bold; */
        }
        .footcontent::after{
          position: absolute;
          right: 0px;
          bottom: 0px;
          /*width:100%;*/
          content: url(https://samhanlogistic.com/assets/samhan/image/footer.png);

        }
        .footcontent td span i{
          color: #E62029;
          background-color: white;
          width: 25px;
          height: 25px;
          text-align: center;
          border-radius: 50%;
          padding-top: 5px;
          margin-right: 10px;
        }
        .buttonwhite{
          padding: 10px 20px;
          color: #E62029;
          border-radius: 3px;
          font-weight: bold;
          font-size: 0.9rem!important;
          background-color: #F2F2F2;
          max-width: 160px;
        }
        .ftitle{
          font-weight: bold;
          color: white;
          position: relative;
          padding-bottom: 10px;
          font-size: 1.2rem;

        }
        .ftitle::after{
          content: '';
          position: absolute;
          left: 0px;
          bottom: 0px;
          width: 20%;
          border-bottom: 5px solid white;
        }

        .fbutton{
          background-color: white;
          padding: 5px;
          border-radius: 20px;
          text-align: center;
          max-width: 210px;
        }
        .news{
          position: relative;
          min-height: 210px;
          padding: 0px;
          overflow: hidden;
        }
        .newsafter{
          position: absolute;
          width: calc(100% - 20px);
          height: 5px;
          right: 20px;
          background-color: white;
          bottom: 30px;
          z-index: 1000;
        }
        .news .newstitle{
          position: absolute;
          width: 50%;
          height: 100%;
          color: white;
          text-align: right;
          vertical-align: bottom;
          background: rgba(230,32,41,.7);
          right: 0px;
          top: 0px;
          display: flex;
          justify-content: flex-end;
          align-items: flex-end;
          padding: 20px;
          padding-bottom: 40px;
        }
        .news .newstitle:hover{
			width: 80%;
			background: rgba(230,32,41,.4);
			transition:.8s ease;
		}
        .bgnews{
          background: linear-gradient(to right,grey,#fff);
        }

        .brandsection{
          /* background-color: #E62029; */
          font-weight: bold;
          background: linear-gradient(to right, #E62029 70%, black);
          color: white;
          padding: 20px;
          font-size: 2rem;
          border: none;
        }
        #formongkir2{
                 display:none;
             }
        #sectionlayanan{
          background-image: url(/assets/samhan/image/2dunia.png);
          background-position: center;
          background-size: cover;
          min-height: 370px!important;
        }
        .layanan{
          margin-top: 50px;
          position: relative;
          background-color: white;
          padding: 10px;
          max-width: 300px!important;
          min-height: 200px!important;
        }

        .layanan .layananicon{
          position: absolute;
          top: -40px;
          width: 80px;
          padding: 10px;
          height: 80px;
          border:5px solid #E62029;
          border-radius: 10px;
          background-color: white;
          text-align: center;
        }
        .layanantitle{
          font-weight: bold;
        }

        /* Home top */
        .box-round{
          border: 1px solid black;
          border-radius: 10px;
        }
        .box-round2{
          border: 1px solid black;
          border-radius: 10px;
        }
        .box-round .card-body{
          padding: 0px!important;
          padding-top: 5px!important;
        }
        /* Produk Layanan */
        .sectionresi{
          background: linear-gradient(to right, white,#C0C0C0);
          padding-top: 30px;
          padding-bottom: 30px;
        }
        .produklayananlist{
          position: relative;
          margin-top: 10px;
          padding: 10px;
          margin-left: 80px;
          background: linear-gradient(to right,#E7E6E6,#EAEAEA);
          max-width: 280px;
        }
        #imageproduklayanan{
          position: relative;
          padding: 0px;
          margin: 0px;
        }
        #imageproduklayanan::before{
          position: absolute;
          display: block;
          content: "";
          width: 10px!important;
          height: 60%!important;
          right: -40px;
          bottom: 0px;
          z-index:10000;
          background-color: red;

        }
        .produklayananicon{
          position: absolute;
          left:-100px;
          width: 90px;
          padding: 12px;
          height: 90px;
          border:5px solid #E62029;
          border-radius: 10px;
          background-color: white;
          text-align: center;
        }
		.sectionresi{
          position: relative;
          
        }
        .sectionresi::after{
          position: absolute;
          display: block;
          content: "LOGISTIC";
		  width: 10px!important;
		  font-size:4.8em;
		  font-weight:bold;
		  transform: rotate(-90deg);
          right: 120px;
          bottom: 20px;
          color:white;

        }
		
		.toogle2{

          display: none;

        }
        #menuhp{
            display:none;
        }
        .page-link {
            color: #fd0d6e;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff!important;
            background-color: #fd0d6e;
            border-color: #fd0d6e;
        }
        
        .menukiri a{
            display:block;
            height:80px!important;
        }
        main{
			    margin-bottom:1rem;
		}
        /*On mobile*/
        .bgnews{
            margin-bottom:1rem;
        }
        #headerberita{
            margin-top: 0.5rem;
        }
        .rounded .card-body{
            border-radius:10px!important;
            overflow:hidden;
        }
		.tabbar{
				display:none!important;
			}
		.produklayananicon{
		    top:5px;
		}
        @media only screen and (min-width:1790){
            .nav-item{
			margin-left:40px;
    		}
    		.nav-item a{
    		    font-size:1.3rem;
    		}
			.tabbar{
				display:none;
			}
			
        }
		 @media only screen and (min-width:1000){
			 
		 }
		@media only screen and (max-width: 900px) {
		    .listdrop{
		        display:none;
		    }
			.tabbar{
				display:flex!important;
			}
			/*.footcontent {*/
			/*	margin-bottom:50px;*/
			/*}*/
		    #formongkir{
                 display:none;
                }
                #formongkir2{
                    display:block;
                }
		    #headerberita{
                margin-top: 0rem!important;
            }
		    #boxhome{
		        margin:0px!important;
		    }
		    #carouselExampleIndicators{
		        margin:0px!important;
		    }
		    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
                background: white;
                color: black;
                
                /*padding: 5px 2px!important;*/
                margin-top:5px;
               display:none;
                /*font: inherit;*/
            }
            .owl-prev{
                margin-left:35%;
                width:10%!important;
            }
            .owl-next{
                margin-left:2%;
                width:10%!important;
            }
            .owl-prev span{
                font-size:12px!important;
            }
            .owl-next span{
                font-size:12px!important;
            }
		    .bgnews{
                margin-bottom:0px!important;
            }
		    .sectionresi{
			    padding-top:0px!important;
			 
			}
			#sectionproduklayanan{
			    padding-top:10px!important;
			}
			#mainongkir{
			    margin-top:0px;
			}
			main{
			    margin-bottom:0px!important;
			}
			#sectionlayanan{
			  background-image: url(/assets/samhan/image/dunia.png);
			 
			}
		
			.sectionresi::after {
			    font-size:2.5rem!important;
			    right:30px;
			    /*bottom:100px;*/
			}
			 #menuhp{
                display:block;
                position:fixed;
                padding:20px 30px;
                right:-400px;
                top:55px;
                width:400px;
                height:100vh;
                background:rgba(232,31,41,0.7);
                color:black;
                z-index:9999;
                transition: 0.8s all ease;
                font-family:arial!important;
            }
             #menuhp a{
                 text-decoration:none;
                 color:white;
                 font-weight:bold;
                 font-size:14px;
                 
             }
            .sidebaractive{
                right: 0px!important;
                transition: 0.8s all ease;
            }
            *{
             
                font-size:14px!important;
            }
            #headerberita{
                font-size:14px;
            }
            .bgnews{
                margin-top:0px!important;
            }
            .sectionresi{
                width:100%!important;
                overflow:hidden;
            }
            /*.sidebar.sidebaractive ~ .main{*/
            /*    left:0px!important;*/
            /*    width: 100%!important;*/
            /*    transition: 0.8s all ease;*/
            /*}*/
			.toogle2{

			  display: block;
			  position:absolute;
			  z-index:1000;
			  top:20px;
			  right:20px;
			  font-size:24px;

			}
			.menukiri a img{
				height:40px;
			}
			.menukiri a{
                display:block;
                height:40px!important;
                width:150px!important;
            }
			.footcontent::after{
			  position: absolute;
			  display:none;
			  right: 0px;
			  bottom: 0px;
			  max-width:80%;
			  content: url(https://samhanlogistic.com/assets/samhan/image/footer.png);

			}
			
			.produklayananicon{
			  left:-90px;
			  
			}
			.fbutton img{
			    height:50px!important;
			}
			.produklayananlist{
				margin-left: 110px;
			}
			.news{
				margin-left:20px;
				margin-bottom:10px;
			}
			
			.text-whiteboxshadow{
			    margin-top:10px;
			}
			.navbar {
			    border:none;
			    -moz-box-shadow:0 5px 5px rgba(182, 182, 182, 0.75);
                -webkit-box-shadow: 0 5px 5px rgba(182, 182, 182, 0.75);
                box-shadow: 0 5px 5px rgba(182, 182, 182, 0.75);
			}
		}
        
    </style>
</head>
<body>
		<i class="fa fa-bars toogle toogle2" aria-hidden="true"></i>
        <nav class="navbar navbar-expand-lg navbar-light bg-white container-fluid">

        <div class="container-fluid">
            <div class="col-3 menukiri">
                <a href="https://samhanlogistic.com/"><img src="https://samhanlogistic.com/assets/samhan/image/logo.png" alt="" srcset="" height="80px" style=""></a>
            </div>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Layanan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://samhanlogistic.com/layanan/produk">Produk Layanan</a></li>
                  <li><a class="dropdown-item" href="https://samhanlogistic.com/layanan/jaminan">Jaminan Layanan</a></li>
                  <!--<li><a class="dropdown-item" href="https://samhanlogistic.com/layanan/khusus">Layanan Khusus</a></li>-->
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/cektarif">Cek Ongkir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/cekresi">Cek Resi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/kerjasama">Kerjasama Bisnis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/berita">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/tentangkami">Tentang</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="btn btn-outline-dark" type="submit"><i class="fa fa-globe me-2"></i>Indonesia</button>
            </form>
          </div>
        </div>
      </nav>
    <div id="menuhp">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              
              <li class="nav-item ">
                <a class="nav-link menudrop" href="#" id="navbarDropdown" role="button" >
                  Layanan
                </a>
                <ul class="listdrop" aria-labelledby="navbarDropdown">
                  <li><a class="" href="https://samhanlogistic.com/layanan/produk">Produk Layanan</a></li>
                  <li><a class="" href="https://samhanlogistic.com/layanan/jaminan">Jaminan Layanan</a></li>
                  <!--<li><a class="" href="https://samhanlogistic.com/layanan/khusus">Layanan Khusus</a></li>-->
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/cektarif">Cek Ongkir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/cekresi">Cek Resi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/kerjasama">Kerjasama Bisnis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/berita">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="https://samhanlogistic.com/tentangkami">Tentang</a>
              </li>
            </ul>
    </div>    
    <main>
	    <div id="carouselExampleIndicators" class="carousel slide mb-2" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                            <img src="https://samhanlogistic.com/assets/slide/WhatsApp_Image_2023-08-02_at_15_54_53_(2).jpeg" class="d-block w-100" alt="...">
                            </div><div class="carousel-item">
                            <img src="https://samhanlogistic.com/assets/slide/WhatsApp_Image_2023-08-02_at_15_54_53_(1).jpeg" class="d-block w-100" alt="...">
                            </div><div class="carousel-item">
                            <img src="https://samhanlogistic.com/assets/slide/WhatsApp_Image_2023-08-02_at_15_54_53.jpeg" class="d-block w-100" alt="...">
                            </div>              <!-- <div class="carousel-item active">
                <img src="https://samhanlogistic.com/assets/samhan/image/slide.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://samhanlogistic.com/assets/samhan/image/slide.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://samhanlogistic.com/assets/samhan/image/slide.jpg" class="d-block w-100" alt="...">
              </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!-- cek resi and produk layanan -->
        <style>
            
             #imageproduklayanan img{
                    margin-top:300px!important;
                }
             
             .layanan{
                 border-radius:10px!important;
                max-width:400px!important;
                min-height:350px!important;
            }
            @media only screen and (max-width: 900px) {
               #loadingpage img{ 
                 width:300px;
                }
                #loadingtext{
                     top:-50px;
                 }
                
                #imageproduklayanan::before {
                    left: 330px;
                    bottom:30px;
                    
                }
                #imageproduklayanan img{
                    -webkit-transform: scaleX(-1);
                    transform: scaleX(-1);
                }
                #boxhome{
                    margin-top:5px!important;
                    width:90%!important;
                    margin-left:5%!important;
                }
                #imageproduklayanan img{
                    margin-top:40px!important;
                }
                #formvolume{
                    display:none;
                }
                .layanan{
                    max-width:none!important;
                    
                    min-height:280px!important;
                }
            }
            
        </style>
        <div id="loadingpage">
          <img src="https://samhanlogistic.com/assets/samhan/samhan.gif" ">
          <br>
          <h5 id="loadingtext">Samhan Logistic</h5>
      </div>
      <div class="sectionresi">
         
        <div class="row col-md-12 justify-content-center mb-4" id="boxhome">
          <div id="mainongkir" class="col-md-6 mt-3 mt-md-0  col-xs-8 bg-white text-whiteboxshadow  card me-sm-2 mt-1">
            <div class="card-body">
              <h5 class="card-title text-center">Cek Ongkir</h5>
              <form method="post" action="https://samhanlogistic.com/cektarif/main">
              <table class="table mb-0 pb-0" id="formongkir">
                  <tr>
                      <th>Asal</th>
                      <th></th>
                      <th>Tujuan</th>
                      <th>Berat</th>
                      
                  </tr>
                  
                  <tr>
                      <td><select class="form-control kota autoselect" name="asal" id="asal">
							<option value="Batang">Batang</option>
							<option value="Pekalongan">Pekalongan</option>
							<option value="Kab.Pekalongan">Kab.Pekalongan</option>
							<option value="Semarang">Semarang</option>
							<option value="Kab. Semarang">Kab. Semarang</option>
						</select></td>
                      <td><i class="fa fa-arrow-right" aria-hidden="true"></i></td>
                      <td><select class="form-control kota autoselect" name="idkec" id="idkec">
                                  
                                </select></td>
                      <td><input type="number" name="berat" class="form-control"  min="0" max="9000"></td>
                  </tr>
              </table>
              <div class="row" id="formvolume">
                    <div class="col-12 text-center">Volume</div>
                     <div class="col-4 p-0"><input type="number" class="form-control col-12 panjang"  min="0" max="9000" name="panjang2" placeholder="Panjang (cm)">
                     </div>
                     <div class="col-4 px-1"><input type="number" class="form-control lebar"  min="0" max="9000" name="lebar2" placeholder="Lebar (cm)">
                     </div>
                     <div class="col-4 p-0"><input type="number" class="form-control tinggi"  min="0" max="9000" name="tinggi2" placeholder="Tinggi (cm)">
                     </div>
                  </div>
              
              <button type="submit" class="btnsamhan col-lg-12 mt-1 mb-2" name="submit">CHECK</button>
              </form>
            </div>
          </div>
          <div class="col-md-2  bg-white text-whiteboxshadow  card">
            <div class="card-body">
				<form method="post" action="https://samhanlogistic.com/cekresi/cari">
              <h5 class="card-title text-center">Cek Resi</h5>
              <table class="table" id="formresi">
                  <tr>
                      <th>No. Resi</th>
                     
                      
                  </tr>
                  <tr>
                      <td><input type="text" name="kode" class="form-control"></td>
                     
                  </tr>
              </table>

              <button type="submit" class="btnsamhan col-lg-12 mt-0 mb-2">CHECK</button>
			  </form>
            </div>
          </div>
      </div>
        <div class="container" id="sectionproduklayanan">

        
          <h6  style="font-weight: bold;">PRODUK LAYANAN</h6>
          <div class="row produklayanan">
            <div class="col-lg-6">
              <div class="produklayananlist">
                <div class="produklayananicon">
                  <img src="https://samhanlogistic.com/assets/samhan/png/standard.png" alt="" srcset="" width="60px">
                </div>
                <div class="layanantitle">
                  KARGO STANDAR
                </div>
                <p>
                  Layanan Pengiriman<br>11 - 50 Kg</p>
              </div>

              <div class="produklayananlist">
                <div class="produklayananicon">
                  <img src="https://samhanlogistic.com/assets/samhan/png/jumbo.png" alt="" srcset="" width="50px">
                </div>
                 <div class="layanantitle">
                  KARGO JUMBO
                </div>
                <p>
                  Layanan Pengiriman<br>51 - 100 Kg</p>
              </div>

              <div class="produklayananlist">
                <div class="produklayananicon">
                  <img src="https://samhanlogistic.com/assets/samhan/png/ekonomis.png" alt="" srcset="" width="50px">
                </div>
                <div class="layanantitle">
                  KARGO EKONOMIS
                </div>
                <p>
                  Layanan Pengiriman<br>101 - 250 Kg</p>
              </div>
              
              
               <div class="produklayananlist">
                <div class="produklayananicon">
                  <img src="https://samhanlogistic.com/assets/samhan/png/kubikasi.png" alt="" srcset="" width="50px">
                </div>
                <div class="layanantitle">
                  KARGO KUBIKASI
                </div>
                <p>
                  Layanan Pengiriman<br>251 Kg / Volume</p>
              </div>
              
              
               <div class="produklayananlist">
                <div class="produklayananicon">
                  <img src="https://samhanlogistic.com/assets/samhan/png/otomotif.png" alt="" srcset="" width="50px">
                </div>
                <div class="layanantitle">
                  KARGO OTOMOTIF
                </div>
                <p>
                  Layanan Pengiriman<br>Motor mulai 110 Cc - Up</p>
              </div>
              
              
               <div class="produklayananlist">
                <div class="produklayananicon">
                  <img src="https://samhanlogistic.com/assets/samhan/png/elektronik.png" alt="" srcset="" width="50px">
                </div>
                <div class="layanantitle">
                  KARGO ELEKTRONIK
                </div>
                <p>
                  Layanan Pengiriman<br>Elektronik Kg / Volume</p>
              </div>
              
              
            </div>
            <div class="col-lg-6">
              <div id="imageproduklayanan">
                <img src="https://samhanlogistic.com/assets/samhan/forklift2.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"  alt="" srcset="" style="position:relative;margin-top:300px;">
              </div>
              
            
            </div>

          </div>
        </div>
      </div>


      <!-- JAMINAN LAYANAN -->
      <!--<div class="boxtitle mb-lg-3">
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: title</p>
<p>Filename: default/main.php</p>
<p>Line Number: 223</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/trilinei/samhanlogistic.com/application/views/default/main.php<br />
			Line: 223<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/trilinei/samhanlogistic.com/application/libraries/Template.php<br />
			Line: 12<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/trilinei/samhanlogistic.com/application/controllers/Home.php<br />
			Line: 15<br />
			Function: display			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/trilinei/samhanlogistic.com/index.php<br />
			Line: 317<br />
			Function: require_once			</p>

		
	

</div></div>-->
    
      <div id="sectionlayanan" class="container-fluid  p-2 mt-lg-2">
        
        <h6 class="ps-3 ms-md-5 ps-md-5" style="font-weight: bold;">JAMINAN LAYANAN</h6>
        
        <div class="container ">
          <div class="owl-carousel">
            
             <div class="layanan">
              <div class="layananicon  mx-4">
                <img src="https://samhanlogistic.com/assets/ICON WEB/JAMINAN LAYANAN/PESANAN MUDAH DAN TERINTREGASI.jpg" alt="" srcset="" width="60px">
              </div>
              <div class="layanantitle mt-5 ps-4 ps-md-4">
                Pesanan Muda & 
Terintegrasi
              </div>
              <p class="layanantext text-justify px-4 px-md-4">Samhan Logistic menggunakan 
sistem informasi terintegrasi 
sehingga customer dengan 
muda untuk melakukan 
pesanan melalui online dan 
offline, baik melalui web, 
aplikasi dan media online 
lainya, customer juga dapat 
menghubungi outlet ataupun 
marketing Samhan Logistic</p>
            </div><div class="layanan">
              <div class="layananicon  mx-4">
                <img src="https://samhanlogistic.com/assets/ICON WEB/JAMINAN LAYANAN/RESPON CEPAT.jpg" alt="" srcset="" width="60px">
              </div>
              <div class="layanantitle mt-5 ps-4 ps-md-4">
                Respon Cepat
              </div>
              <p class="layanantext text-justify px-4 px-md-4">Samhan Logistic memberikan 
layanan dengan berbagai 
sumber informasi & tim call 
center untuk melayani customer 
24 jam dengan manajemen 
informasi secara profesional, 
menjadi kebutuhan customer 
secara umum baik informasi 
paket ataupun klaim terhadap 
layanan pengiriman.</p>
            </div><div class="layanan">
              <div class="layananicon  mx-4">
                <img src="https://samhanlogistic.com/assets/ICON WEB/JAMINAN LAYANAN/FULL TRACKING REALTIME.jpg" alt="" srcset="" width="60px">
              </div>
              <div class="layanantitle mt-5 ps-4 ps-md-4">
                Full Tracking 
Realtime
              </div>
              <p class="layanantext text-justify px-4 px-md-4">Samhan Logistic memberikan 
layanan pelacakan dengan 
sistem terintegrasi secara 
dinamis melalui tracking visual
menggunakan media website 
dan aplikasi driver yang 
terhubung secara realtime, 
memudahkan customer untuk 
melacak keberadaan paket.
</p>
            </div><div class="layanan">
              <div class="layananicon  mx-4">
                <img src="https://samhanlogistic.com/assets/ICON WEB/JAMINAN LAYANAN/CEPAT DAN TEPAT.jpg" alt="" srcset="" width="60px">
              </div>
              <div class="layanantitle mt-5 ps-4 ps-md-4">
                Cepat & Tepat
              </div>
              <p class="layanantext text-justify px-4 px-md-4">Samhan Logistic memberikan 
layanan dengan sistem akurasi 
waktu & lokasi pengiriman 
sesuai dengan tujuan 
pengiriman dengan cepat dan 
tepat, memberikan kepuasan 
kepada customer serta 
kepuasan kepada penerima 
paket.</p>
            </div><div class="layanan">
              <div class="layananicon  mx-4">
                <img src="https://samhanlogistic.com/assets/ICON WEB/JAMINAN LAYANAN/AMAN DAN NYAMAN.jpg" alt="" srcset="" width="60px">
              </div>
              <div class="layanantitle mt-5 ps-4 ps-md-4">
                Aman & Nyaman
              </div>
              <p class="layanantext text-justify px-4 px-md-4">Samhan Logistic memberikan 
kepercayaan tinggi & etika 
kerja yang mapan untuk 
bertanggungjawab terhadap 
kinerja tim melalui 
manajemen tim profesional 
sehingga menjadikan rasa 
aman & nyaman terhadap 
customer.</p>
            </div><div class="layanan">
              <div class="layananicon  mx-4">
                <img src="https://samhanlogistic.com/assets/ICON WEB/JAMINAN LAYANAN/JANGKAUAN NASIONAL DAN INTERNASIONAL.jpg" alt="" srcset="" width="60px">
              </div>
              <div class="layanantitle mt-5 ps-4 ps-md-4">
                Jangkauan Nasioanal 
&Internasional
              </div>
              <p class="layanantext text-justify px-4 px-md-4">Samhan Logistic memiliki 
layanan pengiriman dengan 
jangkauan luas, baik Domestik & 
Internasional, dengan sistem 
terintegrasi melalui darat, 
udara & laut, Samhan Logistic 
memberikan kehadiran di 
seluruh wilayah kota-kota 
sampai dengan pelosok Negeri 
& di seluruh bagian Luar Negeri.</p>
            </div><div class="layanan">
              <div class="layananicon  mx-4">
                <img src="https://samhanlogistic.com/assets/ICON WEB/JAMINAN LAYANAN/ASURANSI.jpg" alt="" srcset="" width="60px">
              </div>
              <div class="layanantitle mt-5 ps-4 ps-md-4">
                Asuransi
              </div>
              <p class="layanantext text-justify px-4 px-md-4">Samhan Logistic memberikan 
layanan asuransi barang untuk 
customer dengan fasilitas 
tambahan tersendiri agar paket 
memiliki perioritas tertentu, 
dengan sistem layanan paket 
yang telah disediakan secara 
digital-informatif.</p>
            </div>            
          </div>
      </div>
      </div>

      <div id="headerberita" class="brandsection text-center p-2 box">
        CEK BERITA TERBARU
      </div>
      <div class="row col-12 bgnews  mt-5 justify-content-center pt-5 pb-5">
	  <div class="col-lg-3 rounded">
          <a href="https://samhanlogistic.com/berita/detail/3"><div class="card-body news">
            <img src="https://samhanlogistic.com/assets/berita/berita3x.png" alt="" srcset="" width="auto" height="210px">
            <div class="newstitle">
              Syarat dan Ketentuan Pengiriman Barang Via Udara
            </div>
            <div class="newsafter">

            </div>
          </div>
		  </a>
        </div><div class="col-lg-3 rounded">
          <a href="https://samhanlogistic.com/berita/detail/2"><div class="card-body news">
            <img src="https://samhanlogistic.com/assets/berita/berita2x.png" alt="" srcset="" width="auto" height="210px">
            <div class="newstitle">
              Menghitung barang ringan
            </div>
            <div class="newsafter">

            </div>
          </div>
		  </a>
        </div><div class="col-lg-3 rounded">
          <a href="https://samhanlogistic.com/berita/detail/1"><div class="card-body news">
            <img src="https://samhanlogistic.com/assets/berita/berita1x.png" alt="" srcset="" width="auto" height="210px">
            <div class="newstitle">
              Larangan Dikirim Via Udara
            </div>
            <div class="newsafter">

            </div>
          </div>
		  </a>
        </div>        
        
        
      </div>
          </main>
    <footer class="footcontent container-fluid p-3">
        
            <p class="buttonwhite">HUBUNGI KAMI</p>
            <div class="row">
              <div class="col-lg-3">
                <p class="ftitle">
                  Alamat Kantor
                </p>
                <table>
                  <tr>
                    <td class="align-top"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span></td>
                    <td rowspan="3">
                      <p>Jl. Ketapang No. 1 Rt 01 Rw. 01 Kalisalak <br>Kec. Batang Kab. Batang <br>Prov. Jawa Tengah 51216</p>
                    </td>
                  </tr>
                </table>
                <p class="ftitle">
                  Customer Service
                </p>
                <table>
                  <tr>
                    <td class="align-top"><span><i class="fa fa-whatsapp" aria-hidden="true"></i></span></td>
                    <td >
                      <p>(0285) 449 7338</p>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-lg-3">
                <p class="ftitle">
                  Marketing
                </p>
                <table>
                  <tr>
                    <td class="align-top"><span><i class="fa fa-whatsapp" aria-hidden="true"></i></span></td>
                    <td >
                      <p>(0285) 449 7338</p>
                    </td>
                  </tr>
                </table>

                <p class="ftitle">
                  E-mail
                </p>
                <table>
                  <tr>
                    <td class="align-top"><span><i class="fa fa-envelope" aria-hidden="true"></i></span></td>
                    <td >
                      <p>samhanlogistic@gmail.com</p>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-lg-3">
                <p class="ftitle">
                  Tautan
                </p>
                <ul>
                  <li>Tanya Jawab</li>
                  <li>Syarat & Ketentuan</li>
                  <li>Kebijakan Privasi</li>
                  <li>Karir</li>
                </ul>
                
               
               
                
              </div>
              <div class="col-lg-3">
                <div class="fbutton">
                  <img src="https://samhanlogistic.com/assets/samhan/image/logo.png" alt="" srcset="" height="55px">
                </div>
              </div>
            </div>
       
      </footer>
      
	  
	  
	  <!--navbar 
	   <div class="tabbar tab-style4">
          <ul class="flex-center">
            <li class="home active" data-where="home"><span class="material-icons-outlined">
                home
              </span></li>
            <li class="products" data-where="products"><span class="material-icons-outlined">
                shopping_bag
              </span></li>
            <li class="services" data-where="services"><span class="material-icons-outlined">
                plumbing
              </span></li>
            <li class="about" data-where="about"><span class="material-icons-outlined">
                business
              </span></li>
            <li class="help" data-where="help"><span class="material-icons-outlined">
                help_outline
              </span></li>
          </ul>
        </div>
	  <!--END NAVBAR-->

</body>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://samhanlogistic.com/assets/samhan/owl/owl.carousel.min.js"></script>
</html>

<script>
    /*$(".btnsamhan").click(function(){
        $("#detilresi").show();
    });*/
$(document).ready(function() {
        $('#loadingpage').hide();
        // var w = window.innerWidth;
        // alert(w);
		$('.autoselect').select2();
	});
	$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
	responsive : {
      // breakpoint from 0 up
      0 : {
        stagePadding: 0,
       
        responsiveClass: true,
        dots: false,
        nav: true,
        center: true,
        autoHeight: true,
        items: 1
      },
      // breakpoint from 768 up
      768 : {
        center: true,
        items: 3
      }
	},
    //items:3,
    
    loop:true,
    // margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});
  });
 var togle=true;
 $(".toogle").click(function(){
        if(togle==true){
            $("#menuhp").addClass("sidebaractive");
            togle=false;
            
        }else{
            $("#menuhp").removeClass("sidebaractive");
            togle=true;
        }
        console.log(togle);
        
    });
    
var togle2=true;
 $(".menudrop").click(function(){
        if(togle2==true){
            $(".listdrop").show();
            togle2=false;
            
        }else{
           $(".listdrop").hide();
            togle2=true;
        }
       
        
    });
	
  
</script>