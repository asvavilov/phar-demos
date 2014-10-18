<?php
namespace ASV;

class MyReader
{
	const DATA_DIR = 'data';
	public function read($data_file)
	{
		$file = self::DATA_DIR.'/'.$data_file.'.txt';
		if (!file_exists($file))
		{
			throw new \Exception('file not found');
		}
		return file_get_contents($file);
	}
}
