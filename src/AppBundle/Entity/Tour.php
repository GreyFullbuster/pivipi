<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tour")
 */

class Tour
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	/**
     * @ORM\Column(name="number", type="tinyint")
     */
	private $number;


	public function getId()
	{
		return $id;
	}

	public function setNumber($number)
	{
		$this->number = $number;
	}

	public function getNumber()
	{
		return $number;
	}

}