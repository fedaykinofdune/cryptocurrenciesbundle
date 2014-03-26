<?php
namespace kujaff\CryptoCurrenciesBundle;

use kujaff\VersionsBundle\Versions\Version;
use kujaff\VersionsBundle\Versions\VersionnedBundle;

class CryptoCurrenciesBundle extends VersionnedBundle
{

	public function __construct()
	{
		$this->version = new Version('1.0.1');
	}

}