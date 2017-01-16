<?php

namespace eco\EcoleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Eleve
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Eleve
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date")
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=50)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="nomtuteur", type="string", length=50)
     */
    private $nomtuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="adressetuteur", type="string", length=50)
     */
    private $adressetuteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="teltuteur", type="integer")
     */
    private $teltuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="emailtuteur", type="string", length=70)
     */
    private $emailtuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="professiontuteur", type="string", length=50)
     */
    private $professiontuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="cintuteur", type="string", length=50)
     */
    private $cintuteur;
    
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;


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
     * Set nom
     *
     * @param string $nom
     * @return Eleve
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return Eleve
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Eleve
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Eleve
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Eleve
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set nomtuteur
     *
     * @param string $nomtuteur
     * @return Eleve
     */
    public function setNomtuteur($nomtuteur)
    {
        $this->nomtuteur = $nomtuteur;

        return $this;
    }

    /**
     * Get nomtuteur
     *
     * @return string 
     */
    public function getNomtuteur()
    {
        return $this->nomtuteur;
    }

    /**
     * Set adressetuteur
     *
     * @param string $adressetuteur
     * @return Eleve
     */
    public function setAdressetuteur($adressetuteur)
    {
        $this->adressetuteur = $adressetuteur;

        return $this;
    }

    /**
     * Get adressetuteur
     *
     * @return string 
     */
    public function getAdressetuteur()
    {
        return $this->adressetuteur;
    }

    /**
     * Set teltuteur
     *
     * @param integer $teltuteur
     * @return Eleve
     */
    public function setTeltuteur($teltuteur)
    {
        $this->teltuteur = $teltuteur;

        return $this;
    }

    /**
     * Get teltuteur
     *
     * @return integer 
     */
    public function getTeltuteur()
    {
        return $this->teltuteur;
    }

    /**
     * Set emailtuteur
     *
     * @param string $emailtuteur
     * @return Eleve
     */
    public function setEmailtuteur($emailtuteur)
    {
        $this->emailtuteur = $emailtuteur;

        return $this;
    }

    /**
     * Get emailtuteur
     *
     * @return string 
     */
    public function getEmailtuteur()
    {
        return $this->emailtuteur;
    }

    /**
     * Set professiontuteur
     *
     * @param string $professiontuteur
     * @return Eleve
     */
    public function setProfessiontuteur($professiontuteur)
    {
        $this->professiontuteur = $professiontuteur;

        return $this;
    }

    /**
     * Get professiontuteur
     *
     * @return string 
     */
    public function getProfessiontuteur()
    {
        return $this->professiontuteur;
    }

    /**
     * Set cintuteur
     *
     * @param string $cintuteur
     * @return Eleve
     */
    public function setCintuteur($cintuteur)
    {
        $this->cintuteur = $cintuteur;

        return $this;
    }

    /**
     * Get cintuteur
     *
     * @return string 
     */
    public function getCintuteur()
    {
        return $this->cintuteur;
    }
    
    
      public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/eleves';
    }
    
      /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    
    public function upload()
{
    // the file property can be empty if the field is not required
    if (null === $this->getFile()) {
        return;
    }

    // use the original file name here but you should
    // sanitize it at least to avoid any security issues

    // move takes the target directory and then the
    // target filename to move to
    $this->getFile()->move(
        $this->getUploadRootDir(),
        $this->getFile()->getClientOriginalName()
    );

    // set the path property to the filename where you've saved the file
    $this->path = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->file = null;
}
}
