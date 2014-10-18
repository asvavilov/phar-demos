<?php
$phar = new Phar('phar.phar');
$phar->buildFromDirectory('phar');
if (file_exists('phar.phar.gz'))
{
	unlink('phar.phar.gz');
}

//$phar->setStub($phar->createDefaultStub('index.php'));

$signatures = Phar::getSupportedSignatures();
print_r($signatures);
$compressions = Phar::getSupportedCompression();
print_r($compressions);

$phar->setSignatureAlgorithm(Phar::MD5);

//$phar->compress(Phar::GZ);

$signature = $phar->getSignature();
print_r($signature);
file_put_contents('phar.sign.txt', print_r($signature, true));
