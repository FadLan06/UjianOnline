<div class="wrapper">
    <div class="container-fluid">

        <style>
            .funkyradio_a div {
                clear: both;
                overflow: hidden;
            }

            .funkyradio_a label {
                width: 100%;
                border-radius: 3px;
                border: 1px solid #D1D3D4;
                font-weight: normal;
            }

            .funkyradio_a input[type="radio"]:empty {
                display: none;
            }

            .funkyradio_a input[type="radio"]:empty~label {
                position: relative;
                line-height: 2.5em;
                text-indent: 3.25em;
                margin-top: .5em;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .funkyradio_a input[type="radio"]:empty~label:before {
                position: absolute;
                display: block;
                top: 0;
                bottom: 0;
                left: 0;
                content: '';
                width: 2.5em;
                background: #D1D3D4;
                border-radius: 3px 0 0 3px;
            }

            .funkyradio_a input[type="radio"]:hover:not(:checked)~label {
                color: #888;
            }

            .funkyradio_a input[type="radio"]:hover:not(:checked)~label:before {
                content: 'A';
                text-indent: .9em;
                color: #C2C2C2;
            }

            .funkyradio_a input[type="radio"]:checked~label {
                color: #777;
            }

            .funkyradio_a input[type="radio"]:checked~label:before {
                content: 'A';
                text-indent: .9em;
                color: #333;
                background-color: #ccc;
            }

            .funkyradio_a input[type="radio"]:focus~label:before {
                box-shadow: 0 0 0 3px #999;
            }

            .funkyradio_b div {
                clear: both;
                overflow: hidden;
            }

            .funkyradio_b label {
                width: 100%;
                border-radius: 3px;
                border: 1px solid #D1D3D4;
                font-weight: normal;
            }

            .funkyradio_b input[type="radio"]:empty {
                display: none;
            }

            .funkyradio_b input[type="radio"]:empty~label {
                position: relative;
                line-height: 2.5em;
                text-indent: 3.25em;
                margin-top: .5em;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .funkyradio_b input[type="radio"]:empty~label:before {
                position: absolute;
                display: block;
                top: 0;
                bottom: 0;
                left: 0;
                content: '';
                width: 2.5em;
                background: #D1D3D4;
                border-radius: 3px 0 0 3px;
            }

            .funkyradio_b input[type="radio"]:hover:not(:checked)~label {
                color: #888;
            }

            .funkyradio_b input[type="radio"]:hover:not(:checked)~label:before {
                content: 'B';
                text-indent: .9em;
                color: #C2C2C2;
            }

            .funkyradio_b input[type="radio"]:checked~label {
                color: #777;
            }

            .funkyradio_b input[type="radio"]:checked~label:before {
                content: 'B';
                text-indent: .9em;
                color: #333;
                background-color: #ccc;
            }

            .funkyradio_b input[type="radio"]:focus~label:before {
                box-shadow: 0 0 0 3px #999;
            }

            .funkyradio_c div {
                clear: both;
                overflow: hidden;
            }

            .funkyradio_c label {
                width: 100%;
                border-radius: 3px;
                border: 1px solid #D1D3D4;
                font-weight: normal;
            }

            .funkyradio_c input[type="radio"]:empty {
                display: none;
            }

            .funkyradio_c input[type="radio"]:empty~label {
                position: relative;
                line-height: 2.5em;
                text-indent: 3.25em;
                margin-top: .5em;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .funkyradio_c input[type="radio"]:empty~label:before {
                position: absolute;
                display: block;
                top: 0;
                bottom: 0;
                left: 0;
                content: '';
                width: 2.5em;
                background: #D1D3D4;
                border-radius: 3px 0 0 3px;
            }

            .funkyradio_c input[type="radio"]:hover:not(:checked)~label {
                color: #888;
            }

            .funkyradio_c input[type="radio"]:hover:not(:checked)~label:before {
                content: 'C';
                text-indent: .9em;
                color: #C2C2C2;
            }

            .funkyradio_c input[type="radio"]:checked~label {
                color: #777;
            }

            .funkyradio_c input[type="radio"]:checked~label:before {
                content: 'C';
                text-indent: .9em;
                color: #333;
                background-color: #ccc;
            }

            .funkyradio_c input[type="radio"]:focus~label:before {
                box-shadow: 0 0 0 3px #999;
            }

            .funkyradio_d div {
                clear: both;
                overflow: hidden;
            }

            .funkyradio_d label {
                width: 100%;
                border-radius: 3px;
                border: 1px solid #D1D3D4;
                font-weight: normal;
            }

            .funkyradio_d input[type="radio"]:empty {
                display: none;
            }

            .funkyradio_d input[type="radio"]:empty~label {
                position: relative;
                line-height: 2.5em;
                text-indent: 3.25em;
                margin-top: .5em;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .funkyradio_d input[type="radio"]:empty~label:before {
                position: absolute;
                display: block;
                top: 0;
                bottom: 0;
                left: 0;
                content: '';
                width: 2.5em;
                background: #D1D3D4;
                border-radius: 3px 0 0 3px;
            }

            .funkyradio_d input[type="radio"]:hover:not(:checked)~label {
                color: #888;
            }

            .funkyradio_d input[type="radio"]:hover:not(:checked)~label:before {
                content: 'D';
                text-indent: .9em;
                color: #C2C2C2;
            }

            .funkyradio_d input[type="radio"]:checked~label {
                color: #777;
            }

            .funkyradio_d input[type="radio"]:checked~label:before {
                content: 'D';
                text-indent: .9em;
                color: #333;
                background-color: #ccc;
            }

            .funkyradio_d input[type="radio"]:focus~label:before {
                box-shadow: 0 0 0 3px #999;
            }

            .funkyradio_e div {
                clear: both;
                overflow: hidden;
            }

            .funkyradio_e label {
                width: 100%;
                border-radius: 3px;
                border: 1px solid #D1D3D4;
                font-weight: normal;
            }

            .funkyradio_e input[type="radio"]:empty {
                display: none;
            }

            .funkyradio_e input[type="radio"]:empty~label {
                position: relative;
                line-height: 2.5em;
                text-indent: 3.25em;
                margin-top: .5em;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .funkyradio_e input[type="radio"]:empty~label:before {
                position: absolute;
                display: block;
                top: 0;
                bottom: 0;
                left: 0;
                content: '';
                width: 2.5em;
                background: #D1D3D4;
                border-radius: 3px 0 0 3px;
            }

            .funkyradio_e input[type="radio"]:hover:not(:checked)~label {
                color: #888;
            }

            .funkyradio_e input[type="radio"]:hover:not(:checked)~label:before {
                content: 'E';
                text-indent: .9em;
                color: #C2C2C2;
            }

            .funkyradio_e input[type="radio"]:checked~label {
                color: #777;
            }

            .funkyradio_e input[type="radio"]:checked~label:before {
                content: 'E';
                text-indent: .9em;
                color: #333;
                background-color: #ccc;
            }

            .funkyradio_e input[type="radio"]:focus~label:before {
                box-shadow: 0 0 0 3px #999;
            }

            .funkyradio-default input[type="radio"]:checked~label:before {
                color: #333;
                background-color: #ccc;
            }

            .funkyradio-primary input[type="radio"]:checked~label:before {
                color: #fff;
                background-color: #337ab7;
            }

            .funkyradio-success input[type="radio"]:checked~label:before {
                color: #fff;
                background-color: #5cb85c;
            }

            .funkyradio-danger input[type="radio"]:checked~label:before {
                color: #fff;
                background-color: #d9534f;
            }

            .funkyradio-warning input[type="radio"]:checked~label:before {
                color: #fff;
                background-color: #f0ad4e;
            }

            .funkyradio-info input[type="radio"]:checked~label:before {
                color: #fff;
                background-color: #5bc0de;
            }
        </style>

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
                        <?php
                        $arr_opsi = array("a", "b", "c", "d", "e");
                        $no = 1;
                        foreach ($soal as $data) {
                            echo $no++ . ". " . $data['pertanyaan'];
                            for ($i = 0; $i < 5; $i++) {
                                $opsi = "opsi_" . $arr_opsi[$i];
                                $pilihan_opsi     = !empty($data[$opsi]) ? $data[$opsi] : "";
                                echo "
                                <div class='funkyradio_" . $arr_opsi[$i] . "'>

                                    <div class='funkyradio-success'>
                                        <input type='radio' name='jawaban[" . $data['id_soal'] . "]' id='jawaban" . strtoupper($arr_opsi[$i]) . $data['id_soal'] . "' value='" . strtoupper($arr_opsi[$i]) . "' />
                                        <label for='jawaban" . strtoupper($arr_opsi[$i]) . $data['id_soal'] . "'>" . $pilihan_opsi . "</label>
                                    </div>

                                </div>
                                ";
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>


<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>