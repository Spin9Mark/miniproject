<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประเภทคดี</title>
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

            $sql = "SELECT * FROM case_types";
            $result = mysqli_query($connection, $sql);
        ?>

        <div class="card shadow-sm">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">ข้อมูลประเภทคดี</h2>
                    <a href="add_case_type.php" class="btn btn-success">
                        <i class="bi bi-plus-circle-fill me-2"></i>เพิ่มประเภทคดี
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered align-middle">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col" style="width: 25%;">รหัสประเภทคดี</th>
                                <th scope="col">ชื่อประเภทคดี</th>
                                <th scope="col" colspan="2" style="width: 15%;">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                if(mysqli_num_rows($result) > 0) {
                                    foreach($result as $case){
                                        ?>
                                            <tr>
                                                <th scope="row"><?= htmlspecialchars($case['cs_id']) ?></th>
                                                <td><?= htmlspecialchars($case['cs_name']) ?></td>
                                                <td style="width: 1%;">
                                                    <a href="php/delete_case_type.php?cs_id=<?= htmlspecialchars($case['cs_id']) ?>" class="btn btn-danger btn-sm w-100" >
                                                        <i class="bi bi-trash-fill"></i> ลบ
                                                    </a>
                                                </td>
                                                <td style="width: 1%;">
                                                    <a href="edit_case_type.php?cs_id=<?= htmlspecialchars($case['cs_id']) ?>" class="btn btn-warning btn-sm w-100">
                                                        <i class="bi bi-pencil-square"></i> แก้ไข
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="4" class="text-center">ยังไม่มีข้อมูลประเภทคดี</td>
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