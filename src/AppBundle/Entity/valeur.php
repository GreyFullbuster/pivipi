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
	public $id;
 	
 	/**
 	 * @ORM\Column(name="actionValue", type="integer")
 	 */
	public $actionValue;

	/**
	 * ID de l'action lié à la valeur.
     * @ORM\ManyToOne(targetEntity="action")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
	public $idAction;

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