
<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 

        <meta name="viewport" content="width=device-width,initial-scale=0.5,maximum-scale=0.5" />
        <link rel="stylesheet" href="include/jquery.mobile.structure-1.3.2.min.css" />
        <link rel="stylesheet" href="include/themes/tema.css"/>
        <link rel="stylesheet" href="include/table.css"/>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.3.2.min.js"></script>

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
        <?php
        include 'arsip-json.php';
        ?>

    </head> 
    <body> 
        <div data-role="page">

            <div data-role="header" data-position="fixed"> 
                <h1>Pengumuman</h1>
                <a href="#" data-icon="arrow-l" data-rel="back" title="go back" class="ui-btn-left">Back</a>
            </div><!-- /header -->
            <div class="ui-content" data-role="content">	
                <div data-role="content">		
                    <fieldset data-role="controlgroup" data-type="horizontal">
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
                        <button class="button"  onclick="javascript:arsip()" data-inline="true" data-icon="search">Cari</button>
                    </fieldset>
                </div>

            </div>
            <div data-role="content" data-native-menu="false">

            </div>
            <div data-role="collapsible" data-content-theme="b" data-collapsed-icon="arrow-r" and data-expanded-icon="arrow-d">
                <h3>Judul</h3>
                <p> dari :</p>
                <p> tanggal :</p>
                <p> pengumuman :</p>
                    <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
            </div>





        </div>
    </div><!-- /content -->


    <!-- /page -->

</body>
</html>