<script>

            function submit_daftar() {
                var syarat = 1
                now = new Date();
                if (now.getTimezoneOffset() == 0)
                    (a = now.getTime() + (7 * 60 * 60 * 1000))
                else
                    (a = now.getTime());
                now.setTime(a);
                var tahun = now.getFullYear()
                var hari = now.getDay()
                var bulan = now.getMonth()
                var tanggal = now.getDate()
                var tanggal1 = ("" + tanggal + "" + bulan + "" + tahun + "");
                var semester = $("#semester").val();
                var lokasi = 2


                $.ajax(
                        {
                            url: "http://localhost/webservice/index.php/api/controllers_daftar/daftar/format/json",
                            type: "POST",
                            data: {
                                smstr: semester,
                                thn: tahun,
                                tgl: tanggal1,
                                lks: lokasi,
                            },
                            success: function(json) {
                                //console.log("json");
                                console.log(json);
                                console.log("json");
                                console.log(tahun);
                                if (json.daftar.status == "success")
                                {
                                    var syarat = 2;
                                    $('#respone').html("Anda Success Mendaftar Ulang")
                                } else
                                    var syarat = 1;


                            }
                        }
                )
            }


        </script>