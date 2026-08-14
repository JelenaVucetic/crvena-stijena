<section class="page-title" style="background-image:url({{asset("images/background/visit.jpg")}});">
    <div class="auto-container">
        <h2 style="color: white">{{ __("visit") }}
        @if(Route::currentRouteName() == 'how-to-get-there')
           - {{ __('how to get there') }}
        @endif
        </h2>
    </div>
</section>
