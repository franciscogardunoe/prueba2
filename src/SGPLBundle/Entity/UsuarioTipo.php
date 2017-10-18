<?php

namespace SGPLBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioTipo
 *
 * @ORM\Table(name="usuario_tipo", indexes={@ORM\Index(name="fk_tipo_usuario_has_usuario_usuario1_idx", columns={"usuario"}), @ORM\Index(name="fk_tipo_usuario_has_usuario_tipo_usuario1_idx", columns={"tipo_usuario"})})
 * @ORM\Entity
 */
class UsuarioTipo
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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \TipoUsuario
     *
     * @ORM\ManyToOne(targetEntity="TipoUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_usuario", referencedColumnName="id")
     * })
     */
    private $tipoUsuario;

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
     * Set status
     *
     * @param integer $status
     * @return UsuarioTipo
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
     * Set tipoUsuario
     *
     * @param \SGPLBundle\Entity\TipoUsuario $tipoUsuario
     * @return UsuarioTipo
     */
    public function setTipoUsuario(\SGPLBundle\Entity\TipoUsuario $tipoUsuario = null)
    {
        $this->tipoUsuario = $tipoUsuario;

        return $this;
    }

    /**
     * Get tipoUsuario
     *
     * @return \SGPLBundle\Entity\TipoUsuario 
     */
    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }

    /**
     * Set usuario
     *
     * @param \SGPLBundle\Entity\Usuario $usuario
     * @return UsuarioTipo
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
