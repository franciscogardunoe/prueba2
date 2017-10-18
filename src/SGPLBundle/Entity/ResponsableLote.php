<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsableLote
 *
 * @ORM\Table(name="responsable_lote", indexes={@ORM\Index(name="fk_responsable_persona1_idx", columns={"persona"}), @ORM\Index(name="fk_responsable_lote_produccion1_idx", columns={"lote_produccion"})})
 * @ORM\Entity
 */
class ResponsableLote
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
     * @var \LoteProduccion
     *
     * @ORM\ManyToOne(targetEntity="LoteProduccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lote_produccion", referencedColumnName="id")
     * })
     */
    private $loteProduccion;

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
     * Set loteProduccion
     *
     * @param \SGPLBundle\Entity\LoteProduccion $loteProduccion
     * @return ResponsableLote
     */
    public function setLoteProduccion(\SGPLBundle\Entity\LoteProduccion $loteProduccion = null)
    {
        $this->loteProduccion = $loteProduccion;

        return $this;
    }

    /**
     * Get loteProduccion
     *
     * @return \SGPLBundle\Entity\LoteProduccion 
     */
    public function getLoteProduccion()
    {
        return $this->loteProduccion;
    }

    /**
     * Set persona
     *
     * @param \SGPLBundle\Entity\Persona $persona
     * @return ResponsableLote
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
