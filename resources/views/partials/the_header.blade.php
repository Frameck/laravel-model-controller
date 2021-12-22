@php
$nav_links = [
    [
        "text"=> "Homepage",
        "route_name"=> "home.index"
    ],
    [
        "text"=> "Movies",
        "route_name"=> "movies.index"
    ]
]
@endphp


<header class="main-header">
    <nav>
        <ul>
            @foreach($nav_links as $link)
                @php
                    $prefix = explode('.', $link['route_name'])[0]
                @endphp
                <li>
                    <a href="{{ $prefix }}">
                        {{ strtoupper($link['text']) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>