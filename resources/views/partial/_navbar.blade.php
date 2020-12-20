{{-- navigation --}}
<nav id="topNav" class="navbar navbar-fixed navbar-expand-lg bg-theme navbar-dark">
  <div class="container">
    <a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name') }}</a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle Navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="{{ url('/') }}" class="nav-link @if(Request::is('/')) active @endif"">Home</a>
        </li>
        <li>
          <a href="{{ url('/booking') }}" class="nav-link @if(Request::is('booking')) active @endif"">Booking</a>
        </li>
      </ul>

      {{-- <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Username</a>
          <ul class="dropdown-menu" aria-labelledby="userDropdown">
            <li>
              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
              <form method="POST" id="logout-form" action="{{ route('logout') }}">
                @csrf
              </form>
            </li>
          </ul>
        </li>
      </ul> --}}
    </div>
  </div>
</nav>
{{-- end navigation --}}