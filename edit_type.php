<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Type</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #0d1b2a, #1b263b, #415a77);
            color: #e0e1dd;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border-radius: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(6px);
        }

        .card-header {
            background: linear-gradient(90deg, #14213d, #1f4068);
            color: #fff;
            font-weight: bold;
            border-radius: 1rem 1rem 0 0 !important;
        }

        .card-header h2 {
            margin: 0;
        }

        label {
            font-weight: 600;
            color: #e0e1dd;
        }

        .form-control, .form-select {
            background-color: rgba(255, 255, 255, 0.05);
            color: #e0e1dd;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .form-control:focus, .form-select:focus {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: #2a9d8f;
            color: #fff;
            box-shadow: none;
        }

        .form-control::placeholder{
            color: #836b6bff;
            /* opacity: 1; */
        }

        option {
            color: #000; /* dropdown ให้อ่านง่าย */
        }

        .btn-primary {
            background: #2a9d8f;
            border: none;
        }
        .btn-primary:hover {
            background: #21867a;
        }

        .btn-secondary {
            background: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background: #5a6268;
        }

        hr {
            border-top: 1px solid rgba(255,255,255,0.2);
        }
    </style>
</head>
<body>

    <?php 
        include('includes/navbar.php'); 
        include('php/connect.php');

        $typeId = $_GET["type_id"];
        $sql = "SELECT * FROM model_types WHERE type_id = '$typeId' ";
        $result = mysqli_query($connection, $sql);
        $type = mysqli_fetch_array($result);
    ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">

                <div class="card shadow-lg border-0 rounded-4">
                    
                    <div class="card-header text-center py-3">
                        <h2 class="mb-0 fw-bold"><i class="bi bi-tags-fill me-2"></i>Edit Type</h2>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="php/update_type.php" method="post">

                            <div class="mb-4">
                                <label class="form-label fw-bold">Type ID</label>
                                <input type="text" class="form-control form-control-lg" name="type_id" id="type_id" value="<?= htmlspecialchars($type["type_id"]) ?>" readonly required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Type Name</label>
                                <input type="text" class="form-control form-control-lg" name="type_name" id="type_name" placeholder="Fighter Jet" value="<?= htmlspecialchars($type["type_name"]) ?>" required>
                            </div>
                            
                            <hr class="my-4">

                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-between">
                                <a href="model_types.php" class="btn btn-secondary btn-lg px-4">
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
