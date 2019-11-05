<?
$meal = array('breakfast' => 'A',
              'lunch' => 'B',
              'snack' => 'C',
              'dinner' => 'D');
print "<table>\n";
foreach ($meal as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}
print '</table>';
?>