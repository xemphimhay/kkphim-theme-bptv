<section>
    <div class="Top">
        <h1>
            <a href="{{ $item['link'] }}">{{ $item['label'] }} <i class=" fa fa-angle-right"></i></a>
        </h1>
    </div>
    <ul class="MovieList Rows AX A06 B04 C03 E20">
        @foreach ($item['data'] as $movie)
            @include('themes::themebptv.inc.section.section_thumb_item')
        @endforeach
    </ul>
</section>
