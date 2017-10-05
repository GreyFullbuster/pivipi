<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="competition")
 */

class Competitions
{
	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	/**
     * @ORM\Column(name="name", type="string", length="255")
     */
	private $name;

	/**
     * @ORM\Column(name="date", type="date")
     */
	private $date;

	/**
     * @ORM\Column(name="officiel", type="binary(n)")
     */
	private $officiel;

	/**
     * @ORM\Column(name="organizer", type="string", length="255")
     */
	private $organizer;

	/**
     * @ORM\Column(name="1v1", type="binary(n)")
     */
	private $OneVSone;

	/**
     * @ORM\Column(name="2vs2", type="binary(n)")
     */
	private $TwoVStwo;

	/**
     * @ORM\Column(name="3vs3", type="binary(n)")
     */
	private $ThreeVSthree;

	/**
     * @ORM\Column(name="4vs4", type="binary(n)")
     */
	private $FourVSfour;


	public function getId()
	{
		return $id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $name;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getDate()
	{
		return $date;
	}

	public function setOfficiel($officiel)
	{
		$this->officiel = $officiel;
	}

	public function getOfficiel()
	{
		return $officiel;
	}

	public function setOrganizer($organizer)
	{
		$this->organizer = $organizer;
	}

	public function getOrganizer()
	{
		return $organizer;
	}

	public function setOneVSone($OneVSone)
	{
		$this->OneVSone = $OneVSone;
	}

	public function getOneVSone()
	{
		return $OneVSone;
	}

	public function setTwoVStwo($TwoVStwo)
	{
		$this->TwoVStwo = $TwoVStwo;
	}

	public function getTwoVStwo()
	{
		return $TwoVStwo;
	}

	public function setThreeVSthree($ThreeVSthree)
	{
		$this->ThreeVSthree = $ThreeVSthree;
	}

	public function getThreeVSthree()
	{
		return $ThreeVSthree;
	}

	public function setFourVSfour($FourVSfour)
	{
		$this->FourVSfour = $FourVSfour;
	}

	public function getFourVSfour()
	{
		return $FourVSfour;
	}

}