<section class="page-title" style="background-image:url({{asset("images/background/visit.jpg")}});">
    <div class="auto-container">
        <h2 style="color: white">{{ __("publications") }} @if(Route::currentRouteName() == 'goals')
                - {{ __('goals') }}
            @elseif(Route::currentRouteName() == 'books')
                - {{ __('books') }}
            @elseif(Route::currentRouteName() == 'journal-articles')
                - {{ __('journal articles') }}
        @endif
        </h2>
    </div>
</section>
