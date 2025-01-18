<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <title>Gwen</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/flowbite@1.4.7/dist/flowbite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Inter font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet"> 
        <!-- Public Sans font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{asset('main.js')}}" defer></script> 
        <style>

        .slide-button {
            display: none; /* Hidden by default */
            transition: all 0.5s ease; /* Smooth sliding effect */
        }
        
        .slide-button.show {
            display: inline-block; /* Show button */
            opacity: 1; /* Fade in */
            transform: translateY(0); /* Reset slide */
        }

        .typewriter {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            animation: type 4s steps(12) forwards, blink 0.75s step-end infinite;
            border-right: 2px solid;
        }

        .heart {
            color: red;
            height: 35px;
            width: 35px;
            background: #f20044;
            transform: rotate(-45deg);
            animation: heartbeat 0.8s infinite
        }

        .heart::before{
            content: "";
            position: absolute;
            height: 35px;
            width: 35px;
            background: #f20044;
            top: -50%;
            border-radius: 50px;
            box-shadow: -10px 10px 90px
        }

        .heart::after{
            content: "";
            position: absolute;
            height: 35px;
            width: 35px;
            background: #f20044;
            right: -50%;
            border-radius: 50px;
            box-shadow: -10px -10px 90px

        }

        @keyframes heartbeat{
            0%{
                transform: rotate(-45deg) scale(1.2)
            };
            80%{
                transform: rotate(-45deg) scale(1.0)
            };
            100%{
                transform: rotate(-45deg) scale(0.8)
            }
        }


        @keyframes type {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }

        .from-purple-dark {
            background-image: linear-gradient(to left, #924E90, #38194A);
        }

        .from-light-pink {
            background-image: linear-gradient(to left, #fff1f3, #eec9cede);
        }

        .from-brown-light {
            background-image: linear-gradient(to left, #A5603A, #6B1900);
        }

        .from-blue-light {
            background-image: linear-gradient(to left, #63839D, #5F678B);
        }

        .from-white {
            background-image: linear-gradient(to left, #FFFFFF, #000000);
        }


    </style>
    </head>
    <body class="relative">
        <div class="flex flex-col bg-white h-screen w-auto justify-center items-center">
            <div class="flex h-20 w-80 absolute top-20">
                <div class="relative w-80 h-20 rounded-lg" id="controls-carousel" data-carousel="static">
                    <div class="relative overflow-hidden h-20 w-full rounded-lg ">
                        <div class="flex rounded-xl bg-gradient-to-l from-purple-dark to-dark-purple font-inter text-white gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item="active" >
                            <img src="https://i.ibb.co/5MpqK3W/ts-ver.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1">
                                <h3 class="text-xs font-bold tracking-wide italic">"This is me praying that this was the very first page"</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Enchanted</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-light-pink to-light-pink-2 font-inter text-bg_blue gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/ZmskN72/lover.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1">
                                <h3 class="text-xs font-bold tracking-wide italic">"I hate accidents except when we went from friends to this."</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Paper Rings</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-purple-dark to-dark-purple font-inter text-white gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/5MpqK3W/ts-ver.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1 w-full h-full">
                                <h3 class="text-xs font-bold tracking-wide italic">“Little does he know, his whole world's about to change”</h3>
                                <h3 class="text-xs tracking-wide italic flex w-full items-end justify-end">When Emma Falls in Love</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-light-pink to-light-pink-3 font-inter text-bg_blue gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item>
                            <img src="https://i.ibb.co/ZmskN72/lover.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1">
                                <h3 class="text-xs font-bold tracking-wide italic">"Can I go where you go? Can we always be this close forever and ever?"</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Lover</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-brown-light to-brown-dark font-inter text-white gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/GcjQxVd/red.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1">
                                <h3 class="text-xs font-bold tracking-wide italic">"You'll be alright, just wait and see. No one can hurt you now"</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Safe & Sound</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-blue-light to-blue-dark font-inter text-white gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/jLsgXvn/labyrinth.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1">
                                <h3 class="text-xs font-bold tracking-wide italic">"Uh oh, I'm falling in love. Oh no, I'm falling in love again"</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Labyrinth</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-purple-dark to-dark-purple font-inter text-white gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/5MpqK3W/ts-ver.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1 w-full h-full">
                                <h3 class="text-xs font-bold tracking-wide italic">“And I'm captivated by you, baby, like a firework show.”</h3>
                                <h3 class="text-xs tracking-wide italic flex w-full items-end justify-end">Sparks Fly</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-light-pink to-light-pink-2 font-inter text-bg_blue gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/ZmskN72/lover.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1">
                                <h3 class="text-xs font-bold tracking-wide italic">"I don't wanna think at anything else now that I thought of you."</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Daylight</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-brown-light to-brown-dark font-inter text-white gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/85YvMVH/red-t.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1">
                                <h3 class="text-xs font-bold tracking-wide italic">"And meet me there tonight. Let me know that it's not all in my mind."</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Everything Has Changed</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-white to-black font-inter text-black gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/PGx6vZY/dress.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1 ">
                                <h3 class="text-xs font-bold tracking-wide italic">“Say my name and everything just stops. I don't want you like a best friend”</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Dress</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-purple-dark to-dark-purple font-inter text-white gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/5MpqK3W/ts-ver.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1 w-full h-full">
                                <h3 class="text-xs font-bold tracking-wide italic">“You belong with me.”</h3>
                                <h3 class="text-xs tracking-wide italic flex w-full items-end justify-end">You belong with Me</h3>
                            </div>
                        </div>
                        <div class="flex rounded-xl bg-gradient-to-l from-light-pink to-light-pink-2 font-inter text-bg_blue gap-3 px-3 py-3 shadow hidden duration-1000 ease-in-out w-full" data-carousel-item >
                            <img src="https://i.ibb.co/ZmskN72/lover.webp" class="rounded-xl h-10">
                            <div class="flex flex-col justify-start gap-1">
                                <h3 class="text-xs font-bold tracking-wide italic">"I hope I never lose you, hope it never ends."</h3>
                                <h3 class="text-xs tracking-wide italic flex justify-end">Cornelia Street</h3>
                            </div>
                        </div>

                    </div>
                    <div class="absolute top-0 left-1/2 w-96 -translate-x-1/2  z-30 h-20 ">
                        <div class="w-full h-full relative">
                            <!-- Slider controls -->
                            <button type="button" class="absolute border border-red-600 top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-black opacity-50 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60  dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="absolute border border-pruple-500  top-0 end-0 z-30 flex items-center justify-end w-full h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-black opacity-50 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60  dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>

                            <div class="absolute z-30 flex -translate-x-1/2 bottom-0 left-1/2 space-x-3 rtl:space-x-reverse  justify-center">
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="true" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="5"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="6"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="7"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="8"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="9"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="10"></button>
                                <button type="button" class="w-2 h-2 rounded-full active:bg-purple-500" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="11"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-1/2 justify-center z-20">
                <h1 id="showTypeWriter" class="text-2xl tracking-wider hidden ">
                    <span class="typewriter" id="typewriter">HIIIII BABIEEEEE</span>
                </h1>
                
                <!-- <h1 id="showMessage" class="tracking-wider text-center ">
                    
                                                                                <p class="text-xs">
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⠀⠀⠀⢀⣀⣀⣀⣀⠀⠀⠀⢴⣴⡶⠶⠾⠞⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣶⡄⠀⠀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⣾⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠇⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⣴⣦⣦⠶⠟⠋⠀⠀⣀⠀⠀⠀⠉⠙⢿⡆⠀⠘⣷⣀⣤⣾⣿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⡇⠀⢘⣿⣧⡀⠀⠀⣷⠛⠙⠛⠲⢤⡀⠀⢰⡿⠀⠀⢀⣤⡄⠀⠀⠀⢸⡟⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⢿⡧⠀⠀⠀⠀⠀⠀⣿⠁⠀⠀⠀⠀⢸⡇⠀⠀⢻⡏⠉⠉⠙⠛⠷⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢿⣄⢸⡏⠈⢿⡆⠐⣿⠀⠀⠀⠀⠀⣿⠀⣽⡇⠀⢀⡾⢻⡿⠀⠀⠀⠺⠇⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠸⣿⣤⣤⣤⡄⠀⠐⣿⡀⠀⠀⠀⢀⡿⠁⠀⠀⢸⠇⠀⠀⠀⠀⠀⠀⠻⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠀⠀⠸⣯⠀⢽⡇⠀⠀⠀⣴⠏⠀⣿⠃⣰⡟⠁⢹⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠹⣦⠀⠀⠀⠀⠀⠀⠉⠛⠛⠛⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠠⣤⣤⣤⡼⠏⠀⠀⠉⠓⠶⠛⠉⠀⠀⠘⠛⠋⠀⠀⠹⢇⠀⠀⢠⣦⣶⠄⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⠷⠿⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⣤⣶⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣀⠀⠀⠀
                                                            ⣰⠶⠶⣦⣀⠀⢀⡞⠁⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣶⠂⣤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⠋⠀⠸⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢴⡶⣄⠀⠀⠀⠀⣠⠞⣩⠟⠀⠀⠀
                                                            ⢸⡇⠀⠈⠹⠿⠏⠀⢀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⡇⠀⠸⢿⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣶⡿⠁⠀⠀⠀⢿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⣇⢹⣇⠀⠀⣾⠇⣸⠇⠀⠀⠀⠀
                                                            ⠈⠻⣦⣀⠀⠀⠀⠀⣼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢐⣿⠀⠀⠀⠈⠻⣶⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣾⠏⠀⠀⠀⠀⠀⠈⢿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣿⡄⠹⣷⡼⢋⡾⠃⠀⠀⠀⠀⠀
                                                            ⠀⠀⠈⠛⠷⣦⠄⢰⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢾⡇⠀⠀⠀⠀⠀⠀⠻⢢⣄⣀⣀⣀⣀⣀⣀⣀⣸⡇⠀⠀⠀⠀⠀⠀⠀⠸⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⠀⠀⣠⠟⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠐⠏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠁⠉⠉⠉⠉⠉⠉⠉⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⢿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⣧⣠⠇⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⡀⣠⠖⢻⡇⠀⠀⠀⢸⡯⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢘⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠁⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⢘⣿⠈⠛⠁⢀⡞⠁⠀⠀⠀⢺⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠀⠀⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⣿⡀⠀⣠⠟⠁⠀⠀⠀⠀⠘⠏⡀⠀⠀⠀⢠⣤⣦⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣾⣿⡷⠂⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⢀⠀⠀⢀⣴⣤⠀⠀⠀⠀⠈⠛⢶⠃⠀⠀⠀⠀⠀⡀⠀⣼⠏⠀⠀⠀⠘⠿⣾⠿⠂⠀⠀⠀⣀⡄⠀⠀⠀⠀⠀⠘⠿⠿⠃⠀⠀⠀⠀⠀⣦⣄⣄⣤⣴⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠘⣷⠶⠿⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠚⠛⠛⣿⠟⠁⡀⠀⣠⣴⠀⠀⠀⠀⠀⣰⡿⠻⣧⡀⠀⠀⠀⠀⠀⢀⡤⢀⡴⣶⣇⠀⣿⡍⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠘⣧⣴⠟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠁⣰⣧⠞⢻⠃⠀⠀⠀⠀⠘⠉⠀⠀⠈⠛⠀⠀⠀⠀⠀⠘⠛⠋⠀⠋⠉⢀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠈⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠠⣴⠟⢿⡄⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⠿⢦⣤⣤⣤⠀⠀⠀⢀⡀⠀⠀⠀⠀⣠⠞⣿⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣶⣆⠀⢠⣴⡆⠀⠀⠀⠀⠈⠛⢶⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢨⡿⠀⠀⠀⠀⠀⠀⠀⢰⣟⠛⢷⣄⣀⡴⠁⣴⠃⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⣠⣤⣀⡀⠀⢿⠠⣿⣾⣿⢻⡇⠀⠀⠀⠀⠀⠀⠀⠹⣦⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢋⡀⠀⠀⠀⠀⠀⠀⠈⢿⡄⠀⠉⠉⠀⣼⠃⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⣿⡈⢹⣿⢷⣿⣾⣿⣿⠇⡼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢿⣆⠀⠀⠀⠀⠀⠀⠈⠻⣦⡀⠀⣰⠃⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠸⣇⢸⣿⣿⢽⣿⣿⡏⣸⠃⠀⠀⠀⠀⠀⣼⡗⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⣷⡀⠀⠀⠀⠀⠀⠀⠉⠹⡶⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠹⣯⣿⠃⣿⣿⣿⢺⠇⠀⠀⠀⠀⣠⡿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⣿⣄⠀⠀⠀⠀⠀⠀⠈⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠈⠿⣦⣿⣿⢇⡎⠀⠀⠀⣠⡿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣷⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣄
                                                            ⠀⠀⠀⠀⠀⠀⠀⣠⡀⠈⠻⢷⡾⠀⠀⢀⣾⠏⠀⠀⠀⠀⠀⠀⠀⠀⠀⡠⢂⠀⠐⡄⠀⡀⠀⡔⠀⡠⠒⡄⢰⠔⠒⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⣿⡄⠀⠀⠀⠀⠀⠀⠀⣀⣀⡀⠀⠀⣠⠏⡽
                                                            ⠀⠀⠀⠀⠀⠀⠀⠹⣿⣦⣄⢸⢿⠀⣴⡟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠥⠔⡆⠀⠘⠜⠘⠜⠀⠀⢇⣉⡀⢸⠀⠀⢸⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⣦⡀⠀⠀⠀⠀⢼⡏⠉⠛⠛⠛⠁⢰⠇
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠹⣷⡉⢿⣿⣰⠏⠀⠀⠀⠀⠀⠀⠀⠀⠀     ⠐⠜⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢷⣀⠀⠀⠀⠈⣿⡀⠀⠀⠀⠀⡿⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠑⢷⣄⣿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⣦⡀⠀⠀⠈⠻⣦⣤⣀⠸⠁⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡿⣿⡄⠀⠀⠀⠀⠀⠀⢀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⢿⡄⠀⠀⠀⠀⠀⠉⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡿⠀⣹⡂⠀⠀⠀⠀⠠⣶⠿⢛⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⠻⠷⣶⣄⠀⠀⠀⠀⠀⠀⠈⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⢀⡿⠁⠀⢘⡅⠀⠀⣠⣶⡷⠀⠀⢸⡅⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡃⠀⠀⠙⢷⣄⠀⠀⠀⠀⠀⠈⣱⡄⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⢸⣧⠀⠀⠈⣷⠀⣺⠟⠋⠀⠀⠀⣼⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⡇⠀⠀⠀⠀⠘⠿⣦⣴⣶⣶⡾⠟⠁⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠸⠻⢷⣤⣀⣹⠞⠁⠀⠀⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣽⡇⠀⠀⠀⠀⠀⠀⠀⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠀⢺⡀⠀⠀⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                            ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠃⠀⠀⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣺⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                                                                                </p>

                                                                            </h1> -->
            </div>
        </div>
        
        <button data-modal-target="default-modal" data-modal-toggle="default-modal" id="slideButton" class="absolute bottom-1/4 left-[41%] mt-10 slide-button bg-white text-purple-500 py-2 px-4 rounded-md border border-purple-500 hover:bg-purple-500 hover:text-white">
            See the entire message?
        </button>
        <div id="default-modal" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] ">
            <div class="flex flex-col rounded-lg h-auto bg-white py-4 px-5">
                <div class="flex flex-col justify-center items-start">
                    <h1 class="tracking-wider text-start text-sm">
                        <p>HIIIII BABIEEEEE, HAPPY BIRTHDAYYYYY!!</p>
                        <p>I WISH YOU ALL THE BEST!</p>
                        <p>Always know na whatever happenings man ang mangyari, isa ako sa sasalo sayo.</p>
                        <p>Always know na whatever feeling or emotion ang mafeel mo, that's totally valid.</p>
                        <p>Live your life to the fullest gwen, minsan lang tayo maging 21 HAHAHA.</p>
                        <p>Ambait mo, charming, cutie, and thoughtful. Dapat lang na you deserve nothing but the best :></p>
                        <p>Thank you kasi nagiging part na ako ng buhay mo. And I'd do my best not to break your trust and your heart.</p>
                        <p>Here's to our future talks about PJO and Hamilton and other stufffss.</p>
                        <p>Pasabi na lang na salamat kina tito at tita kasi pinalaki ka nila. Sabihin mo ako na bahala. HAHAHA :></p>
                        <p>Again, Happy Birthday babiiee!!!</p>
                        <p>I wish you all the best for the rest of your life.</p>

                    </h1>
                </div>
            </div>
        </div>
        <div class="flex gap-3 px-3 py-3 bg-black bg-opacity-10 w-56 h-16 absolute bottom-10 rounded-xl left-10 z-10">
            <img src="https://i.ibb.co/FXmwrwZ/ts.jpg" class="rounded-xl">
            <div class="flex flex-col justify-end items-start text-white">
                <h3 class="text-sm font-bold tracking-wide">August</h3>
                <p class="text-xs">Taylor Swift</p>
            </div>
            <div class="flex items-center ml-4">
                <svg id="play" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24" onclick="togglePlayMusic()" class="cursor-pointer"><path fill="white   " d="M21.409 9.353a2.998 2.998 0 0 1 0 5.294L8.597 21.614C6.534 22.736 4 21.276 4 18.968V5.033c0-2.31 2.534-3.769 4.597-2.648l12.812 6.968Z"/></svg>
                <svg id="pause" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24" onclick="togglePlayMusic()" class="hidden cursor-pointer"><path fill="white   " d="M2 6c0-1.886 0-2.828.586-3.414C3.172 2 4.114 2 6 2c1.886 0 2.828 0 3.414.586C10 3.172 10 4.114 10 6v12c0 1.886 0 2.828-.586 3.414C8.828 22 7.886 22 6 22c-1.886 0-2.828 0-3.414-.586C2 20.828 2 19.886 2 18V6ZM14 6c0-1.886 0-2.828.586-3.414C15.172 2 16.114 2 18 2c1.886 0 2.828 0 3.414.586C22 3.172 22 4.114 22 6v12c0 1.886 0 2.828-.586 3.414C20.828 22 19.886 22 18 22c-1.886 0-2.828 0-3.414-.586C14 20.828 14 19.886 14 18V6Z"/></svg>
            </div>
        </div>
        <img src="https://i.ibb.co/bztVKpn/murky.png" class="w-96 h-96 absolute bottom-0 left-0 z-0">
        <img src="https://i.ibb.co/vz9qycF/cat.gif" class="w-40 h-40 absolute top-0 left-0 z-0">
        <img src="https://i.ibb.co/285hgKN/murky-top.png" class="w-52 h-52 absolute top-0 right-0 z-10">
        <img src="https://i.ibb.co/n8JQfgd/flowers.png" class=" w-96 w- h-96 absolute bottom-0 right-0 z-0">

        <footer class=" absolute bottom-0 right-0 font-light text-sm tracking-wider z-10">
            <p>Made with love, Cy Jay Herrera</p>
        </footer>
        <audio loop  id="background-music" class="absolute bottom-0 left-0 z-10">
            <source src="https://audio.jukehost.co.uk/jzdw13hFgvimDqOITPkcmM7Km97xv0jj" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>

        <div class="flex  absolute bottom-10 right-10 z-50">
            <button data-modal-target="mind-modal" data-modal-toggle="mind-modal" class="flex gap-3 text-sm  bg-purple-500 text-white py-2 px-4 rounded-md border border-purple-500 hover:bg-white hover:text-purple-500">
                <p>What's in my mind?</p>
            </button>
        </div>
        <div id="mind-modal" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] ">
            <div class="flex flex-col rounded-lg bg-white pt-5 py-4 px-5 h-1/2 w-1/2 overflow-auto sidebar sidebar-scrollbar ">
                <div class="flex flex-col justify-center items-start">
                    <div class="tracking-wider text-start text-sm">
                        <p class="text-center">IKAW SIYEMPRE :></p><br><br><br><br>
                        <p>Happy 21st birthdayyy gwenn. Ano po feeling diyan? Sorry 18 pa lang ako eh hehe. Bukod dun sa message sa unahan, lagay ko lang dito message ko sayo.
                            
                        </p><br>
                        <p>Thank you. Like legit thank you kasi andyan ka and thank you kasi nag first move ka nun :> Thank you kasi pinapasaya mo ako araw-araw.
                            Thank you sa lahat, kahit magkausap pa lang tayo na less than a month, napakasaya ko for the whole month. Overflowing na saya

                        </p><br>
                        <p>Please prioritize yourself babiee. Alam ko ilang beses na rin natin 'to nadaanan HAHAHA pero please 'wag mo iprioritize kasiyahan natin over sa kasiyahan mo.
                            Gusto kong sumaya ka, out of everything else. Naiisip ko 'yung line na 'I'll be here through thick and thin' :> AHHAHAH nafall na ata ako ng malalim kung gan'to na naiisip ko HAHAHA
                            So please please please, ishare natin mga happy or sad moments natin, mag-away tayo tas magbati agad the night after, pag-usapan natin mga interests natin buong araw - 
                            sa lahat ng 'yun, magiging masaya ako basta andyan ka.
                        </p><br>
                        <p>Now, for my confession. Ay HHAHAHA. Ano lang, I know two things for sure:</p><br>
                        <p>1. Mas lalo akong nafafall sayo, araw-araw. To the point na ayokong magstay tayo as just "friends". I want more than that gwen.</p>
                        <p>2. Masaya ako sayo, sa'tin, kung ano man meron tayo ngayon, like super saya. Kaya gusto kong i-"take it slow" natin 'to. Kahit months or years pa man 'yan. </p><br>
                        <p>Ikaw unang ineffortan ko ng gan'to babiee, and super proud ako at super saya na ikaw 'yung una (at last). Kaya kahapon pa, kapag kada tingin ko dito
                            habang nagtetest, kinikilig ako sa sarili ko AHHAHAHHA I'm starting to fall in love with you babiee. (Jusko nahihiya ako itype 'to HAHAHHA) I want you gwen, badly. 
                        </p><br>
                        <p>Sana nagustuhan mo 'to babieeeeeeeeee. Sana 'di ka nagulat dun sa last sentence sa taas HAHHAHHAHAH. I'd always make an effort basta ikaw.</p>
                        <p>Let's share memorieessss - the good times and bad times.</p>
                        <p>Happy birthdayy babiee</p><br>

                        <p>Pipiliin kita, araw-araw</p>
                        <p>Cy Jayyy</p><br><br>

                        <p>Nandito lang ako palagi. Nandito pa rin ako. I love you with all my heart gwen. 1/17/25</p><br><br>
                        <p class="text-xs italic">Website Finished!: Monday, August 12, 2024. 2:08 AM</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    </body>
    <script>
        let isPlaying = false;
        let i = 1;
        // comment for committing to git
        function togglePlayMusic(){
            isPlaying = !isPlaying;
            document.getElementById('showTypeWriter').classList.remove('hidden');
            
            var audio = document.getElementById('background-music');
            const playButton = document.getElementById('play');
            const pauseButton = document.getElementById('pause');
            if (isPlaying) {
                playButton.style.display = 'none';
                pauseButton.style.display = 'block';
                if(i==1){
                    typeMessage(messages[currentIndex], 150); // Start typing the first message
                }
                i=0;
                audio.play();
            } else {
                playButton.style.display = 'block';
                pauseButton.style.display = 'none';
                audio.pause();
            }
        }
        function showAll(){
            document.getElementById('slideButton').classList.remove('show');
            document.getElementById('showMessage').classList.remove('hidden');
            document.getElementById('showTypeWriter').classList.add('hidden');
        }
        const messages = [
            "HIIIII BABIEEEEE",
            "HAPPY BIRTHDAYYYYY!!",
            "I WISH YOU ALL THE BEST!",
            "Always know na whatever happenings man ang mangyari, isa ako sa sasalo sayo",
            "Always know na whatever feeling or emotion ang mafeel mo, that's totally valid",
            "Live your life to the fullest gwen, minsan lang tayo maging 21 HAHAHAH",
            "Ambait mo, charming, cutie, and thoughtful",
            "Dapat lang na you deserve nothing but the best :>",
            "Thank you kasi nagiging part na ako ng buhay mo",
            "And I'd do my best not to break your trust and your heart",
            "Here's to our future talks about PJO and Hamilton and other stufffsss",
            "Pasabi na lang na salamat kina tito at tita kasi pinalaki ka nila",
            "Sabihin mo ako na bahala",
            "HAHAHHAHAHAHHA :>",
            "Again, Happy Birthday babiiee!!!",
            "I wish you all the best for the ressssstttt of your life",
        ];

        let currentIndex = 0;
        const typewriterSpan = document.getElementById("typewriter");

        function typeMessage(message, delay) {
            typewriterSpan.innerHTML = ""; // Clear previous text
            const characters = message.split("");
            let i = 0;

            const interval = setInterval(() => {
                if (i < characters.length) {
                    typewriterSpan.innerHTML += characters[i];
                    i++;
                } else {
                    clearInterval(interval);
                    setTimeout(() => {
                        currentIndex = (currentIndex + 1) % messages.length; // Move to the next message
                        if (currentIndex === 0) {
                            slideButton.classList.add('show'); // Show button after the last message
                        }
                        typeMessage(messages[currentIndex], 120); // Start typing next message after a delay
                    }, 2000); // Show the completed message for 2 seconds
                }
            }, delay);
        }
        
    </script>
</html>