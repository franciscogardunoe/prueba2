<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad", indexes={@ORM\Index(name="fk_ciudad_entidad_federativa1_idx", columns={"entidad_federativa"})})
 * @ORM\Entity
 */
class Ciudad
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
     * @ORM\Column(name="ciudad", type="string", length=150, nullable=false)
     */
    private $ciudad;

    /**
     * @var \EntidadFederativa
     *
     * @ORM\ManyToOne(targetEntity="EntidadFederativa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entidad_federativa", referencedColumnName="id")
     * })
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
     * Set ciudad
     *
     * @param string $ciudad
     * @return Ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set entidadFederativa
     *
     * @param \SGPLBundle\Entity\EntidadFederativa $entidadFederativa
     * @return Ciudad
     */
    public function setEntidadFederativa(\SGPLBundle\Entity\EntidadFederativa $entidadFederativa = null)
    {
        $this->entidadFederativa = $entidadFederativa;

        return $this;
    }

    /**
     * Get entidadFederativa
     *
     * @return \SGPLBundle\Entity\EntidadFederativa 
     */
    public function getEntidadFederativa()
    {
        return $this->entidadFederativa;
    }
}
