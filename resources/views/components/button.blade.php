<button
  {{
    $attributes->class([
      'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition',
      'hover:bg-primary hover:border-primary hover:text-white' => $variant === 'outline-primary',
      'hover:bg-red-700 hover:border-red-700 hover:text-white' => $variant === 'outline-red',
      'bg-red-700 border-red-700 text-white hover:bg-red-800 dark:bg-transparent dark:text-red-700
       dark:hover:bg-red-700 dark:hover:text-white' => $variant === 'red',
      'bg-GoldenRod-600 border-GoldenRod-600 text-white hover:bg-GoldenRod-500 dark:bg-transparent dark:text-GoldenRod-500
       dark:hover:bg-GoldenRod-500 dark:hover:text-white' => $variant === 'golden',
      'bg-gray-900 border-gray-700 text-white hover:bg-gray-800 ' => $variant === 'dark',
      'bg-primary border-primary text-white hover:bg-opacity-80' => $variant === 'primary',
    ])
  }}
>
  {{$slot}}
</button>