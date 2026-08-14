<section class="page-title" style="background-image:url({{asset("images/background/12.jpg")}});">
    <div class="auto-container">
        <h2 style="color: white">{{ __("petrovici") }}
            @if(Route::currentRouteName() == 'village')
                - {{ __('the village') }}
            @elseif(Route::currentRouteName() == 'monastery')
                - {{ __('manastir kosijerevo') }}
            @endif
        </h2>
    </div>
</section>
