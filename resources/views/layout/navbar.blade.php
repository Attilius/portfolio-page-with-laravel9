 <!-- ====== Navbar Section Start ====== -->
 <header
    x-data="{navbarOpen: false}"
    class="fixed left-0 top-0 z-50 bg-slate-200 w-full flex items-center shadow-emerald dark:bg-LightSlateGray-900 h-24 dark:shadow-emerald"
 >
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <span id="logo" class="text-xl xl:text-2xl font-bold text-emerald-600 dark:text-white">Attilius</span>
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div class="df">
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                    x-bind::class="navbarOpen && 'navbarTogglerActive' "></x-layout.navbar-hamburger>
                    <nav
                    :class="!navbarOpen && 'hidden'"
                    id="navbarCollapse"
                    class="absolute right-0 top-full bg-slate-200 py-5 px-6 z-50 shadow rounded-lg w-full
                           dark:bg-LightSlateGray-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full
                           lg:right-4 lg:block lg:static lg:shadow-none">
                    <ul id="menu" class="block lg:flex lg:items-center">
                        @foreach ($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">{{ __('navbar')[$item['label']] }}</x-layout.navbar-item>
                        @endforeach
                            <x-layout.select-language></x-layout.select-language>
                            <!--Start of switch-->
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                     id="light-dark-switch"
                                     class="w-5 h-5 stroke-current"
                                     viewBox="0 0 48 48"
                                     style="fill:white; margin-left: 40px; cursor: pointer;">
                                    <path d="M41.826,40.004c-0.188-0.58-0.726-0.973-1.336-0.978c-3.128-0.018-6.666-1.599-9.542-3.512 c-1.881,0.685-4.736,1.406-6.334,1.472l-0.275,0.011c-0.562,0.023-1.102,0.046-1.629,0.046c-2.092,0-3.997-0.349-6.466-2.367 l-0.22-0.221l-1.207-1.501c-0.52-0.646-0.417-1.59,0.229-2.109c0.645-0.52,1.591-0.417,2.109,0.229l1.106,1.376 c2.133,1.708,3.352,1.658,5.954,1.551l0.276-0.012c0.831-0.034,2.237-0.335,3.558-0.703c-0.956-0.856-1.72-1.689-2.194-2.399 l1.713-1.141c0.429-0.287,0.666-0.787,0.619-1.305c-0.047-0.515-0.372-0.963-0.848-1.17c-0.041-0.018-0.434-0.196-0.959-0.599 c1.185-0.891,1.975-2.433,2.085-4.253C29.065,22.221,29.5,21.664,29.5,21c0-0.828-0.672-1.5-1.5-1.5h-4.339 c0.315-7.23,5.159-12.799,7.565-14.414c0.519-0.35,0.745-0.986,0.562-1.588C31.604,2.901,31.061,2.5,30.431,2.5 c-9.048,0.034-16.481,3.94-20.394,10.717c-2.929,5.07-3.689,11.205-2.087,16.831c1.543,5.427,5.076,9.855,9.947,12.469 c3.636,1.952,7.561,2.983,11.349,2.983c0.002,0,0.004,0,0.006,0c4.384,0,8.555-1.355,12.064-3.92 C41.809,41.219,42.014,40.586,41.826,40.004z M25.466,22.5c-0.121,0.906-0.56,1.596-1.04,1.867 c-0.282-0.514-0.535-1.106-0.725-1.79L23.699,22.5H25.466z M20.87,22.5l0,0.006l1.134,0.004l-0.65,1.971 c0,0-0.012,0.003-0.023,0.007C20.781,25.402,19.947,26,19,26c-1.528,0-2.776-1.53-2.962-3.5H20.87z"></path>
                                </svg>
                            </div>
                            <!--End of switch-->
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
 </header>
<!-- ====== Navbar Section End ====== -->
