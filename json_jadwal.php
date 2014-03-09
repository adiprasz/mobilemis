<script>
    function submit_jadwal() {
        var semester = $("#semester").val();


        $.ajax(
                {
                    url: "http://localhost/webservice/index.php/api/controllers_jadwal/jadwal/format/json",
                    type: "POST",
                    data: {
                        smstr: semester,
                    },
                    success: function(json) {
                        //console.log("json");
                        console.log(json);
                        console.log("json");
                        $('#SENIN').html("");
                        $('#SELASA').html("");
                        $('#RABU').html("");
                        $('#KAMIS').html("");
                        $('#JUMAT').html("");
                        $('#SABTU').html("");
                        $('#MINGGU').html("");
                        var i = 0;
                        for (var i = 0; i <= json.jadwal.length; i++) {
                            if (json.jadwal[i].HARI == 1) {
                                $('#SENIN').append("<tr><td>" + json.jadwal[i].MATAKULIAH + "</td><td>" + json.jadwal[i].DOSEN + "</td><td>" + json.jadwal[i].RUANG + "</td></tr>");
                            }
                            else if (json.jadwal[i].HARI == 2) {
                                $('#SELASA').append("<tr><td>" + json.jadwal[i].MATAKULIAH + "</td><td>" + json.jadwal[i].DOSEN + "</td><td>" + json.jadwal[i].RUANG + "</td></tr>");

                            }
                            else if (json.jadwal[i].HARI == 3) {
                                $('#RABU').append("<tr><td>" + json.jadwal[i].MATAKULIAH + "</td><td>" + json.jadwal[i].DOSEN + "</td><td>" + json.jadwal[i].RUANG + "</td></tr>");
                            }
                            else if (json.jadwal[i].HARI == 4) {
                                $('#KAMIS').append("<tr><td>" + json.jadwal[i].MATAKULIAH + "</td><td>" + json.jadwal[i].DOSEN + "</td><td>" + json.jadwal[i].RUANG + "</td></tr>");
                            }
                            else if (json.jadwal[i].HARI == 5) {
                                $('#JUMAT').append("<tr><td>" + json.jadwal[i].MATAKULIAH + "</td><td>" + json.jadwal[i].DOSEN + "</td><td>" + json.jadwal[i].RUANG + "</td></tr>");
                            }
                            else if (json.jadwal[i].HARI == 6) {
                                $('#SABTU').append("<tr><td>" + json.jadwal[i].MATAKULIAH + "</td><td>" + json.jadwal[i].DOSEN + "</td><td>" + json.jadwal[i].RUANG + "</td></tr>");
                            }
                            else {
                                $('#MINGGU').append("<tr><td>" + json.jadwal[i].MATAKULIAH + "</td><td>" + json.jadwal[i].DOSEN + "</td><td>" + json.jadwal[i].RUANG + "</td></tr>");
                            }
                        }
                    }
                }
        )
    }

</script>      

