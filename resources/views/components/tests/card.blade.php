@props([
    'title',
    'content' => 'Content初期値',
    'message' => 'Message初期値',
])

<div {{ $attributes->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2'
    ]) }} >
    <div>{{ $title }}</div>
    <div>image</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>