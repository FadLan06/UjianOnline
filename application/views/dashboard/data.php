<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Annex</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Data</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="card card-body">
                    <div id="formInput">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id_guru">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="nip" placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" placeholder="NAMA LENGKAP">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="no_hp" placeholder="NOMOR HP">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" id="btnSimpan">SImpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show"></tbody>
                    </table>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</div>


<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script>
    window.addEventListener('load', dataList);

    function dataList() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("show").innerHTML = this.responseText;
                tombol();
            }
        };
        xhttp.open("GET", "<?= base_url('Data/List') ?>", true);
        xhttp.send();
    }

    function tombol() {
        document.getElementById('btnSimpan').addEventListener('click', tambah);
        var btnEdit = document.getElementsByClassName('btnEdit');
        var btnHapus = document.getElementsByClassName('btnHapus');

        for (var i = 0; i < btnEdit.length; i++) {
            btnEdit[i].addEventListener('click', edit);
            btnHapus[i].addEventListener('click', hapus);
        }
    }

    function tambah() {
        var nip = document.getElementById('nip').value;
        var nama = document.getElementById('nama').value;
        var no_hp = document.getElementById('no_hp').value;

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                dataList();
            }
        };
        xhttp.open("POST", "<?= base_url('data/tambah_data') ?>", true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('nip=' + nip + '&nama=' + nama + '&no_hp=' + no_hp);
    }

    function edit() {
        alert(this.value);
    }

    function hapus() {
        alert(this.value);
    }
</script>