<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.4.2.css" />
        <link rel="stylesheet" href="include/table.css"/>
        <link rel="stylesheet" href="include/themes/tema-custom.css" />
        <script src="include/misonline.js"></script>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.4.2.min.js"></script>
    </head> 
    <body> 

        <div data-role="page" >

            <div data-role="header" data-position="fixed" > 
                <h1>Daftar ulang</h1>
                <a href="#" data-icon="arrow-l" data-rel="back" title="go back" class="ui-btn-left">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">			
               <table border="0" align="left">
                    <tr>
                        <td><span>Tahun Ajaran</span></td><td>:</td>
                        <td>
                            <select id="cbsemester" name='cbsemester' data-mini='true' data-native-menu="false"  onchange='javascript:submit_daftar()'>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Semester</span></td><td>:</td>
                        <td>    
                            <select id="semester" name='semester' data-mini='true' data-native-menu="false"  onchange='javascript:submit_daftar()'>
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
        <!-- /page -->

    </body>
</html>