<?php
// กำหนดตัวแปร current_page ไว้ที่ไฟล์ PHP ที่ include navbar.php ก่อน เช่น $current_page = 'airplane.php';
?>

<nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #14213d, #1f4068);">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold" href="">Airplane Market</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'airplane.php') ? 'active' : '' ?> text-white" href="airplane.php">Airplanes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'country.php') ? 'active' : '' ?> text-white" href="country.php">Countries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'model_types.php') ? 'active' : '' ?> text-white" href="model_types.php">Type of Model</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'order.php') ? 'active' : '' ?> text-white" href="order.php">Orders</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="background-color: rgba(255,255,255,0.1); color: #e0e1dd; border: 1px solid rgba(255,255,255,0.3);">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>

    <style>
        .navbar-nav .nav-link {
            font-weight: 600;
            transition: color 0.2s;
        }

        .navbar-nav .nav-link:hover {
            color: #2a9d8f !important;
        }

        .navbar-nav .nav-link.active {
            color: #2a9d8f !important;
            font-weight: 700;
        }

        @media (max-width: 992px) {
            .navbar-nav .nav-link {
                text-align: center;
                padding: 0.5rem 0;
            }
        }
    </style>
</nav>
