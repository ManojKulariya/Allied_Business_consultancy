{{-- Statistics counter strip --}}
<x-frontend.section-wrapper :section="$section" :heading="false">
    <div class="row text-center g-4">
        @foreach(range(1, 4) as $i)
            @if($section->dataValue("stat_{$i}_value"))
                <div class="col-6 col-lg-3">
                    <div class="display-5 fw-bold">{{ $section->dataValue("stat_{$i}_value") }}</div>
                    <div class="text-uppercase small opacity-75">{{ $section->dataValue("stat_{$i}_label") }}</div>
                </div>
            @endif
        @endforeach
    </div>
</x-frontend.section-wrapper>
