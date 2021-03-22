<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Annex</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round">
                                    <i class="mdi mdi-webcam"></i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10">
                                    <h5 class="mt-0 round-inner">$18090</h5>
                                    <p class="mb-0 text-muted">Visits Today</p>
                                </div>
                            </div>
                            <div class="col-3 align-self-end align-self-center">
                                <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round">
                                    <i class="mdi mdi-account-multiple-plus"></i>
                                </div>
                            </div>
                            <div class="col-6 text-center align-self-center">
                                <div class="m-l-10 ">
                                    <h5 class="mt-0 round-inner">562</h5>
                                    <p class="mb-0 text-muted">New Users</p>
                                </div>
                            </div>
                            <div class="col-3 align-self-end align-self-center">
                                <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round ">
                                    <i class="mdi mdi-basket"></i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10 ">
                                    <h5 class="mt-0 round-inner">7514</h5>
                                    <p class="mb-0 text-muted">New Orders</p>
                                </div>
                            </div>
                            <div class="col-3 align-self-end align-self-center">
                                <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round">
                                    <i class="mdi mdi-rocket"></i>
                                </div>
                            </div>
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10">
                                    <h5 class="mt-0 round-inner">$32874</h5>
                                    <p class="mb-0 text-muted">Total Sales</p>
                                </div>
                            </div>
                            <div class="col-3 align-self-end align-self-center">
                                <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <h5>Soal Pilihan Ganda</h5>
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<?= base_url('Dashboard/simpan') ?>" method="post">
                                <?php
                                $no = 1;
                                foreach ($soal as $data) {
                                    echo "<p>";
                                    echo $no++ . ". " . $data['pertanyaan'] . "<br>";
                                    echo "A. <input type='radio' value='a' name='jawaban[" . $data['id_soal'] . "]'> " . $data['jawaban_a'] . "<br>";
                                    echo "B. <input type='radio' value='b' name='jawaban[" . $data['id_soal'] . "]'> " . $data['jawaban_b'] . "<br>";
                                    echo "C. <input type='radio' value='c' name='jawaban[" . $data['id_soal'] . "]'> " . $data['jawaban_c'] . "<br>";
                                    echo "D. <input type='radio' value='d' name='jawaban[" . $data['id_soal'] . "]'> " . $data['jawaban_d'] . "<br>";
                                    echo "E. <input type='radio' value='e' name='jawaban[" . $data['id_soal'] . "]'> " . $data['jawaban_e'] . "</p>";
                                }
                                ?>
                                <button class="btn btn-success" type="submit" name="simpan">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>