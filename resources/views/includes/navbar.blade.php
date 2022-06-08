<header class="main-header">
    <!-- Main Box -->
    <div class="header-lower">
        <div class="auto-container">
            <ul class="lang-list">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="language-link">
                        <a rel="alternate" hreflang="{{ $localeCode }} "
                            class = "{{(LaravelLocalization::getCurrentLocaleName() == $properties['name'] ? 'active' : '')}}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="main-box clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo">
                        <li class="{{ (Route::currentRouteName() == 'index') ? 'current' : '' }}">
                            <a href="/">Crvena Stijena</a>
                        </li>
                    </div>
                </div>
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="{{ ((Route::currentRouteName() == 'visit') || (Route::currentRouteName() == 'how-to-get-there')) ? 'current dropdown' : 'dropdown' }}">
                                    <a href="#">{{ __('visit') }}</a>
                                    <ul>
                                        <li class="{{ (Route::currentRouteName() == 'visit') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('visit') }}">@lang('visit')</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'how-to-get-there') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('how-to-get-there') }}">{{ __('how to get there') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ ((Route::currentRouteName() == 'importance') || (Route::currentRouteName() == 'landscape')
                                                || (Route::currentRouteName() == 'geology') || (Route::currentRouteName() == 'age-of-the-site')
                                                || (Route::currentRouteName() == 'who-lived') || (Route::currentRouteName() == 'archaeological-excavations')
                                                || (Route::currentRouteName() == 'find')) ? 'current dropdown' : 'dropdown' }}">
                                    <a href="#">{{ __('information') }}</a>
                                    <ul>
                                        <li class="{{ (Route::currentRouteName() == 'importance') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('importance') }}">{{ __('importance of Crvena Stijena') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'landscape') ? 'active-link' : ''}} ">
                                            <a href="{{ LaravelLocalization::localizeUrl('landscape') }}">{{ __('landscape') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'geology') ? 'active-link' : ''}} ">
                                            <a href="{{ LaravelLocalization::localizeUrl('geology') }}">{{ __('geology') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'age-of-the-site') ? 'active-link' : ''}} ">
                                            <a href="{{ LaravelLocalization::localizeUrl('age-of-the-site') }}">{{ __('age of the site') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'who-lived') ? 'active-link' : ''}} ">
                                            <a href="{{ LaravelLocalization::localizeUrl('who-lived') }}">{{ __('who lived at crvena stijena') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'archaeological-excavations') ? 'active-link' : ''}} ">
                                            <a href="{{ LaravelLocalization::localizeUrl('archaeological-excavations') }}">{{ __('archaeological excavations') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'finds') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('finds') }}">{{ __('finds') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ ((Route::currentRouteName() == 'goals') || (Route::currentRouteName() == 'documentation')
                                                || (Route::currentRouteName() == 'neanderthal-fire-use') || (Route::currentRouteName() == 'neanderthal-lithic-technology')
                                                || (Route::currentRouteName() == 'hunting-and-meat-consumption') || (Route::currentRouteName() == 'paleoenvironmental-reconstruction')
                                                || (Route::currentRouteName() == 'geoarchaeology')) ? 'current dropdown' : 'dropdown' }}">
                                    <a href="#">{{ __('current research') }}</a>
                                    <ul>
                                        <li class="{{ (Route::currentRouteName() == 'goals') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('goals') }}">{{ __('goals') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'documentation') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('documentation') }}">{{ __('documentation of the site') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'neanderthal-fire-use') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('neanderthal-fire-use') }}">{{ __('neanderthal fire use') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'neanderthal-lithic-technology') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('neanderthal-lithic-technology') }}">{{ __('neanderthal lithic technology') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'hunting-and-meat-consumption') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('hunting-and-meat-consumption') }}">{{ __('hunting and meat consumption') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'paleoenvironmental-reconstruction') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('paleoenvironmental-reconstruction') }}">{{ __('paleoenvironmental reconstruction') }}</a>
                                        </li>
                                        <li {{ (Route::currentRouteName() == 'geoarchaeology') ? 'active-link' : ''}}>
                                            <a href="{{ LaravelLocalization::localizeUrl('geoarchaeology') }}">{{ __('geoarchaeology') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ ((Route::currentRouteName() == 'books') || (Route::currentRouteName() == 'journal-articles')) ? 'current dropdown' : 'dropdown' }}">
                                    <a href="#">{{ __('publications') }}</a>
                                    <ul>
                                        <li class="{{ (Route::currentRouteName() == 'books') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('books') }}">{{ __('books') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'journal-articles') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('journal-articles') }}">{{ __('journal articles') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ ((Route::currentRouteName() == 'village') || (Route::currentRouteName() == 'monastery')) ? 'current dropdown' : 'dropdown' }}">
                                    <a href="#">{{ __('petrovici') }}</a>
                                    <ul>
                                        <li class="{{ (Route::currentRouteName() == 'village') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('village') }}">{{ __('the village') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'monastery') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('monastery') }}">{{ __('manastir kosijerevo') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ ((Route::currentRouteName() == 'scientific-team') || (Route::currentRouteName() == 'national-museum') || (Route::currentRouteName() == 'finding-sources')) ? 'current dropdown' : 'dropdown' }}">
                                    <a href="#">{{ __('about us') }}</a>
                                    <ul>
                                        <li class="{{ (Route::currentRouteName() == 'scientific-team') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('scientific-team') }}">{{ __('scientific team') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'national-museum') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('national-museum') }}">{{ __('national museum') }}</a>
                                        </li>
                                        <li class="{{ (Route::currentRouteName() == 'funding-sources') ? 'active-link' : ''}}">
                                            <a href="{{ LaravelLocalization::localizeUrl('funding-sources') }}">{{ __('funding sources') }}</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ ((Route::currentRouteName() == 'contact')) ? 'current' : '' }}">
                                    <a href="{{ LaravelLocalization::localizeUrl('contact') }}">{{ __('contact') }}</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <li class="{{ (Route::currentRouteName() == 'index') ? 'current' : '' }}">
                    <a href="/">Crvena Stijena</a>
                </li>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="{{ ((Route::currentRouteName() == 'visit') || (Route::currentRouteName() == 'how-to-get-there')) ? 'current dropdown' : 'dropdown' }}">
                                <a href="#">{{ __('visit') }}</a>
                                <ul>
                                    <li class="{{ (Route::currentRouteName() == 'visit') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('visit') }}">@lang('visit')</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'how-to-get-there') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('how-to-get-there') }}">{{ __('how to get there') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ ((Route::currentRouteName() == 'importance') || (Route::currentRouteName() == 'landscape')
                                                || (Route::currentRouteName() == 'geology') || (Route::currentRouteName() == 'age-of-the-site')
                                                || (Route::currentRouteName() == 'who-lived') || (Route::currentRouteName() == 'archaeological-excavations')
                                                || (Route::currentRouteName() == 'finds')) ? 'current dropdown' : 'dropdown' }}">
                                <a href="#">{{ __('information') }}</a>
                                <ul>
                                    <li class="{{ (Route::currentRouteName() == 'importance') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('importance') }}">{{ __('importance of Crvena Stijena') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'landscape') ? 'active-link' : ''}} ">
                                        <a href="{{ LaravelLocalization::localizeUrl('landscape') }}">{{ __('landscape') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'geology') ? 'active-link' : ''}} ">
                                        <a href="{{ LaravelLocalization::localizeUrl('geology') }}">{{ __('geology') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'age-of-the-site') ? 'active-link' : ''}} ">
                                        <a href="{{ LaravelLocalization::localizeUrl('age-of-the-site') }}">{{ __('age of the site') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'who-lived') ? 'active-link' : ''}} ">
                                        <a href="{{ LaravelLocalization::localizeUrl('who-lived') }}">{{ __('who lived at crvena stijena') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'archaeological-excavations') ? 'active-link' : ''}} ">
                                        <a href="{{ LaravelLocalization::localizeUrl('archaeological-excavations') }}">{{ __('archaeological excavations') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'finds') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('finds') }}">{{ __('finds') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ ((Route::currentRouteName() == 'goals') || (Route::currentRouteName() == 'documentation')
                                                || (Route::currentRouteName() == 'neanderthal-fire-use') || (Route::currentRouteName() == 'neanderthal-lithic-technology')
                                                || (Route::currentRouteName() == 'hunting-and-meat-consumption') || (Route::currentRouteName() == 'paleoenvironmental-reconstruction')
                                                || (Route::currentRouteName() == 'geoarchaeology')) ? 'current dropdown' : 'dropdown' }}">
                                <a href="#">{{ __('current research') }}</a>
                                <ul>
                                    <li class="{{ (Route::currentRouteName() == 'goals') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('goals') }}">{{ __('goals') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'documentation') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('documentation') }}">{{ __('documentation of the site') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'neanderthal-fire-use') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('neanderthal-fire-use') }}">{{ __('neanderthal fire use') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'neanderthal-lithic-technology') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('neanderthal-lithic-technology') }}">{{ __('neanderthal lithic technology') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'hunting-and-meat-consumption') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('hunting-and-meat-consumption') }}">{{ __('hunting and meat consumption') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'paleoenvironmental-reconstruction') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('paleoenvironmental-reconstruction') }}">{{ __('paleoenvironmental reconstruction') }}</a>
                                    </li>
                                    <li {{ (Route::currentRouteName() == 'geoarchaeology') ? 'active-link' : ''}}>
                                        <a href="{{ LaravelLocalization::localizeUrl('geoarchaeology') }}">{{ __('geoarchaeology') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ ((Route::currentRouteName() == 'books') || (Route::currentRouteName() == 'journal-articles')) ? 'current dropdown' : 'dropdown' }}">
                                <a href="#">{{ __('publications') }}</a>
                                <ul>
                                    <li class="{{ (Route::currentRouteName() == 'books') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('books') }}">{{ __('books') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'journal-articles') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('journal-articles') }}">{{ __('journal articles') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ ((Route::currentRouteName() == 'village') || (Route::currentRouteName() == 'monastery')) ? 'current dropdown' : 'dropdown' }}">
                                <a href="#">{{ __('petrovici') }}</a>
                                <ul>
                                    <li class="{{ (Route::currentRouteName() == 'village') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('village') }}">{{ __('the village') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'monastery') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('monastery') }}">{{ __('manastir kosijerevo') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ ((Route::currentRouteName() == 'scientific-team') || (Route::currentRouteName() == 'national-museum') || (Route::currentRouteName() == 'finding-sources')) ? 'current dropdown' : 'dropdown' }}">
                                <a href="#">{{ __('about us') }}</a>
                                <ul>
                                    <li class="{{ (Route::currentRouteName() == 'scientific-team') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('scientific-team') }}">{{ __('scientific team') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'national-museum') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('national-museum') }}">{{ __('national museum') }}</a>
                                    </li>
                                    <li class="{{ (Route::currentRouteName() == 'funding-sources') ? 'active-link' : ''}}">
                                        <a href="{{ LaravelLocalization::localizeUrl('funding-sources') }}">{{ __('funding sources') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ ((Route::currentRouteName() == 'contact')) ? 'current' : '' }}">
                                <a href="{{ LaravelLocalization::localizeUrl('contact') }}">{{ __('contact') }}</a>
                            </li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div>
</header>
