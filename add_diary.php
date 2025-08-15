<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงบันทึกประจำวัน</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>
<body class="bg-light"> <!-- ใช้ bg-light เพื่อให้พื้นหลังเป็นสีเทาอ่อน -->

    <?php include('includes/navbar.php'); ?>

    <!-- 1. ใช้ Container เพื่อจัดระเบียบเนื้อหาและเว้นระยะขอบ -->
    <div class="container my-5"> <!-- เพิ่ม my-5 เพื่อเว้นระยะห่างบน-ล่าง -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <!-- 2. ใช้ Card และตกแต่งด้วย Utility Classes ของ Bootstrap -->
                <div class="card shadow-lg border-0 rounded-4"> <!-- เพิ่มเงา, เอาเส้นขอบออก, และทำให้มุมมนขึ้น -->
                    
                    <!-- Card Header: ตกแต่งด้วยสีและ Padding ของ Bootstrap -->
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h2 class="mb-0 fw-bold"><i class="bi bi-journal-plus me-2"></i>ลงบันทึกประจำวัน</h2>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="php/insert_diary.php" method="post">

                            <!-- 3. จัดกลุ่ม Label และ Input ด้วย div และใช้ class 'mb-4' เพื่อเว้นระยะห่าง -->
                            <div class="mb-4">
                                <label for="detail" class="form-label fw-bold">รายละเอียดเหตุการณ์</label>
                                <textarea class="form-control form-control-lg" name="detail" id="detail" rows="4" placeholder="กรุณากรอกรายละเอียดของเหตุการณ์" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="date" class="form-label fw-bold">วันที่เกิดเหตุ</label>
                                <input type="date" class="form-control form-control-lg" name="date" id="date" required>
                            </div>

                            <!-- ใช้ form-select ของ Bootstrap -->
                            <div class="mb-4">
                                <label for="cs_id" class="form-label fw-bold">ประเภทคดี</label>
                                <select name="cs_id" id="cs_id" class="form-select form-select-lg" required>
                                    <option value="" disabled selected>-- เลือกประเภทคดี --</option>
                                    <?php
                                        include('php/connect.php');
                                        $case_sql = "SELECT * FROM case_types ORDER BY cs_name";
                                        $case_types = mysqli_query($connection, $case_sql);
                                        while($type = mysqli_fetch_assoc($case_types)){
                                            echo "<option value='{$type['cs_id']}'>{$type['cs_name']}</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label for="c_id" class="form-label fw-bold">ผู้แจ้งความ</label>
                                <select name="c_id" id="c_id" class="form-select form-select-lg" required>
                                    <option value="" disabled selected>-- เลือกผู้แจ้งความ --</option>
                                    <?php
                                        $suff_sql = "SELECT * FROM sufferers ORDER BY full_name";
                                        $sufferers = mysqli_query($connection, $suff_sql);
                                        while($sufferer = mysqli_fetch_assoc($sufferers)){
                                            echo "<option value='{$sufferer['c_id']}'>{$sufferer['full_name']}</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="pl_id" class="form-label fw-bold">ผู้รับแจ้งความ</label>
                                <select name="pl_id" id="pl_id" class="form-select form-select-lg" required>
                                    <option value="" disabled selected>-- เลือกผู้รับแจ้งความ --</option>
                                    <?php
                                        $pol_sql = "SELECT * FROM polices ORDER BY full_name";
                                        $polices = mysqli_query($connection, $pol_sql);
                                        while($police = mysqli_fetch_assoc($polices)){
                                            echo "<option value='{$police['pl_id']}'>{$police['full_name']}</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <hr class="my-4">

                            <!-- 4. ตกแต่งปุ่มโดยใช้ Flexbox และเพิ่มขนาดปุ่ม -->
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-between">
                                <a href="police_diary.php" class="btn btn-secondary btn-lg px-4">
                                    <i class="bi bi-x-circle me-2"></i>ยกเลิก
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg px-4">
                                    <i class="bi bi-save-fill me-2"></i>บันทึกข้อมูล
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>