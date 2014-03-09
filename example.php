<!DOCTYPE html> 
<html> 
	<head> 
	<title>MIS EEPIS</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head> 
<body> 

<div data-role="page" >

	<div  data-role="header">
		  
         <a href="#panelkiri" class="ui-btn-left" data-iconpos="notext" data-icon="grid"></a>
         <a href="#panelkanan" class="ui-btn-right" data-iconpos="notext" data-icon="alert"></a>
        <span class="ui-title">Pengumuman</span>
	</div><!-- /header -->
    <div data-role="panel" id="panelkiri" data-display="push" data-position="left" data-dismissible="true">
    <div data-role="header">
    <h1> Menu</h1>
    </div>
    <ul data-role="listview" data-inset="true" data-filter="false">
	<li><a href="jadwal.php">Jadwal Kuliah</a></li>
	<li><a href="absensi.php">Absensi</a></li>
	<li><a href="nilai.php">Nilai</a></li>
	<li><a href="daftar_ulang.php">Daftar Ulang</a></li>
	<li><a href="Pengumuman.php">Pengumuman</a></li>
    <li><a href="attention.php">Attention</a></li>
    <li><a href="#">Logout</a></li>
</ul>
</div>
<div data-role="panel" id="panelkanan" data-theme="a" data-display="push" data-position="right" data-dismissible="true">
<div data-role="header">
<h1>Notifikasi</h1>
</div>
</div>
<script>
$(document).on("swiperight", function(event, ui){
	$("#panelkiri").panel("open");
});
$(document).on("swipeleft", function(event, ui){
	$("#panelkanan").panel("open");
});
</script>
	<div class="ui-content" data-role="content">			
	</div><!-- /content -->


</div><!-- /page -->
</body>
</html>