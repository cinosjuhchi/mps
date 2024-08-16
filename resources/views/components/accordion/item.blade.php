<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button text-black" type="button" data-bs-toggle="collapse"
            data-bs-target="#{{ $collapseId }}" aria-expanded="true" aria-controls="{{ $collapseId }}">
            {{ $title }}
            @if ($attributes->has('code'))
                <span class="badge text-bg-primary mx-1">{{ $code }}</span>
            @endif
            @if ($attributes->has('jawatan'))
                <span class="badge text-bg-success mx-1">{{ $jawatan }}</span>
            @endif
            @if ($attributes->has('name'))
                <span class="badge text-bg-danger mx-1">{{ $name }}</span>
            @endif
        </button>
    </h2>
    <div id="{{ $collapseId }}" class="accordion-collapse collapse text-black" data-bs-parent="#{{ $parentId }}">
        <div class="accordion-body">
            {{ $slot }}
        </div>
    </div>
</div>
