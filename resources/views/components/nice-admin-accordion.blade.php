<div class="accordion" id="{{ $ID }}">

    @foreach ( $table as $record )
        <h2 class="accordion-header" >
            <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" aria-expanded="false"
                data-bs-target="#{{ $record['DomID'] }}"
                aria-controls="{{ $record['DomID'] }}">
                {{ $record['title'] }}
            </button>
        </h2>
        <div id="{{ $record['DomID'] }}" class="accordion-collapse collapse"
             data-bs-parent="#{{ $ID }}">
            <div class="accordion-body">
                {!! $record['body'] !!}
            </div>
        </div>
    @endforeach
</div>