<?php

require_once(DOCUMENT_ROOT.'/class/objects/Player.class.php');


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
        $this->host = 'localhost';
        $this->port = '3306';
        $this->database = 'hehlanbd';
        $this->user = 'root';
        $this->pwd = '1234';
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
    
    public function getConnection()
    {
        return $this->connexion;
    }
    
    
     public function getPlayer($login, $password)
    {
        $this->setQuery('SELECT * FROM joueurs WHERE pseudo=:login AND password=:pwd');
        $this->bindValue(':login', $login, PDO::PARAM_STR);
        $this->bindValue(':pwd', sha1($password), PDO::PARAM_STR);
        if ($this->getQuery()->execute())
        {
            $data = $this->getQuery()->fetch(PDO::FETCH_ASSOC);            
            $player = new Player($data['id_joueur'], $data['pseudo'], NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $data['level']);
        }
        else
        {
            echo 'ERROR';
            exit;
        }  
        return $player;
    }    
    
    public function getNavTournois()
    {
        //SQL Query to select all tournament names
        $this->setQuery('SELECT id_tournoi, nomTournoi FROM tournoi'); 
        $this->getQuery()->execute();
        $nt = array();
        while ($data = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
        {
            $nt[] = array("idTournoi" => $data['id_tournoi'],
                "nomTournoi" => $data['nomTournoi']);
        }
        return $nt;
    }
    
    public function getNewsList()
    {
        //SQL query to select all news
        $this->setQuery('SELECT * FROM news WHERE invisible=0 ORDER BY quand DESC');
        $newsList = array();
        if ($this->getQuery()->execute())
        {
            while ($news = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
            {
                $newsList[] = array(
                    "titre" => $news['titre'],
                    "texte" => nl2br($news['texte']),
                    "quand" => get_jour_de_la_semaine($news['quand']) . ' à ' . get_heure($news['quand']),
                    "id_news" => $news['id_news']);
            }
        }
        else
        {
            echo 'ERREUR NEWS SQL';
            exit;
        }
        return $newsList;
    }
    
    public function getNextMatches($connected)
    {
        if (!$connected)
            return '';
    
        $sql = file_get_contents('sql/selectMatches.sql');
        $this->setQuery($sql);
        $this->bindValue(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);

        if ($this->getQuery()->execute())
        {
            $next_matches = $this->getQuery()->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            echo 'ERREUR SQL NEXT MATCHES';
            exit;
        }
        $nm = array();
        foreach ($next_matches as $next_match)
        {
            $nm[] = array("jour" => get_jour_de_la_semaine($next_match['heure']),
                "heure" => get_heure($next_match['heure']),
                "nom" => $next_match['nomTournoi']);
        }
        return $nm;
    }
    
    
    public function chatIsActive()
    {
        //SQL Query to test if chat is activated
        $this->setQuery("SELECT valeur FROM variables WHERE nom='chat_on'");
        if ($this->getQuery()->execute())
        {
            $data = $this->getQuery()->fetch(PDO::FETCH_ASSOC);
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
        $this->setQuery("SELECT valeur FROM variables WHERE nom='duree_chat'");
        if ($this->getQuery()->execute())
        {
            $data = $this->getQuery()->fetch(PDO::FETCH_ASSOC);
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
        $this->setQuery("SELECT valeur FROM variables WHERE nom='duree_chat_users'");
        if ($this->getQuery()->execute())
        {
            $data = $this->getQuery()->fetch(PDO::FETCH_ASSOC);
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
        $sql = file_get_contents('sql/getLocations.sql');
        $this->setQuery($sql);
        $this->getQuery()->execute();
        // Create player locations div tags
        $locations = array();
        while ($location = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
        {
            $locations[] = $location;
        }
        return $locations;
    }
    
    public function getLocations_1()
    {
        // Create tooltip of location div tags
        $sql = file_get_contents('sql/getLocations_1.sql');
        /*$this->setQuery($sql);
        $this->getQuery()->execute();
        $locations_1 = array();
        while ($location_1 = $this->getQuery()->fetch(PDO::FETCH_ASSOC))*/
			
		$quer = $this->connexion->prepare($sql);
		if($quer->execute())
			while($location_1 = $quer->fetch(PDO::FETCH_ASSOC))
        {
            $id_joueur = $location_1['id_joueur'];  
            $team = $this->getLocations_2($id_joueur);            
            $location_1['team'] = implode(', ', $team);
            $nomTournoi = $this->getLocations_3($id_joueur);    
            $location_1['nomTournoi'] = implode(', ', $nomTournoi);
            $locations_1[] = $location_1;
        }
				var_dump($locations_1);

        return $locations_1;
    }
    
    public function getLocations_2($idPlayer)
    {
        $sql = file_get_contents('sql/getLocations_2.sql');
        $this->setQuery($sql);
        $this->bindValue(':idPlayer', $idPlayer, PDO::PARAM_INT);
        $this->getQuery()->execute();
        $team = array();
        while ($location_2 = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
        {
            $team[] = $location_2['nom'];
        }
        return $team;
    }
    
    public function getLocations_3($idPlayer)
    {
        $sql = file_get_contents('sql/getLocations_3.sql');
        $this->setQuery($sql);
        $this->bindValue(':idPlayer', $idPlayer, PDO::PARAM_INT);
        $this->getQuery()->execute();
        $nomTournoi = array();
        while ($equipe = $this->getQuery()->fetch())
        {
            $nomTournoi[] = $equipe['nomTournoi'];
        }
        return $nomTournoi;
    }
    
    public function getLogins()
    {
        // Selection des pseudos	
        $sql = 'SELECT id_emplacement, pseudo
                FROM joueurs
                ORDER BY pseudo ASC';
        $this->setQuery($sql);
        $this->getQuery()->execute();
        $players = array();
        while ($player = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
        {
            $players[] = $player;
        }
        return $players;
    }
    
    public function getTeams()
    {
        // Selection des équipes	
        $sql = 'SELECT id_equipes,nom
                FROM equipes ORDER BY nom ASC';
        $this->setQuery($sql);
        $this->getQuery()->execute();
        $teams = array();
        while ($team = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
        {
            $teams[] = $team;
        }
        return $teams;
    }
    
    public function insertUserInChat($id, $login)
    {
        //$sql = file_get_contents('sql/insertUserInChat.sql');
		$sql = 'INSERT INTO tchat_users (id_joueur,pseudo,lastcon)
		VALUES (:id,:pseudo,NOW())
		ON DUPLICATE KEY UPDATE lastcon=NOW()';
        $this->setQuery($sql);
        $this->bindValue('id', $id, PDO::PARAM_INT);
        $this->bindValue('pseudo', $login, PDO::PARAM_INT);      
        if (!$this->getQuery()->execute())
        {
            echo 'ERREUR USERS CHAT SQL 1';
        }
    }
    
    public function getTournament($idTournament)
    {
        //SQL Query to select data of the tournament
        $sql = 'SELECT * FROM tournoi WHERE id_tournoi=:id'; 
        $this->setQuery($sql);
        $this->bindValue(':id', $idTournament, PDO::PARAM_INT);
        if ($this->getQuery()->execute())
        {
           $tournament = $this->getQuery()->fetch(PDO::FETCH_ASSOC);
           return $tournament; 
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
        $this->setQuery($sql);
        $this->bindValue(':id', $idTournament, PDO::PARAM_INT);
        if ($this->getQuery()->execute())
        {
            $groups = $this->getQuery()->fetchAll(PDO::FETCH_ASSOC);
            return $groups;
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
        $this->setQuery($sql);
        $this->bindValue(':idGroup', $idGroup, PDO::PARAM_INT);
        if ($this->getQuery()->execute())
        {
            $participants[$idGroup] = $this->getQuery()->fetchAll(PDO::FETCH_ASSOC);
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
        $this->setQuery($sql);
        $this->bindValue(':idGroup', $idGroup, PDO::PARAM_INT);     
        if ($this->getQuery()->execute())
        {
             $participants[$idGroup] = $this->getQuery()->fetchAll(PDO::FETCH_ASSOC);
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
        $this->setQuery($sql);
        $this->bindValue(':idTournament', $idTournament, PDO::PARAM_INT); 
        $this->bindValue(':looserBracket', $looserBracket, PDO::PARAM_INT);     

        if ($this->getQuery()->execute())
        {
            $nbr_lb = $this->getQuery()->fetch(PDO::FETCH_ASSOC);
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
        $this->setQuery($sql);
        $this->bindValue('idg', $idGroup, PDO::PARAM_INT);
        $this->bindValue('ide', $idTeam, PDO::PARAM_INT);
        if ($this->getQuery()->execute())
        {
            while ($ligne = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
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
        $this->setQuery($sql);
        $this->bindValue('idg', $idGroup, PDO::PARAM_INT);
        $heure = '';
        if ($this->getQuery()->execute())
        {
            if ($nbr_manches = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
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
        $this->setQuery($sql);
        $this->bindValue('idg', $idGroup, PDO::PARAM_INT);
        if ($this->getQuery()->execute())
        {
            $totaux = $this->getQuery()->fetchAll(PDO::FETCH_ASSOC);
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
        $this->setQuery($sql);
        $this->bindValue('idg', $idGroup, PDO::PARAM_INT);
        if ($this->getQuery()->execute())
        {
            while ($ligne = $this->getQuery()->fetch(PDO::FETCH_ASSOC))
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
