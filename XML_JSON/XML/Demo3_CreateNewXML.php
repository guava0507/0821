<?php
$doc = new DOMDocument("1.0", "utf-8");
$root = $doc->createElement("HTML");
$css = $doc->createElement("CSS");

$doc->appendChild($root);
$root->appendChild($css);
echo htmlspecialchars($doc->c14n());
?>
