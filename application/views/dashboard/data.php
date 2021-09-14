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
                            <button class="btn btn-success" id="btnSimpan" value="simpan">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card card-body">
                    <table class="table" width="100%">
                        <thead>
                            <tr align="center">
                                <th width="5%">#</th>
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
        var id_guru = document.getElementById('id_guru').value;
        var nip = document.getElementById('nip').value;
        var nama = document.getElementById('nama').value;
        var no_hp = document.getElementById('no_hp').value;

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                dataList();
                resetData();
                document.getElementById('btnSimpan').value = 'simpan';
                document.getElementById('btnSimpan').innerHTML = 'Simpan';
            }
        };

        var post = 'nip=' + nip + '&nama=' + nama + '&no_hp=' + no_hp;
        if (this.value == 'ubah') {
            post += '&id_guru=' + id_guru;
        }

        xhttp.open("POST", "<?= base_url('data/') ?>" + this.value, true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send(post);
    }

    function edit() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('formInput').innerHTML = this.responseText;
                dataList();
            }
        };
        xhttp.open("GET", "<?= base_url('Data/Edit/') ?>" + this.value, true);
        xhttp.send();
    }

    function hapus() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                dataList();
            }
        };
        xhttp.open("GET", "<?= base_url('Data/Hapus/') ?>" + this.value, true);
        xhttp.send();
    }

    function resetData() {
        document.getElementById('nip').value = '';
        document.getElementById('nama').value = '';
        document.getElementById('no_hp').value = '';
    }
</script>