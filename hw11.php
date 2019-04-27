<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw11.css"> 
</head>
<body>
<?
print"<section id=table>";
$products=file("purchasing.txt");
print"<table>";
print"<tr>";
print"<th> Product </th>";
print"<th> Unit Price </th>";
print"<th> # Ordered </th>";
print"<th> Total Price </th>";
print"</tr>";
foreach($products as $row){
    $fields = explode(",",$row);
if($fields[2]>=1){
        $totalprice=$fields[1]*$fields[2];
        $totalquanty+=$fields[2];
        $totalcost+=$totalprice;
        print "<tr>";
        print "<td> $fields[0] </td>";
        print "<td> $fields[1] </td>";
        print "<td> $fields[2] </td>";
        print "<td> $totalprice </td>";
        print "</tr>";
        
    }
}
print"<tr><td></td><td></td><td>Item Total</td><td>$totalquanty</td></tr>";
print"<tr><td></td><td></td><td>Item Total Cost:</td><td>$totalcost</td></tr>";
print"</table>";
           
print"</section>";
?>
</body>
</html>