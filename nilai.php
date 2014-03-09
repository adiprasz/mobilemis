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
    <body> 

        <div data-role="page" >

            <div data-role="header" data-position="fixed"> 
                <h1>Nilai</h1>
                <a href="#" data-icon="arrow-l" data-rel="back" title="go back" class="ui-btn-left">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">			
                <table border="0" align="left">
                    <tr>
                        <td><span>semester</span></td><td>:</td>
                        <td><select id="semester" name="semester"  data-native-menu=false  onchange="javascript:submit_nilai()">
                                <option selected="selected" data-mini="true"></option>
                                <option value=1 data-mini="true">1</option>
                                <option value=2 data-mini="true">2</option>
                                <option value=3 data-mini="true">3</option>
                                <option value=4 data-mini="true">4</option>
                                <option value=5 data-mini="true">5</option>
                                <option value=6 data-mini="true">6</option>
                                <option value=7 data-mini="true">7</option>
                                <option value=8 data-mini="true">8</option>
                            </select></td>
                    </tr>
                </table>
                <br>

                <table align='center' data-role="tabel" id='box-table-a' class="ui-responsive">
                    <caption><h1>Table Nilai Mahasiswa Per Semester</h1></caption>
                    <thead><tr><th rowspan="2">Kode MK</th><th rowspan="2">Mata kuliah</th><th>Nilai Utama</th></tr></thead><tbody id='nilai_semester'></tbody></table>
            </div><!-- /content -->

        </div>
        <!-- /page -->
        <div class="panel left" data-role="panel" data-position="left" data-dis></div>
</body>
</html>