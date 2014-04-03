<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.4.2.min.css" />
        <link rel="stylesheet" href="include/themes/tema-custom.min.css" />
        <link rel="stylesheet" href="include/table.css"/>
        <script src="include/misonline_1.js"></script>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.4.2.min.js"></script>
        <script>
        $(document).on("swiperight", function(event, ui) {
                $("#panelkiri").panel("open");
            });
        </script>
    </head> 
    <body> 
        <div id="login" data-role="page" data-theme="b">
            <div data-role="header" style="border-style:none"> 
                <img border="0" src="include/gambar/LOGO1.jpg" alt="mis logo" width="100%" 
                     style="float:left;display:inline-block;position:relative"/> 

            </div><!-- /header -->
            <div data-role="content" >
                <div id='message'>	
                </div>
                <form id="lg-form" method="post">

                    <div>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" placeholder="@student.eepis-its.edu"/>
                    </div>

                    <div>
                        <label for="password">Password:</label>
                        <input type="password" name="password"  id="password" placeholder="password" />
                    </div>

                    <div>				
                        <button class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" class="button" id="blogin" onclick="login(this.form)">Login</button>
                    </div>

                </form>
            </div><!-- /content -->
            <div data-role="footer" data-position="fixed">
                <span class="ui-title"></span>
            </div>
        </div>

        <!-- /page -->
        <div id="menu" data-role="page"  data-theme="c" onclick="flagpengumuman()">

            <div  data-role="header"  data-position="fixed">

                <a href="#panelkiri"  id="panel" class="ui-btn-left ui-nodisc-icon" style=" background: transparent; border: none; box-shadow: none " data-role="button" data-iconpos="notext" data-icon="bars"></a>
                <div class="ui-title"><img border="0"  src="include/gambar/penslogo.png" alt="Logo" style="float:center;display:inline"/>
                    <span>PENGUMUMAN</span></div>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">
                <div id="row_pengumuman"></div>                
                <div class="animation_image" style="display:none" align="center">
                    <img src="include/themes/images/ajax-loader.gif">
                </div>


            </div><!-- /content -->
            <div data-role="panel" id="panelkiri" data-display="push" data-position="left" data-dismissible="true"> 
                <ul data-role="listview" data-filter="false">
                    <li data-icon="false"><a href="#" style="text-align:center"data-rel="close">MENU</a></li>
                    <li data-icon="bullets"><a href="#jadwal"data-transition="pop">Jadwal Kuliah</a></li>
                    <li data-icon="check"><a href="#absensi" data-transition="slideup">Absensi</a></li>
                    <li data-icon="edit"><a href="#nilai" rel="external" data-transition="turn">Nilai</a></li>
                    <li data-icon="info"><a href="#daftar_ulang" rel="external" data-transition="flip">Daftar Ulang</a></li>
                    <li data-icon="calendar"><a href="#cari_pengumuman" rel="external" data-transition="flow">Pengumuman</a></li>
                    <li data-icon="alert"><a href="#" rel="external" data-transition="slidedown">Attention</a></li>
                    <li data-icon="power"><a href="#login" rel="external" data-transition="fade">Logout</a></li>
                </ul>
            </div>
        </div><!-- /page -->

        <!---Jadwal--->
        <div data-role="page" data-theme="a" id="jadwal">

            <div data-role="header" data-position="fixed" data-theme="c"> 
                <div class="ui-title"><img border="0"  src="include/gambar/penslogo.png" alt="Logo" style="float:center;display:inline"/>
                    <span>JADWAL</span></div>
                <a href="#menu" data-icon="back" title="go back" class="ui-btn-left" onclick="set();">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">	
                <div data-role="content">	

                    <table border="0" align="left">
                        <tr>
                            <td><span>Tahun Ajaran</span></td><td>:</td>
                            <td>
                                <select class="ui-select" id="cbsemester_jadwal" data-mini='true' data-native-menu="false"  onchange='javascript:submit_jadwal()'>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Semester</span></td><td>:</td>
                            <td>
                                <select id="semester_jadwal" data-mini='true' data-native-menu="false"  onchange='javascript:submit_jadwal()'>
                                    <option></option>
                                    <option id='ganjil' value='1'>Ganjil</option>
                                    <option id='genap' value='2'>Genap</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div data-role="content">
                    <div class="mdgov_OverflowTable">
                        <table id="box-table-a" data-role='tabel' align='center' class="ui-responsive">
                            <caption><h1>Table Jadwal Mahasiswa Per Semester</h1></caption>
                            <thead><tr><th colspan="3">SENIN</th></tr><tr><th>MATAKULIAH</th><th>DOSEN</th><th>RUANG</th></tr></thead> 
                            <tbody id='SENIN'></tbody>

                        </table>
                    </div>
                    <div class="mdgov_OverflowTable">
                        <table class="ui-responsive" id="box-table-a" align='center' data-role='tabel' data-mode="reflow">
                            <thead><tr><th colspan="3">SELASA</th></tr><tr><th>MATAKULIAH</th><th>DOSEN</th><th>RUANG</th></tr></thead>
                            <tbody id="SELASA"></tbody>
                        </table>
                    </div>
                    <div class="mdgov_OverflowTable">
                        <table class="ui-responsive" id="box-table-a" align='center' data-role='tabel' data-mode="reflow">
                            <thead><tr><th colspan="3">RABU</th></tr><tr><th>MATAKULIAH</th><th>DOSEN</th><th>RUANG</th></tr></thead>
                            <tbody id="RABU"></tbody>
                        </table>
                    </div>
                    <div class="mdgov_OverflowTable">
                        <table class="ui-responsive" id="box-table-a" align='center' data-role='tabel' data-mode="reflow">
                            <thead><tr><th colspan="3">KAMIS</th></tr><tr><th>MATAKULIAH</th><th>DOSEN</th><th>RUANG</th></tr></thead>
                            <tbody id="KAMIS"></tbody>
                        </table>
                    </div>
                    <div class="mdgov_OverflowTable">
                        <table class="ui-responsive" id="box-table-a" align='center' data-role='tabel' data-mode="reflow">
                            <thead><tr><th colspan="3">JUMAT</th></tr><tr><th>MATAKULIAH</th><th>DOSEN</th><th>RUANG</th></tr></thead>
                            <tbody id="JUMAT"></tbody>
                        </table>
                    </div>
                    <div class="mdgov_OverflowTable">
                        <table class="ui-responsive" id="box-table-a" align='center' data-role='tabel' data-mode="reflow">
                            <thead><tr><th colspan="3">SABTU</th></tr><tr><th>MATAKULIAH</th><th>DOSEN</th><th>RUANG</th></tr></thead>
                            <tbody id="SABTU"></tbody>
                        </table>
                    </div>
                    <div class="mdgov_OverflowTable">
                        <table class="ui-responsive" id="box-table-a" align='center' data-role='tabel' data-mode="reflow">
                            <thead><tr><th colspan="3">MINGGU</th></tr><tr><th>MATAKULIAH</th><th>DOSEN</th><th>RUANG</th></tr></thead>
                            <tbody id="MINGGU"></tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /content -->

        </div>
        <!-- /page -->
        <!---menu absen--->
        <div data-role="page" data-theme="b" id="absensi">

            <div data-role="header" data-position="fixed" data-theme="e"> 
                <div class="ui-title"><img border="0"  src="include/gambar/penslogo.png" alt="Logo" style="float:center;display:inline"/>
                    <span>ABSENSI</span></div>
                <a href="#menu" data-icon="back" title="go back" class="ui-btn-left" onclick="set()">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">
                <div data-role="content">


                    <table border="0" align="left">
                        <tr>
                            <td><span>Tahun Ajaran</span></td><td>:</td>
                            <td>
                                <select class="ui-select" id="cbsemester_absen" data-mini='true' data-native-menu="false"  onchange='javascript:absen()'>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Semester</span></td><td>:</td>
                            <td>
                                <select id="semester_absen" data-mini='true' data-native-menu="false"  onchange='javascript:absen()'>
                                    <option></option>
                                    <option id='ganjil' value='1'>Ganjil</option>
                                    <option id='genap' value='2'>Genap</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div data-role="content">
                    <div  class="mdgov_OverflowTable">
                        <table id="hor-minimalist-a" data-role='tabel' align='center' class="table-stroke" data-mode="reflow"><tr class="th-groups">
                                <th rowspan="2" >MATAKULIAH</th><th colspan="16" align="center" class="totals" >MINGGU KE</th></tr><tr><th>1</th><th>2</th><th>3</th><th>4</th>
                                <th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th></tr>
                            <thead>
                                <tr>
                                    <td id="matakuliah"></td>
                                    <td id="minggu1"></td>
                                    <td id="minggu2"></td>
                                    <td id="minggu3"></td>
                                    <td id="minggu4"></td>
                                    <td id="minggu5"></td>
                                    <td id="minggu6"></td>
                                    <td id="minggu7"></td>
                                    <td id="minggu8"></td>
                                    <td id="minggu9"></td>
                                    <td id="minggu10"></td>
                                    <td id="minggu11"></td>
                                    <td id="minggu12"></td>
                                    <td id="minggu13"></td>
                                    <td id="minggu14"></td>
                                    <td id="minggu15"></td>
                                    <td id="minggu16"></td>
                                </tr> 
                            </thead>
                            <caption><h1>Table Absensi Mahasiswa Per Semester</h1></caption>
                            <tbody id="tableabsensi" class="ui-responsive table-stroke" >

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>  
            <div data-role="footer" data-position="fixed">
                <h1></h1>
            </div>
        </div><!-- /content -->

        <!---nilai--->
        <div data-role="page" data-theme="b" id="nilai">
            <div data-role="header" data-position="fixed" data-theme="c"> 
                <div class="ui-title"><img border="0"  src="include/gambar/penslogo.png" alt="Logo" style="float:center;display:inline"/>
                    <span>NILAI</span></div>
                <a href="#menu" rel="external" data-icon="back" title="go back" class="ui-btn-left" onclick="set()">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">			
                <table border="0" align="left">
                    <tr>
                        <td><span>Tahun Ajaran</span></td><td>:</td>
                        <td>
                            <select class="ui-select" id="cbsemester_nilai" data-mini='true' data-native-menu="false"  onchange='javascript:submit_nilai()'>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Semester</span></td><td>:</td>
                        <td>
                            <select id="semester_nilai" data-mini='true' data-native-menu="false"  onchange='javascript:submit_nilai()'>
                                <option></option>
                                <option id='ganjil' value='1'>Ganjil</option>
                                <option id='genap' value='2'>Genap</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <div class="mdgov_OverflowTable">
                    <table align='center' data-role="tabel" id='box-table-a' class="ui-responsive table-stripe">
                        <caption><h1>Table Nilai Mahasiswa Per Semester</h1></caption>
                        <thead><tr><th rowspan="2" scope="col">Kode MK</th><th rowspan="2" scope="col">Mata kuliah</th><th scope="col">Nilai Utama</th></tr></thead><tbody id='nilai_semester'></tbody></table>
                </div>
            </div><!-- /content -->

        </div>
        <!-- /page -->

        <!---daftar ulang-->
        <div data-role="page" id="daftar_ulang">

            <div data-role="header" data-position="fixed" > 
                <h1>Daftar ulang</h1>
                <a href="#" data-icon="arrow-l" data-rel="back" title="go back" class="ui-btn-left">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">			
                <table border="0" align="left">
                    <tr>
                        <td><span>Tahun Ajaran</span></td><td>:</td>
                        <td>
                            <select class="ui-select" id="cbsemester_daftar" data-mini='true' data-native-menu="false"  onchange='javascript:submit_daftar()'>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Semester</span></td><td>:</td>
                        <td>    
                            <select id="semester_daftar" data-mini='true' data-native-menu="false"  onchange='javascript:submit_daftar()'>
                                <option></option>
                                <option id='ganjil' value='1'>Ganjil</option>
                                <option id='genap' value='2'>Genap</option>
                            </select>
                        </td>
                    </tr>
                </table>

            </div><!-- /content -->
            <br>
            <h1>
                <div id="respone"></div></h1>
        </div>
        <!--cari pengumuman--->
        <div data-role="page" data-theme="b" id="cari_pengumuman">
            <div data-role="header" data-position="fixed" data-theme="e"> 
                <h1>Pengumuman</h1>
                <a href="#menu" data-icon="back" title="go back" class="ui-btn-left" onclick="set()">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">	
                <div data-role="content">		
                    <fieldset data-role="controlgroup" data-type="horizontal" data-theme="b">
                        <select id="tahun"  data-native-menu="false" >
                        </select>
                        <select id="bulan" data-native-menu="false"  data-inline="true">
                            <option>Bulan</option>
                            <option value="01">Januari</option>
                            <option value="02">Pebruari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">Nopember</option>
                            <option value="12">Desember</option>
                        </select>
                        <button class="button" class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext=""   onclick="javascript:arsip()" data-inline="true" data-icon="search">Cari</button>
                    </fieldset>
                </div>
            </div>
            <div data-role="content" data-native-menu="false">
                <div id="arsip1">
                    <div data-role="collapsible-set" id="arsip" data-theme="b">
                    </div>
                </div>
            </div><!-- /content -->
        </div>
        <!-- /page -->

    </body>
</html>