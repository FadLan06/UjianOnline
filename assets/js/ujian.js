$(document).ready(function () {
  $.ajax({
    type: "ajax",
    url: "ujian/getSoal",
    async: false,
    dataType: "json",
    success: function (data) {
      let data_per = 0;
      let save = [];
      let total = 0;
      let jawab = [];

      $(document).ready(function () {
        $("#btnSelesai").hide();
        setPertanyaan();
      });

      function setPertanyaan() {
        if (data_per == 0) {
          $("#btnKembali").hide();
          $("#lanjut").show();
          $("#btnSelesai").hide();
        }

        if (data_per == data.length - 1) {
          $("#lanjut").hide();
          $("#btnSelesai").show();
        }

        no = data_per + 1;

        document.getElementById("pertanyaan").innerHTML = no +'. '+ data[data_per]["pertanyaan"];
        var html = "";
        var i;
        var opsi = ["a", "b", "c", "d", "e"];

        for (i = 0; i < 5; i++) {
          // html += data[data_per]['opsi_'+opsi[i]];
          html +=
            "<div class='funkyradio_" + opsi[i] + "'><div class='funkyradio-success'><input type='radio' name='jawaban' data-id='" + opsi[i] + "' id='jawaban" + opsi[i] + "' value='' /><label for='jawaban" + opsi[i] + "'>" +
            data[data_per]["opsi_" + opsi[i]] + "</label></div></div>";
        }
        document.getElementById("pilihan").innerHTML = html;
      }

      $("#lanjut").on("click", function () {
        data_per++;

        simpan();

        $("#btnSelesai").hide();
        $("#btnKembali").show();

        // riset();
        setPertanyaan();
      });

      $("#btnKembali").on("click", function () {
        data_per--;
        setPertanyaan();
      });

      $("#btnSelesai").on("click", function () {
        stop();
      });

      function riset() {
        document.querySelector('input[name="jawaban"]:checked') == false;
      }

      function stop() {
        checkScore();
        alert("total = " + total);
        return;
      }

      function simpan() {
        const answer = document.querySelector('input[name="jawaban"]:checked');
        if (answer != null) {
          save.push(answer.getAttribute("data-id"));
          jawab.push(0);
        } else {
          save.push(0);
        }
      }

      function checkScore() {
        for (i = 0; i < save.length; i++) {
          if (save[i] == jawab[i]) {
            total += 100;
          }
        }
      }

      // console.log(data)
    },
  });
});
