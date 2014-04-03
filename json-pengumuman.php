<script>
    function set(){
        localStorage.removeItem("limit");  
    }
    function tambah() {
       loading = true; //prevent further ajax loading
       $('.animation_image').show(); //show loading image
        localStorage.limit = Number(localStorage.limit)+ 5;
        

        console.log("Jumlah Record : " + localStorage.limit);
        pengumuman();
    }


    function pengumuman() {
        //localStorage.clickcount = 5;
        if (!localStorage.limit)
        {
            localStorage.limit = 5;
            
        }
        
        $.ajax(
                {
                    url: "../webservice/index.php/api/controllers_pengumuman/pengumuman.json",
                    method: "POST",
                    data: {
                        limit_row:localStorage.limit,
                    },
                    success: function(json) {
                        console.log(json);
                        console.log("json");
                      $('#row_pengumuman').html("");
                      loading = true; //prevent further ajax loading
                $('.animation_image').hide(); //show loading image
                        $.each(json.pengumuman, function(index, value) {
                            $('#row_pengumuman').append("<div style='border: 1px solid #000000; padding: 5px;'><h5 style='white-space:normal'>" + this['JUDUL'] + "</h5><p> dari :" + this['NAMA'] + "</p><p>tanggal :" + this['DIUBAH'] + "</p><p> pengumuman :</p><p>" + this['URAIAN'] + "</p></div><br>");
                            //$('#row_pengumuman').trigger("create");
                        });


                    }
                }
        );
       $(window).scroll(function() { 
       if($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
        {
         tambah();   
      }
       }
       );
    }

</script>      

