<?php
if (file_exists('phar.phar.gz'))
{
	require_once('phar.phar.gz');
}
else
{
	require_once('phar.phar');
}
echo '<pre>'.$my_reader->read('readme').'</pre>';
