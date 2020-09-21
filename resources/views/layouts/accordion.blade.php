<div id="accordion-{{$templateSlug}}" class="accordion mb-3">
    @foreach($manyForms as $name => $forms)
        <div class="accordion-heading @if ($loop->index) collapsed @endif"
             id="heading-{{\Illuminate\Support\Str::slug($name)}}"
             data-toggle="collapse"
             data-target="#collapse-{{\Illuminate\Support\Str::slug($name)}}"
             aria-expanded="true"
             aria-controls="collapse-{{\Illuminate\Support\Str::slug($name)}}">
            <h6 class="btn btn-link btn-group-justified pt-2 pb-2 mb-0 pr-0 pl-0 v-center">
                <x-orchid-icon path="arrow-right" class="text-xs mr-2"/> {!! $name !!}
            </h6>
        </div>

        <div id="collapse-{{\Illuminate\Support\Str::slug($name)}}"
             class="mt-2 collapse @if (!$loop->index) show @endif"
             aria-labelledby="heading-{{\Illuminate\Support\Str::slug($name)}}"
             data-parent="#accordion-{{$templateSlug}}">
                @foreach($forms as $form)
                    {!! $form !!}
                @endforeach
        </div>
    @endforeach
</div>
