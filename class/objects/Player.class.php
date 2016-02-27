<?php


class Player
{
    private $idJoueur;
    private $pseudo;
    private $password;
    private $idEmplacement;
    private $nom;
    private $prenom;
    private $email;
    private $sexe;
    private $gsm;
    private $paye;
    private $avatar;
    private $ecole;
    private $dateDeNaissance;
    private $level;
    
    
    public function __construct($id, $login, $password, $place = NULL, $name = NULL, $firstname = NULL, $mail = NULL, $sex = NULL, $phone = NULL, $hasPaid = NULL, $avatar = NULL, $school = NULL, $dateOfBirth = NULL, $level)
    {
        $this->idJoueur = $id;
        $this->pseudo = $login;
        $this->password = $password;
        $this->idEmplacement = $place;
        $this->nom = $name;
        $this->prenom = $firstname;
        $this->email = $mail;
        $this->sexe = $sex;
        $this->gsm = $phone;
        $this->paye = $hasPaid;
        $this->avatar = $avatar;
        $this->ecole = $school;
        $this->dateDeNaissance = $dateOfBirth;
        $this->level = $level;        
    }
    
    
     /**
     * set value for id_joueur	 
     * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
     * @param mixed $idJoueur
     * @return Joueurs
     */
    public function &setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;
        return $this;
    }

    /**
     * get value for id_joueur 
     * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
     * @return mixed
     */
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    /**
     * set value for pseudo 
     *
     * type:VARCHAR,size:80,default:null
     *
     * @param mixed $pseudo
     * @return Joueurs
     */
    public function &setPseudo($pseudo) {
        $this->pseudo = $pseudo;
        return $this;
    }

    /**
     * get value for pseudo 
     *
     * type:VARCHAR,size:80,default:null
     *
     * @return mixed
     */
    public function getPseudo() {
        return $this->pseudo;
    }

    /**
     * set value for password 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @param mixed $password
     * @return Joueurs
     */
    public function &setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * get value for password 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * set value for id_emplacement 
     *
     * type:INT,size:10,default:null,index,nullable
     *
     * @param mixed $idEmplacement
     * @return Joueurs
     */
    public function &setIdEmplacement($idEmplacement) {
        $this->idEmplacement = $idEmplacement;
        return $this;
    }

    /**
     * get value for id_emplacement 
     *
     * type:INT,size:10,default:null,index,nullable
     *
     * @return mixed
     */
    public function getIdEmplacement() {
        return $this->idEmplacement;
    }

    /**
     * set value for nom 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @param mixed $nom
     * @return Joueurs
     */
    public function &setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    /**
     * get value for nom 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @return mixed
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * set value for prenom 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @param mixed $prenom
     * @return Joueurs
     */
    public function &setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * get value for prenom 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @return mixed
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * set value for email 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @param mixed $email
     * @return Joueurs
     */
    public function &setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * get value for email 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * set value for sexe 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @param mixed $sexe
     * @return Joueurs
     */
    public function &setSexe($sexe) {
        $this->notifyChanged(self::FIELD_SEXE, $this->sexe, $sexe);
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * get value for sexe 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @return mixed
     */
    public function getSexe() {
        return $this->sexe;
    }

    /**
     * set value for gsm 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @param mixed $gsm
     * @return Joueurs
     */
    public function &setGsm($gsm) {
        $this->notifyChanged(self::FIELD_GSM, $this->gsm, $gsm);
        $this->gsm = $gsm;
        return $this;
    }

    /**
     * get value for gsm 
     *
     * type:VARCHAR,size:255,default:null
     *
     * @return mixed
     */
    public function getGsm() {
        return $this->gsm;
    }

    /**
     * set value for paye 
     *
     * type:BIT,size:0,default:0
     *
     * @param mixed $paye
     * @return Joueurs
     */
    public function &setPaye($paye) {
        $this->notifyChanged(self::FIELD_PAYE, $this->paye, $paye);
        $this->paye = $paye;
        return $this;
    }

    /**
     * get value for paye 
     *
     * type:BIT,size:0,default:0
     *
     * @return mixed
     */
    public function getPaye() {
        return $this->paye;
    }

    /**
     * set value for avatar 
     *
     * type:BLOB,size:65535,default:null,nullable
     *
     * @param mixed $avatar
     * @return Joueurs
     */
    public function &setAvatar($avatar) {
        $this->notifyChanged(self::FIELD_AVATAR, $this->avatar, $avatar);
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * get value for avatar 
     *
     * type:BLOB,size:65535,default:null,nullable
     *
     * @return mixed
     */
    public function getAvatar() {
        return $this->avatar;
    }

    /**
     * set value for ecole 
     *
     * type:VARCHAR,size:255,default:null,nullable
     *
     * @param mixed $ecole
     * @return Joueurs
     */
    public function &setEcole($ecole) {
        $this->notifyChanged(self::FIELD_ECOLE, $this->ecole, $ecole);
        $this->ecole = $ecole;
        return $this;
    }

    /**
     * get value for ecole 
     *
     * type:VARCHAR,size:255,default:null,nullable
     *
     * @return mixed
     */
    public function getEcole() {
        return $this->ecole;
    }

    /**
     * set value for date_de_naissance 
     *
     * type:DATE,size:10,default:null,nullable
     *
     * @param mixed $dateDeNaissance
     * @return Joueurs
     */
    public function &setDateDeNaissance($dateDeNaissance) {
        $this->notifyChanged(self::FIELD_DATE_DE_NAISSANCE, $this->dateDeNaissance, $dateDeNaissance);
        $this->dateDeNaissance = $dateDeNaissance;
        return $this;
    }

    /**
     * get value for date_de_naissance 
     *
     * type:DATE,size:10,default:null,nullable
     *
     * @return mixed
     */
    public function getDateDeNaissance() {
        return $this->dateDeNaissance;
    }

    /**
     * set value for level 
     *
     * type:SMALLINT,size:5,default:5
     *
     * @param mixed $level
     * @return Joueurs
     */
    public function &setLevel($level) {
        $this->notifyChanged(self::FIELD_LEVEL, $this->level, $level);
        $this->level = $level;
        return $this;
    }

    /**
     * get value for level 
     *
     * type:SMALLINT,size:5,default:5
     *
     * @return mixed
     */
    public function getLevel() {
        return $this->level;
    }

}

?>