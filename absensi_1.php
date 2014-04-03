<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.4.2.min.css" />
        <link rel="stylesheet" href="include/table.css"/>
        <link rel="stylesheet" href="include/themes/tema-custom.min.css" />
        <script src="include/misonline.js"></script>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.4.2.min.js"></script>

    </head> 
    <?php
    include 'cobajson.php';
    ?>
    <body onload="user();"> 

        <div data-role="page" data-theme="b">

            <div data-role="header" data-position="fixed" data-theme="e"> 
                <div class="ui-title"><img border="0"  src="include/gambar/penslogo.png" alt="Logo" style="float:center;display:inline"/>
                <span>ABSENSI</span></div>
               <a href="menu.php" rel="external" data-icon="back" title="go back" class="ui-btn-left" onclick="set()">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">
                <div data-role="content">


                    <table border="0" align="left">
                        <tr>
                            <td><span>Tahun Ajaran</span></td><td>:</td>
                            <td>
                                <select id="cbsemester" name='cbsemester' data-mini='true' data-native-menu="false"  onchange='javascript:submit_absensi()'>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Semester</span></td><td>:</td>
                            <td>
                                <select id="semester" name='semester' data-mini='true' data-native-menu="false"  onchange='javascript:submit_absensi()'>
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
       
        <!-- /page -->

    </body>
</html>