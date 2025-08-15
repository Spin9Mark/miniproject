<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลเจ้าหน้าที่</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
    <?php include('includes/navbar.php'); ?>

    <div class="container mt-5">
        <?php
            include('php/connect.php');

            $sql = "SELECT * FROM polices";
            $result = mysqli_query($connection, $sql);
        ?>

        <div class="card shadow-sm">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">ข้อมูลเจ้าหน้าที่ตำรวจ</h2>
                    <a href="add_police.php" class="btn btn-success">
                        <i class="bi bi-person-plus-fill me-2"></i>เพิ่มข้อมูลเจ้าหน้าที่
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered align-middle">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ชื่อ-นามสกุล</th>
                                <th scope="col">ยศ</th>
                                <th scope="col">เบอร์โทรศัพท์</th>
                                <th scope="col" colspan="2">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                if (mysqli_num_rows($result) > 0) {
                                    foreach($result as $police){
                                        ?>
                                            <tr>
                                                <th scope="row"><?= htmlspecialchars($police['pl_id']) ?></th>
                                                <td><?= htmlspecialchars($police['full_name']) ?></td>
                                                <td><?= htmlspecialchars($police['rank']) ?></td>
                                                <td><?= htmlspecialchars($police['tel']) ?></td>
                                                <td style="width: 1%;">
                                                    <a href="php/delete_police.php?pl_id=<?= htmlspecialchars($police['pl_id']) ?>" class="btn btn-danger btn-sm w-100" >
                                                        <i class="bi bi-trash-fill"></i> ลบ
                                                    </a>
                                                </td>
                                                <td style="width: 1%;">
                                                    <a href="edit_police.php?pl_id=<?= htmlspecialchars($police['pl_id']) ?>" class="btn btn-warning btn-sm w-100">
                                                        <i class="bi bi-pencil-square"></i> แก้ไข
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="6" class="text-center">ยังไม่มีข้อมูลเจ้าหน้าที่</td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>