<?php
namespace kujaff\CryptoCurrenciesBundle\Install;

use kujaff\VersionsBundle\Installer\EasyInstaller;
use kujaff\VersionsBundle\Installer\Install;
use kujaff\VersionsBundle\Installer\Uninstall;
use kujaff\VersionsBundle\Versions\Version;

class Installer extends EasyInstaller implements Install, Uninstall
{

	/**
	 * Get bundle name
	 *
	 * @return string
	 */
	public function getBundleName()
	{
		return 'CryptoCurrenciesBundle';
	}

	/**
	 * Install bundle
	 *
	 * @return Version
	 */
	public function install()
	{
		$this->_dropTables(array('cryptocurrencies'));
		$this->_executeSQL('
			CREATE TABLE `cryptocurrencies` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`tag` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
				`name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
				`difficulty` decimal(10,10) DEFAULT NULL,
				`algorithm` smallint(6) NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
		');
		$currencies = array(
			0 => array('42', '42', 2),
			1 => array('ALF', 'Alphacoin', 2),
			2 => array('ANC', 'Anoncoin', 2),
			3 => array('ASC', 'ASICcoin', 1),
			4 => array('AUR', 'Auroracoin', 2),
			5 => array('BCX', 'Battlecoin', 1),
			6 => array('BQC', 'BBQCoin', 2),
			7 => array('BEN', 'Benjamins', 1),
			8 => array('BET', 'Betacoin', 1),
			9 => array('BTB', 'Bitbar', 2),
			10 => array('BTC', 'Bitcoin', 1),
			11 => array('BTG', 'Bitgem', 2),
			12 => array('CAP', 'Bottlecaps', 2),
			13 => array('BTE', 'Bytecoin', 1),
			14 => array('CSC', 'Casinocoin', 2),
			15 => array('CAT', 'Catcoin', 2),
			16 => array('CNC', 'CHNCoin', 2),
			17 => array('CIN', 'Cinnamoncoin ', 2),
			18 => array('CNOTE', 'CNotes', 3),
			19 => array('CON', 'Coino', 2),
			20 => array('CTM', 'Continuumcoin', 1),
			21 => array('CMC', 'Cosmoscoin', 2),
			22 => array('CRC', 'Craftcoin', 2),
			23 => array('BUK', 'CryptoBuck', 2),
			24 => array('CG', 'CryptogenicBullion', 2),
			25 => array('DVC', 'Devcoin', 1),
			26 => array('DMD', 'Diamond', 2),
			27 => array('DGB', 'DigiByte', 2),
			28 => array('DGC', 'Digitalcoin', 2),
			29 => array('DOGE', 'Dogecoin', 2),
			30 => array('EAC', 'Earthcoin', 2),
			31 => array('DEM', 'eMark', 1),
			32 => array('EMD', 'Emerald', 2),
			33 => array('EXC', 'Extremecoin', 2),
			34 => array('FRQ', 'FairQuark', 3),
			35 => array('FST', 'Fastcoin', 2),
			36 => array('FTC', 'Feathercoin', 2),
			37 => array('FFC', 'Fireflycoin', 1),
			38 => array('FLAP', 'Flappycoin', 2),
			39 => array('FRK', 'Franko', 2),
			40 => array('FRC', 'Freicoin', 1),
			41 => array('FZ', 'Fronzen', 3),
			42 => array('GLX', 'Falaxycoin', 2),
			43 => array('GLC', 'Globalcoin', 2),
			44 => array('GLD', 'Goldcoin', 2),
			45 => array('GDC', 'Grancoin', 2),
			46 => array('HBN', 'HoboNickels', 2),
			47 => array('ICN', 'iCoin', 2),
			48 => array('IFC', 'Infinitecoin', 2),
			49 => array('IXC', 'Ixcoin', 1),
			50 => array('XJO', 'Joulecoin', 1),
			51 => array('KARM', 'Karmacoin', 2),
			52 => array('MEOW', 'Kittehcoin', 2),
			53 => array('KDC', 'Klondikecoin', 2),
			54 => array('KGC', 'Krugercoin', 2),
			55 => array('LEAF', 'Leafcoin', 2),
			56 => array('LTC', 'Litecoin', 2),
			57 => array('LOT', 'Lottocoin', 2),
			58 => array('LKY', 'Luckycoin', 2),
			59 => array('MZC', 'Mazacoin', 1),
			60 => array('MEC', 'Megacoin', 2),
			61 => array('MNC', 'Mincoin', 2),
			62 => array('MINT', 'Mintcoin', 2),
			63 => array('MOON', 'Mooncoin', 2),
			64 => array('NMC', 'Namecoin', 1),
			65 => array('NEC', 'Neocoin', 2),
			66 => array('NET', 'Netcoin', 2),
			67 => array('NBL', 'Nibble', 2),
			68 => array('NOBL', 'Noblecoin', 2),
			69 => array('NRB', 'Noirbits', 2),
			70 => array('NVC', 'Novacoin', 2),
			71 => array('NYAN', 'Nyancoin', 2),
			72 => array('OSC', 'OpenSourcecoin', 1),
			73 => array('PPC', 'Perrcoin', 1),
			74 => array('PENG', 'Penguicoin', 2),
			75 => array('PHS', 'Philosopherstone', 2),
			76 => array('PXC', 'Phoenixcoin', 2),
			77 => array('QRK', 'Quark', 3),
			78 => array('RDD', 'Reddcoin', 2),
			79 => array('RPC', 'RonPaulcoin', 2),
			80 => array('SRC', 'Securecoin', 3),
			81 => array('SMC', 'Smartcoin', 2),
			82 => array('SPT', 'Spots', 2),
			83 => array('SBC', 'Stablecoin', 2),
			84 => array('STR', 'Starcoin', 2),
			85 => array('TAG', 'Tagcoin', 2),
			86 => array('TAK', 'Takeicoin', 1),
			87 => array('TEA', 'Teacoin', 1),
			88 => array('TEK', 'TEKcoin', 1),
			89 => array('TRC', 'Terracoin', 1),
			90 => array('TGC', 'Tigercoin', 1),
			91 => array('UTC', 'Ultracoin', 4),
			92 => array('UNO', 'Unobtanium', 1),
			93 => array('USDE', 'USDe', 2),
			94 => array('VTC', 'Vertcoin', 2),
			95 => array('WIKI', 'Wikicoin', 3),
			96 => array('WDC', 'Worldcoin', 2),
			97 => array('YAC', 'YAcoin', 4),
			98 => array('ZET', 'Zetacoin', 1),
		);
		foreach ($currencies as $currency) {
			$binds = array(
				':tag' => $currency[0],
				':name' => $currency[1],
				':algorithm' => $currency[2],
			);
			$this->_executeSQL('INSERT INTO cryptocurrencies (tag, name, algorithm) VALUES (:tag, :name, :algorithm)', $binds);
		}
		return new Version('1.0.0');
	}

	/**
	 * Uninstall bundle
	 */
	public function uninstall()
	{
		$this->_dropTables(array('cryptocurrencies'));
	}

}