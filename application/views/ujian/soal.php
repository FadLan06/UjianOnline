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
