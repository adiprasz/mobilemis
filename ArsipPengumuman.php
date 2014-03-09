
<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 

        <meta name="viewport" content="width=device-width,initial-scale=0.5,maximum-scale=0.5" />
        <link rel="stylesheet" href="include/jquery.mobile-1.4.2.min.css" />
        <link rel="stylesheet" href="include/themes/tema-custom.min.css" />
        <script src="include/misonline.js"></script>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.4.2.min.js"></script>

        <script>
            var disable = function() {
                if ($("#tahun").selectbox("enable")) {
                    $('#bulan').prop('disabled', false);
                }
                else {
                    $('#bulan').prop('disabled', 'disabled');
                }
            };



        </script>
       
        <style>
h3 { white-space:normal; word-break:break-all; }
</style>

    </head> 
    <body> 
        <div data-role="page">

            <div data-role="header" data-position="fixed" data-theme="d"> 
                <h1>Pengumuman</h1>
                <a href="#" data-icon="back" data-rel="back" title="go back" class="ui-btn-left">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">	
                <div data-role="content">		
                    <fieldset data-role="controlgroup" data-type="horizontal" data-theme="b">
                        <select id="tahun" data-native-menu="false"  data-inline="true">
                            <option>Tahun</option>
                            <?php
                            $waktu = date("Y");
                            for ($i = -3; $i <= 0; $i++) {
                                $tahun = $waktu + $i;
                                echo "<option value=" . $tahun . ">" . $tahun . "</option>";
                            }
                            ?></select>



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
                <div data-role="collapsible-set" id="arsip" data-theme="b">





                </div>

            </div><!-- /content -->

        </div>
        <!-- /page -->

    </body>
</html>