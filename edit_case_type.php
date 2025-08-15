<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลประเภทคดี</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body class="bg-light"> <!-- ใช้ bg-light เพื่อให้พื้นหลังเป็นสีเทาอ่อน -->

    <?php 
        include('includes/navbar.php'); 
        include('php/connect.php');

        $csId = $_GET["cs_id"];

        $sql = "SELECT * FROM case_types WHERE cs_id = '$csId' ";

        $result = mysqli_query($connection, $sql);

        $case_type = mysqli_fetch_array($result);

    
    ?>

    <!-- ใช้ Container เพื่อจัดระเบียบเนื้อหาและเว้นระยะขอบ -->
    <div class="container my-5"> <!-- เพิ่ม my-5 เพื่อเว้นระยะห่างบน-ล่าง -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <!-- ใช้ Card และตกแต่งด้วย Utility Classes ของ Bootstrap -->
                <div class="card shadow-lg border-0 rounded-4"> <!-- เพิ่มเงา, เอาเส้นขอบออก, และทำให้มุมมนขึ้น -->
                    
                    <!-- Card Header: ตกแต่งด้วยสีและ Padding ของ Bootstrap -->
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h2 class="mb-0 fw-bold"><i class="bi bi-person-plus-fill me-2"></i>แก้ไขข้อมูลประเภทคดี</h2>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="php/update_case.php" method="post">

                            <!-- จัดกลุ่ม Label และ Input ด้วย div และใช้ class 'mb-4' เพื่อเว้นระยะห่าง -->
                             <div class="mb-4">
                                <label class="form-label fw-bold">รหัสประเภทคดี</label>
                                <input type="text" class="form-control form-control-lg" name="cs_id" id="cs_id" readonly value="<?= $case_type["cs_id"] ?>" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">ชื่อประเภทคดี</label>
                                <input type="text" class="form-control form-control-lg" name="cs_name" id="cs_name" placeholder="เช่น ทะเลาะวิวาท" value="<?= $case_type["cs_name"] ?>" required>
                            </div>
                            
                            <hr class="my-4">

                            <!-- ตกแต่งปุ่มโดยใช้ Flexbox และเพิ่มขนาดปุ่ม -->
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-between">
                                <a href="case_type.php" class="btn btn-secondary btn-lg px-4">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>