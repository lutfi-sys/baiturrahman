<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <title>Yayasan Baiturrahman Api-Api</title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        
        #header {
            height: 101.5vh;
            color: rgb(255, 255, 255);
            width: 100%;
            background-image: url(banner1.png);
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -10px;
        }

        #program {
            height: 80vh;
            color: rgb(255, 255, 255);
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -10px;
        }

        #card{
            cursor: pointer;
        }

    </style>
</head>

<body>
    <header id="header">
        <nav
            class="block w-full max-w-screen-2xl py-4 px-8 shadow-md w-full max-w-full rounded-none px-4 shadow-none bg-gradient-to-r from-green-800 via-teal-0 to-teal-0">
            <div class="container mx-auto flex items-center justify-between text-blue-gray-900">
                <a href="#"
                    class="block antialiased font-sans  text-base font-light leading-relaxed text-yellow-500 mr-4 cursor-pointer text-lg font-bold">Yayasan
                    Baiturrahman</a>
                <div class="hidden lg:block">
                    <ul class="mb-4 mt-2 flex flex-col gap-3 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-8">
                        <a href="/">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed hover:text-green-200 p-1 font-medium">
                                Home
                            </li>
                        </a><a href="/about">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed hover:text-green-200 p-1 font-medium">
                                Tentang Kami
                            </li>
                        </a><a href="/info">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed hover:text-green-200 p-1 font-medium">
                                Berita
                            </li>
                        </a><a href="/perpus">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed hover:text-green-200 p-1 font-medium">
                                Perpustakaan
                            </li>
                        </a><a href="/alumni">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed hover:text-green-200 p-1 font-medium">
                                Pojok Alumni
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed hover:text-green-200 p-1 font-medium">
                                PPDB
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed hover:text-green-200 p-1 font-medium">
                                Hubungi Kami
                            </li>
                        </a>
                    </ul>
                </div>
                <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-yellow-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none bg-gray-900 hidden lg:inline-block"
                    type="button" data-ripple-light="true">
                    Sign in</button><button
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
                                class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Tentang Kami
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Berita
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Perpustakaan
                            </li>
                        </a>
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Pojok Alumni
                            </li>
                        </a>
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 p-1 font-medium">
                                PPDB
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Hubungi Kami
                            </li>
                        </a>
                    </ul>
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none bg-gray-900 block w-full mb-2"
                        type="button" data-ripple-light="true">
                        Sign in
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <div class="bg-gray-200 py-8 sm:py-8" id="program">
    <h2 class="text-center text-3xl font-bold leading-8 text-gray-900">Program Yayasan</h2>
    <div class="mt-8 flex flex-col md:flex-row justify-center space-y-8 md:space-y-0 md:space-x-8">
        <div class="bg-gray-100 p-16 rounded shadow-md" id="card">
            <i class="fas fa-school text-4xl text-yellow-500"></i>
            <h3 class="mt-4 text-xl font-bold text-orange-800">TK</h3>
        </div>

        <div class="bg-gray-100 p-16 rounded shadow-md">
            <i class="fas fa-user-plus text-4xl text-yellow-500"></i>
            <h3 class="mt-4 text-xl font-bold text-orange-800"> SD</h3>
        </div>

        <div class="bg-gray-100 p-16 rounded shadow-md">
            <i class="fas fa-school text-4xl text-yellow-500"></i>
            <h3 class="mt-4 text-xl font-bold text-orange-800">MAN</h3>
        </div>

        <div class="bg-gray-100 p-16 rounded shadow-md">
            <i class="fas fa-school text-4xl text-yellow-500"></i>
            <h3 class="mt-4 text-xl font-bold text-orange-800">TPQ</h3>
        </div>

        <div class="bg-gray-100 p-16 rounded shadow-md">
            <i class="fas fa-school text-4xl text-yellow-500"></i>
            <h3 class="mt-4 text-xl font-bold text-orange-800">SMK</h3>
        </div>
    </div>
    </div>

    

</body>

</html>
