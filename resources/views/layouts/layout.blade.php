<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site</title>
  <!-- Importando o Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <div class="container-fluid">
    <!-- Menu Superior -->
    <div class="row">
      <nav class="navbar navbar-link-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('layout.initial') }}">Meu Site</a>

          <div class="menu-superior-links collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('layout.initial') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">#</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </div>

    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <h2>Menu</h2>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index')}}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Página 3</a>
          </li>
        </ul>
      </nav>

      <!-- Conteúdo -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 content">
        <div class="container-fluid">
          @yield('conteudo')
        </div>
      </main>
    </div>
  </div>
</body>
</html>
