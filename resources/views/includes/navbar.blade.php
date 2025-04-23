<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1a1aff;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <img src="https://via.placeholder.com/30x30" alt="Logo" class="me-2">
            Young-Star
        </a>

        <!-- Botón para móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Ítems del menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#">Artículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#">Foros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#">Mi perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#">Admin</a>
                </li>
            </ul>

            <!-- Botón de sesión -->
            <div class="d-none d-lg-block">
                <a href="{{ route('login') }}" class="btn btn-outline-light">Iniciar sesión</a>
            </div>
        </div>
    </div>
</nav>