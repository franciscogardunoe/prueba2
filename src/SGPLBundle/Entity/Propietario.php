<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propietario
 *
 * @ORM\Table(name="propietario", indexes={@ORM\Index(name="fk_propietario_persona1_idx", columns={"persona"}), @ORM\Index(name="fk_propietario_centro_produccion1_idx", columns={"centro_produccion"})})
 * @ORM\Entity
 */
class Propietario
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
     * @var \CentroProduccion
     *
     * @ORM\ManyToOne(targetEntity="CentroProduccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="centro_produccion", referencedColumnName="id")
     * })
     */
    private $centroProduccion;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona", referencedColumnName="id")
     * })
     */
    private $persona;



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
     * Set centroProduccion
     *
     * @param \SGPLBundle\Entity\CentroProduccion $centroProduccion
     * @return Propietario
     */
    public function setCentroProduccion(\SGPLBundle\Entity\CentroProduccion $centroProduccion = null)
    {
        $this->centroProduccion = $centroProduccion;

        return $this;
    }

    /**
     * Get centroProduccion
     *
     * @return \SGPLBundle\Entity\CentroProduccion 
     */
    public function getCentroProduccion()
    {
        return $this->centroProduccion;
    }

    /**
     * Set persona
     *
     * @param \SGPLBundle\Entity\Persona $persona
     * @return Propietario
     */
    public function setPersona(\SGPLBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \SGPLBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }
}
