<?php
require_once(dirname(__FILE__).'/var.conf.php');
require_once(DOCUMENT_ROOT.'/class/objects/Player.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


class Database
{    
    private $host;
    private $port;
    private $database;
    private $user;
    private $pwd;    
    private $connexion;
    private $sql;
    private $query;
    
    public function __construct()
    {   
		GLOBAL $glob_host,$glob_port,$glob_database,$glob_user,$glob_pwd;

        $this->host = $glob_host;
        $this->port = $glob_port;
        $this->database = $glob_database; 
        $this->user = $glob_user;
        $this->pwd = $glob_pwd;
        $this->connexion = '';
        $this->sql = '';
        $this->query = '';

        try
        {
            $this->connexion = new PDO(
                    'mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->database,
                    $this->user,
                    $this->pwd,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch (Exception $e)
        {	
			GLOBAL $glob_debug;	
			if ($glob_debug)
			{
				echo 'An error has occured\n';
				echo 'Code:' . $e->getCode();
				echo 'Message:' . $e->getMessage();
			}
            die();
            exit;
        }
    }
    
    public function getConnection()
    {
        return $this->connexion;
    }
    
    public function setQuery($sql)
    {
        $this->query = $this->getConnection()->prepare($sql);        
    }
    
    
    public function bindValue($param, $var, $option)
    {
        $this->getQuery()->bindValue($param, $var, $option);
    }
    
    public function getQuery()
    {
        return $this->query;
    }
    
    
    
    public function getPlayer($login, $password)
    {
        $sql = 'SELECT * FROM joueurs WHERE pseudo=:login AND password=:pwd';       
        $query = new Query($this, $sql); 
        $query->bind(':login', $login, PDO::PARAM_STR);
        $query->bind(':pwd', sha1($password), PDO::PARAM_STR);
		$player = null;
        if($query->execute())
        {
            if(!($query->getResult()==null))
            {
                $player = new Player($query->getResult()[0]);
            }
        }
        else
        {
            GLOBAL $glob_debug;
            if ($glob_debug)
                    echo 'ERROR PLAYER';
            exit; 
        }
        return $player;
    }    
    
    public function getNavTournois()
    {
        //SQL Query to select all tournament names
        $sql = 'SELECT id_tournoi, nomTournoi FROM tournoi'; 
        $query = new Query($this, $sql);
        if($query->execute())
        {
            //print_r($query->getResult());
            return ($query->getResult());
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR PLAYER';
            exit; 
        }
    }
    
    public function getNewsList()
    {
        //SQL query to select all news
        $sql = 'SELECT * FROM news WHERE invisible=0 ORDER BY quand DESC';
        $query = new Query($this, $sql);
        if($query->execute())
        {
            //print_r($query->getResult());
            $news = $query->getResult();
            $newsList = array();
            foreach ($news as $new)
            {
                $newsList[] = array(
                    "titre" => $new['titre'],
                    "texte" => nl2br($new['texte']),
                    "quand" => get_jour_de_la_semaine($new['quand']) . ' à ' . get_heure($new['quand']),
                    "id_news" => $new['id_news']);
            }
            return $newsList;
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR NEWS LIST';
            exit; 
        }  
    }
    
    public function getNextMatches($connected)
    {
        if (!$connected)
            return '';
    
        $sql = file_get_contents(DOCUMENT_ROOT.'/src/sql/selectMatches.sql');
        $query = new Query($this, $sql);
        $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
        if($query->execute())
        {
            $next_matches = $query->getResult();
            $nm = array();
            foreach ($next_matches as $next_match)
            {
                $nm[] = array("jour" => get_jour_de_la_semaine($next_match['heure']),
                    "heure" => get_heure($next_match['heure']),
                    "nom" => $next_match['nomTournoi']);
            }
            return $nm;
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERREUR SQL NEXT MATCHES';
            exit; 
        }     
    }
    
    
    public function chatIsActive()
    {
        //SQL Query to test if chat is activated
        $sql = "SELECT valeur FROM variables WHERE nom='chat_on'";
        $query = new Query($this, $sql);
        if($query->execute())
        {
            $data = $query->getResult()[0];
            if ($data['valeur'] == 1)
            {
                return true;
            }
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR SQL duree_chat';
            exit;
        }        
    }
    
    public function getChatTiming()
    {
        //SQL query to get chat timing for AJAX
        $sql = "SELECT valeur FROM variables WHERE nom='duree_chat'";
        $query = new Query($this, $sql);
        if($query->execute())
        {            
            $data = $query->getResult()[0];
            $res = $data['valeur'];
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR SQL duree_chat';
            exit;
        }
        return $res;  
    }
    
    public function getUserChatTiming()
    {
        //SQL query to get chat timing for AJAX
        $sql = "SELECT valeur FROM variables WHERE nom='duree_chat_users'";
        $query = new Query($this, $sql);
        if($query->execute())
        {  
            $data = $query->getResult()[0];
            $res = $data['valeur'];
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR SQL duree_chat_users';
            exit;
        }
        return $res;
    }
    
    public function getLocations()
    {
        //SQL command to get table drawing
        $sql = file_get_contents(DOCUMENT_ROOT.'/src/sql/getLocations.sql');
        $query = new Query($this, $sql);        
        if($query->execute())
        {  
            // Create player locations div tags
            return $query->getResult();
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR SQL duree_chat_users';
            exit;
        } 
    }
    
    public function getLocations_1()
    {
        // Create tooltip of location div tags
        $sql = file_get_contents(DOCUMENT_ROOT.'/src/sql/getLocations_1.sql');
        $query = new Query($this, $sql);        
        if($query->execute())
        { 
            //print_r($query->getResult());
            $locations_1 = array();
            foreach($query->getResult() as $var)
            {
                $id_joueur = $var['id_joueur'];  
                $team = $this->getLocations_2($id_joueur);            
                $var['team'] = implode(', ', $team);
                $nomTournoi = $this->getLocations_3($id_joueur);    
                $var['nomTournoi'] = implode(', ', $nomTournoi);
                $locations_1[] = $var;
            }
            return $locations_1;
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR';
            exit;
        }
    }
    
    public function getLocations_2($idPlayer)
    {
        $sql = file_get_contents('src/sql/getLocations_2.sql');
        $query = new Query($this, $sql);
        $query->bind(':idPlayer', $idPlayer, PDO::PARAM_INT);
        if($query->execute())
        {
            //print_r($query->getResult());
            $team = array();
            foreach($query->getResult() as $var)
            {
                $team[] = $var['nom'];
            }
            return $team;
        }           
    }
    
    public function getLocations_3($idPlayer)
    {
        $sql = file_get_contents('src/sql/getLocations_3.sql');
        $query = new Query($this, $sql);
        $query->bind(':idPlayer', $idPlayer, PDO::PARAM_INT);
        if($query->execute())
        {  
            $nomTournoi = array();
            foreach ($query->getResult() as $var)
            {
                $nomTournoi[] = $var['nomTournoi'];
            }
            return $nomTournoi;
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR';
            exit;
        }
    }
    
    
    
    public function getLogins()
    {
        // Selection des pseudos	
        $sql = 'SELECT id_emplacement, pseudo
                FROM joueurs
                ORDER BY pseudo ASC';
        $query = new Query($this, $sql);
        if($query->execute())
        {
            //print_r($query->getResult());
            return $query->getResult();
        } 
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR';
            exit;
        }
    }
    
    public function getTeams()
    {
        // Selection des équipes	
        $sql = 'SELECT id_equipes,nom
                FROM equipes ORDER BY nom ASC';
        $query = new Query($this, $sql);
        if($query->execute())
        {
            //print_r($query->getResult());
            return $query->getResult();
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERROR';
            exit;
        }
    }
    
    public function insertUserInChat($id, $login)
    {
        $sql = file_get_contents(DOCUMENT_ROOT.'/src/sql/insertUserInChat.sql');
        $query = new Query($this, $sql);
        $query->bind('id', $id, PDO::PARAM_INT);
        $query->bind('pseudo', $login, PDO::PARAM_INT);
        $query->execute();
        $affected_rows = $query->getPreparedQuery()->rowCount();
        if(!is_null($affected_rows) && !$affected_rows)
        {   
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERREUR USERS CHAT SQL 1';
        }  
    }
    
    public function getTournament($idTournament)
    {
        //SQL Query to select data of the tournament
        $sql = 'SELECT * FROM tournoi WHERE id_tournoi=:id'; 
        $query = new Query($this, $sql);
        $query->bind(':id', $idTournament, PDO::PARAM_INT);
        if ($query->execute())
        {
            return $query->getResult()[0]; 
        }
        else
        {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERREUR SQL TOURNOI';
            exit;
        }     
    }

    
	
	///////////////////////////////////////////////
	///////////////////TOURNOIS////////////////////
	///////////////////////////////////////////////
	
	public function getIdMatchEquipe($idGroup,$idTeam1,$idTeam2)
	{
            $sql = file_get_contents(DOCUMENT_ROOT.'/src/sql/getIdMatchEquipe.sql');
            $query = new Query($this,$sql);
            $query->bind(':idg', $idGroup, PDO::PARAM_INT);
            $query->bind(':idt1', $idTeam1, PDO::PARAM_INT);
            $query->bind(':idt2', $idTeam2, PDO::PARAM_INT);
            if ($query->execute())
            {
                return $query->getResult()[0]['id_match'];
            }
            else
            {
                GLOBAL $glob_debug;
                if ($glob_debug)
                        echo 'ERREUR SQL ID MANCHE';
                return 0;
            }
	}

	
	///////////////////////////////////////////////
	///////////////////NOTIFICATIONS///////////////
	///////////////////////////////////////////////
	public function getNotificationsJoueur($idJoueur)
	{
		$sql = file_get_contents(DOCUMENT_ROOT.'/src/sql/getNotifJoueurs.sql');
		$query = new Query($this,$sql);
		$query->bind(':idj', $idJoueur, PDO::PARAM_INT);
		if ($query->execute())
		{
			return $query->getResult();
		}
		else
		{
			GLOBAL $glob_debug;
			if ($glob_debug)
					echo 'ERREUR SQL JOUEUR NOTIFICATIONS';
			return 0;
		}
	}
	
	public function setNotifAsSeen($idJoueur, $idNotif)
	{
		$sql = file_get_contents(DOCUMENT_ROOT.'/src/sql/setNotifJoueurAsSeen.sql');
		$query = new Query($this,$sql);
		$query->bind(':idj', $idJoueur, PDO::PARAM_INT);
		$query->bind(':idn', $idNotif, PDO::PARAM_INT);
		if ($query->execute())
		{
			return $query->getResult();
		}
		else
		{
			GLOBAL $glob_debug;
			if ($glob_debug)
					echo 'ERREUR SQL MARK NOTIF AS SEEN';
			return 0;
		}
	}
	
	public function delNotifJoueur($idJoueur, $idNotif)
	{
		$sql = file_get_contents(DOCUMENT_ROOT.'/src/sql/delNotifJoueurs.sql');
		$query = new Query($this,$sql);
		$query->bind(':idj', $idJoueur, PDO::PARAM_INT);
		$query->bind(':idn', $idNotif, PDO::PARAM_INT);
		if ($query->execute())
		{
			return $query->getResult();
		}
		else
		{
			GLOBAL $glob_debug;
			if ($glob_debug)
					echo 'ERREUR SQL REMOVE NOTIF JOUEUR';
			return 0;
		}
	}
	
}