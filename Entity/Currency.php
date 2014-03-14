<?php
namespace kujaff\CryptoCurrenciesBundle\Entity;

/**
 * Currency
 */
class Currency
{
	const ALORITHM_SHA256 = 1;
	const ALGORITHM_SCRYPT = 2;
	const ALGORITHM_QUARK = 3;
	const ALGORITHM_SCRYPT_JANE = 4;
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $tag;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var int
	 */
	private $algorithm;

	/**
	 * @var string
	 */
	private $difficulty;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set tag
	 *
	 * @param string $tag
	 * @return Currency
	 */
	public function setTag($tag)
	{
		$this->tag = $tag;

		return $this;
	}

	/**
	 * Get tag
	 *
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Currency
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set algorimth
	 *
	 * @param int $algorithm
	 * @return Currency
	 */
	public function setAlgorithm($algorithm)
	{
		$this->algorithm = $algorithm;
		return $this;
	}

	/**
	 * Get algorithm
	 *
	 * @return int
	 */
	public function getAlgorithm()
	{
		return $this->algorithm;
	}

	/**
	 * Set difficulty
	 *
	 * @param string $difficulty
	 * @return Currency
	 */
	public function setDifficulty($difficulty)
	{
		$this->difficulty = $difficulty;

		return $this;
	}

	/**
	 * Get difficulty
	 *
	 * @return string
	 */
	public function getDifficulty()
	{
		return $this->difficulty;
	}

}