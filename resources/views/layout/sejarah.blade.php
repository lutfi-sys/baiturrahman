<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yayasan Baiturrahman Api-Api</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui/dist/full.css">


    <style>
        #header {
            height: 110vh;
            color: rgb(255, 255, 255);
            width: 100%;
            background-image: url(/banner1.png);
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -10px;
        }

        #program {
            height: 45vh;
            color: rgb(255, 255, 255);
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -10px;
        }

        #card {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header id="header">
        <nav
            class=" z-10 fixed block w-full max-w-screen-2xl py-4 px-8    rounded-none  shadow-none bg-gradient-to-r from-green-800 via-green-800 to-teal-0">
            <div class="container mx-auto flex items-center justify-between text-blue-gray-900">
                <a href="#"
                    class="block antialiased font-sans  text-base  leading-relaxed text-yellow-500 mr-4 cursor-pointer  font-bold ">Yayasan
                    Baiturrahman</a>
                <div class="hidden lg:block">
                    <ul class="mb-4 mt-2 flex flex-col gap-3 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-8">
                        <a href="/">
                            <li
                                class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                Home</li>
                        </a>
                        <div class="relative" id="dropdown-wrapper-about">
                            <a href="/about" id="dropdown-toggle-about">
                                <li
                                    class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                    Tentang Kami</li>
                            </a>
                            <ul class="absolute hidden bg-green-800 bg-opacity-60 shadow-md rounded-lg mt-2"
                                id="dropdown-menu-about">
                                <a href="/about/sejarah">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Sejarah</li>
                                </a>
                                <a href="/about/visi-misi">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Visi Misi</li>
                                </a>
                                <a href="/about/mars-yayasan">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Mars Yayasan</li>
                                </a>
                            </ul>
                        </div>
                        <div class="relative" id="dropdown-wrapper-news">
                            <a href="/info" id="dropdown-toggle-news">
                                <li
                                    class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                    Berita</li>
                            </a>
                            <ul class="absolute hidden bg-green-800 bg-opacity-60 shadow-md rounded-lg mt-2"
                                id="dropdown-menu-news">
                                <a href="/info/terbaru">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Berita Terbaru</li>
                                </a>
                                <a href="/info/kegiatan">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Kegiatan Yayasan Baiturrahman</li>
                                </a>
                                <a href="/info/program">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Program</li>
                                </a>
                            </ul>
                        </div>
                        <div class="relative" id="dropdown-wrapper-library">
                            <a href="/perpus" id="dropdown-toggle-library">
                                <li
                                    class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                    Perpustakaan</li>
                            </a>
                            <ul class="absolute hidden bg-green-800 bg-opacity-60 shadow-md rounded-lg mt-2"
                                id="dropdown-menu-library">
                                <a href="/perpus/profil">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Profile Perpustakaan</li>
                                </a>
                                <a href="/perpus/perpusonline">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Perpustakaan Online</li>
                                </a>
                            </ul>
                        </div>
                        <div class="relative" id="dropdown-wrapper-alumni">
                            <a href="/alumni" id="dropdown-toggle-alumni">
                                <li
                                    class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                    Pojok Alumni</li>
                            </a>
                            <ul class="absolute hidden bg-green-800 bg-opacity-60 shadow-md rounded-lg mt-2"
                                id="dropdown-menu-alumni">
                                <a href="/alumni/login">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Login</li>
                                </a>
                                <a href="/alumni/legalisir">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        Legalisisr Online</li>
                                </a>
                            </ul>
                        </div>
                        <div class="relative" id="dropdown-wrapper-ppdb">
                            <a href="/ppdb" id="dropdown-toggle-ppdb">
                                <li
                                    class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                    PPDB</li>
                            </a>
                            <ul class="absolute hidden bg-green-800 bg-opacity-60 shadow-md rounded-lg mt-2"
                                id="dropdown-menu-ppdb">
                                <a href="/ppdb/tk">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        TK</li>
                                </a>
                                <a href="/ppdb/sd">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        SD</li>
                                </a>
                                <a href="/ppdb/madin">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        MaDin</li>
                                </a>
                                <a href="/ppdb/tpq">
                                    <li
                                        class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-2">
                                        TPQ</li>
                                </a>
                            </ul>
                        </div>
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                Hubungi Kami</li>
                        </a>
                    </ul>
                </div>

                <script>
                    document.getElementById('dropdown-toggle-about').addEventListener('click', function(event) {
                        event.preventDefault();
                        const menuNews = document.getElementById('dropdown-menu-news');
                        const menuAbout = document.getElementById('dropdown-menu-about');
                        const menuAlumni = document.getElementById('dropdown-menu-alumni');
                        const menuPpdb = document.getElementById('dropdown-menu-ppdb');
                        const menuLibrary = document.getElementById('dropdown-menu-library');
                        menuNews.classList.add('hidden');
                        menuAlumni.classList.add('hidden');
                        menuPpdb.classList.add('hidden');
                        menuLibrary.classList.add('hidden');
                        menuAbout.classList.toggle('hidden');
                    });
                    document.getElementById('dropdown-toggle-news').addEventListener('click', function(event) {
                        event.preventDefault();
                        const menuNews = document.getElementById('dropdown-menu-news');
                        const menuAbout = document.getElementById('dropdown-menu-about');
                        const menuAlumni = document.getElementById('dropdown-menu-alumni');
                        const menuPpdb = document.getElementById('dropdown-menu-ppdb');
                        const menuLibrary = document.getElementById('dropdown-menu-library');
                        menuNews.classList.toggle('hidden');
                        menuAlumni.classList.add('hidden');
                        menuPpdb.classList.add('hidden');
                        menuLibrary.classList.add('hidden');
                        menuAbout.classList.add('hidden');
                    });
                    document.getElementById('dropdown-toggle-library').addEventListener('click', function(event) {
                        event.preventDefault();
                        const menuNews = document.getElementById('dropdown-menu-news');
                        const menuAbout = document.getElementById('dropdown-menu-about');
                        const menuAlumni = document.getElementById('dropdown-menu-alumni');
                        const menuPpdb = document.getElementById('dropdown-menu-ppdb');
                        const menuLibrary = document.getElementById('dropdown-menu-library');
                        menuNews.classList.add('hidden');
                        menuAlumni.classList.add('hidden');
                        menuPpdb.classList.add('hidden');
                        menuLibrary.classList.toggle('hidden');
                        menuAbout.classList.add('hidden');
                    });
                    document.getElementById('dropdown-toggle-alumni').addEventListener('click', function(event) {
                        event.preventDefault();
                        const menuNews = document.getElementById('dropdown-menu-news');
                        const menuAbout = document.getElementById('dropdown-menu-about');
                        const menuAlumni = document.getElementById('dropdown-menu-alumni');
                        const menuPpdb = document.getElementById('dropdown-menu-ppdb');
                        const menuLibrary = document.getElementById('dropdown-menu-library');
                        menuNews.classList.add('hidden');
                        menuAlumni.classList.toggle('hidden');
                        menuPpdb.classList.add('hidden');
                        menuLibrary.classList.add('hidden');
                        menuAbout.classList.add('hidden');
                    });
                    document.getElementById('dropdown-toggle-ppdb').addEventListener('click', function(event) {
                        event.preventDefault();
                        const menuNews = document.getElementById('dropdown-menu-news');
                        const menuAbout = document.getElementById('dropdown-menu-about');
                        const menuAlumni = document.getElementById('dropdown-menu-alumni');
                        const menuPpdb = document.getElementById('dropdown-menu-ppdb');
                        const menuLibrary = document.getElementById('dropdown-menu-library');
                        menuNews.classList.add('hidden');
                        menuAlumni.classList.add('hidden');
                        menuPpdb.classList.toggle('hidden');
                        menuLibrary.classList.add('hidden');
                        menuAbout.classList.add('hidden');
                    });
                </script>


                {{-- <button href="/login" class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-yellow-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none  hidden lg:inline-block"
                    type="button" data-ripple-light="true">
                    Sign in</button> --}}
                <a href="/login">
                    <li
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-yellow-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none hidden lg:inline-block">
                        Sign in
                    </li>
                </a>
                <button
                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 ml-auto inline-block text-blue-gray-900 lg:hidden"
                    type="button" data-ripple-dark="true" data-collapse-target="navbar">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg></span>
                </button>
            </div>
            <div data-collapse="navbar"
                class="block h-0 w-full basis-full overflow-hidden transition-all duration-300 ease-in lg:hidden">
                <div class="mt-2 rounded-xl bg-white py-2">
                    <ul class="mb-4 mt-2 flex flex-col gap-3 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-8">
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Tentang Kami
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Berita
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Perpustakaan
                            </li>
                        </a>
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Pojok Alumni
                            </li>
                        </a>
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                PPDB
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Hubungi Kami
                            </li>
                        </a>
                    </ul>
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg  text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none bg-gray-900 block w-full mb-2"
                        type="button" data-ripple-light="true">
                        Sign in
                    </button>
                </div>
            </div>
        </nav>
    </header>
    {{-- Activity --}}
    <div class="relative h-screen overflow-hidden">
        <div class="absolute inset-0 bg-fixed bg-center bg-cover" style="background-image: url('/bannerabu.png');">
        </div>
        <div class="relative  z-2 flex  h-full bg-gray-700 bg-opacity-30 ">
            <div class=" bg-gray-100 bg-opacity-90 flex flex-col md:flex-row   md:space-x-4 w-[60rem] h-[70rem] ">
                <div class=" py-12 px-20 rounded-3xl  ">
                    <h3 class="mt-4 text-xl font-bold text-gray-900">AKTIVITAS YAYASAN</h3>
                    <h3 class="mt-4 text-lg  text-orange-700">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        A facilis doloremque asperiores possimus omnis modi voluptas saepe, nihil reiciendis est odit
                        eius dignissimos nam numquam amet, rem et molestias quis?</h3>
                </div>

                <div class="  py-12 px-20 rounded-3xl  ">
                    <img src="/ngaji.webp" alt=""height="5px" class=" rounded-xl ">
                </div>
            </div>
        </div>
    </div>

    

    {{-- footer --}}
    <footer class="bg-green-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Yayasan Baiturrahman. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="#" class="hover:text-gray-400">Instagram</a>
                <a href="#" class="hover:text-gray-400">Facebook</a>
                <a href="#" class="hover:text-gray-400">Contact Us</a>
            </div>
        </div>
    </footer>
</body>

</html>
