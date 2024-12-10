<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="{{ route('/') }}" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="{{ asset('/assets/images/logo-white.svg') }}" class="img-fluid logo-lg" alt="logo">
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item pc-caption">
            <label>Navigation</label>
          </li>
          <li class="pc-item">
            <a href="{{ route('/') }}" class="pc-link">
              <span class="pc-micon">
                <i data-feather="home"></i>
              </span>
              <span class="pc-mtext">Dashboard</span>
            </a>
          </li>
        </ul>
        <ul class="pc-navbar">
          <li class="pc-item pc-caption">
            <label>Navigation</label>
          </li>
          <li class="pc-item">
            <a href="{{ route('dham.list') }}" class="pc-link">
              <span class="pc-micon">
                <i data-feather="bell"></i>
              </span>
              <span class="pc-mtext">Dham List</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
