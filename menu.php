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
       
        <script>
            $(document).on("swiperight", function(event, ui) {
                $("#panelkiri").panel("open");
            });
        </script>

    </head> 
    <body onload="pengumuman();"> 

        <div data-role="page"  data-theme="c">

            <div  data-role="header"  data-position="fixed">

                <a href="#panelkiri"  id="panel" class="ui-btn-left ui-nodisc-icon" style=" background: transparent; border: none; box-shadow: none " data-role="button" data-iconpos="notext" data-icon="bars"></a>
                <div class="ui-title"><img border="0"  src="include/gambar/penslogo.png" alt="Logo" style="float:center;display:inline"/>
                <span>PENGUMUMAN</span></div>
            </div><!-- /header -->
            <div class="ui-content" data-role="content" >
                <div id="row_pengumuman"></div>
<div class="animation_image" style="display:none" align="center">
<img src="include/themes/images/ajax-loader.gif">
</div>
                
                
            </div><!-- /content -->

            <div data-role="panel" id="panelkiri" data-display="push" data-position="left" data-dismissible="true"> 
                <ul data-role="listview" data-filter="false">
                    <li data-icon="false"><a href="#" style="text-align:center" data-rel="close">MENU</a></li>
                    <li data-icon="bullets"><a href="jadwal.php" rel="external"  data-transition="pop">Jadwal Kuliah</a></li>
                    <li data-icon="check"><a href="absensi.php" rel="external" data-transition="slideup">Absensi</a></li>
                    <li data-icon="edit"><a href="nilai.php" rel="external" data-transition="turn">Nilai</a></li>
                    <li data-icon="info"><a href="daftar_ulang.php" rel="external" data-transition="flip">Daftar Ulang</a></li>
                    <li data-icon="calendar"><a href="ArsipPengumuman.php" rel="external" data-transition="flow">Pengumuman</a></li>
                    <li data-icon="alert"><a href="attention.php" rel="external" data-transition="slidedown">Attention</a></li>
                    <li data-icon="power"><a href="login.php" rel="external" data-transition="fade">Logout</a></li>
                </ul>
            </div>
        </div><!-- /page -->
    </body>
</html>