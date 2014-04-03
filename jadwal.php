
<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 

       <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.4.2.min.css" />
        <link rel="stylesheet" href="include/themes/tema-custom.css"/>
        <link rel="stylesheet" href="include/table.css"/>
        <script src="include/misonline.js"></script>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.4.2.min.js"></script>

        <?php
        $waktu = date("Y");
        for ($i = -3; $i <= 0; $i++) {
            $tahun = $waktu + $i;
        }
        ?>
    </head> 
    <body onload="user();"> 

        <div data-role="page" data-theme="a">

            <div data-role="header" data-position="fixed" data-theme="c"> 
                <div class="ui-title"><img border="0"  src="include/gambar/penslogo.png" alt="Logo" style="float:center;display:inline"/>
                <span>JADWAL</span></div>
                <a href="menu.php" rel="external" data-icon="back" title="go back" class="ui-btn-left" onclick="set()">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">	
                <div data-role="content">	

                    <table border="0" align="left">
                        <tr>
                            <td><span>Tahun Ajaran</span></td><td>:</td>
                            <td>
                                <select id="cbsemester" name='cbsemester' data-mini='true' data-native-menu="false"  onchange='javascript:submit_jadwal()'>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Semester</span></td><td>:</td>
                            <td>
                                <select id="semester" name='semester' data-mini='true' data-native-menu="false"  onchange='javascript:submit_jadwal()'>
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

    </body>
</html>