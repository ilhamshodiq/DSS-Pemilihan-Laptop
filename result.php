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
    <link rel="stylesheet" href="css/style_dashboard.css">

    <title>Menu Result</title>
</head>

<body>
    <?php
    session_start();
    include "config.php";

    //SAW
    $sql = "SELECT * FROM vmatrixkeputusan";
    $query = $koneksi->query($sql);
    $no = 1;

    $sql2 = "SELECT * FROM vnormalisasi";
    $query2 = $koneksi->query($sql2);
    $no2 = 1;

    $sql3 = "SELECT * FROM vranking";
    $query3 = $koneksi->query($sql3);
    $no3 = 1;


    //WP
    $sql4 = "SELECT * FROM wp_jumbobot";
    $query4 = $koneksi->query($sql4);

    $sql5 = "SELECT * FROM wp_normalisasiterbobot";
    $query5 = $koneksi->query($sql5);
    $no5 = 1;

    $sql6 = "SELECT * FROM wp_pangkat";
    $query6 = $koneksi->query($sql6);
    $no6 = 1;

    $sql7 = "SELECT * FROM wp_nilais";
    $query7 = $koneksi->query($sql7);
    $no7 = 1;

    $sql8 = "SELECT * FROM wp_sums";
    $query8 = $koneksi->query($sql8);

    $sql9 = "SELECT * FROM wp_nilaiv";
    $query9 = $koneksi->query($sql9);
    $no9 = 1;

    //TOPSIS
    $sql10 = "SELECT * FROM topsis_pembagi";
    $query10 = $koneksi->query($sql10);
    $no10 = 1;

    $sql11 = "SELECT * FROM topsis_normalisasi";
    $query11 = $koneksi->query($sql11);
    $no11 = 1;

    $sql12 = "SELECT * FROM topsis_terbobot";
    $query12 = $koneksi->query($sql12);
    $no12 = 1;

    $sql13 = "SELECT * FROM topsis_maxmin";
    $query13 = $koneksi->query($sql13);
    $no13 = 1;

    $sql14 = "SELECT * FROM topsis_sipsin";
    $query14 = $koneksi->query($sql14);
    $no14 = 1;

    $sql15 = "SELECT * FROM topsis_nilaiv";
    $query15 = $koneksi->query($sql15);
    $no15 = 1;

    //Multimoora
    $sql16 = "SELECT * FROM multimoora_1";
    $query16 = $koneksi->query($sql16);
    $no16 = 1;

    $sql17 = "SELECT * FROM multimoora_2";
    $query17 = $koneksi->query($sql17);
    $no17 = 1;

    $sql18 = "SELECT * FROM multimoora_3";
    $query18 = $koneksi->query($sql18);
    $no18 = 1;

    $sql19 = "SELECT * FROM multimoora_4";
    $query19 = $koneksi->query($sql19);
    $no19 = 1;

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
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text">Dashboard</a>
                <a href="dtalternatif.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Alternatif</a>
                <a href="dtkriteria.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Kriteria</a>
                <a href="dtbobot.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Bobot</a>
                <a href="dtskala.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Skala</a>
                <a href="dtmatrix.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Data Matrix</a>
                <a href="result.php" class="active list-group-item list-group-item-action bg-transparent second-text fw-bold"></i>Result</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <!-- navbar jadi tombol -->
            <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item  me-4">
                                <a class="btn btn-info btn-sm text-light" role="button" onclick="munculinSAW()">SAW</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="btn btn-info btn-sm text-light" role="button" onclick="munculinWP()">WP</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="btn btn-info btn-sm text-light" role="button" onclick="munculinTOPSIS()">TOPSIS</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="btn btn-info btn-sm text-light" role="button" onclick="munculinMultimoora()">Multimoora</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div id="saw">
                <h1 class="fs-2 m-4">Metode SAW</h1>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">vmatrixkeputusan</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data = $query->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['id_matrix'] ?></td>
                                    <td><?php echo $data['id_laptop'] ?></td>
                                    <td><?php echo $data['merk_laptop'] ?></td>
                                    <td><?php echo $data['id_kriteria'] ?></td>
                                    <td><?php echo $data['nm_kriteria'] ?></td>
                                    <td><?php echo $data['id_bobot'] ?></td>
                                    <td><?php echo $data['value'] ?></td>
                                    <td><?php echo $data['nilai'] ?></td>
                                    <td><?php echo $data['keterangan'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">vnormalisasi</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data2 = $query2->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no2++ ?></th>
                                    <td><?php echo $data2['id_matrix'] ?></td>
                                    <td><?php echo $data2['id_laptop'] ?></td>
                                    <td><?php echo $data2['merk_laptop'] ?></td>
                                    <td><?php echo $data2['id_kriteria'] ?></td>
                                    <td><?php echo $data2['nm_kriteria'] ?></td>
                                    <td><?php echo $data2['id_bobot'] ?></td>
                                    <td><?php echo $data2['value'] ?></td>
                                    <td><?php echo $data2['nilai'] ?></td>
                                    <td><?php echo $data2['keterangan'] ?></td>
                                    <td><?php echo $data2['normalisasi'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">vrangking</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">Rangking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data3 = $query3->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no3++ ?></th>
                                    <td><?php echo $data3['id_laptop'] ?></td>
                                    <td><?php echo $data3['merk_laptop'] ?></td>
                                    <td><?php echo $data3['rangking'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div id="wp">
                <h1 class="fs-2 m-4">Metode WP</h1>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">WP Jumlah Bobot</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data4 = $query4->fetch_array()) { ?>
                                <tr>
                                    <td><?php echo $data4['jumlah'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">WP Normalisasi Bobot</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Value</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Normalisasi W</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data5 = $query5->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no5++ ?></th>
                                    <td><?php echo $data5['id_bobot'] ?></td>
                                    <td><?php echo $data5['id_kriteria'] ?></td>
                                    <td><?php echo $data5['value'] ?></td>
                                    <td><?php echo $data5['jumlah'] ?></td>
                                    <td><?php echo $data5['normalisasi_w'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">WP Pangkat</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">id_kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Normalisasi W</th>
                                <th scope="col">Pangkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data6 = $query6->fetch_array()) { ?>
                                <tr>
                                    <td><?php echo $data6['id_matrix'] ?></td>
                                    <td><?php echo $data6['id_laptop'] ?></td>
                                    <td><?php echo $data6['merk_laptop'] ?></td>
                                    <td><?php echo $data6['id_kriteria'] ?></td>
                                    <td><?php echo $data6['nm_kriteria'] ?></td>
                                    <td><?php echo $data6['id_bobot'] ?></td>
                                    <td><?php echo $data6['value'] ?></td>
                                    <td><?php echo $data6['nilai'] ?></td>
                                    <td><?php echo $data6['keterangan'] ?></td>
                                    <td><?php echo $data6['normalisasi_w'] ?></td>
                                    <td><?php echo $data6['pangkat'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">WP Nilai S</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">NilaiS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data7 = $query7->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no7++ ?></th>
                                    <td><?php echo $data7['id_laptop'] ?></td>
                                    <td><?php echo $data7['merk_laptop'] ?></td>
                                    <td><?php echo $data7['nilaiS'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">WP SUM Nilai S</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data8 = $query8->fetch_array()) { ?>
                                <tr>
                                    <td><?php echo $data8['jum'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">WP Nilai V</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">NilaiV</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data9 = $query9->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no9++ ?></th>
                                    <td><?php echo $data9['id_laptop'] ?></td>
                                    <td><?php echo $data9['merk_laptop'] ?></td>
                                    <td><?php echo $data9['nilaiV'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="topsis">
                <h1 class="fs-2 m-4">Metode TOPSIS</h1>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">TOPSIS Pembagi</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">bagi W</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data10 = $query10->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no10++ ?></th>
                                    <td><?php echo $data10['id_kriteria'] ?></td>
                                    <td><?php echo $data10['nm_kriteria'] ?></td>
                                    <td><?php echo $data10['bagi'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">TOPSIS Normalisasi</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">id_kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data11 = $query11->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no11++ ?></th>
                                    <td><?php echo $data11['id_matrix'] ?></td>
                                    <td><?php echo $data11['id_laptop'] ?></td>
                                    <td><?php echo $data11['merk_laptop'] ?></td>
                                    <td><?php echo $data11['id_kriteria'] ?></td>
                                    <td><?php echo $data11['nm_kriteria'] ?></td>
                                    <td><?php echo $data11['id_bobot'] ?></td>
                                    <td><?php echo $data11['value'] ?></td>
                                    <td><?php echo $data11['nilai'] ?></td>
                                    <td><?php echo $data11['keterangan'] ?></td>
                                    <td><?php echo $data11['normalisasi'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">TOPSIS Terbobot</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Normalisasi</th>
                                <th scope="col">Terbobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data12 = $query12->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no12++ ?></th>
                                    <td><?php echo $data12['id_matrix'] ?></td>
                                    <td><?php echo $data12['id_laptop'] ?></td>
                                    <td><?php echo $data12['merk_laptop'] ?></td>
                                    <td><?php echo $data12['id_kriteria'] ?></td>
                                    <td><?php echo $data12['nm_kriteria'] ?></td>
                                    <td><?php echo $data12['id_bobot'] ?></td>
                                    <td><?php echo $data12['value'] ?></td>
                                    <td><?php echo $data12['nilai'] ?></td>
                                    <td><?php echo $data12['keterangan'] ?></td>
                                    <td><?php echo $data12['normalisasi'] ?></td>
                                    <td><?php echo $data12['terbobot'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">TOPSIS MaxMin</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">Maximum</th>
                                <th scope="col">Minimum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data13 = $query13->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no13++ ?></th>
                                    <td><?php echo $data13['id_matrix'] ?></td>
                                    <td><?php echo $data13['id_kriteria'] ?></td>
                                    <td><?php echo $data13['nm_kriteria'] ?></td>
                                    <td><?php echo $data13['maximum'] ?></td>
                                    <td><?php echo $data13['minimum'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">TOPSIS SipSin</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">DPlus</th>
                                <th scope="col">Dmin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data14 = $query14->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no14++ ?></th>
                                    <td><?php echo $data14['id_laptop'] ?></td>
                                    <td><?php echo $data14['dplus'] ?></td>
                                    <td><?php echo $data14['dmin'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">TOPSIS Nilai V</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">DPlus</th>
                                <th scope="col">Dmin</th>
                                <th scope="col">nilaiv</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data15 = $query15->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no15++ ?></th>
                                    <td><?php echo $data15['id_laptop'] ?></td>
                                    <td><?php echo $data15['dplus'] ?></td>
                                    <td><?php echo $data15['dmin'] ?></td>
                                    <td><?php echo $data15['nilaiv'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>


            <div id="multimoora">
                <h1 class="fs-2 m-4">Metode Multimoora</h1>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">Multimoora 1</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">pra</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data16 = $query16->fetch_array()) { ?>
                                <tr>
                                    <td><?php echo $data16['id_matrix'] ?></td>
                                    <td><?php echo $data16['id_laptop'] ?></td>
                                    <td><?php echo $data16['merk_laptop'] ?></td>
                                    <td><?php echo $data16['id_kriteria'] ?></td>
                                    <td><?php echo $data16['nm_kriteria'] ?></td>
                                    <td><?php echo $data16['id_bobot'] ?></td>
                                    <td><?php echo $data16['value'] ?></td>
                                    <td><?php echo $data16['nilai'] ?></td>
                                    <td><?php echo $data16['keterangan'] ?></td>
                                    <td><?php echo $data16['pra'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">Multimoora 2</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">pra</th>
                                <th scope="col">normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data17 = $query17->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no17++ ?></th>
                                    <td><?php echo $data17['id_matrix'] ?></td>
                                    <td><?php echo $data17['id_laptop'] ?></td>
                                    <td><?php echo $data17['merk_laptop'] ?></td>
                                    <td><?php echo $data17['id_kriteria'] ?></td>
                                    <td><?php echo $data17['nm_kriteria'] ?></td>
                                    <td><?php echo $data17['id_bobot'] ?></td>
                                    <td><?php echo $data17['value'] ?></td>
                                    <td><?php echo $data17['nilai'] ?></td>
                                    <td><?php echo $data17['keterangan'] ?></td>
                                    <td><?php echo $data17['pra'] ?></td>
                                    <td><?php echo $data17['normalisasi'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">Multimoora 3</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Matrix</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Merk Laptop</th>
                                <th scope="col">id Kriteria</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">id Bobot</th>
                                <th scope="col">Value</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">pra</th>
                                <th scope="col">normalisasi</th>
                                <th scope="col">normalisasi terbobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data18 = $query18->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no18++ ?></th>
                                    <td><?php echo $data18['id_matrix'] ?></td>
                                    <td><?php echo $data18['id_laptop'] ?></td>
                                    <td><?php echo $data18['merk_laptop'] ?></td>
                                    <td><?php echo $data18['id_kriteria'] ?></td>
                                    <td><?php echo $data18['nm_kriteria'] ?></td>
                                    <td><?php echo $data18['id_bobot'] ?></td>
                                    <td><?php echo $data18['value'] ?></td>
                                    <td><?php echo $data18['nilai'] ?></td>
                                    <td><?php echo $data18['keterangan'] ?></td>
                                    <td><?php echo $data18['pra'] ?></td>
                                    <td><?php echo $data18['normalisasi'] ?></td>
                                    <td><?php echo $data18['normalisasibobot'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="container-sm">
                    <hr class="border-light border-2 opacity-75">
                    <h2 class="fs-4 m-2">Multimoora 4</h2>
                    <table class="table table-light table-striped rounded table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="50">#</th>
                                <th scope="col">id Laptop</th>
                                <th scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data19 = $query19->fetch_array()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $no19++ ?></th>
                                    <td><?php echo $data19['id_laptop'] ?></td>
                                    <td><?php echo $data19['hasil'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>


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


        function munculinSAW() {
            let saw = document.getElementById("saw");
            let wp = document.getElementById("wp");
            let topsis = document.getElementById("topsis");
            let multimoora = document.getElementById("multimoora");
            saw.style.display = "block";
            wp.style.display = "none";
            topsis.style.display = "none";
            multimoora.style.display = "none";

        }

        function munculinWP() {
            let wp = document.getElementById("wp");
            let saw = document.getElementById("saw");
            let topsis = document.getElementById("topsis");
            let multimoora = document.getElementById("multimoora");
            wp.style.display = "block";
            saw.style.display = "none";
            topsis.style.display = "none";
            multimoora.style.display = "none";
        }

        function munculinTOPSIS() {
            let topsis = document.getElementById("topsis");
            let wp = document.getElementById("wp");
            let saw = document.getElementById("saw");
            let multimoora = document.getElementById("multimoora");
            topsis.style.display = "block";
            wp.style.display = "none";
            saw.style.display = "none";
            multimoora.style.display = "none";
        }

        function munculinMultimoora() {
            let multimoora = document.getElementById("multimoora");
            let topsis = document.getElementById("topsis");
            let wp = document.getElementById("wp");
            let saw = document.getElementById("saw");
            multimoora.style.display = "block";
            topsis.style.display = "none";
            wp.style.display = "none";
            saw.style.display = "none";
        }
    </script>
</body>

</html>