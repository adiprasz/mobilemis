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
                $(document).on("swiperight", function(event, ui) {
                    $("#panelkiri").panel("open");
                });
            </script>
    </head> 
    <body> 

        <div data-role="page" >

            <div  data-role="header" data-theme="a">

                <a href="#panelkiri" class="ui-btn-left" data-role="button" data-iconpos="notext" data-icon="bars"></a>

                <span class="ui-title">PENGUMUMAN</span>
            </div><!-- /header -->
            <div class="ui-content" data-role="content" >			
                <?php
                include('pengumuman-xml.php')
                ?>
            </div><!-- /content -->

 <div data-role="panel" data-theme="b" id="panelkiri" data-display="push" data-position="left" data-dismissible="true">      
                <ul data-role="listview" data-filter="false">
                    <li data-icon="false" data-theme="a"><a href="#" style="text-align:center" data-rel="close">MENU</a></li>
                    <li data-icon="bullets"><a href="jadwal.php"  data-transition="pop">Jadwal Kuliah</a></li>
                    <li data-icon="check"><a href="absensi.php"  data-transition="slideup">Absensi</a></li>
                    <li data-icon="edit"><a href="nilai.php"  data-transition="turn">Nilai</a></li>
                    <li data-icon="info"><a href="daftar_ulang.php" data-transition="flip">Daftar Ulang</a></li>
                    <li data-icon="calendar"><a href="ArsipPengumuman.php" data-transition="flow">Pengumuman</a></li>
                    <li data-icon="alert"><a href="attention.php"  data-transition="slidedown">Attention</a></li>
                    <li data-icon="power"><a href="login.php"  data-transition="fade">Logout</a></li>
                </ul>
            </div>
        </div><!-- /page -->
    </body>
</html>