<button
  {{
    $attributes->class([
      'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition',
      'bg-GoldenRod-600 border-GoldenRod-600 text-white hover:bg-GoldenRod-500 dark:bg-transparent dark:text-GoldenRod-500
       dark:hover:bg-GoldenRod-500 dark:hover:text-white' => $variant === 'golden',
    ])
  }}
>
  {{$slot}}
</button>