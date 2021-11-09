<?php $uri = $_SERVER["REQUEST_URI"]; ?>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bootstrap mx-3" viewBox="0 0 16 16">
                <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z" />
                <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z" />
            </svg>
            <span class="fs-4">PHP & Symfo</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link <?= ($uri == "/") ? "active" : ""; ?>" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="login" class="nav-link <?php if ($uri == "/login") echo "active"; ?>">Login</a></li>
            <li class="nav-item"><a href="wines" class="nav-link <?php if ($uri == "/wines") echo "active"; ?>">Wines</a></li>
        </ul>
    </header>
</div>