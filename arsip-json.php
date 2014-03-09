<script>

    function arsip() {
        var tahun = $("#tahun").val();
        var bulan = $("#bulan").val();
        $.ajax(
                {
                    url: "http://localhost/webservice/index.php/api/controllers_arsip/arsip/format/json",
                    type: "POST",
                    data: {
                        thn: tahun,
                        bln: bulan,
                    },
                    success: function(json) {
                        console.log(json);
                        console.log("json");

                         $.each(json.arsip,function(index,value) {
                             //  $('#arsip').collapsible();
                            $('#arsip').append("<div data-role='collapsible' data-collapsed-icon='carat-d' data-expanded-icon='carat-u'><h5 style='white-space:normal'>" + this['JUDUL'] + "</h5><p> dari :" + this['NAMA'] +"</p><p>tanggal :" + this['DIUBAH'] + "</p><p> pengumuman :</p><p>" + this['URAIAN'] + "</p></div>");
                          //$('#arsip').append("</div>");
                             //$('#arsip').collapsible();
                                 // $('#arsip').trigger("create");
                                $('#arsip').collapsible().trigger('create')
                                
                           // $('div[data-role=collapsible]').collapsible({refresh:true});
                        });
                         // $('#arsip').collapsible().trigger('create');
                      // $('#arsip').collapsible();
                    // $('#arsip').trigger("create");

                    }

                }

        );
    }
</script>