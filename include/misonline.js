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

//menu arsip pengumuman
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

                    $.each(json.arsip, function(index, value) {
                        //  $('#arsip').collapsible();
                        $('#arsip').append("<div data-role='collapsible' data-collapsed-icon='carat-d' data-expanded-icon='carat-u'><h5 style='white-space:normal'>" + this['JUDUL'] + "</h5><p> dari :" + this['NAMA'] + "</p><p>tanggal :" + this['DIUBAH'] + "</p><p> pengumuman :</p><p>" + this['URAIAN'] + "</p></div>");
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

//melihat nilai
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
                url: "http://localhost/webservice/index.php/api/controllers_jadwal/jadwal/format/json",
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
    console.log(nomor);
    $.ajax(
            {
                url: "http://localhost/webservice/index.php/api/controllers_absensi/absen/format/json",
                type: "POST",
                data: {
                    smstr: semester,
                    thn: tahun,
                    nomor_mahasiswa: nomor,
                },
                success: function(json) {
                    console.log(json);
                    console.log("json");

                    var matkul = "";


                    for (var w = 0; w < json.absen.length; w++) {
                        hitung = hitung + 2;

                    }
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