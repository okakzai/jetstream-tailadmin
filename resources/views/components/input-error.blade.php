@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-error-500']) }}>{{ $message }}</p>
@enderror
