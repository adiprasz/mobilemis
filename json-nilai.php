<script>
    function submit_nilai() {
        var semester = $("#semester").val();


        $.ajax(
                {
                    url: "http://localhost/webservice/index.php/api/controllers_nilai/nilai/format/json",
                    type: "POST",
                    data: {
                        smstr: semester,
                    },
                    success: function(json) {
                        //console.log("json");
                        console.log(json);
                        console.log("json");
                       $('#nilai_semester').html("");
                        for (var i = 0; i <= json.nilai.length; i++) {
                            $('#nilai_semester').append("<tr><td>" + json.nilai[i].KODE + "</td><td>"+ json.nilai[i].MATAKULIAH +"</td><td>"+ json.nilai[i].NHU +"</td></tr>");

                        }
                    }
                }
        )
    }

</script>      

