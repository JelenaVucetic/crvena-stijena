<section class="page-title" style="background-image:url({{asset("images/background/visit.jpg")}});">
    <div class="auto-container">
        <h2 style="color: white">{{ __("current research") }}
            @if(Route::currentRouteName() == 'goals')
                - {{ __('goals') }}
            @elseif(Route::currentRouteName() == 'documentation')
                - {{ __('documentation of the site') }}
            @elseif(Route::currentRouteName() == 'neanderthal-fire-use')
                - {{ __('neanderthal fire use') }}
            @elseif(Route::currentRouteName() == 'neanderthal-lithic-technology')
                - {{ __('neanderthal lithic technology') }}
            @elseif(Route::currentRouteName() == 'hunting-and-meat-consumption')
                - {{ __('hunting and meat consumption') }}
            @elseif(Route::currentRouteName() == 'hunting-and-meat-consumption')
                - {{ __('archaeological excavations') }}
             @elseif(Route::currentRouteName() == 'paleoenvironmental-reconstruction')
                - {{ __('paleoenvironmental reconstruction') }}
            @elseif(Route::currentRouteName() == 'geoarchaeology')
                - {{ __('geoarchaeology') }}
        @endif
    </div>
</section>
