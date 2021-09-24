<div class="dashboard__sidebar__links text-center">
  <figure class="user__profile">
    <img src="{{ asset('images/' . auth()->user()->profile_image) }}" alt="">
    <div class="user__profile__info">
      <div class="name">john doe</div>
      <p>john@gmail.com</p>
    </div>
  </figure>
  <div class="links ">

    <a href="/dashboard" class="link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
      <span class="link__text">
      Dashboard
      </span>
      <span class="icon">@svg('images/icons/pie-chart.svg', 'dashboard-icon')</span>
      {{-- <i class="icon fas fa-chart-line"></i> --}}
    </a>

    <div class="link admin__dropper {{ request()->routeIs('admin/*') ? 'active' : '' }}">
      <span class="link__text">
      Manage
      @svg('images/icons/chevron-down.svg')
      </span>
      <span class="icon">@svg('images/icons/terminal.svg', 'admin-icon')</span>
    </div>

    <div class="admin__links ">
      <a href="/admin/quotes" class="admin__links__link {{ request()->routeIs('admin/quotes') ? 'active' : '' }}">
        <span class="text__link">
        Quotes
        </span>
        <span class="icon">@svg('images/icons/quotes.svg', 'quotes-icon')</span>
      </a>

      <a href="/admin/exercises" class="admin__links__link {{ request()->routeIs('admin/exercises') ? 'active' : '' }}">
        <span class="text__link">
        Exercises
        </span>
        <span class="icon">@svg('images/icons/exercise.svg', 'exercise-icon')</span>
      </a>
      <a href="/admin/Accounts" class="admin__links__link {{ request()->routeIs('admin/accounts') ? 'active' : '' }}">
        <span class="text__link">
        Accounts
        </span>
        <span class="icon">@svg('images/icons/users.svg', 'users-icon')</span>
      </a>


    </div>


    <a href="#" class="link">
      <span class="link__text">
      Journal
      </span>
      <span class="icon">@svg('images/icons/book.svg', 'journal-icon')</span>
      {{-- <i class="icon fas fa-smile-wink"></i> --}}
    </a>
    <a href="#" class="link">
      <span class="link__text">
      Settings
      </span>
      <span class="icon">@svg('images/icons/settings.svg', 'settings-icon')</span>
      {{-- <i class="icon fas fa-cog"></i> --}}
    </a>
    <a href="#" class="link">
      <span class="link__text">
      logout
      </span>
      <span class="icon">@svg('images/icons/log-out.svg', 'logout-icon')</span>
      {{-- <i class="icon fas fa-sign-out-alt"></i> --}}
    </a>
  </div>
</div>
