$(document).ready(function () {
  $.ajax({
    type: "ajax",
    url: "ujian/getSoal",
    async: false,
    dataType: "json",
    success: function (data) {
      const DB_SOAL = data;

      let data_per = 0;

      $(document).ready(function () {
        setPertanyaan();
      });

      function setPertanyaan() {
        document.getElementById("pertanyaan").innerHTML =
          data[data_per]["pertanyaan"];
        var html = "";
        var i;
        var opsi = ["a", "b", "c", "d", "e"];
        for (i = 0; i < 5; i++) {
          // html += data[data_per]['opsi_'+opsi[i]];
          html +=
            "<div class='funkyradio_" +
            opsi[i] +
            "'><div class='funkyradio-success'><input type='radio' name='jawaban' id='jawaban" +
            opsi[i] +
            "' value='' /><label for='jawaban" +
            opsi[i] +
            "'>" +
            data[data_per]["opsi_" + opsi[i]] +
            "</label></div></div>";
        }
        document.getElementById("pilihan").innerHTML = html;
      }

      $("#lanjut").on("click", function () {
        data_per++;

        simpan();

        if (data_per > DB_SOAL.length - 1) {
          stop();
        }

        setPertanyaan();
      });

      function stop() {
        alert("selesai");
      }

      function simpan() {
        const checkRadio = document.querySelector(
          'input[name="jawaban"]:checked'
        );
      }

      // console.log(data)
    },
  });
});
