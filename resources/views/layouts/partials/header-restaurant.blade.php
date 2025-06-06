@inject('request', 'Illuminate\Http\Request')
<div class="pos-topbar no-print">
  <div class="top-left">
      <div class="back">
          <a href="{{ action('HomeController@index')}}" title="{{ __('lang_v1.go_back') }}" data-toggle="tooltip" data-placement="bottom">
              <img src="{{ asset('img/icons/back-icon.svg') }}" alt="">
          </a>
      </div>
      <div class="welcome-message">
          <h3>@lang('lang_v1.restaurant')</h3>
      </div>
  </div>

  <div class="top-right">
      <!-- Pos Button -->
      <a href="{{action('SellPosController@create')}}" class="pos">
          <img src="{{ asset('img/icons/pos.svg') }}" alt="">
          <span>@lang('lang_v1.pos')</span>
      </a>

      <div class="options">
          <button class="item">
            <a href="{{action('BusinessController@getSettings')}}">
              <img src="{{ asset('img/icons/settings.svg') }}" alt="">
            </a>
          </button>

          <button class="item hide-mobile-only">
            <a href="{{action('Auth\LoginController@logout')}}">
              <img src="{{ asset('img/icons/log-out-04.svg') }}" alt="">
            </a>
          </button>

          <button class="item display-mobile-only" id="menu-btn">
              <img src="{{ asset('img/icons/menu-flex.svg') }}" alt="">
          </button>
      </div>

  </div>
</div>
