<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Airplane</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
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

        option {
            color: #000; /* หรือ #e0e1dd สำหรับพื้นหลังเข้ม */
            background-color: #fff; /* หรือสีอ่อนเพื่อให้เห็นชัด */
        }

        .form-control::placeholder{
            color: #836b6bff;
            /* opacity: 1; */
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

    <?php include('includes/navbar.php'); ?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-center py-3">
                        <h2 class="mb-0 fw-bold"><i class="bi bi-journal-plus me-2"></i>Add Airplane</h2>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        <form action="php/insert_airplane.php" method="post">

                            <div class="mb-4">
                                <label for="model_id">Model ID</label>
                                <input type="text" class="form-control form-control-lg" name="model_id" id="model_id" placeholder="AP001" required>
                            </div>

                            <div class="mb-4">
                                <label for="model_name">Model Name</label>
                                <input type="text" class="form-control form-control-lg" name="model_name" id="model_name" placeholder="F16 Fighting Falcon" required>
                            </div>

                            <div class="mb-4">
                                <label for="type_id">Type</label>
                                <select name="type_id" id="type_id" class="form-select form-select-lg" required>
                                    <option value="" disabled selected>-- Select Type --</option>
                                    <?php
                                        include('php/connect.php');
                                        $type_sql = "SELECT * FROM model_types ORDER BY type_name";
                                        $model_types = mysqli_query($connection, $type_sql);
                                        while($type = mysqli_fetch_assoc($model_types)){
                                            echo "<option value='{$type['type_id']}'>{$type['type_name']}</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="company_created">Company That Created</label>
                                <input type="text" class="form-control form-control-lg" name="company_created" id="company_created" placeholder="Lockheed Martin" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="country_id">Country</label>
                                <select name="country_id" id="country_id" class="form-select form-select-lg" required>
                                    <option value="" disabled selected>-- Select Country --</option>
                                    <?php
                                        $country_sql = "SELECT * FROM countries ORDER BY country_name";
                                        $countries = mysqli_query($connection, $country_sql);
                                        while($country = mysqli_fetch_assoc($countries)){
                                            echo "<option value='{$country['country_id']}'>{$country['country_name']}</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="year_of_production">Year of Production</label>
                                <input type="text" class="form-control form-control-lg" name="year_of_production" id="year_of_production" placeholder="1999" required>
                            </div>

                            <div class="mb-4">
                                <label for="generation">Generation</label>
                                <input type="text" class="form-control form-control-lg" name="generation" id="generation" placeholder="6th Gen" required>
                            </div>

                            <div class="mb-4">
                                <label for="estimated_price">Estimated Price</label>
                                <input type="text" class="form-control form-control-lg" name="estimated_price" id="estimated_price" placeholder="19999999.99" required>
                            </div>
                            
                            <hr class="my-4">

                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-between">
                                <a href="airplane.php" class="btn btn-secondary btn-lg px-4">
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
