<li>
    <div class="relative inline-block text-left lg:ml-6 xl:ml-12 bg-slate-200 text-gray-900 text-sm
                block dark:bg-LightSlateGray-900 dark:placeholder-gray-400
                dark:text-white hover:text-dark dark:text-gray-200">
        <div>
            <button id="lang_btn"
                    onclick="{
                        const languageDropDownBox = document.getElementById('language_drop_down_box');
                        languageDropDownBox.classList.replace('invisible', 'visible');
                    }"
                    type="button"
                    class="inline-flex w-full justify-center text-sm font-medium
                           dark:text-white shadow-sm bg-slate-200 dark:bg-LightSlateGray-900 my-3"
                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                @if(session()->get('locale') == 'en' || app()->getLocale() == 'en') <x-flag-language-en class="w-8 h-8" />
                @endif
                @if(session()->get('locale') == 'hu' || app()->getLocale() == 'hu') <x-flag-language-hu class="w-8 h-8" />
                @endif
                <!-- Hero icon name: mini/chevron-down -->
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <div id="language_drop_down_box"
         class="absolute right-0 z-10 mt-2 mr-20 w-[120px] origin-top-right rounded-md bg-white
                shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none bg-slate-200
                dark:bg-LightSlateGray-800 invisible"
         role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div class="py-1" role="none">

            <a onclick="{
                const url = `{{ route('changeLang') }}`
                window.location.href = url + '?lang=en';
                const languageDropDownBox = document.getElementById('language_drop_down_box');
                languageDropDownBox.classList.replace('visible', 'invisible');
                }"
               href="#" class="flex justify-center align-middle text-gray-700 block px-2 py-2 text-sm"
               role="menuitem" tabindex="-1" id="menu-item-0">
                <x-flag-language-en class="w-8 h-8" /> <span class="ml-2 pt-1 dark:text-white dark:hover:text-gray-400">English</span>
            </a>
            <a onclick="{
                const url = `{{ route('changeLang') }}`
                window.location.href = url + '?lang=hu';
                const languageDropDownBox = document.getElementById('language_drop_down_box');
                languageDropDownBox.classList.replace('visible', 'invisible');
                }"
               href="#" class="flex justify-center align-middle text-gray-700 block px-2 py-2 text-sm"
               role="menuitem" tabindex="-1" id="menu-item-1">
                <x-flag-language-hu class="w-8 h-8" /> <span class="ml-2 pt-1 dark:text-white dark:hover:text-gray-400">Magyar</span>
            </a>
        </div>
    </div>
</li>
