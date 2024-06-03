<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janeth Dominguez Art</title>

    <meta name="description" content="Explore abstract art with Janeth Dominguez. Inspired by her Mexican heritage, she creates unique pieces balancing chaos and order. Join her artistic journey!">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/fonts2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/extra.css') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .image-fit-cover {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="bg-[#0b0b0b] text-white">
    <!-- Menu -->
    <nav class="bg-[#0b0b0b] flex items-center justify-between p-4 shadow-md" id="m-navbar">
        <div class="flex items-center">
            <a href="#home">
                <img src="{{ asset('css/images/logo.jpg') }}" id="logo" alt="Logo" class="w-[250px]">
            </a>
            <span class="text-xl caldea-italic tracking-widest hidden md:block">Janeth Dominguez Art</span>
        </div>
        <button id="menu-button" class="block md:hidden uppercase mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" id="phone-open-nav" class="w-6" viewBox="0 0 512 512"><path fill="#c0c0c0" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" id="phone-close-nav" class="w-6 hidden" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#c0c0c0" d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-83.6 290.5c4.8 4.8 4.8 12.6 0 17.4l-40.5 40.5c-4.8 4.8-12.6 4.8-17.4 0L256 313.3l-66.5 67.1c-4.8 4.8-12.6 4.8-17.4 0l-40.5-40.5c-4.8-4.8-4.8-12.6 0-17.4l67.1-66.5-67.1-66.5c-4.8-4.8-4.8-12.6 0-17.4l40.5-40.5c4.8-4.8 12.6-4.8 17.4 0l66.5 67.1 66.5-67.1c4.8-4.8 12.6-4.8 17.4 0l40.5 40.5c4.8 4.8 4.8 12.6 0 17.4L313.3 256l67.1 66.5z"/></svg>
        </button>
        <ul class="flex space-x-4 uppercase hidden md:flex" id="menu">
            <li><a href="#about" class="hover:text-gray-300 caldea-regular tracking-widest">About</a></li>
            <li><a href="#gallery" class="hover:text-gray-300 caldea-regular tracking-widest">Gallery</a></li>
            <li><a href="#contact" class="hover:text-gray-300 caldea-regular tracking-widest">Contact</a></li>
        </ul>
    </nav>
    <!-- Header -->
    <section id="home">
        <header class="h-screen bg-cover bg-center" style="background-image: url('{{ asset('css/images/bg-header.jpg') }}')">
            <div class="flex items-center justify-center h-full">
                <h1 data-aos="zoom-in" data-aos-duration="1500" class="text-center md:text-left text-6xl font-bold text-shadow-lg -mt-20 caldea-bold uppercase" style="letter-spacing: 10px;">
                    Art through my eyes
                </h1>
            </div>
        </header>
    </section>

    <!-- Section 1: About -->
    <section id="about" class="py-8 px-4">
        <h2 class="text-4xl font-bold text-center my-10 caldea-bold-italic uppercase" data-aos="zoom-right">About me</h2>
        <!-- Photo 1: left, Text 1: right -->
        <div class="flex flex-wrap md:flex-nowrap items-center justify-center mb-4">
            <div class="w-full md:w-1/2 p-2">
                <img src="{{ asset('css/images/about1.jpg') }}" alt="About 1" class="w-full md:w-[50%] mx-auto align-top rounded-lg shadow-lg">
            </div>
            <div class="w-full md:w-1/2 p-2 md:mr-10" data-aos="fade-right">
                <!-- <h1 class="text-2xl tracking-wider play-medium-italic mb-4">Me</h1> -->
                <p class="text-lg text-justify caldea-regular my-2">
                    I specialize in creating bold and beautiful abstract paintings. As a Mexican woman, my artistic inclination stems from my father, who is a potter from Juan Mata Ortiz in Chihuahua, Mexico—a town known for its talented clay potters. Growing up, I was surrounded by a community of artists, and witnessing their creativity in various forms inspired me greatly.
                </p>
                <p class="text-lg text-justify caldea-regular my-2">
                    It was during the year when the world came to a halt due to the virus that I felt an overwhelming need to express myself. Painting became my chosen medium for this purpose, even though it initially intimidated me. Despite my love for drawing, painting seemed more daunting. However, as I embraced this art form, it gradually became an integral part of who I am.
                </p>
                <p class="text-lg text-justify caldea-regular my-2">
                    I hope you enjoy following my artistic journey and find inspiration to pursue your own dreams. 
                </p>
                <p class="text-lg text-justify caldea-italic my-2">
                    Thank you for visiting my little art dream!
                </p>
            </div>
        </div>
        <!-- Photo 2: right, Text 2: left -->
        <div class="flex flex-wrap md:flex-nowrap items-center justify-center mb-4">
            <div class="w-full md:w-1/2 p-2 order-last md:order-first md:ml-10" data-aos="fade-right">
                <h1 class="caldea-italic text-2xl mb-4">What kind of art do you do and why?</h1>
                <p class="text-lg text-justify caldea-regular my-2">
                    Wholeheartedly dedicate myself to the world of abstract art, particularly working with acrylics and various mixed media. What I adore about abstract art is its ability to unleash my creativity and imagination. I find inspiration in the realm of emotions, dreams, and the beauty of nature.
                </p>
                <p class="text-lg text-justify caldea-regular my-2">
                    One of my favorite aspects of creating abstract art is incorporating gold accents and textures that captivate the viewer's gaze. These elements add a touch of allure and intrigue to my pieces. It's a joy for me to experiment with different techniques and materials to bring my artistic vision to life.
                </p>
            </div>
            <div class="w-full md:w-1/2 p-2 order-first md:order-last">
                <img src="{{ asset('css/images/about2.jpg') }}" alt="About 2" class="w-full md:w-[50%] mx-auto align-top rounded-lg shadow-lg">
            </div>
        </div>
        <!-- Photo 3: left, Text 3: right -->
        <div class="flex flex-wrap md:flex-nowrap items-center justify-center mb-4">
            <div class="w-full md:w-1/2 p-2">
                <img src="{{ asset('css/images/about3x.jpg') }}" alt="About 3" class="w-full md:w-[50%] mx-auto align-top rounded-lg shadow-lg">
            </div>
            <div class="w-full md:w-1/2 p-2 md:mr-10" data-aos="fade-right">
                <h1 class="text-2xl caldea-italic mb-4">What sets you apart from other artists?</h1>
                <p class="text-lg text-justify caldea-regular">
                    I am an artist passionate about art and creativity. I dedicate myself to creating unique and original works of art, using different techniques and materials. My goal is to express my vision of the world through art and share it with the public.
                </p>
            </div>
        </div>
    </section>
      
      
    <!-- Section 2: Gallery -->
    <section id="gallery" class="py-8 px-4 bg-[#C0C0C0]">
        <h2 class="text-4xl font-bold text-center text-white my-10 caldea-bold-italic uppercase" data-aos="fade-in">Gallery</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-4">
            @foreach ($productos as $item)
                <div class="relative cursor-pointer" onclick="openItemCart({{ $item }})">
                    <!-- Añadir al carrito SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-6 w-6 text-white" style="position:absolute;top:0;right:0;margin-right:10px;margin-top:10px;"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                    <img src="{{ \Storage::url('productos/'.$item->rutaImagen) }}" alt="{{ $item->nombre }}" class="w-full h-auto rounded-lg shadow-lg image-fit-cover">
                    <div class="gallery-info absolute bottom-0 left-0 right-0 p-2 bg-gray-900 bg-opacity-80 rounded-b-lg">
                        <h3 class="text-xl font-bold text-white caldea-regular">{{ $item->nombre }}</h3>
                        <p class="text-sm text-gray-300 info caldea-regular">{{ $item->info }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <p class="text-lg text-center caldea-italic mt-12 mb-8 underline">Store</p> --}}
    </section>

    <!-- Section 3: Contact -->
    <section id="contact" class="py-20 px-4">
        <h2 class="text-4xl text-center mb-4 caldea-bold-italic" data-aos="zoom-in">Contact Us</h2>
        <p class="text-lg text-center mb-4 caldea-regular" data-aos="zoom-in">If you are interested in our work or want to know more about us, you can contact us through the following means:</p>
        <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3 p-2">
                <div class="flex items-center space-x-2 bg-gray-800 p-4 rounded-lg shadow-lg" data-aos="fade-right">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 512 512"><path fill="#c0c0c0" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                    <a href="tel:+17139029816"><span class="text-xl caldea-regular tracking-wider">+1 (713) 902-9816</span></a>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 p-2">
                <div class="flex items-center space-x-2 bg-gray-800 p-4 rounded-lg shadow-lg" data-aos="fade-right">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 512 512"><path fill="#c0c0c0" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                    <a href="mailto:janethd24@gmail.com"><span class="text-xl caldea-regular tracking-wider">janethd24@gmail.com</span></a>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-4 mx-2">
            <form class="w-full bg-gray-800 p-6 rounded-lg shadow-lg" action="#" method="post" data-aos="zoom-in" data-aos-duration="2000">
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="name" class="block text-white mb-2 caldea-regular">Name</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-900 border border-gray-700 rounded-lg p-2 text-white" required>
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <label for="email" class="block text-white mb-2 caldea-regular">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-gray-900 border border-gray-700 rounded-lg p-2 text-white" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-white mb-2 caldea-regular">Message</label>
                    <textarea id="message" name="message" class="w-full bg-gray-900 border border-gray-700 rounded-lg p-2 text-white" rows="4" required></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="caldea-regular bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#808080] p-4">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/" class="hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 512 512"><title>Facebook</title><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#2d3748}</style><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                </a>
                <a href="https://www.instagram.com/" class="hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 512 512"><title>Instagram</title><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#2d3748}</style><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                </a>
                <a href="https://www.twitter.com/" class="hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 512 512"><title>Twitter</title><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#2d3748}</style><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                </a>
            </div>
            <div class="flex space-x-4">
                <a href="javascript:void(0)" class="hover:text-gray-300 caldea-regular">Privacy policy</a>
                <a href="javascript:void(0)" class="hover:text-gray-300 caldea-regular">Terms and conditions</a>
            </div>
        </div>
        <div class="text-center mt-4">
            <p class="text-sm text-gray-300 caldea-bold-italic">&copy; 2023 JanethDominguez. All rights reserved.</p>
        </div>
    </footer>

    <!-- Modal -->
    <div id="myModal" class="hidden fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay, show/hide based on modal state. -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <!-- Modal Panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-[70%]">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <div class="mt-2">
                                <div class="grid grid-cols-1 md:grid-cols-2">
                                    <div>
                                        <img src="{{ asset('css/images/galeria/1.jpg') }}" id="x_item_image" alt="..." class="w-full h-auto rounded-lg shadow-lg">
                                    </div>
                                    <div class="text-black pl-4">
                                        <h1 class="text-4xl mb-3 caldea-regular" id="x_item_name">Art title</h1>
                                        <p class="caldea-italic" id="x_item_info">...</p>
                                        <p class="caldea-bold text-2xl mt-7" id="x_item_price">...</p>
                                        <button type="button" class="mt-2 text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50 me-2 mb-2">
                                            <svg class="w-4 h-4 me-2 -ms-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path></svg>
                                            Check out with PayPal
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" id="closeModalButton" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                        X
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/sticky.js') }}"></script>
    <script src="{{ asset('js/sections.js') }}"></script>
    <script>
        $("#m-navbar").sticky();
        AOS.init({
            once:true
        });

        // Get the menu and the menu button
        var logo = document.getElementById('logo');
        var menu = document.getElementById('menu');
        var menuButton = document.getElementById('menu-button');
        var phoneOpenNav = document.getElementById('phone-open-nav');
        var phoneCloseNav = document.getElementById('phone-close-nav');

        // Add an event listener to the menu button
        menuButton.addEventListener('click', function() {
            // Toggle the visibility of the menu when the button is clicked
            if (menu.style.display === 'none') {
                menu.style.display = 'flex';
                logo.classList.add('hidden');
                phoneOpenNav.classList.add('hidden');
                phoneCloseNav.classList.remove('hidden');
            } else {
                menu.style.display = 'none';
                logo.classList.remove('hidden');
                phoneCloseNav.classList.add('hidden');
                phoneOpenNav.classList.remove('hidden');
            }
        });

        // Check if window is less than 768px wide
        if (window.innerWidth < 768) {
            // Show the menu button and hide the menu
            menuButton.style.display = 'block';
            menu.style.display = 'none';
        } else {
            // Hide the menu button and show the menu
            menuButton.style.display = 'none';
            menu.style.display = 'flex';
        }

        // Obtén el modal y el botón
        var modal           =   document.getElementById('myModal');
        var closeButton     =   document.getElementById('closeModalButton');
        var xItemName       =   document.getElementById('x_item_name');
        var xItemImagen     =   document.getElementById('x_item_image');
        var xItemInfo       =   document.getElementById('x_item_info');
        var xItemPrice      =   document.getElementById('x_item_price');

        // Cuando el usuario haga clic en el botón, abre la modal
        // btn.onclick = function() {
        //     modal.classList.remove('hidden');
        // }
        closeButton.onclick = function() {
            modal.classList.add('hidden');
        }

        // Cuando el usuario haga clic en cualquier lugar fuera de la modal, ciérrala
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.add('hidden');
            }
        }

        function openItemCart(item) {
            xItemName.innerHTML     =   item.nombre;
            xItemInfo.innerHTML     =   item.info;
            xItemPrice.innerHTML    =   '$'+item.precio;
            xItemImagen.src     =   '{{ \Storage::url('productos/') }}'+item.rutaImagen;
            modal.classList.remove('hidden');
        }
    </script>
</body>
</html>