<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntidadFederativa
 *
 * @ORM\Table(name="entidad_federativa")
 * @ORM\Entity
 */
class EntidadFederativa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="entidad_federativa", type="string", length=50, nullable=false)
     */
    private $entidadFederativa;



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
     * Set entidadFederativa
     *
     * @param string $entidadFederativa
     * @return EntidadFederativa
     */
    public function setEntidadFederativa($entidadFederativa)
    {
        $this->entidadFederativa = $entidadFederativa;

        return $this;
    }

    /**
     * Get entidadFederativa
     *
     * @return string 
     */
    public function getEntidadFederativa()
    {
        return $this->entidadFederativa;
    }
}
