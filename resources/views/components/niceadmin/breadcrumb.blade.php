<div>
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                @for ($i = 0; $i < count($links) - 1; $i++)
                    <li class="breadcrumb-item">
                        {{ $links[$i] }}
                    </li>
                @endfor
                <li class="breadcrumb-item active">
                    {{ $links[count($links)-1] }}
                </li>
            </ol>
        </nav>
    </div>
</div>