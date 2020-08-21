<?php
$doc = new DOMDocument();
$doc->load("employees.xml");
$doc->save("/Users/cs01195/employees_bak.xml");
echo "<br>-- Done --";
?>
