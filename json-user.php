<script>
    function user() {
        //var nomor="0";
        $.ajax(
                {
                    url: "http://localhost/webservice/index.php/api/controllers_mahasiswa/mahasiswa/format/json",
                    type: "POST",
                    cache: false,
                    async: false,
                    data: {
                        nrp_mahasiswa: nrp,
                    },
                    success: function(json) {

                        console.log(json);
                        console.log("json");
                        var d = new Date();
                        var year = d.getFullYear();
                        console.log(year)
                        console.log(json.mahasiswa[0].TAHUN)
                        var selisih = (year - 1) - json.mahasiswa[0].TAHUN;
                        console.log(selisih);


                        for (var i = selisih; i >= 0; i--) {
                            var valuetahun = parseFloat(json.mahasiswa[0].TAHUN) + parseFloat(i);
                            var valuetahun1 = valuetahun + 1;

                            $('#cbsemester').append("<option value=" + valuetahun + " >" + valuetahun + "/" + valuetahun1 + "</option>");

                        }
                        nomor = json.mahasiswa[0].NOMOR;
                        var myselect = $("#cbsemester");
                        myselect.selectmenu("refresh");
                       


                    }

                }
        );
        
    }

</script>