<?php
$xmlString = '<employees>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                   </employee>
                   <employee EmpType="SalesManager">
                     <lastName>man</lastName>
                     <firstName>ant</firstName>
                   </employee>
              </employees>'
                 ;
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;
$doc->loadXML($xmlString);
$root = $doc->documentElement;
$root->setAttribute("id", "001");

//----------------new update 
$xpath = new DOMXPath($doc);
$entries = $xpath->query("/employees/employee[1]");
$entries[0]->setAttribute("id","001");


$xpath = new DOMXPath($doc);
$entries = $xpath->query("/employees/employee[2]");
$entries[0]->setAttribute("id","003");

$entries = $xpath->query("/employees/employee[1]/lastName");
$entries[0]->nodeValue = "Cashman2";

$entries = $xpath->query("/employees/employee[1]/@id");
$entries[0]->nodeValue = "002";
//----------------new update end 



//----------------remove Child 找到父階刪掉子階
//$entries =$xpath->query("/employees/employee[1]/firstName");
//$entries[0]->parentNode->removeChild($entries[0]);
//----------------remove Child end

header("Content-type: text/xml", true);
echo $doc->saveXML();
?>
