<section class="page-title" style="background-image:url({{asset("images/background/12.jpg")}});">
    <div class="auto-container">
        <h2 style="color: white">{{ __("information") }}
            @if(Route::currentRouteName() == 'importance')
                - {{ __('importance of Crvena Stijena') }}
            @elseif(Route::currentRouteName() == 'landscape')
                - {{ __('landscape') }}
            @elseif(Route::currentRouteName() == 'geology')
                - {{ __('geology') }}
            @elseif(Route::currentRouteName() == 'age-of-the-site')
                - {{ __('age of the site') }}
            @elseif(Route::currentRouteName() == 'who-lived')
                - {{ __('who lived at crvena stijena') }}
               @elseif(Route::currentRouteName() == 'archaeological-excavations')
                - {{ __('archaeological excavations') }}
            @elseif(Route::currentRouteName() == 'finds')
                - {{ __('finds') }}
            @endif
        </h2>
    </div>
</section>
