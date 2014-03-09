<script>

    function absen() {
        var semester = $("#semester").val();
        var tahun = $("#cbsemester").val();
        console.log(nomor);
          $.ajax(
         {
         url: "http://localhost/webservice/index.php/api/controllers_absensi/absen/format/json",
         type: "POST",
         data: {
         smstr: semester,
         thn:tahun,
         nomor_mahasiswa:nomor,
         },
         success: function(json) {
         console.log(json);
         console.log("json");
         //console.log(json.absen.length);
        // $('#tableabsensi').html("");
         
         var matkul = "";
         
         
         for (var w = 0; w < json.absen.length; w++) {
         hitung = hitung + 2;
         //}
         //matkul = json.absen[w].KODE;
         //output+='</tr>'
         
         }
         
         
         //      document.getElementById("tableabsensi").innerHTML = output
         
         
         
         
         
         
         
         }
         }
         )
        $.ajax(
                {
                    url: "http://localhost/webservice/index.php/api/controllers_jadwal/jadwal/format/json",
                    type: "POST",
                    data: {
                        smstr: semester,
                    },
                    success: function(json) {
                        console.log(json);
                        console.log("json");
                        var output = "";
                       $('#tableabsensi').html("");

                        $.each(json.jadwal, function(index, value) {
                            $('#tableabsensi').append("<tr>");
                            $('#tableabsensi').append("<td>" + this['MATAKULIAH'] + "</td>");
                            for (var i = 1; i <= 16; i++) {
                                $('#tableabsensi').append("<td>-</td>");
                            }
                        }
                        );
                    }
                }
        )
        console.log(hitung);

    }

    /*               
     var matkul = "";
     var hitung;
     $.each(json.absen, function(index, value) {
     if (matkul != this['KODE']) {
     $('#tableabsensi').append("<tr><td>" + this['KODE'] + "</td><td>" + this['MATAKULIAH'] + "</td>");
     for (var i = 1; i <= 16; i++) {
     $('#tableabsensi').append("<td>");
     
     if (this['MINGGU'] == i) {
     
     $('#tableabsensi').append("" + this['STATUS'] + "");
     }
     $('#tableabsensi').append("</td>");
     }
     
     matkul = this['KODE'];
     $('#tableabsensi').append("</tr>");
     }
     
     }
     )
     }
     }
     )
     }
     */






    /*
     
     var c_matkul = "";
     var hitung;
     for (var i = 0; i < json.absen.length; i++) {
     
     console.log(json.absen[i].MATAKULIAH + ":" + json.absen[i].MINGGU + ":" + json.absen[i].STATUS);
     if (c_matkul == "") {
     $('#tableabsensi').append("<tr>");
     }
     
     if (json.absen[i].KODE != c_matkul) {
     c_matkul = json.absen[i].KODE;
     $('#tableabsensi').append("</tr>");
     
     if (i - 1 != json.absen.length) {
     $('#tableabsensi').append("<tr>");
     }
     } else {
     hitung = 0;
     for (var j = 0; j <= 16; j++) {
     if (j == 0) {
     $('#tableabsensi').append("<td>" + json.absen[i].MATAKULIAH + "</td>");
     i++;
     
     }
     
     if (json.absen[i].MINGGU == j) {
     $('#tableabsensi').append("<td>" + json.absen[i].STATUS + "</td>");
     i++;
     } else {
     if (j != 0)
     $('#tableabsensi').append("<td> - </td>");
     }
     console.log(json.absen[i].MINGGU + " == " + j);
     }
     //i = i + hitung;
     }
     }
     
     
     
     // var p=json.absen;
     //$('#absensi').html('<table  border="1" data-role="tabel" data-mode="reflow"><tr><th rowspan="2">MATAKULIAH</th><th colspan="16">MINGGU KE</th></tr><tr><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th></tr>');
     // $('#absensi').html("" +json.absen[1].MATAKULIAH+ "<br>");//benar
     /*var list="";   
     $.each(json.absen, function(index, element) {
     // alert(element.category);  
     if (element.MATAKULIAH != list) {
     $("#absensi").append("<table border='1px solid' width='400px'><tr><td width='200px'>" + element.MATAKULIAH + "</td></tr></table>");
     list = element.MATAKULIAH;
     }
     });*/


    /*
     var temp = "";
     for (var i = 0; i <= json.absen.length; i++)
     {
     if (json.absen[i].KODE != temp)
     {
     temp = json.absen[i].KODE;
     $('#matakuliah').html("" + json.absen[i].MATAKULIAH + "<br>");
     if (json.absen[i].MINGGU == 1)
     $('#minggu1').html("" + json.absen[i].STATUS + "<br>");
     else if (json.absen[i].MINGGU == 2) {
     $('#minggu2').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 3) {
     $('#minggu3').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 4) {
     $('#minggu4').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 5) {
     $('#minggu5').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 6) {
     $('#minggu6').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 7) {
     $('#minggu7').html("" + json.absen[i].STATUS + "<br>");
     } else if (json.absen[i].MINGGU == 8) {
     $('#minggu8').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 9) {
     $('#minggu9').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 10) {
     $('#minggu10').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 11) {
     $('#minggu11').html("" + json.absen[i].STATUS + "<br>");
     } else if (json.absen[i].MINGGU == 12) {
     $('#minggu12').html("" + json.absen[i].STATUS + "<br>");
     } else if (json.absen[i].MINGGU == 13) {
     $('#minggu13').html("" + json.absen[i].STATUS + "<br>");
     } else if (json.absen[i].MINGGU == 14) {
     $('#minggu14').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 15) {
     $('#minggu15').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 16) {
     $('#minggu16').html("" + json.absen[i].STATUS + "<br>");
     }
     
     
     }
     else
     {
     if (json.absen[i].MINGGU == 1)
     $('#minggu1').html("" + json.absen[i].STATUS + "<br>");
     else if (json.absen[i].MINGGU == 2) {
     $('#minggu2').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 3) {
     $('#minggu3').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 4) {
     $('#minggu4').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 5) {
     $('#minggu5').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 6) {
     $('#minggu6').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 7) {
     $('#minggu7').html("" + json.absen[i].STATUS + "<br>");
     } else if (json.absen[i].MINGGU == 8) {
     $('#minggu8').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 9) {
     $('#minggu9').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 10) {
     $('#minggu10').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 11) {
     $('#minggu11').html("" + json.absen[i].STATUS + "<br>");
     } else if (json.absen[i].MINGGU == 12) {
     $('#minggu12').html("" + json.absen[i].STATUS + "<br>");
     } else if (json.absen[i].MINGGU == 13) {
     $('#minggu13').html("" + json.absen[i].STATUS + "<br>");
     } else if (json.absen[i].MINGGU == 14) {
     $('#minggu14').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 15) {
     $('#minggu15').html("" + json.absen[i].STATUS + "<br>");
     }
     else if (json.absen[i].MINGGU == 16) {
     $('#minggu16').html("" + json.absen[i].STATUS + "<br>");
     }
     }
     
     }
     
     */
    //               }
    //           }
    // )
    // }
</script>