<div class="form-floating {{ $class ?? '' }}">
    <input type="{{ $type ?? 'text' }}"
           class="form-control {{ $inputClass ?? '' }} @error($name) is-invalid @enderror"
           name="{{ $name }}" id="{{ $id ?? $name }}"
           placeholder="{{ $placeholder ?? '' }}"
           value="{{ $value ?? '' }}"
           @isset($required) required @endisset()
           @isset($disabled) disabled @endisset()/>
    <label for="{{ $id ?? $name }}">{{ $slot ?? '' }}</label>
    @error($name)
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
