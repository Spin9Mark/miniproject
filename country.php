<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Countries List</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    /* =================== Air Force Theme =================== */
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
      border-radius: 1rem 1rem 0 0 !important;
      font-weight: bold;
    }

    .card-header h2::before {
      content: "🌐 ";
      font-size: 1.4rem;
    }

    .btn-success {
      background: #2a9d8f;
      border: none;
    }
    .btn-success:hover {
      background: #21867a;
    }

    /* =================== Table =================== */
    .table-fixed-header thead th {
      position: sticky;
      top: 0;
      background-color: #0d1b2a !important;
      color: #f8f9fa;
      z-index: 10;
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 0.5px;
    }

    .table-striped > tbody > tr:nth-of-type(odd) {
      background-color: rgba(65, 90, 119, 0.3);
    }

    .table-striped > tbody > tr:nth-of-type(even) {
      background-color: rgba(29, 53, 87, 0.4);
    }

    .table-hover tbody tr:hover {
      background-color: rgba(42, 157, 143, 0.4) !important;
      transition: background 0.3s ease-in-out;
    }

    .table th, .table td {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      vertical-align: middle;
    }

    /* Column widths (คงรูปแบบเดิม) */
    .table thead th:nth-child(1), .table tbody td:nth-child(1) { width: 8%; }
    .table thead th:nth-child(2), .table tbody td:nth-child(2) { width: 79%; text-align: left; }
    .table thead th:nth-child(3), .table tbody td:nth-child(3) { width: 6%; text-align: center; }
    .table thead th:nth-child(4), .table tbody td:nth-child(4) { width: 6%; text-align: center; }

    /* Buttons */
    .btn-action-col {
      padding: .2rem .4rem;
      font-size: .85rem;
      border-radius: 0.5rem;
    }

    .btn-danger {
      background: #e63946;
      border: none;
    }
    .btn-danger:hover {
      background: #c71c2f;
    }

    .btn-warning {
      background: #f4a261;
      border: none;
      color: #212529;
    }
    .btn-warning:hover {
      background: #e07a5f;
    }
  </style>
</head>
<body>

  <?php include('includes/navbar.php'); ?>

  <div class="container-fluid mt-5">
    <?php
      include('php/connect.php');
      $sql = "SELECT * FROM countries";
      $result = mysqli_query($connection, $sql);
    ?>

    <div class="card shadow-lg">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Countries</h2>
        <a href="add_country.php" class="btn btn-success">
          <i class="bi bi-plus-circle-fill me-2"></i> Add Country
        </a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover table-bordered align-middle text-center table-fixed-header">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col" class="text-start">Country Name</th>
                <th scope="col" colspan="2">Manage</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if(mysqli_num_rows($result) > 0) {
                  foreach($result as $country){
                    ?>
                    <tr>
                      <th scope="row"><?= htmlspecialchars($country['country_id']) ?></th>
                      <td class="text-start"><?= htmlspecialchars($country['country_name']) ?></td>
                      <td>
                        <a href="php/delete_country.php?country_id=<?= htmlspecialchars($country['country_id']) ?>" class="btn btn-danger btn-sm btn-action-col">
                          <i class="bi bi-trash-fill"></i> Delete
                        </a>
                      </td>
                      <td>
                        <a href="edit_country.php?country_id=<?= htmlspecialchars($country['country_id']) ?>" class="btn btn-warning btn-sm btn-action-col">
                          <i class="bi bi-pencil-square"></i> Edit
                        </a>
                      </td>
                    </tr>
                    <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="4" class="text-center">No country data available.</td>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
