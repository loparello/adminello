<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
  <div class="container">
      <a class="navbar-brand" href="{{ url('adminello') }}">
          {{ $title }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('adminello') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('adminello/pages') }}">Pages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('adminello/media') }}">Media</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('adminello/posts') }}">Blog</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="href="{{ url('adminello/settings') }}" class="nav-link">Settings</a>
            </li>
            <!-- Authentication Links -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    User <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('adminello/user') }}">Profile</a>
                    <a class="dropdown-item" href="{{ url('adminello/logout') }}">Logout</a>
                </div>
            </li>
          </ul>
      </div>
  </div>
</nav>