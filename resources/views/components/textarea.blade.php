@props(['disabled' => false])

<textarea @disabled($disabled) {{$attributes->merge(['class'=> ' focus:border-indigo-500 rounded-md shadow-sm'])}}>
    {{$value ?? $slot}}
</textarea>