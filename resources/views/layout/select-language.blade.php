<li>
    <label for="languages"></label>
    <select onchange="{
                const url = `{{ route('changeLang') }}`
                window.location.href = url + '?lang=' + value;
             }"
            name="lang" id="languages" class="lg:ml-6 xl:ml-12 bg-gray-50 text-gray-900 text-sm bg-slate-200
                         focus:ring-blue-500 block p-2.5 dark:bg-LightSlateGray-900
                         dark:placeholder-gray-400 dark:text-white hover:text-dark
                         dark:text-gray-200 focus:outline-none">
        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
        <option value="hu" {{ session()->get('locale') == 'hu' ? 'selected' : '' }}>Magyar</option>
    </select>
</li>
