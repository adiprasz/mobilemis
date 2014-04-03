<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.4.2.min.css"/>
        <link rel="stylesheet" href="include/themes/tema-custom.min.css"/>
        <link rel="stylesheet" href="include/table.css"/>
        <script src="include/misonline.js"></script>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.4.2.min.js"></script>
      
    </head> 
    <body onload="user()"> 

        <div data-role="page" data-theme="b">
            <div data-role="header" data-position="fixed" data-theme="c"> 
                <div class="ui-title"><img border="0"  src="include/gambar/penslogo.png" alt="Logo" style="float:center;display:inline"/>
                <span>NILAI</span></div>
                <a href="menu.php" rel="external" data-icon="back" title="go back" class="ui-btn-left" onclick="set()">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">			
                <table border="0" align="left">
                    <tr>
                        <td><span>Tahun Ajaran</span></td><td>:</td>
                        <td>
                            <select id="cbsemester" name='cbsemester' data-mini='true' data-native-menu="false"  onchange='javascript:submit_nilai()'>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Semester</span></td><td>:</td>
                        <td>
                            <select id="semester" name='semester' data-mini='true' data-native-menu="false"  onchange='javascript:submit_nilai()'>
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
       
    </body>
</html>