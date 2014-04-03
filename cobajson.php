<script>
    function submit_absensi() {
        var semester = $("#semester").val();
        var tahun = $("#cbsemester").val();
        var mat = "";
        $.ajax(
                {
                    url: "../webservice/index.php/api/controllers_jadwal/jadwal/format/json",
                    type: "POST",
                    cache: false,
                    async: false,
                    data: {
                        smstr: semester,
                        thn: tahun,
                        nrp_mahasiswa: nrp,
                    },
                    success: function(json1) {
                        console.log(json1);
                        $.each(json1.jadwal, function(index, value) {
                            //mat = json.jadwal[index].MATAKULIAH;
                            kodematkul = this['KODE'];

                            $.ajax(
                                    {
                                        url: "http://localhost/webservice/index.php/api/controllers_absensi_matkul/absen/format/json",
                                        type: "POST",
                                        data: {
                                            smstr: semester,
                                            thn: tahun,
                                            nomor_mahasiswa: nomor,
                                            kode_matkul: kodematkul,
                                        },
                                        success: function(json) {
                                            //console.log("json");
                                            console.log(json);
                                            console.log("json");
                                            // $('#tableabsensi').html("");
                                            var table = $("<tr/>")
                                            $("#tableabsensi").append(table);
                                             table.append($("<tr><td>" + json1.jadwal[index].MATAKULIAH + "</td>"));
                                            if (json.absen.length == 0)
                                                for (var i = 1; i <= 16; i++) {
                                                    table.append($("<td> - <td>"));
                                                }
                                            else {

                                                var j = '0';
                                                for (var i = 1; i <= 16; i++) {
                                                    if (json.absen[j].MINGGU == i)
                                                    {
                                                        table.append($("<td>" + json.absen[j].STATUS + "</td>"));
                                                        j++;
                                                    }
                                                    else {
                                                        table.append($("<td> - </td>"));
                                                    }
                                                }

                                            }


                                        },
                                    }
                            );
                        }
                        );

                    }
                }
        );
    }
    function submit_matakuliah(mat) {
        var semester = $("#semester").val();
        var tahun = $("#cbsemester").val();
        //var mat = 'VI044101';
        $.ajax(
                {
                    url: "http://localhost/webservice/index.php/api/controllers_absensi_matkul/absen/format/json",
                    type: "POST",
                    data: {
                        smstr: semester,
                        thn: tahun,
                        nomor_mahasiswa: nomor,
                        kode_matkul: mat,
                    },
                    success: function(json) {
                        //console.log("json");
                        console.log(json);
                        console.log("json");
                        // $('#tableabsensi').html("");
                        if (json.absen.length == 0)
                            for (var i = 1; i <= 16; i++) {
                                $('#tableabsensi').append("<td> - <td>");
                            }
                        else {

                            var j = '0';
                            for (var i = 1; i <= 16; i++) {
                                if (json.absen[j].MINGGU == i)
                                {
                                    $('#tableabsensi').append("<td>" + json.absen[j].STATUS + "</td>");
                                    j++;
                                }
                                else {
                                    $('#tableabsensi').append("<td> - </td>");
                                }
                            }

                        }

                    },
                }
        );
    }
</script>