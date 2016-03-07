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
            echo 'An error has occured\n';
            echo 'Code:' . $e->getCode();
            echo 'Message:' . $e->getMessage();
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
        if($query->execute())
        {
            $player = new Player($query->getResult()[0]);
        }
        else
        {
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
            echo 'ERROR NEWS LIST';
            exit; 
        }  
    }
    
    public function getNextMatches($connected)
    {
        if (!$connected)
            return '';
    
        $sql = file_get_contents('src/sql/selectMatches.sql');
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
            echo 'ERROR SQL duree_chat_users';
            exit;
        }
        return $res;
    }
    
    public function getLocations()
    {
        //SQL command to get table drawing
        $sql = file_get_contents('src/sql/getLocations.sql');
        $query = new Query($this, $sql);        
        if($query->execute())
        {  
            // Create player locations div tags
            return $query->getResult();
        }
        else
        {
            echo 'ERROR SQL duree_chat_users';
            exit;
        } 
    }
    
    public function getLocations_1()
    {
        // Create tooltip of location div tags
        $sql = file_get_contents('src/sql/getLocations_1.sql');
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
            echo 'ERROR';
            exit;
        }
    }
    
    public function insertUserInChat($id, $login)
    {
        //$sql = file_get_contents('sql/insertUserInChat.sql');
        $sql = 'INSERT INTO tchat_users (id_joueur,pseudo,lastcon)
        VALUES (:id,:pseudo,NOW())
        ON DUPLICATE KEY UPDATE lastcon=NOW()';
        $query = new Query($this, $sql);
        $query->bind('id', $id, PDO::PARAM_INT);
        $query->bind('pseudo', $login, PDO::PARAM_INT);  
        if(!$query->execute())
        {        
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
            //print_r($query->getResult());
            return $query->getResult()[0]; 
        }
        else
        {
            echo 'ERREUR SQL TOURNOI';
            exit;
        }     
    }
    
    public function getGroups($idTournament)
    {
        //SQL Query to select pools for this tournament
        $groups = '';
        $sql = 'SELECT * FROM groupes_pool WHERE id_tournoi=:id';
        $query = new Query($this, $sql);
        $query->bind(':id', $idTournament, PDO::PARAM_INT);
        if ($query->execute())
        {
            return $query->getResult();
        }
        else
        {
            echo 'ERREUR SQL GROUPES';
            exit;
        }
    }
    
    public function getTeamsOfGroup($idGroup)
    {
        $sql = file_get_contents('sql/getTeamsOfGroup.sql');
        $query = new Query($this, $sql);
        $query->bind(':idGroup', $idGroup, PDO::PARAM_INT);
        if ($query->execute())
        {
            $participants[$idGroup] = $query->getResult();
            return $participants;
        }
        else
        {
            echo 'ERREUR SQL EQUIPES';
            exit;
        }
    }
    
    public function getPlayersOfGroup($idGroup)
    {
        $sql = file_get_contents('sql/getPlayersOfGroup.sql');
        $query = new Query($this, $sql);
        $query->bind(':idGroup', $idGroup, PDO::PARAM_INT);     
        if ($query->execute())
        {
             $participants[$idGroup] = $query->getResult();
             return $participants;             
        }
        else
        {
            echo 'ERREUR SQL JOUEURS';
            exit;
        } 
    }
    
    public function countMatchesOfLB($idTournament, $looserBracket)
    {
        //SQL Query to count the number of matchs for a tournament and a looser bracket
        $sql = file_get_contents('sql/countMatchesOfLB.sql');
        $query = new Query($this, $sql);
        $query->bind(':idTournament', $idTournament, PDO::PARAM_INT); 
        $query->bind(':looserBracket', $looserBracket, PDO::PARAM_INT);     
        if ($query->execute())
        {
            $nbr_lb = $query->getResult()[0];
            return $nbr_lb['nbr'];
        }
        else
        {
            echo 'ERREUR SQL COUNT LB';
            exit;
        }
    }
    
    public function getMatchesInfo($idGroup, $idTeam)
    {
        $sql = file_get_contents('sql/getMatchesInfo.sql');
        $query = new Query($this, $sql);
        $query->bind('idg', $idGroup, PDO::PARAM_INT);
        $query->bind('ide', $idTeam, PDO::PARAM_INT);
        if ($query->execute())
        {
            foreach ($query->getResult() as $ligne)
            {
                if (!is_null($ligne['score']))
                {
                    $scores[$team['id']][$ligne['team2']]['score'] = $ligne['score'];
                    $scores[$team['id']][$ligne['team2']]['id_match'] = $ligne['id_match'];
                }
                $heures[$team['id']][$ligne['team2']] = $ligne['heure'];
            } 
            return array($scores, $heures);
        }
        else
        {
            echo 'ERREUR SQL SCORES TEAM 1';
            exit;
        }
    }
    
    public function getNumberOfManches($idGroup, $nbManchesTournament)
    {
        $sql = 'SELECT nbr_manche, heure FROM matchs WHERE id_groupe=:idg LIMIT 0,1';
        $query = new Query($this, $sql);
        $query->bind('idg', $idGroup, PDO::PARAM_INT);
        $heure = '';
        if ($query->execute())
        {
            if ($nbr_manches = $query->getResult())
            {
                $heure = $nbr_manches['heure'];
                $nbr_manches = $nbr_manches['nbr_manche'];
            }
            else
            {
                $nbr_manches = $nbManchesTournament;
            }
            return array($nbr_manches, $heure);
        }
        else
        {
            echo 'ERREUR SQL MANCHES';
            exit;
        }
    }
    
    public function getTotals($idGroup)
    {
        $sql = file_get_contents('sql/getTotals.sql');
        $query = new Query($this, $sql);
        $query->bind('idg', $idGroup, PDO::PARAM_INT);
        if ($query->execute())
        {
            $totaux = $query->getResult();
            return $totaux;
        }
        else
        {
            echo 'ERREUR SQL MANCHES';
            exit;
        }
    }    
    
    public function getTotals_2($idGroup, &$totaux)
    {
        $sql = file_get_contents('sql/getTotals_2.sql');
        $query = new Query($this, $sql);
        $query->bind('idg', $idGroup, PDO::PARAM_INT);
        if ($query->execute())
        {
            foreach ($query->getResult() as $ligne)
            {
                $totaux[$ligne['id_joueur']]['scores'][$ligne['numero_manche']] = $ligne['score'];
            }
        }
        else
        {
            echo 'ERREUR SQL MANCHES';
            exit;
        }
    }

}
