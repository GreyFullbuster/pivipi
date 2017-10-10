<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="value")
 */

class Value
{
	/**
	 * ID de la valeur
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;
 	
 	/**
 	 * @ORM\Column(name="actionValue", type="integer")
 	 */
	private $actionValue;

	/**
	 * ID de l'action lié à la valeur.
     * @ORM\ManyToOne(targetEntity="action")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
	private $idAction;

	public function getId()
	{
		return $id;
	}

	public function setActionValue($actionValue)
	{
		$this->actionValue = $actionValue;
	}

	public function getActionValue()
	{
		return $actionValue;
	}

	public function setIdAction($idAction)
	{
		$this->idAction = $idAction;
	}

	public function getIdAction()
	{
		return $idAction;
	}

}