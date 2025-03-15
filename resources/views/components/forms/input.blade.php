<div>
    <label class="p-gird__signin-label">
        <p class="c-text__label u-pb-1">{{ $label }}</p>
        <input 
            type="{{ $type }}" 
            class="c-form__text" 
            name="{{ $name }}">
        <div class="p-gird__signin-errMsg">
            <p>{{ $error }}</p>
        </div>
    </label>
</div>