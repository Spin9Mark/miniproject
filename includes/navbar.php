<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="">GDS Police Station</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item​​">
                    <!-- ตรวจสอบว่าถ้าไฟล์ปัจจุบันคือ sufferer.php ให้เพิ่ม class 'active' -->
                    <a class="nav-link <?= ($current_page == 'sufferer.php') ? 'active' : '' ?>" href="sufferer.php">ข้อมูลผู้แจ้งความ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'police_diary.php') ? 'active' : '' ?>" href="police_diary.php">บันทึกประจำวัน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'police.php') ? 'active' : '' ?>" href="police.php">ข้อมูลเจ้าหน้าที่</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'case_type.php') ? 'active' : '' ?>" href="case_type.php">ประเภทคดี</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>