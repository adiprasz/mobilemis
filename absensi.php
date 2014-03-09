<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 
        <meta name="viewport" content="width=device-width,initial-scale=0.5,maximum-scale=0.5" />
        <link rel="stylesheet" href="include/jquery.mobile-1.4.2.min.css" />
        <link rel="stylesheet" href="include/table.css"/>
        <link rel="stylesheet" href="include/themes/tema-custom.min.css" />
        <script src="include/misonline.js"></script>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.4.2.min.js"></script>

        <script>
         //   var nomor = "";
           // var nrp = 7410040022;
        </script>

    </head> 

    <body onload="user();"> 

        <div data-role="page">

            <div data-role="header" data-position="fixed"> 
                <h1>Absensi</h1>
                <a href="#" data-icon="arrow-l" data-rel="back" title="go back" class="ui-btn-left">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">
                <div data-role="content">


                    <table border="0" align="left">
                        <tr>
                            <td><span>Tahun Ajaran</span></td><td>:</td>
                            <td>
                                <select id="cbsemester" name='cbsemester' data-mini='true' data-native-menu="false"  onchange='javascript:absen()'>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Semester</span></td><td>:</td>
                            <td>
                                <select id="semester" name='semester' data-mini='true' data-native-menu="false"  onchange='javascript:absen()'>
                                   <option></option>
                                    <option id='ganjil' value='1'>Ganjil</option>
                                    <option id='genap' value='2'>Genap</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div data-role="content">
                    <table id="hor-minimalist-a" data-role='tabel' align='center' class="table-stroke" data-mode="reflow"><tr class="th-groups">
                            <th rowspan="2">MATAKULIAH</th><th colspan="16" align="center" class="totals">MINGGU KE</th></tr><tr><th>1</th><th>2</th><th>3</th><th>4</th>
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
                    <div id="absensi"></div>

                </div>
            </div>  			
        </div><!-- /content -->
    </div>
    <!-- /page -->

</body>
</html>