<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="include/tabel/css/datatables.responsive.css"/>
    <style>
        .title {
            font-size: larger;
            font-weight: bold;
        }

        .table th.centered-cell, .table td.centered-cell {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="title">Bootstrap v2.x Responsive Example Using AJAX with Checkboxes</div>
    </div>
    <div class="row">
        <div class="span12">
            <table id="example" class="table">
                <!--thead section is required-->
                <thead>
                <tr>
                    <th class="centered-cell"><input type="checkbox" id="masterCheck" class="checkbox" disabled/></th>
                    <th data-class="expand">Rendering engine</th>
                    <th>Browser</th>
                    <th data-hide="phone">Platform(s)</th>
                    <th data-hide="phone,tablet">Engine version</th>
                    <th data-hide="phone,tablet">CSS grade</th>
                </tr>
                </thead>
                <!--tbody section is required-->
                <tbody></tbody>
                <!--tfoot section is optional-->
                <tfoot>
                <tr>
                    <th></th>
                     <th>Engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<script type="text/javascript" src="include/tabel/js/datatables.responsive.js"></script>
</body>
</html>
