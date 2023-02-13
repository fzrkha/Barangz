<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Bwarang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Item List") ? 'active' : '' }}"href="/list">Item List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "History") ? 'active' : '' }}" href="/history">History</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Another Action
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item disabled">Insert Item</a></li>
              <li><a class="dropdown-item disabled">Manage Items</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item disabled">You must be logged as admin or operator to use any of these.</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>