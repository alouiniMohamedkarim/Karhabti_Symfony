<?php
/**
 * Created by PhpStorm.
 * User: WALA
 * Date: 05/02/2017
 * Time: 00:20
 */

namespace Limitless\KarhabtiBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */


class Agence
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */

    private $ville;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=false)
     */
    private $code_postal;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="num_fiscal", type="string", length=255, nullable=false)
     */

    private $num_fiscal;
    /**
     * @ORM\Column(name="Ouverture", type="string")
     */

    private $Ouverture;

    /**
     * @ORM\Column(name="Fermeture", type="string")
     */

    private $Fermeture;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */
    private $user;

    /**
     * @Assert\File(maxSize="6000k")
     */
    public $file;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @param string $code_postal
     */
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getNumFiscal()
    {
        return $this->num_fiscal;
    }

    /**
     * @param string $num_fiscal
     */
    public function setNumFiscal($num_fiscal)
    {
        $this->num_fiscal = $num_fiscal;
    }

    /**
     * @return mixed
     */
    public function getOuverture()
    {
        return $this->Ouverture;
    }

    /**
     * @param mixed $Ouverture
     */
    public function setOuverture($Ouverture)
    {
        $this->Ouverture = $Ouverture;
    }

    /**
     * @return mixed
     */
    public function getFermeture()
    {
        return $this->Fermeture;
    }

    /**
     * @param mixed $Fermeture
     */
    public function setFermeture($Fermeture)
    {
        $this->Fermeture = $Fermeture;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

}