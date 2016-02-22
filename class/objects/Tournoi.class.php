<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class Tournoi extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Tournoi';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='tournoi';
	const SQL_INSERT='INSERT INTO `tournoi` (`id_tournoi`,`nomTournoi`,`joueurParTeam`,`reglement`,`teamParMatch`,`nombreManche`,`nombre_joueurs_qualifies`,`heure_groupe_start`,`heure_finale_start`,`duree_inter_match`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `tournoi` (`nomTournoi`,`joueurParTeam`,`reglement`,`teamParMatch`,`nombreManche`,`nombre_joueurs_qualifies`,`heure_groupe_start`,`heure_finale_start`,`duree_inter_match`) VALUES (?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `tournoi` SET `id_tournoi`=?,`nomTournoi`=?,`joueurParTeam`=?,`reglement`=?,`teamParMatch`=?,`nombreManche`=?,`nombre_joueurs_qualifies`=?,`heure_groupe_start`=?,`heure_finale_start`=?,`duree_inter_match`=? WHERE `id_tournoi`=?';
	const SQL_SELECT_PK='SELECT * FROM `tournoi` WHERE `id_tournoi`=?';
	const SQL_DELETE_PK='DELETE FROM `tournoi` WHERE `id_tournoi`=?';
	const FIELD_ID_TOURNOI=-301973110;
	const FIELD_NOMTOURNOI=602490946;
	const FIELD_JOUEURPARTEAM=1403006542;
	const FIELD_REGLEMENT=-745144083;
	const FIELD_TEAMPARMATCH=2065198815;
	const FIELD_NOMBREMANCHE=-1814354451;
	const FIELD_NOMBRE_JOUEURS_QUALIFIES=757111925;
	const FIELD_HEURE_GROUPE_START=272035419;
	const FIELD_HEURE_FINALE_START=-1554763900;
	const FIELD_DUREE_INTER_MATCH=-1700487482;
	private static $PRIMARY_KEYS=array(self::FIELD_ID_TOURNOI);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID_TOURNOI);
	private static $FIELD_NAMES=array(
		self::FIELD_ID_TOURNOI=>'id_tournoi',
		self::FIELD_NOMTOURNOI=>'nomTournoi',
		self::FIELD_JOUEURPARTEAM=>'joueurParTeam',
		self::FIELD_REGLEMENT=>'reglement',
		self::FIELD_TEAMPARMATCH=>'teamParMatch',
		self::FIELD_NOMBREMANCHE=>'nombreManche',
		self::FIELD_NOMBRE_JOUEURS_QUALIFIES=>'nombre_joueurs_qualifies',
		self::FIELD_HEURE_GROUPE_START=>'heure_groupe_start',
		self::FIELD_HEURE_FINALE_START=>'heure_finale_start',
		self::FIELD_DUREE_INTER_MATCH=>'duree_inter_match');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID_TOURNOI=>'idTournoi',
		self::FIELD_NOMTOURNOI=>'nomTournoi',
		self::FIELD_JOUEURPARTEAM=>'joueurParTeam',
		self::FIELD_REGLEMENT=>'reglement',
		self::FIELD_TEAMPARMATCH=>'teamParMatch',
		self::FIELD_NOMBREMANCHE=>'nombreManche',
		self::FIELD_NOMBRE_JOUEURS_QUALIFIES=>'nombreJoueursQualifies',
		self::FIELD_HEURE_GROUPE_START=>'heureGroupeStart',
		self::FIELD_HEURE_FINALE_START=>'heureFinaleStart',
		self::FIELD_DUREE_INTER_MATCH=>'dureeInterMatch');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID_TOURNOI=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOMTOURNOI=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_JOUEURPARTEAM=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_REGLEMENT=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TEAMPARMATCH=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOMBREMANCHE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOMBRE_JOUEURS_QUALIFIES=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_HEURE_GROUPE_START=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_HEURE_FINALE_START=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DUREE_INTER_MATCH=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID_TOURNOI=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOMTOURNOI=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_JOUEURPARTEAM=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_REGLEMENT=>array(Db2PhpEntity::JDBC_TYPE_LONGVARCHAR,65535,0,false),
		self::FIELD_TEAMPARMATCH=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOMBREMANCHE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOMBRE_JOUEURS_QUALIFIES=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_HEURE_GROUPE_START=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_HEURE_FINALE_START=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_DUREE_INTER_MATCH=>array(Db2PhpEntity::JDBC_TYPE_TIME,8,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID_TOURNOI=>null,
		self::FIELD_NOMTOURNOI=>'',
		self::FIELD_JOUEURPARTEAM=>0,
		self::FIELD_REGLEMENT=>'',
		self::FIELD_TEAMPARMATCH=>0,
		self::FIELD_NOMBREMANCHE=>0,
		self::FIELD_NOMBRE_JOUEURS_QUALIFIES=>1,
		self::FIELD_HEURE_GROUPE_START=>null,
		self::FIELD_HEURE_FINALE_START=>null,
		self::FIELD_DUREE_INTER_MATCH=>null);
	private $idTournoi;
	private $nomTournoi;
	private $joueurParTeam;
	private $reglement;
	private $teamParMatch;
	private $nombreManche;
	private $nombreJoueursQualifies;
	private $heureGroupeStart;
	private $heureFinaleStart;
	private $dureeInterMatch;

	/**
	 * set value for id_tournoi 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $idTournoi
	 * @return Tournoi
	 */
	public function &setIdTournoi($idTournoi) {
		$this->notifyChanged(self::FIELD_ID_TOURNOI,$this->idTournoi,$idTournoi);
		$this->idTournoi=$idTournoi;
		return $this;
	}

	/**
	 * get value for id_tournoi 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdTournoi() {
		return $this->idTournoi;
	}

	/**
	 * set value for nomTournoi 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $nomTournoi
	 * @return Tournoi
	 */
	public function &setNomTournoi($nomTournoi) {
		$this->notifyChanged(self::FIELD_NOMTOURNOI,$this->nomTournoi,$nomTournoi);
		$this->nomTournoi=$nomTournoi;
		return $this;
	}

	/**
	 * get value for nomTournoi 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getNomTournoi() {
		return $this->nomTournoi;
	}

	/**
	 * set value for joueurParTeam 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $joueurParTeam
	 * @return Tournoi
	 */
	public function &setJoueurParTeam($joueurParTeam) {
		$this->notifyChanged(self::FIELD_JOUEURPARTEAM,$this->joueurParTeam,$joueurParTeam);
		$this->joueurParTeam=$joueurParTeam;
		return $this;
	}

	/**
	 * get value for joueurParTeam 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getJoueurParTeam() {
		return $this->joueurParTeam;
	}

	/**
	 * set value for reglement 
	 *
	 * type:TEXT,size:65535,default:null
	 *
	 * @param mixed $reglement
	 * @return Tournoi
	 */
	public function &setReglement($reglement) {
		$this->notifyChanged(self::FIELD_REGLEMENT,$this->reglement,$reglement);
		$this->reglement=$reglement;
		return $this;
	}

	/**
	 * get value for reglement 
	 *
	 * type:TEXT,size:65535,default:null
	 *
	 * @return mixed
	 */
	public function getReglement() {
		return $this->reglement;
	}

	/**
	 * set value for teamParMatch 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $teamParMatch
	 * @return Tournoi
	 */
	public function &setTeamParMatch($teamParMatch) {
		$this->notifyChanged(self::FIELD_TEAMPARMATCH,$this->teamParMatch,$teamParMatch);
		$this->teamParMatch=$teamParMatch;
		return $this;
	}

	/**
	 * get value for teamParMatch 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getTeamParMatch() {
		return $this->teamParMatch;
	}

	/**
	 * set value for nombreManche 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @param mixed $nombreManche
	 * @return Tournoi
	 */
	public function &setNombreManche($nombreManche) {
		$this->notifyChanged(self::FIELD_NOMBREMANCHE,$this->nombreManche,$nombreManche);
		$this->nombreManche=$nombreManche;
		return $this;
	}

	/**
	 * get value for nombreManche 
	 *
	 * type:INT,size:10,default:null
	 *
	 * @return mixed
	 */
	public function getNombreManche() {
		return $this->nombreManche;
	}

	/**
	 * set value for nombre_joueurs_qualifies 
	 *
	 * type:INT,size:10,default:1
	 *
	 * @param mixed $nombreJoueursQualifies
	 * @return Tournoi
	 */
	public function &setNombreJoueursQualifies($nombreJoueursQualifies) {
		$this->notifyChanged(self::FIELD_NOMBRE_JOUEURS_QUALIFIES,$this->nombreJoueursQualifies,$nombreJoueursQualifies);
		$this->nombreJoueursQualifies=$nombreJoueursQualifies;
		return $this;
	}

	/**
	 * get value for nombre_joueurs_qualifies 
	 *
	 * type:INT,size:10,default:1
	 *
	 * @return mixed
	 */
	public function getNombreJoueursQualifies() {
		return $this->nombreJoueursQualifies;
	}

	/**
	 * set value for heure_groupe_start 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $heureGroupeStart
	 * @return Tournoi
	 */
	public function &setHeureGroupeStart($heureGroupeStart) {
		$this->notifyChanged(self::FIELD_HEURE_GROUPE_START,$this->heureGroupeStart,$heureGroupeStart);
		$this->heureGroupeStart=$heureGroupeStart;
		return $this;
	}

	/**
	 * get value for heure_groupe_start 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getHeureGroupeStart() {
		return $this->heureGroupeStart;
	}

	/**
	 * set value for heure_finale_start 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $heureFinaleStart
	 * @return Tournoi
	 */
	public function &setHeureFinaleStart($heureFinaleStart) {
		$this->notifyChanged(self::FIELD_HEURE_FINALE_START,$this->heureFinaleStart,$heureFinaleStart);
		$this->heureFinaleStart=$heureFinaleStart;
		return $this;
	}

	/**
	 * get value for heure_finale_start 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getHeureFinaleStart() {
		return $this->heureFinaleStart;
	}

	/**
	 * set value for duree_inter_match 
	 *
	 * type:TIME,size:8,default:null,nullable
	 *
	 * @param mixed $dureeInterMatch
	 * @return Tournoi
	 */
	public function &setDureeInterMatch($dureeInterMatch) {
		$this->notifyChanged(self::FIELD_DUREE_INTER_MATCH,$this->dureeInterMatch,$dureeInterMatch);
		$this->dureeInterMatch=$dureeInterMatch;
		return $this;
	}

	/**
	 * get value for duree_inter_match 
	 *
	 * type:TIME,size:8,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDureeInterMatch() {
		return $this->dureeInterMatch;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_ID_TOURNOI=>$this->getIdTournoi(),
			self::FIELD_NOMTOURNOI=>$this->getNomTournoi(),
			self::FIELD_JOUEURPARTEAM=>$this->getJoueurParTeam(),
			self::FIELD_REGLEMENT=>$this->getReglement(),
			self::FIELD_TEAMPARMATCH=>$this->getTeamParMatch(),
			self::FIELD_NOMBREMANCHE=>$this->getNombreManche(),
			self::FIELD_NOMBRE_JOUEURS_QUALIFIES=>$this->getNombreJoueursQualifies(),
			self::FIELD_HEURE_GROUPE_START=>$this->getHeureGroupeStart(),
			self::FIELD_HEURE_FINALE_START=>$this->getHeureFinaleStart(),
			self::FIELD_DUREE_INTER_MATCH=>$this->getDureeInterMatch());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID_TOURNOI=>$this->getIdTournoi());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (empty(self::$stmts[$statement][$dbInstanceId])) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}
	
	/**
	 * check if this instance exists in the database
	 *
	 * @param PDO $db
	 * @return bool
	 */
	public function existsInDatabase(PDO $db) {
		$filter=array();
		foreach ($this->getPrimaryKeyValues() as $fieldId=>$value) {
			$filter[]=new DFC($fieldId, $value, DFC::EXACT_NULLSAFE);
		}
		return 0!=count(self::findByFilter($db, $filter, true));
	}
	
	/**
	 * Update to database if exists, otherwise insert
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateInsertToDatabase(PDO $db) {
		if ($this->existsInDatabase($db)) {
			return $this->updateToDatabase($db);
		} else {
			return $this->insertIntoDatabase($db);
		}
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of Tournoi instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Tournoi $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Tournoi[]
	 */
	public static function findByExample(PDO $db,Tournoi $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of Tournoi instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Tournoi[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `tournoi`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Tournoi instances
	 *
	 * @param PDOStatement $stmt
	 * @return Tournoi[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of Tournoi instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Tournoi[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Tournoi();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of Tournoi instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Tournoi[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `tournoi`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setIdTournoi($result['id_tournoi']);
		$this->setNomTournoi($result['nomTournoi']);
		$this->setJoueurParTeam($result['joueurParTeam']);
		$this->setReglement($result['reglement']);
		$this->setTeamParMatch($result['teamParMatch']);
		$this->setNombreManche($result['nombreManche']);
		$this->setNombreJoueursQualifies($result['nombre_joueurs_qualifies']);
		$this->setHeureGroupeStart($result['heure_groupe_start']);
		$this->setHeureFinaleStart($result['heure_finale_start']);
		$this->setDureeInterMatch($result['duree_inter_match']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Tournoi
	 */
	public static function findById(PDO $db,$idTournoi) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idTournoi);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new Tournoi();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getIdTournoi());
		$stmt->bindValue(2,$this->getNomTournoi());
		$stmt->bindValue(3,$this->getJoueurParTeam());
		$stmt->bindValue(4,$this->getReglement());
		$stmt->bindValue(5,$this->getTeamParMatch());
		$stmt->bindValue(6,$this->getNombreManche());
		$stmt->bindValue(7,$this->getNombreJoueursQualifies());
		$stmt->bindValue(8,$this->getHeureGroupeStart());
		$stmt->bindValue(9,$this->getHeureFinaleStart());
		$stmt->bindValue(10,$this->getDureeInterMatch());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdTournoi()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getNomTournoi());
			$stmt->bindValue(2,$this->getJoueurParTeam());
			$stmt->bindValue(3,$this->getReglement());
			$stmt->bindValue(4,$this->getTeamParMatch());
			$stmt->bindValue(5,$this->getNombreManche());
			$stmt->bindValue(6,$this->getNombreJoueursQualifies());
			$stmt->bindValue(7,$this->getHeureGroupeStart());
			$stmt->bindValue(8,$this->getHeureFinaleStart());
			$stmt->bindValue(9,$this->getDureeInterMatch());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setIdTournoi($lastInsertId);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(11,$this->getIdTournoi());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getIdTournoi());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch EquipesTournoi's which this Tournoi references.
	 * `tournoi`.`id_tournoi` -> `equipes_tournoi`.`id_tournoi`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return EquipesTournoi[]
	 */
	public function fetchEquipesTournoiCollection(PDO $db, $sort=null) {
		$filter=array(EquipesTournoi::FIELD_ID_TOURNOI=>$this->getIdTournoi());
		return EquipesTournoi::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch GroupesPool's which this Tournoi references.
	 * `tournoi`.`id_tournoi` -> `groupes_pool`.`id_tournoi`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return GroupesPool[]
	 */
	public function fetchGroupesPoolCollection(PDO $db, $sort=null) {
		$filter=array(GroupesPool::FIELD_ID_TOURNOI=>$this->getIdTournoi());
		return GroupesPool::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Joueurtournoi's which this Tournoi references.
	 * `tournoi`.`id_tournoi` -> `joueurtournoi`.`id_tournoi`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Joueurtournoi[]
	 */
	public function fetchJoueurtournoiCollection(PDO $db, $sort=null) {
		$filter=array(Joueurtournoi::FIELD_ID_TOURNOI=>$this->getIdTournoi());
		return Joueurtournoi::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Matchs's which this Tournoi references.
	 * `tournoi`.`id_tournoi` -> `matchs`.`id_tournoi`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Matchs[]
	 */
	public function fetchMatchsCollection(PDO $db, $sort=null) {
		$filter=array(Matchs::FIELD_ID_TOURNOI=>$this->getIdTournoi());
		return Matchs::findByFilter($db, $filter, true, $sort);
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Tournoi');
	}

	/**
	 * get single Tournoi instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Tournoi
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Tournoi();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Tournoi from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Tournoi[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Tournoi') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>