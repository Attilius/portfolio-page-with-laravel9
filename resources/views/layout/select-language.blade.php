<li>
    <form action="/" method="GET">
        <label for="languages"></label>
        <select onchange="this.form.submit()" id="languages" class="ml-4 bg-gray-50 text-gray-900 text-sm
                             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-LightSlateGray-900
                             dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                             dark:focus:border-blue-500">
            @foreach($selectOptions as $option)
                <x-layout.select-language-item :value="$option['value']">{{ $option['language_name'] }}</x-layout.select-language-item>
            @endforeach
        </select>
    </form>
</li>
