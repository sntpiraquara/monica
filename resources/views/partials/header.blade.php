<header>
  <div class="{{ Auth::user()->getFluidLayout() }}">
    <div class="row">
      <div class="hidden-sm-down col-sm-2">
        <div class="logo">
          <a href="/people">
            <img src="/img/small-logo.png" />
          </a>
        </div>
      </div>
      <div class="hidden-sm-down col-sm-10">
        <ul class="header-nav">
          <li class="header-nav-item">
            <a href="/dashboard" class="header-nav-item-link">{{ trans('app.main_nav_dashboard') }}</a>
          </li>
          <li class="header-nav-item">
            <a href="/people" class="header-nav-item-link">{{ trans('app.main_nav_family') }}</a>
          </li>
          <li class="header-nav-item">
            <a href="/journal" class="header-nav-item-link">{{ trans('app.main_nav_journal') }}</a>
          </li>
          <li class="header-nav-item">
            <a href="/settings" class="header-nav-item-link">{{ trans('app.header_settings_link') }}</a>
          </li>
          <li class="header-nav-item">
            <a href="/logout" class="header-nav-item-link">{{ trans('app.header_logout_link') }}</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="hidden-md-up col-xs-12">
        <ul class="mobile-menu">
          <li class="cta"><a href="/people/add" class="btn btn-primary">{{ trans('app.main_nav_cta') }}</a></li>
          <li><a href="/dashboard" class="header-nav-item-link">{{ trans('app.main_nav_dashboard') }}</a></li>
          <li><a href="/people" class="header-nav-item-link">{{ trans('app.main_nav_family') }}</a></li>
          <li><a href="/settings" class="header-nav-item-link">{{ trans('app.header_settings_link') }}</a></li>
          <li><a href="/logout" class="header-nav-item-link">{{ trans('app.header_logout_link') }}</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
