<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Diary</title>
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

            $sql = "SELECT *, sufferers.full_name as s_name, polices.full_name as p_name FROM `police_diaries`
                    JOIN polices ON police_diaries.pl_id = polices.pl_id 
                    JOIN case_types ON police_diaries.cs_id = case_types.cs_id
                    JOIN sufferers on police_diaries.c_id = sufferers.c_id
                    ORDER BY police_diaries.pd_id ASC; ";
            $result = mysqli_query($connection, $sql);
        ?>

        <div class="card shadow-sm">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">บันทึกประจำวัน</h2>
                    <a href="add_diary.php" class="btn btn-success">
                        <i class="bi bi-plus-circle-fill me-2"></i> ลงบันทึกประจำวัน
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered align-middle">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col" style="width: 5%;">ID</th>
                                <th scope="col" style="width: 15%;">ประเภทคดี</th>
                                <th scope="col">รายละเอียด</th>
                                <th scope="col" style="width: 10%;">วันที่</th>
                                <th scope="col" style="width: 15%;">ผู้แจ้งความ</th>
                                <th scope="col" style="width: 15%;">เจ้าหน้าที่ผู้รับผิดชอบ</th>
                                <th scope="col" colspan="2" style="width: 10%;">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                if(mysqli_num_rows($result) > 0) {
                                    foreach($result as $police_diary){
                                        ?>
                                            <tr>
                                                <th scope="row"><?= htmlspecialchars($police_diary['pd_id']) ?></th>
                                                
                                                <!-- จัดชิดซ้าย -->
                                                <td class="text-start"><?= htmlspecialchars($police_diary['cs_name']) ?></td>
                                                <td class="text-start"><?= htmlspecialchars($police_diary['detail']) ?></td>

                                                <!-- ที่เหลือจัดกลางเหมือนเดิม -->
                                                <td><?= htmlspecialchars($police_diary['date']) ?></td>
                                                <td><?= htmlspecialchars($police_diary['s_name']) ?></td>
                                                <td><?= htmlspecialchars($police_diary['p_name']) ?></td>

                                                <td style="width: 1%;">
                                                    <a href="php/delete_diary.php?pd_id=<?= htmlspecialchars($police_diary['pd_id']) ?>" class="btn btn-danger btn-sm w-100" >
                                                        <i class="bi bi-trash-fill"></i> ลบ
                                                    </a>
                                                </td>
                                                <td style="width: 1%;">
                                                    <a href="edit_diary.php?pd_id=<?= htmlspecialchars($police_diary['pd_id']) ?>" class="btn btn-warning btn-sm w-100">
                                                        <i class="bi bi-pencil-square"></i> แก้ไข
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="8" class="text-center">ยังไม่มีข้อมูลบันทึกประจำวัน</td>
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