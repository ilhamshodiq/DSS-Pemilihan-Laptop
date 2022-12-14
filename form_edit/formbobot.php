<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css buatan sendiri -->
    <link rel="stylesheet" href="../css/style_dashboard.css">

    <title>Menu Data Bobot</title>
</head>

<body>
    <?php
    session_start();
    include "../config.php";
    $id_bobot = $_GET['id_bobot'];
    $sql = "SELECT * FROM bobot WHERE id_bobot = '$id_bobot'";
    $query = $koneksi->query($sql);

    ?>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> DSS Pemilihan Laptop</a>
            <a href="../logout.php" class="btn btn-outline-danger btn-sm" role="button">LOG OUT</a>
        </div>
    </nav>

    <div class="d-flex bg-dark text-white" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="list-group list-group-flush my-3">
                <a href="../index.php" class="list-group-item list-group-item-action bg-transparent second-text">Dashboard</a>
                <a href="../dtalternatif.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Alternatif</a>
                <a href="../dtkriteria.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Kriteria</a>
                <a href="../dtbobot.php" class="active list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Bobot</a>
                <a href="../dtskala.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Skala</a>
                <a href="../dtmatrix.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Matrix</a>
                <a href="../result.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Result</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">~</h2>
                </div>
            </nav>
            <div class="container-sm">
                <hr class="border-light border-2 opacity-75">
                <?php
                if ($query) {
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="inputidbobot" class="form-label">id Bobot</label>
                                <input type="text" class="form-control" id="inputidbobot" name="id_bobot" value="<?php echo $data['id_bobot'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="inputidkriteria" class="form-label">id Kriteria</label>
                                <input type="text" class="form-control" id="inputidkriteria" name="id_kriteria" value="<?php echo $data['id_kriteria'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="inputvalue" class="form-label">Value</label>
                                <input type="text" class="form-control" id="inputvalue" name="value" value="<?php echo $data['value'] ?>">
                            </div>
                            <input class="btn btn-primary" type="submit" name="edit" value="Edit">
                            <a class="btn btn-danger" href="../dtalternatif.php" role="button">Cancel</a>
                        </form>
                <?php
                    }
                }
                if (isset($_POST['edit'])) {
                    $id_bobot = $_GET['id_bobot'];
                    $id_kriteria = $_POST['id_kriteria'];
                    $value = $_POST['value'];
                    $sql = "UPDATE bobot SET id_kriteria = '$id_kriteria', value = '$value' WHERE id_bobot = '$id_bobot'";
                    $query = $koneksi->query($sql);
                    if ($query) {
                        echo "<script>alert('Data berhasil diubah');
                        window.location.href = '../dtbobot.php';
                        </script>";
                    } else {
                        echo "<script>alert('Data gagal diubah');</script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <!-- <footer class="bg-dark pb-3 pt-4">
        <p class="text-center text-white bg-dark">Created with love by Ilham Shodiq</p>
    </footer> -->

    <footer class="bg-dark text-center text-white p-4">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="mailto:ilhambheh@gmail.com">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/The12sMB">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/ilham_shodq/">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/ilhamshodiq">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="small text-center">Created with love by Ilham Shodiq</div>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>