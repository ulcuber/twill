@if (isset($breadcrumb))
    <nav class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb__items">
                @foreach($breadcrumb as $breadcrumbItem)
                    @if ($loop->last)
                        <li class="breadcrumb__item"><span>{{ $breadcrumbItem['label'] }}</span></li>
                    @else
                        <li class="breadcrumb__item"><a href="{{ $breadcrumbItem['url'] }}">{{ $breadcrumbItem['label'] }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
@endif
