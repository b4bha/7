<?php
$d=new DOMDocument();
$d->load("book.xml");
print $d->save("book.doc");
?>