<!-- component -->

<div id="Main"
    class="xl:rounded-r transform  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start h-full  w-54 sm:w-54 bg-gray-900 flex-col overflow-y-auto">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

    <div class=" xl:flex justify-start p-6 items-center space-x-3">
        <a href="{{ route('dashboard') }}">
            <img class="rounded-full w-12 inline" src="{{ asset('ui/images/kf-logo1.png') }} " />
            <p class="text-2xl px-1 ml-1 leading-6 text-white inline">Khan Fashion</p>
        </a>
    </div>
    <div class="mt-6 flex flex-col justify-start items-center pl-4 w-full border-gray-600 border-b space-y-4 pb-5 ">
        <a href="{{ route('categories.index') }}"
            class="flex jusitfy-start  items-center space-x-6 w-full  focus:outline-none  focus:text-indigo-400  text-white rounded ">
            <i class="fa-solid fa-list" style="color: #eaecf0;"></i>
            <p class="text-base leading-4 ">Category</p>
        </a>
        <a href="{{ route('sizes.index') }}"
            class="flex jusitfy-start  items-center w-full  space-x-6 focus:outline-none text-white focus:text-indigo-400   rounded ">
            <i class="fa-solid fa-layer-group" style="color: #e9ecf1;"></i>
            <p class="text-base leading-4 ">Size</p>
        </a>
        <a href="{{ route('colors.index') }}"
            class="flex jusitfy-start  items-center w-full  space-x-6 focus:outline-none text-white focus:text-indigo-400   rounded ">
            <i class="fa-solid fa-palette" style="color: #f9fafa;"></i>
            <p class="text-base leading-4 ">Color</p>
        </a>
        <a href="{{ route('types.index') }}"
            class="flex jusitfy-start  items-center w-full  space-x-6 focus:outline-none text-white focus:text-indigo-400   rounded ">
            <i class="fa-solid fa-object-ungroup" style="color: #eff1f5;"></i>
            <p class="text-base leading-4 ">Type</p>
        </a>
    </div>
    {{-- Each items in aside --}}
    <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
        <button onclick="toggleMenu('icon1', 'menu1')"
            class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full py-5 space-x-14  ">
            <p class="text-sm leading-5  uppercase">Profile Overview</p>
            <svg id="icon1" class="transform rotate-180" width="24" height="24" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div id="menu1" class="justify-start  flex-col w-full md:w-auto items-start pb-1 hidden">
            <button
                class="flex justify-start items-center space-x-2 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-base leading-4  ">Messages</p>
            </button>
            {{-- template of sub menu items 👆👆 --}}
        </div>
    </div>
    {{-- 👆👆 this is a template of sub menu --}}

    {{-- submenu 2 --}}
    <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
        <button onclick="toggleMenu('icon2', 'menu2')"
            class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
            <p class="text-sm leading-5 uppercase">VENDORS</p>
            <svg id="icon2" class="transform rotate-180" width="24" height="24" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div id="menu2" class="hidden justify-start flex-col items-start pb-5 ">
            <button
                class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-base leading-4  ">Messages</p>
            </button>
            <button
                class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 19C10.2091 19 12 17.2091 12 15C12 12.7909 10.2091 11 8 11C5.79086 11 4 12.7909 4 15C4 17.2091 5.79086 19 8 19Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.85 12.15L19 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M18 5L20 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M15 8L17 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <p class="text-base leading-4  ">Security</p>
            </button>
        </div>
    </div>

    {{-- submenu 3 --}}
    <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
        <button onclick="toggleMenu('icon3', 'menu3')"
            class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
            <p class="text-sm leading-5 uppercase">VENDORS</p>
            <svg id="icon3" class="transform rotate-180" width="24" height="24" viewBox="0 0 24 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div id="menu3" class="hidden justify-start flex-col items-start pb-5 ">
            <button
                class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                <svg class="fill-stroke" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 10L11 14L17 20L21 4L3 11L7 13L9 19L12 15" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-base leading-4  ">Messages</p>
            </button>
            <button
                class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 19C10.2091 19 12 17.2091 12 15C12 12.7909 10.2091 11 8 11C5.79086 11 4 12.7909 4 15C4 17.2091 5.79086 19 8 19Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.85 12.15L19 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M18 5L20 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M15 8L17 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <p class="text-base leading-4  ">Security</p>
            </button>
        </div>
    </div>


    <div class=" flex justify-between items-center w-full fixed bottom-2 left-0 px-1">
        <div class="flex justify-center items-center  space-x-2">
            <div>
                <img class="rounded-full" src="{{asset('ui/images/avatar.jfif')}}"
                    alt="avatar" />
            </div>
            <div class="flex justify-start flex-col items-start">
                <p class="cursor-pointer text-sm leading-5 text-white">Topu Khan</p>
                <p class="cursor-pointer text-xs leading-3 text-gray-300">topukhan735@gmail.com</p>
            </div>
        </div>
        <i class="fa fa-gear text-white text-2xl"></i>
    </div>
</div>

<script>
    // Function for toogle submenu in aside bar
    const toggleMenu = (iconId, menuId) => {
        let icon = document.getElementById(iconId);
        let menu = document.getElementById(menuId);

        if (icon && menu) {
            icon.classList.toggle("rotate-180");
            menu.classList.toggle("hidden");
            menu.classList.toggle("flex");
        }
    };

    let Main = document.getElementById("Main");
    let open = document.getElementById("open");
    let close = document.getElementById("close");

    const showNav = (flag) => {
        if (flag) {
            Main.classList.toggle("-translate-x-full");
            Main.classList.toggle("translate-x-0");
            open.classList.toggle("hidden");
            close.classList.toggle("hidden");
        }
    };
</script>
