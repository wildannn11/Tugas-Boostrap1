<?php

  include_once ('connect.php');

  $sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id";
  $result = $conn->query($sql);
  $data = $result->fetch_all(MYSQLI_ASSOC);
 ?>

s
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>dannweb</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">RPL'56</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br /><br /><br />

  <!-- form -->
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card header">
            <h4 class="text-center text-primary">Input Data</h4>
          </div>

          <div class="card-body">
            <form method="POST" action="">
              <div class="mb-3">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" placeholder="enter your name" />
              </div>
              <div class="mb-3">
                <label for="nilai">Nilai:</label>
                <input type="number" class="form-control" id="nilai" placeholder="enter your score" />
              </div>
          </div>

          <div class="card-footer">
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Kirim!</button>
            </div>
          </div>
          </form>
        </div>
      </div>


      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="text-center text-primary">Daftar Ranking</h4>
          </div>


          <!-- table -->
          <div class="card-body">
            <table class="table table-bordered table-striped text-center">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data as $key => $d): ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $d['name']?></td>
                  <td><?= $d['score']?></td>
                </tr>
                <?php endforeach?>
              </tbody>

              <div class="card-footer">
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Nilai</th>
                  </tr>
                </tfoot>
            </table>
          </div>
        </div>
      </div>



      <footer class="bg-primary text-white text-center p-2 my-4">
        <p>happy coding</p>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
      </script>
</body>

</html>