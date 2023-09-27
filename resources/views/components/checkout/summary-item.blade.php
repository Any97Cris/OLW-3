<div @class([
        "flex items-center justify-between",
        "boder-t border-white border-opacity-10 pt-6 text-white" => $isLast ?? false     
    ])>
    <dt class="text-primary-200">{{ $title }}</dt>
    <dt class="text-primary-300">R$ {{ $value }}</dt>
</div>