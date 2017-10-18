<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produccion
 *
 * @ORM\Table(name="produccion", indexes={@ORM\Index(name="fk_produccion_lote_produccion1_idx", columns={"lote_produccion"}), @ORM\Index(name="fk_produccion_unidad1_idx", columns={"unidad"})})
 * @ORM\Entity
 */
class Produccion
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
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=false)
     */
    private $comentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

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
     * @var \Unidad
     *
     * @ORM\ManyToOne(targetEntity="Unidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidad", referencedColumnName="id")
     * })
     */
    private $unidad;



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
     * Set cantidad
     *
     * @param float $cantidad
     * @return Produccion
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Produccion
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Produccion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set loteProduccion
     *
     * @param \SGPLBundle\Entity\LoteProduccion $loteProduccion
     * @return Produccion
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
     * Set unidad
     *
     * @param \SGPLBundle\Entity\Unidad $unidad
     * @return Produccion
     */
    public function setUnidad(\SGPLBundle\Entity\Unidad $unidad = null)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return \SGPLBundle\Entity\Unidad 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }
}
