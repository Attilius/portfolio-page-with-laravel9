<li>
    <label for="languages"></label>
    <select onchange="{
                const url = `{{ route('changeLang') }}`
                window.location.href = url + '?lang=' + value;
             }"
            name="lang" id="languages" class="ml-4 bg-gray-50 text-gray-900 text-sm
                         focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-LightSlateGray-900
                         dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                         dark:focus:border-blue-500" x-data="">
        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
        <option value="hu" {{ session()->get('locale') == 'hu' ? 'selected' : '' }}>Magyar</option>
    </select>
</li>
