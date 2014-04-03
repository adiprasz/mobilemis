/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


var nomor = "";
var nrp = 7410040022;

//mendapat data mahasiswa
function user() {

    $.ajax(
            {
                url: "../webservice/index.php/api/controllers_mahasiswa/mahasiswa/format/json",
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

//menu arsip pengumuman
function arsip() {

    var tahun = $("#tahun").val();
    var bulan = $("#bulan").val();
    $.ajax(
            {
                url: "../webservice/index.php/api/controllers_arsip/arsip/format/json",
                type: "POST",
                data: {
                    thn: tahun,
                    bln: bulan,
                },
                success: function(json) {
                    console.log(json);
                    console.log("json");
                    $('#arsip').html("");
                    $.each(json.arsip, function(index, value) {
                        $('#arsip').append("<div data-role='collapsible' data-collapsed-icon='carat-d' data-expanded-icon='carat-u'><h5 style='white-space:normal'>" + this['JUDUL'] + "</h5><p> dari :" + this['NAMA'] + "</p><p>tanggal :" + this['DIUBAH'] + "</p><p> pengumuman :</p><p>" + this['URAIAN'] + "</p></div>");
                        $('#arsip').collapsible().trigger('create')

                    });

                }

            }

    );
}

//melihat nilai
function submit_nilai() {
    var semester = $("#semester").val();
    var tahun = $("#cbsemester").val();

    $.ajax(
            {
                url: "../webservice/index.php/api/controllers_nilai/nilai/format/json",
                type: "POST",
                data: {
                    smstr: semester,
                    thn: tahun,
                    nrp_mahasiswa: nrp,
                },
                success: function(json) {
                    //console.log("json");
                    console.log(json);
                    console.log("json");
                    $('#nilai_semester').html("");
                    for (var i = 0; i <= json.nilai.length; i++) {
                        $('#nilai_semester').append("<tr><td>" + json.nilai[i].KODE + "</td><td>" + json.nilai[i].MATAKULIAH + "</td><td>" + json.nilai[i].NHU + "</td></tr>");

                    }
                }
            }
    )
}

//melihat jadwal matakuliah
function submit_jadwal() {
    var semester = $("#semester").val();
    var tahun = $("#cbsemester").val();
    $.ajax(
            {
                url: "../webservice/index.php/api/controllers_jadwal/jadwal/format/json",
                type: "POST",
                data: {
                    smstr: semester,
                    thn: tahun,
                    nrp_mahasiswa: nrp,
                },
                success: function(json) {
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


//mencari absensi
function absen() {
    var semester = $("#semester").val();
    var tahun = $("#cbsemester").val();
    $('#tableabsensi').html("");
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

                                        console.log(json);
                                        console.log("json");
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

//set limit menu

function set() {
    localStorage.removeItem("limit");
}

//pengumuman page menu

function tambah() {
    loading = true; //prevent further ajax loading
    $('.animation_image').show(); //show loading image
    localStorage.limit = Number(localStorage.limit) + 5;


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
                    limit_row: localStorage.limit,
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
        if ($(window).scrollTop() + $(window).height() == $(document).height())  //user scrolled to bottom of the page?
        {
            tambah();
        }
    }
    );
}



    