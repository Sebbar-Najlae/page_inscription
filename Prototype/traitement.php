
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Test Formulaire PHP
</title>
</head>
<body>
<style>
table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #457798;
    color: #fff;
}
</style>

<!-- <table>
    <thead>
        <tr>
            <th colspan="2">Visiteur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nom</td>
            <td>Age</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table> </td> -->


  



<?php

$nom=$_POST['nom'];
$age=$_POST['age'];

$tabs = array($nom,$age);
foreach ($tabs as $tab) {
    echo " $tab \n" ;
}
?>





</body>

</html>

