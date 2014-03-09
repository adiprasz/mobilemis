<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.3.2.min.css"/>
        <link rel="stylesheet" href="include/themes/tema.min.css"/>
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

    </head> 
    <body> 

        <div data-role="page" >

            <div data-role="header" data-position="fixed" > 
                <a href="#" data-icon="arrow-l" data-rel="back" title="go back" class="ui-btn-left" >Back</a>
                <h1>Pengumuman</h1>
            </div><!-- /header -->

            <div data-role="content">			
                <ul data-role="listview" >
                    <li><a href="#">2013</a><div class="ui-li-count">58</div>
                        <ul>
                            <li><a href="#">Desember</a><div class="ui-li-count">8</div> 
                                <ul>
                                        <li>
                                            <a href="#">
                                                <h3>Remidial 4D4IT A Data Minning</h3>
                                                <p><b>Description:</b> Nrp yang mendapatkan remidi adalah sebagai berikut: 7410040001,7410040002,7410040003</p>
                                                <p class="ui-li-aside">Desember 9, 2013</p>
                                            </a>
                                        </li>
                                    <li>
                                        <a href="#">
                                            <h3>Beasiswa Bidik Misi</h3>
                                            <p><b>Description</b>Bagi mahasiswa yang mendapatkan bidik misi diharapkan mengumpulkan fotokopy buku tabungan dengan no rekening</p><p class="ui-li-aside">Desember 8, 2013</p>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li><a href="#">Nopember</a><div class="ui-li-count">18</div></li>
                            <li><a href="#">Oktober</a><div class="ui-li-count">12</div></li>
                            <li><a href="#">September</a><div class="ui-li-count">9</div></li>
                            <li><a href="#">Agustus</a><div class="ui-li-count">7</div></li>
                            <li><a href="#">Juli</a><div class="ui-li-count">5</div></li>
                            <li><a href="#">Juni</a><div class="ui-li-count">8</div></li>
                            <li><a href="#">Mei</a><div class="ui-li-count">8</div></li>
                            <li><a href="#">April</a><div class="ui-li-count">2</div></li>
                            <li><a href="#">Maret</a><div class="ui-li-count">3</div></li>
                            <li><a href="#">february</a><div class="ui-li-count">5</div></li>
                            <li><a href="#">January</a><div class="ui-li-count">2</div></li> 
                    </li>
                </ul>
                <li><a href="#">2012</a><div class="ui-li-count">47</div></li>
                <li><a href="#">2011</a><div class="ui-li-count">45</div></li>
                <li><a href="#">2010</a><div class="ui-li-count">50</div></li>
                </ul>
            </div><!-- /content -->

        </div>
        <!-- /page -->
    </body>
</html>