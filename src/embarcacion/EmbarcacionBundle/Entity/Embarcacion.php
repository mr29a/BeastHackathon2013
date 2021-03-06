<?php

namespace embarcacion\EmbarcacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Embarcacion
 */
class Embarcacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $matricula;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $propietario;


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
     * Set matricula
     *
     * @param string $matricula
     * @return Embarcacion
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    
        return $this;
    }

    /**
     * Get matricula
     *
     * @return string 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Embarcacion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Embarcacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set propietario
     *
     * @param string $propietario
     * @return Embarcacion
     */
    public function setPropietario($propietario)
    {
        $this->propietario = $propietario;
    
        return $this;
    }

    /**
     * Get propietario
     *
     * @return string 
     */
    public function getPropietario()
    {
        return $this->propietario;
    }
    /**
     * @var \EmbarcacionBundle\Entity\Tramo
     */
    private $tramo;


    /**
     * Set tramo
     *
     * @param \EmbarcacionBundle\Entity\Tramo $tramo
     * @return Embarcacion
     */
    public function setTramo(\EmbarcacionBundle\Entity\Tramo $tramo = null)
    {
        $this->tramo = $tramo;
    
        return $this;
    }

    /**
     * Get tramo
     *
     * @return \EmbarcacionBundle\Entity\Tramo 
     */
    public function getTramo()
    {
        return $this->tramo;
    }
}