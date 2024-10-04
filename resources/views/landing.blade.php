<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Yayasan Baiturrahman Api-Api</title>

    <style>
        #header{
            height: 101.5vh;
            color: rgb(255, 255, 255);
            width: 100%;
            background-image: url(banner1.png);
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -10px;
        }
    </style>
</head>

<body>
    <header id="header">
    <nav
        class="block w-full max-w-screen-2xl py-4 px-8 shadow-md w-full max-w-full rounded-none px-4 shadow-none bg-gradient-to-r from-green-800 via-teal-500 to-teal-600">
        <div class="container mx-auto flex items-center justify-between text-blue-gray-900">
            <a href="#"
                class="block antialiased font-sans  text-base font-light leading-relaxed text-yellow-500 mr-4 cursor-pointer text-lg font-bold">Yayasan Baiturrahman</a>
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
                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none bg-gray-900 hidden lg:inline-block"
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
                            About Us
                        </li>
                    </a><a href="#">
                        <li
                            class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 p-1 font-medium">
                            Pricing
                        </li>
                    </a><a href="#">
                        <li
                            class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 p-1 font-medium">
                            Contact Us
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
</body>

</html>
