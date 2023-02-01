@props(['value'])

@error($value)
    <span class="text-danger" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
