<!-- Sidebar Menu -->
<nav class="mt-2 nav-height">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        @auth

        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Home
                </p>
            </a>
        </li>
        @endauth
        <li class="nav-item">
            <a href="/home" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/siaran" class="nav-link">
                <i class="nav-icon fas fa-broadcast-tower"></i>
                <p>
                    Siaran
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/acara" class="nav-link">
                <i class="nav-icon fas fa-bookmark"></i>
                <p>
                    Acara
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/responden" class="nav-link">
                <i class="nav-icon fas fa-user-tag"></i>
                <p>
                    Responden
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/request-lagu" class="nav-link">
                <i class="nav-icon fas fa-microphone-alt"></i>
                <p>
                    Request Lagu
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/lagu" class="nav-link">
                <i class="nav-icon fas fa-microphone"></i>
                <p>
                    Lagu
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/chat" class="nav-link">
                <i class="nav-icon fas fa-sms"></i>
                <p>
                    Chat
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
