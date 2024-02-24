<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="/">
            <img src="{{ asset('assets/visagov_logo.jpg') }}" alt="Logo" class="navbar-logo"> Visagov
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarburguer" aria-controls="navbarburguer" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarburguer">
            <div class="navbar-nav">
                <a class="nav-link {{ request()->is('books*') ? 'active' : '' }}" href="{{ route('books.index') }}">@lang('navbar.books')</a>
                <a class="nav-link {{ request()->is('contacto*') ? 'active' : '' }}" href="{{ route('contact.create') }}">@lang('navbar.contact')</a>
            </div>
            <div class="dropdown">
                <button class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    @lang('navbar.language')
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                      <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                      </a>
                    </li>
                  @endforeach
                </ul>
              </div>              
        </div>
    </div>
</nav>
