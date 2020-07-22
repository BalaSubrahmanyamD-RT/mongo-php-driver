--TEST--
String: Embedded nulls
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('190000000261000D0000006162006261620062616261620000');
$canonicalExtJson = '{"a" : "ab\\u0000bab\\u0000babab"}';

// Canonical BSON -> Native -> Canonical BSON
echo bin2hex(fromPHP(toPHP($canonicalBson))), "\n";

// Canonical BSON -> Canonical extJSON
echo json_canonicalize(toCanonicalExtendedJSON($canonicalBson)), "\n";

// Canonical extJSON -> Canonical BSON
echo bin2hex(fromJSON($canonicalExtJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
190000000261000d0000006162006261620062616261620000
{"a":"ab\u0000bab\u0000babab"}
190000000261000d0000006162006261620062616261620000
===DONE===