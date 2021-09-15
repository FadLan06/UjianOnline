<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Annex</a></li>
                            <li class="breadcrumb-item active">Ujian</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Ujian</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body mx-auto">

                        <?php
                        $no = 1;
                        foreach ($soal as $data) { ?>
                            <button class="btn btn-lg btn-primary"><?= $no++ ?></button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div id="pertanyaan"></div>
                        <div id="pilihan"></div>
                    </div>
                    <div class="card-footer" align="center">
                        <button class="btn btn-danger" id="kembali">Kembali</button>
                        <button class="btn btn-danger" id="lanjut">Lanjut</button>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>


<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>