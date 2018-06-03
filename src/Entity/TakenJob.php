<?php

namespace App\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class TakenJob
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $driverToken;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $addedAt;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string")
     */
    private $game;

    /**
     * @ORM\Column(type="string")
     */
    private $pickupCity;

    /**
     * @ORM\Column(type="string")
     */
    private $destinationCity;

    /**
     * @ORM\Column(type="string")
     */
    private $estimatedIncome;

    /**
     * @ORM\Column(type="string")
     */
    private $cargo;

    /**
     * @ORM\Column(type="string")
     */
    private $pickupCompany;

    /**
     * @ORM\Column(type="string")
     */
    private $destinationCompany;

    /**
     * @ORM\Column(type="datetime")
     */
    private $deadlineTime;

    /**
     * @ORM\Column(type="float")
     */
    private $trailerWear;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDriverToken()
    {
        return $this->driverToken;
    }

    /**
     * @param mixed $driverToken
     */
    public function setDriverToken($driverToken)
    {
        $this->driverToken = $driverToken;
    }

    /**
     * @return mixed
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * @param mixed $addedAt
     */
    public function setAddedAt($addedAt)
    {
        $this->addedAt = $addedAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param mixed $game
     */
    public function setGame($game)
    {
        $this->game = $game;
    }

    /**
     * @return mixed
     */
    public function getPickupCity()
    {
        return $this->pickupCity;
    }

    /**
     * @param mixed $pickupCity
     */
    public function setPickupCity($pickupCity)
    {
        $this->pickupCity = $pickupCity;
    }

    /**
     * @return mixed
     */
    public function getDestinationCity()
    {
        return $this->destinationCity;
    }

    /**
     * @param mixed $destinationCity
     */
    public function setDestinationCity($destinationCity)
    {
        $this->destinationCity = $destinationCity;
    }

    /**
     * @return mixed
     */
    public function getEstimatedIncome()
    {
        return $this->estimatedIncome;
    }

    /**
     * @param mixed $estimatedIncome
     */
    public function setEstimatedIncome($estimatedIncome)
    {
        $this->estimatedIncome = $estimatedIncome;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getPickupCompany()
    {
        return $this->pickupCompany;
    }

    /**
     * @param mixed $pickupCompany
     */
    public function setPickupCompany($pickupCompany)
    {
        $this->pickupCompany = $pickupCompany;
    }

    /**
     * @return mixed
     */
    public function getDestinationCompany()
    {
        return $this->destinationCompany;
    }

    /**
     * @param mixed $destinationCompany
     */
    public function setDestinationCompany($destinationCompany)
    {
        $this->destinationCompany = $destinationCompany;
    }

    /**
     * @return mixed
     */
    public function getDeadlineTime()
    {
        return $this->deadlineTime;
    }

    /**
     * @param mixed $deadlineTime
     */
    public function setDeadlineTime($deadlineTime)
    {
        $this->deadlineTime = $deadlineTime;
    }

    /**
     * @return mixed
     */
    public function getTrailerWear()
    {
        return $this->trailerWear;
    }

    /**
     * @param mixed $trailerWear
     */
    public function setTrailerWear($trailerWear)
    {
        $this->trailerWear = $trailerWear;
    }
}
