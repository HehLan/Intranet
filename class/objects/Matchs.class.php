<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class Matchs extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Matchs';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='matchs';
	const SQL_INSERT='INSERT INTO `matchs` (`id_match`,`id_tournoi`,`nbr_manche`,`teamParMatch`,`nom_match`,`looser_bracket`,`heure`,`id_parent`,`id_enfant1`,`id_enfant2`,`id_groupe`) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `matchs` (`id_tournoi`,`nbr_manche`,`teamParMatch`,`nom_match`,`looser_bracket`,`heure`,`id_parent`,`id_enfant1`,`id_enfant2`,`id_groupe`) VALUES (?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `matchs` SET `id_match`=?,`id_tournoi`=?,`nbr_manche`=?,`teamParMatch`=?,`nom_match`=?,`looser_bracket`=?,`heure`=?,`id_parent`=?,`id_enfant1`=?,`id_enfant2`=?,`id_groupe`=? WHERE `id_match`=?';
	const SQL_SELECT_PK='SELECT * FROM `matchs` WHERE `id_match`=?';
	const SQL_DELETE_PK='DELETE FROM `matchs` WHERE `id_match`=?';
	const FIELD_ID_MATCH=-1337019327;
	const FIELD_ID_TOURNOI=1639394540;
	const FIELD_NBR_MANCHE=1491827143;
	const FIELD_TEAMPARMATCH=-591263295;
	const FIELD_NOM_MATCH=-2099312654;
	const FIELD_LOOSER_BRACKET=2136913821;
	const FIELD_HEURE=72897707;
	const FIELD_ID_PARENT=1587903918;
	const FIELD_ID_ENFANT1=1168752899;
	const FIELD_ID_ENFANT2=1168752900;
	const FIELD_ID_GROUPE=1345867466;
	private static $PRIMARY_KEYS=array(self::FIELD_ID_MATCH);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID_MATCH);
	private static $FIELD_NAMES=array(
		self::FIELD_ID_MATCH=>'id_match',
		self::FIELD_ID_TOURNOI=>'id_tournoi',
		self::FIELD_NBR_MANCHE=>'nbr_manche',
		self::FIELD_TEAMPARMATCH=>'teamParMatch',
		self::FIELD_NOM_MATCH=>'nom_match',
		self::FIELD_LOOSER_BRACKET=>'looser_bracket',
		self::FIELD_HEURE=>'heure',
		self::FIELD_ID_PARENT=>'id_parent',
		self::FIELD_ID_ENFANT1=>'id_enfant1',
		self::FIELD_ID_ENFANT2=>'id_enfant2',
		self::FIELD_ID_GROUPE=>'id_groupe');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID_MATCH=>'idMatch',
		self::FIELD_ID_TOURNOI=>'idTournoi',
		self::FIELD_NBR_MANCHE=>'nbrManche',
		self::FIELD_TEAMPARMATCH=>'teamParMatch',
		self::FIELD_NOM_MATCH=>'nomMatch',
		self::FIELD_LOOSER_BRACKET=>'looserBracket',
		self::FIELD_HEURE=>'heure',
		self::FIELD_ID_PARENT=>'idParent',
		self::FIELD_ID_ENFANT1=>'idEnfant1',
		self::FIELD_ID_ENFANT2=>'idEnfant2',
		self::FIELD_ID_GROUPE=>'idGroupe');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID_MATCH=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ID_TOURNOI=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NBR_MANCHE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TEAMPARMATCH=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOM_MATCH=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LOOSER_BRACKET=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_HEURE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ID_PARENT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ID_ENFANT1=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ID_ENFANT2=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ID_GROUPE=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID_MATCH=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_ID_TOURNOI=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NBR_MANCHE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_TEAMPARMATCH=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOM_MATCH=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_LOOSER_BRACKET=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_HEURE=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_ID_PARENT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ID_ENFANT1=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ID_ENFANT2=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ID_GROUPE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID_MATCH=>null,
		self::FIELD_ID_TOURNOI=>0,
		self::FIELD_NBR_MANCHE=>1,
		self::FIELD_TEAMPARMATCH=>2,
		self::FIELD_NOM_MATCH=>null,
		self::FIELD_LOOSER_BRACKET=>0,
		self::FIELD_HEURE=>null,
		self::FIELD_ID_PARENT=>null,
		self::FIELD_ID_ENFANT1=>null,
		self::FIELD_ID_ENFANT2=>null,
		self::FIELD_ID_GROUPE=>null);
	private $idMatch;
	private $idTournoi;
	private $nbrManche;
	private $teamParMatch;
	private $nomMatch;
	private $looserBracket;
	private $heure;
	private $idParent;
	private $idEnfant1;
	private $idEnfant2;
	private $idGroupe;

	/**
	 * set value for id_match 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $idMatch
	 * @return Matchs
	 */
	public function &setIdMatch($idMatch) {
		$this->notifyChanged(self::FIELD_ID_MATCH,$this->idMatch,$idMatch);
		$this->idMatch=$idMatch;
		return $this;
	}

	/**
	 * get value for id_match 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdMatch() {
		return $this->idMatch;
	}

	/**
	 * set value for id_tournoi 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @param mixed $idTournoi
	 * @return Matchs
	 */
	public function &setIdTournoi($idTournoi) {
		$this->notifyChanged(self::FIELD_ID_TOURNOI,$this->idTournoi,$idTournoi);
		$this->idTournoi=$idTournoi;
		return $this;
	}

	/**
	 * get value for id_tournoi 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index
	 *
	 * @return mixed
	 */
	public function getIdTournoi() {
		return $this->idTournoi;
	}

	/**
	 * set value for nbr_manche 
	 *
	 * type:INT,size:10,default:1
	 *
	 * @param mixed $nbrManche
	 * @return Matchs
	 */
	public function &setNbrManche($nbrManche) {
		$this->notifyChanged(self::FIELD_NBR_MANCHE,$this->nbrManche,$nbrManche);
		$this->nbrManche=$nbrManche;
		return $this;
	}

	/**
	 * get value for nbr_manche 
	 *
	 * type:INT,size:10,default:1
	 *
	 * @return mixed
	 */
	public function getNbrManche() {
		return $this->nbrManche;
	}

	/**
	 * set value for teamParMatch 
	 *
	 * type:INT UNSIGNED,size:10,default:2
	 *
	 * @param mixed $teamParMatch
	 * @return Matchs
	 */
	public function &setTeamParMatch($teamParMatch) {
		$this->notifyChanged(self::FIELD_TEAMPARMATCH,$this->teamParMatch,$teamParMatch);
		$this->teamParMatch=$teamParMatch;
		return $this;
	}

	/**
	 * get value for teamParMatch 
	 *
	 * type:INT UNSIGNED,size:10,default:2
	 *
	 * @return mixed
	 */
	public function getTeamParMatch() {
		return $this->teamParMatch;
	}

	/**
	 * set value for nom_match 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $nomMatch
	 * @return Matchs
	 */
	public function &setNomMatch($nomMatch) {
		$this->notifyChanged(self::FIELD_NOM_MATCH,$this->nomMatch,$nomMatch);
		$this->nomMatch=$nomMatch;
		return $this;
	}

	/**
	 * get value for nom_match 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNomMatch() {
		return $this->nomMatch;
	}

	/**
	 * set value for looser_bracket 
	 *
	 * type:INT,size:10,default:0
	 *
	 * @param mixed $looserBracket
	 * @return Matchs
	 */
	public function &setLooserBracket($looserBracket) {
		$this->notifyChanged(self::FIELD_LOOSER_BRACKET,$this->looserBracket,$looserBracket);
		$this->looserBracket=$looserBracket;
		return $this;
	}

	/**
	 * get value for looser_bracket 
	 *
	 * type:INT,size:10,default:0
	 *
	 * @return mixed
	 */
	public function getLooserBracket() {
		return $this->looserBracket;
	}

	/**
	 * set value for heure 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $heure
	 * @return Matchs
	 */
	public function &setHeure($heure) {
		$this->notifyChanged(self::FIELD_HEURE,$this->heure,$heure);
		$this->heure=$heure;
		return $this;
	}

	/**
	 * get value for heure 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getHeure() {
		return $this->heure;
	}

	/**
	 * set value for id_parent 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $idParent
	 * @return Matchs
	 */
	public function &setIdParent($idParent) {
		$this->notifyChanged(self::FIELD_ID_PARENT,$this->idParent,$idParent);
		$this->idParent=$idParent;
		return $this;
	}

	/**
	 * get value for id_parent 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIdParent() {
		return $this->idParent;
	}

	/**
	 * set value for id_enfant1 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $idEnfant1
	 * @return Matchs
	 */
	public function &setIdEnfant1($idEnfant1) {
		$this->notifyChanged(self::FIELD_ID_ENFANT1,$this->idEnfant1,$idEnfant1);
		$this->idEnfant1=$idEnfant1;
		return $this;
	}

	/**
	 * get value for id_enfant1 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIdEnfant1() {
		return $this->idEnfant1;
	}

	/**
	 * set value for id_enfant2 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $idEnfant2
	 * @return Matchs
	 */
	public function &setIdEnfant2($idEnfant2) {
		$this->notifyChanged(self::FIELD_ID_ENFANT2,$this->idEnfant2,$idEnfant2);
		$this->idEnfant2=$idEnfant2;
		return $this;
	}

	/**
	 * get value for id_enfant2 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIdEnfant2() {
		return $this->idEnfant2;
	}

	/**
	 * set value for id_groupe 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @param mixed $idGroupe
	 * @return Matchs
	 */
	public function &setIdGroupe($idGroupe) {
		$this->notifyChanged(self::FIELD_ID_GROUPE,$this->idGroupe,$idGroupe);
		$this->idGroupe=$idGroupe;
		return $this;
	}

	/**
	 * get value for id_groupe 
	 *
	 * type:INT UNSIGNED,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getIdGroupe() {
		return $this->idGroupe;
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
			self::FIELD_ID_MATCH=>$this->getIdMatch(),
			self::FIELD_ID_TOURNOI=>$this->getIdTournoi(),
			self::FIELD_NBR_MANCHE=>$this->getNbrManche(),
			self::FIELD_TEAMPARMATCH=>$this->getTeamParMatch(),
			self::FIELD_NOM_MATCH=>$this->getNomMatch(),
			self::FIELD_LOOSER_BRACKET=>$this->getLooserBracket(),
			self::FIELD_HEURE=>$this->getHeure(),
			self::FIELD_ID_PARENT=>$this->getIdParent(),
			self::FIELD_ID_ENFANT1=>$this->getIdEnfant1(),
			self::FIELD_ID_ENFANT2=>$this->getIdEnfant2(),
			self::FIELD_ID_GROUPE=>$this->getIdGroupe());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID_MATCH=>$this->getIdMatch());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Matchs instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Matchs $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Matchs[]
	 */
	public static function findByExample(PDO $db,Matchs $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Matchs instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Matchs[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `matchs`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Matchs instances
	 *
	 * @param PDOStatement $stmt
	 * @return Matchs[]
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
	 * returns the result as an array of Matchs instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Matchs[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Matchs();
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
	 * Execute select query and return matched rows as an array of Matchs instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Matchs[]
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
		$sql='DELETE FROM `matchs`'
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
		$this->setIdMatch($result['id_match']);
		$this->setIdTournoi($result['id_tournoi']);
		$this->setNbrManche($result['nbr_manche']);
		$this->setTeamParMatch($result['teamParMatch']);
		$this->setNomMatch($result['nom_match']);
		$this->setLooserBracket($result['looser_bracket']);
		$this->setHeure($result['heure']);
		$this->setIdParent($result['id_parent']);
		$this->setIdEnfant1($result['id_enfant1']);
		$this->setIdEnfant2($result['id_enfant2']);
		$this->setIdGroupe($result['id_groupe']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Matchs
	 */
	public static function findById(PDO $db,$idMatch) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idMatch);
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
		$o=new Matchs();
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
		$stmt->bindValue(1,$this->getIdMatch());
		$stmt->bindValue(2,$this->getIdTournoi());
		$stmt->bindValue(3,$this->getNbrManche());
		$stmt->bindValue(4,$this->getTeamParMatch());
		$stmt->bindValue(5,$this->getNomMatch());
		$stmt->bindValue(6,$this->getLooserBracket());
		$stmt->bindValue(7,$this->getHeure());
		$stmt->bindValue(8,$this->getIdParent());
		$stmt->bindValue(9,$this->getIdEnfant1());
		$stmt->bindValue(10,$this->getIdEnfant2());
		$stmt->bindValue(11,$this->getIdGroupe());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdMatch()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getIdTournoi());
			$stmt->bindValue(2,$this->getNbrManche());
			$stmt->bindValue(3,$this->getTeamParMatch());
			$stmt->bindValue(4,$this->getNomMatch());
			$stmt->bindValue(5,$this->getLooserBracket());
			$stmt->bindValue(6,$this->getHeure());
			$stmt->bindValue(7,$this->getIdParent());
			$stmt->bindValue(8,$this->getIdEnfant1());
			$stmt->bindValue(9,$this->getIdEnfant2());
			$stmt->bindValue(10,$this->getIdGroupe());
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
			$this->setIdMatch($lastInsertId);
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
		$stmt->bindValue(12,$this->getIdMatch());
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
		$stmt->bindValue(1,$this->getIdMatch());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch ManchesEquipes's which this Matchs references.
	 * `matchs`.`id_match` -> `manches_equipes`.`id_match`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ManchesEquipes[]
	 */
	public function fetchManchesEquipesCollection(PDO $db, $sort=null) {
		$filter=array(ManchesEquipes::FIELD_ID_MATCH=>$this->getIdMatch());
		return ManchesEquipes::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ManchesJoueurs's which this Matchs references.
	 * `matchs`.`id_match` -> `manches_joueurs`.`id_match`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ManchesJoueurs[]
	 */
	public function fetchManchesJoueursCollection(PDO $db, $sort=null) {
		$filter=array(ManchesJoueurs::FIELD_ID_MATCH=>$this->getIdMatch());
		return ManchesJoueurs::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Matchs's which this Matchs references.
	 * `matchs`.`id_match` -> `matchs`.`id_parent`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Matchs[]
	 */
	public function fetchMatchsCollection(PDO $db, $sort=null) {
		$filter=array(Matchs::FIELD_ID_PARENT=>$this->getIdMatch());
		return Matchs::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Matchs1's which this Matchs references.
	 * `matchs`.`id_match` -> `matchs`.`id_enfant1`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Matchs1[]
	 */
	public function fetchMatchs1Collection(PDO $db, $sort=null) {
		$filter=array(Matchs1::FIELD_ID_ENFANT1=>$this->getIdMatch());
		return Matchs1::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Matchs2's which this Matchs references.
	 * `matchs`.`id_match` -> `matchs`.`id_enfant2`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Matchs2[]
	 */
	public function fetchMatchs2Collection(PDO $db, $sort=null) {
		$filter=array(Matchs2::FIELD_ID_ENFANT2=>$this->getIdMatch());
		return Matchs2::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch MatchsEquipes's which this Matchs references.
	 * `matchs`.`id_match` -> `matchs_equipes`.`id_match`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return MatchsEquipes[]
	 */
	public function fetchMatchsEquipesCollection(PDO $db, $sort=null) {
		$filter=array(MatchsEquipes::FIELD_ID_MATCH=>$this->getIdMatch());
		return MatchsEquipes::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch MatchsJoueurs's which this Matchs references.
	 * `matchs`.`id_match` -> `matchs_joueurs`.`id_match`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return MatchsJoueurs[]
	 */
	public function fetchMatchsJoueursCollection(PDO $db, $sort=null) {
		$filter=array(MatchsJoueurs::FIELD_ID_MATCH=>$this->getIdMatch());
		return MatchsJoueurs::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Tournoi which references this Matchs. Will return null in case reference is invalid.
	 * `matchs`.`id_tournoi` -> `tournoi`.`id_tournoi`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Tournoi
	 */
	public function fetchTournoi(PDO $db, $sort=null) {
		$filter=array(Tournoi::FIELD_ID_TOURNOI=>$this->getIdTournoi());
		$result=Tournoi::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Matchs which references this Matchs. Will return null in case reference is invalid.
	 * `matchs`.`id_parent` -> `matchs`.`id_match`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Matchs
	 */
	public function fetchMatchs(PDO $db, $sort=null) {
		$filter=array(Matchs::FIELD_ID_MATCH=>$this->getIdParent());
		$result=Matchs::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Matchs1 which references this Matchs. Will return null in case reference is invalid.
	 * `matchs`.`id_enfant1` -> `matchs`.`id_match`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Matchs1
	 */
	public function fetchMatchs1(PDO $db, $sort=null) {
		$filter=array(Matchs1::FIELD_ID_MATCH=>$this->getIdEnfant1());
		$result=Matchs1::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch Matchs2 which references this Matchs. Will return null in case reference is invalid.
	 * `matchs`.`id_enfant2` -> `matchs`.`id_match`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Matchs2
	 */
	public function fetchMatchs2(PDO $db, $sort=null) {
		$filter=array(Matchs2::FIELD_ID_MATCH=>$this->getIdEnfant2());
		$result=Matchs2::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Matchs');
	}

	/**
	 * get single Matchs instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Matchs
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Matchs();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Matchs from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Matchs[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Matchs') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>