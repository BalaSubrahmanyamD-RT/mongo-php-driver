--TEST--
Decimal128: Scientific - Full
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('18000000136400FFFFFFFFFFFFFFFFFFFFFFFFFFFF403000');
$canonicalExtJson = '{"d" : {"$numberDecimal" : "5192296858534827628530496329220095"}}';

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
18000000136400ffffffffffffffffffffffffffff403000
{"d":{"$numberDecimal":"5192296858534827628530496329220095"}}
18000000136400ffffffffffffffffffffffffffff403000
===DONE===