<nav class="navbar shadow navbar-expand-lg bg-dark navbar-dark text-light">
    <div class="container">
      <a class="navbar-brand" href="#"><strong>GibJohn Tutoring</strong></a>

      </button>
      <div class="navbar" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link @if($page=="home") active @endif" href="homepage.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link @if($page=="dashboard") active @endif @if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) disabled @endif" href="index.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($page=="login") active @endif" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($page=="signup") active @endif" href="signup.php">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) disabled @endif" href="logout.php">Logout</a>
          </li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">Action</button>
              <button class="dropdown-item" type="button">Another action</button>
              <button class="dropdown-item" type="button">Something else here</button>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>