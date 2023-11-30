<li class="w-fit h-fit">
        <a href="" {{ $attributes->merge([
                "class" => "w-full h-full capitalize"
        ]) }}>
                {{ $slot }}
        </a>
</li>