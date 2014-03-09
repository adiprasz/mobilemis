<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.3.2.min.css"/>
        <link rel="stylesheet" href="include/themes/tema.css"/>
        <link rel="stylesheet" href="include/style.css"/>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.3.2.min.js"></script>
        <?php
        include 'daftar-json.php';
        ?>
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
                        <td><span>semester</span></td><td>:</td>
                        <td><select id="semester" name="semester" data-mini="true" data-native-menu=false  onchange="javascript:submit_daftar()">
                                <option selected="selected"></option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                            </select></td>
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