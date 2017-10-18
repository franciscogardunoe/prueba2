<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguimiento
 *
 * @ORM\Table(name="seguimiento", indexes={@ORM\Index(name="fk_seguimiento_tipo_seguimiento1_idx", columns={"tipo_seguimiento"}), @ORM\Index(name="fk_seguimiento_lote_produccion1_idx", columns={"lote_produccion"}), @ORM\Index(name="fk_seguimiento_usuario1_idx", columns={"usuario"})})
 * @ORM\Entity
 */
class Seguimiento
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=false)
     */
    private $comentario;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

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
     * @var \TipoSeguimiento
     *
     * @ORM\ManyToOne(targetEntity="TipoSeguimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_seguimiento", referencedColumnName="id")
     * })
     */
    private $tipoSeguimiento;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Seguimiento
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Seguimiento
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
     * Set status
     *
     * @param integer $status
     * @return Seguimiento
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set loteProduccion
     *
     * @param \SGPLBundle\Entity\LoteProduccion $loteProduccion
     * @return Seguimiento
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
     * Set tipoSeguimiento
     *
     * @param \SGPLBundle\Entity\TipoSeguimiento $tipoSeguimiento
     * @return Seguimiento
     */
    public function setTipoSeguimiento(\SGPLBundle\Entity\TipoSeguimiento $tipoSeguimiento = null)
    {
        $this->tipoSeguimiento = $tipoSeguimiento;

        return $this;
    }

    /**
     * Get tipoSeguimiento
     *
     * @return \SGPLBundle\Entity\TipoSeguimiento 
     */
    public function getTipoSeguimiento()
    {
        return $this->tipoSeguimiento;
    }

    /**
     * Set usuario
     *
     * @param \SGPLBundle\Entity\Usuario $usuario
     * @return Seguimiento
     */
    public function setUsuario(\SGPLBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \SGPLBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
