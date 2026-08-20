<section class="page-title" style="background-image:url({{asset("images/background/visit.jpg")}});">
    <div class="auto-container">
        <h2 style="color: white">{{ __("about us") }}
            @if(Route::currentRouteName() == 'scientific-team')
                - {{ __('scientific team') }}
            @elseif(Route::currentRouteName() == 'national-museum')
                - {{ __('National Museum') }}
            @elseif(Route::currentRouteName() == 'funding-sources')
                - {{ __('funding sources') }}
            @endif
        </h2>
    </div>
</section>
