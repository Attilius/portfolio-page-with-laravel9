 <!-- ====== Navbar Section Start -->

 <header
    x-data="{navbarOpen: false}"
    class="fixed left-0 top-0 z-50 bg-slate-200 w-full flex items-center shadow-md dark:bg-LightSlateGray-900 h-24 dark:shadow-custom"
 >
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <span class="text-xl xl:text-2xl font-bold text-emerald-600 dark:text-white">Attilius</span>
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div class="df">
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                    x-bind::class="navbarOpen && 'navbarTogglerActive' "></x-layout.navbar-hamburger>
                    <!--Start-->
                    <label for="toggleThree" class="flex items-center cursor-pointer select-none">
                        <div class="relative">
                           <input type="checkbox" id="toggleThree" class="sr-only">
                           <div class="block bg-[#E5E7EB] w-14 h-8 rounded-full"></div>
                           <div class="
                              dot
                              absolute
                              left-1
                              top-1
                              bg-white
                              w-6
                              h-6
                              rounded-full
                              transition
                              flex
                              items-center
                              justify-center
                              ">
                              <span class="active hidden">
                                 <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z" fill="white" stroke="white" stroke-width="0.4"></path>
                                 </svg>
                              </span>
                              <span class="inactive text-body-color">
                                 <svg class="w-4 h-4 stroke-current" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                 </svg>
                              </span>
                           </div>
                        </div>
                     </label>
                    <!--End-->
                    <nav
                    :class="!navbarOpen && 'hidden'"
                    id="navbarCollapse"
                    class="absolute right-0 top-full bg-slate-200 py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-LightSlateGray-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
                    >
                    <ul class="block lg:flex lg:items-center">
                        @foreach ($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                        @endforeach
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
 </header>

<!-- ====== Navbar Section End -->