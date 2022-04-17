<a 
href="{{ $href }}" 
target="{{ $target }}" 
{{ 
    $attributes->class([
        'py-3 px-6 md:px-9 lg:px-6 xl:px-9 rounded-3xl leading-normal border inline-block transition',
        'hover:bg-primary hover:border-primary hover:text-white' => $variant === 'outline-primary',
        'hover:bg-red-700 hover:border-red-700 hover:text-white' => $variant === 'outline-red',
        'bg-red-700 border-red-700 text-white hover:bg-red-800' => $variant === 'red',
        'bg-gray-900 border-gray-700 text-white hover:bg-gray-800' => $variant === 'dark',
        'bg-primary border-primary text-white hover:bg-opacity-80' => $variant === 'primary',
        'bg-emerald-600 text-white dark:bg-transparent dark:border-emerald-600 dark:text-emerald-600
         dark:hover:bg-emerald-600 dark:hover:text-white' => $variant === "emerald",
        'bg-orange-600 text-white dark:bg-transparent dark:border-orange-600 dark:text-orange-600
         dark:hover:bg-orange-600 dark:hover:text-white' => $variant === "orange"
    ])
}}>
{{ $slot }}
</a>