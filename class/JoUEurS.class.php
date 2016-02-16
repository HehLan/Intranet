<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class JoUEurS extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='JoUEurS';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='joueurs';
	const SQL_INSERT='INSERT INTO `joueurs` (`id_joueur`,`pseudo`,`password`,`id_emplacement`,`nom`,`prenom`,`email`,`sexe`,`gsm`,`paye`,`avatar`,`ecole`,`date_de_naissance`,`level`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `joueurs` (`pseudo`,`password`,`id_emplacement`,`nom`,`prenom`,`email`,`sexe`,`gsm`,`paye`,`avatar`,`ecole`,`date_de_naissance`,`level`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `joueurs` SET `id_joueur`=?,`pseudo`=?,`password`=?,`id_emplacement`=?,`nom`=?,`prenom`=?,`email`=?,`sexe`=?,`gsm`=?,`paye`=?,`avatar`=?,`ecole`=?,`date_de_naissance`=?,`level`=? WHERE `id_joueur`=?';
	const SQL_SELECT_PK='SELECT * FROM `joueurs` WHERE `id_joueur`=?';
	const SQL_DELETE_PK='DELETE FROM `joueurs` WHERE `id_joueur`=?';
	const FIELD_ID_JOUEUR=1509236905;
	const FIELD_PSEUDO=-800892533;
	const FIELD_PASSWORD=745755432;
	const FIELD_ID_EMPLACEMENT=1033279718;
	const FIELD_NOM=1205087775;
	const FIELD_PRENOM=-801822442;
	const FIELD_EMAIL=-1560197585;
	const FIELD_SEXE=-1296844852;
	const FIELD_GSM=1205081172;
	const FIELD_PAYE=-1296938038;
	const FIELD_AVATAR=-1227679450;
	const FIELD_ECOLE=-1560481955;
	const FIELD_DATE_DE_NAISSANCE=-523741941;
	const FIELD_LEVEL=-1553951209;
	private static $PRIMARY_KEYS=array(self::FIELD_ID_JOUEUR);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID_JOUEUR);
	private static $FIELD_NAMES=array(
		self::FIELD_ID_JOUEUR=>'id_joueur',
		self::FIELD_PSEUDO=>'pseudo',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_ID_EMPLACEMENT=>'id_emplacement',
		self::FIELD_NOM=>'nom',
		self::FIELD_PRENOM=>'prenom',
		self::FIELD_EMAIL=>'email',
		self::FIELD_SEXE=>'sexe',
		self::FIELD_GSM=>'gsm',
		self::FIELD_PAYE=>'paye',
		self::FIELD_AVATAR=>'avatar',
		self::FIELD_ECOLE=>'ecole',
		self::FIELD_DATE_DE_NAISSANCE=>'date_de_naissance',
		self::FIELD_LEVEL=>'level');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID_JOUEUR=>'idJoUEur',
		self::FIELD_PSEUDO=>'pseudo',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_ID_EMPLACEMENT=>'idEmplacement',
		self::FIELD_NOM=>'nOm',
		self::FIELD_PRENOM=>'pRenoM',
		self::FIELD_EMAIL=>'email',
		self::FIELD_SEXE=>'sexE',
		self::FIELD_GSM=>'gSm',
		self::FIELD_PAYE=>'payE',
		self::FIELD_AVATAR=>'avatar',
		self::FIELD_ECOLE=>'ecolE',
		self::FIELD_DATE_DE_NAISSANCE=>'dateDeNaISsaNcE',
		self::FIELD_LEVEL=>'level');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID_JOUEUR=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_PSEUDO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ID_EMPLACEMENT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PRENOM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SEXE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_GSM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PAYE=>Db2PhpEntity::PHP_TYPE_BOOL,
		self::FIELD_AVATAR=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ECOLE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DATE_DE_NAISSANCE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LEVEL=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID_JOUEUR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_PSEUDO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,80,0,false),
		self::FIELD_PASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_ID_EMPLACEMENT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_NOM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_PRENOM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_SEXE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_GSM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_PAYE=>array(Db2PhpEntity::JDBC_TYPE_BIT,0,0,false),
		self::FIELD_AVATAR=>array(Db2PhpEntity::JDBC_TYPE_LONGVARBINARY,65535,0,true),
		self::FIELD_ECOLE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_DATE_DE_NAISSANCE=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_LEVEL=>array(Db2PhpEntity::JDBC_TYPE_SMALLINT,5,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID_JOUEUR=>null,
		self::FIELD_PSEUDO=>'',
		self::FIELD_PASSWORD=>'',
		self::FIELD_ID_EMPLACEMENT=>null,
		self::FIELD_NOM=>'',
		self::FIELD_PRENOM=>'',
		self::FIELD_EMAIL=>'',
		self::FIELD_SEXE=>'',
		self::FIELD_GSM=>'',
		self::FIELD_PAYE=>'0',
		self::FIELD_AVATAR=>null,
		self::FIELD_ECOLE=>null,
		self::FIELD_DATE_DE_NAISSANCE=>null,
		self::FIELD_LEVEL=>5);
	private $idJoUEur;
	private $pseudo;
	private $password;
	private $idEmplacement;
	private $nOm;
	private $pRenoM;
	private $email;
	private $sexE;
	private $gSm;
	private $payE;
	private $avatar;
	private $ecolE;
	private $dateDeNaISsaNcE;
	private $level;

	/**
	 * set value for id_joueur 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $idJoUEur
	 * @return JoUEurS
	 */
	public function &setIdJoUEur($idJoUEur) {
		$this->notifyChanged(self::FIELD_ID_JOUEUR,$this->idJoUEur,$idJoUEur);
		$this->idJoUEur=$idJoUEur;
		return $this;
	}

	/**
	 * get value for id_joueur 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdJoUEur() {
		return $this->idJoUEur;
	}

	/**
	 * set value for pseudo 
	 *
	 * type:VARCHAR,size:80,default:null
	 *
	 * @param mixed $pseudo
	 * @return JoUEurS
	 */
	public function &setPseudo($pseudo) {
		$this->notifyChanged(self::FIELD_PSEUDO,$this->pseudo,$pseudo);
		$this->pseudo=$pseudo;
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
	 * @return JoUEurS
	 */
	public function &setPassword($password) {
		$this->notifyChanged(self::FIELD_PASSWORD,$this->password,$password);
		$this->password=$password;
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
	 * @return JoUEurS
	 */
	public function &setIdEmplacement($idEmplacement) {
		$this->notifyChanged(self::FIELD_ID_EMPLACEMENT,$this->idEmplacement,$idEmplacement);
		$this->idEmplacement=$idEmplacement;
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
	 * @param mixed $nOm
	 * @return JoUEurS
	 */
	public function &setNOm($nOm) {
		$this->notifyChanged(self::FIELD_NOM,$this->nOm,$nOm);
		$this->nOm=$nOm;
		return $this;
	}

	/**
	 * get value for nom 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getNOm() {
		return $this->nOm;
	}

	/**
	 * set value for prenom 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $pRenoM
	 * @return JoUEurS
	 */
	public function &setPRenoM($pRenoM) {
		$this->notifyChanged(self::FIELD_PRENOM,$this->pRenoM,$pRenoM);
		$this->pRenoM=$pRenoM;
		return $this;
	}

	/**
	 * get value for prenom 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getPRenoM() {
		return $this->pRenoM;
	}

	/**
	 * set value for email 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $email
	 * @return JoUEurS
	 */
	public function &setEmail($email) {
		$this->notifyChanged(self::FIELD_EMAIL,$this->email,$email);
		$this->email=$email;
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
	 * @param mixed $sexE
	 * @return JoUEurS
	 */
	public function &setSexE($sexE) {
		$this->notifyChanged(self::FIELD_SEXE,$this->sexE,$sexE);
		$this->sexE=$sexE;
		return $this;
	}

	/**
	 * get value for sexe 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getSexE() {
		return $this->sexE;
	}

	/**
	 * set value for gsm 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $gSm
	 * @return JoUEurS
	 */
	public function &setGSm($gSm) {
		$this->notifyChanged(self::FIELD_GSM,$this->gSm,$gSm);
		$this->gSm=$gSm;
		return $this;
	}

	/**
	 * get value for gsm 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getGSm() {
		return $this->gSm;
	}

	/**
	 * set value for paye 
	 *
	 * type:BIT,size:0,default:0
	 *
	 * @param mixed $payE
	 * @return JoUEurS
	 */
	public function &setPayE($payE) {
		$this->notifyChanged(self::FIELD_PAYE,$this->payE,$payE);
		$this->payE=$payE;
		return $this;
	}

	/**
	 * get value for paye 
	 *
	 * type:BIT,size:0,default:0
	 *
	 * @return mixed
	 */
	public function getPayE() {
		return $this->payE;
	}

	/**
	 * set value for avatar 
	 *
	 * type:BLOB,size:65535,default:null,nullable
	 *
	 * @param mixed $avatar
	 * @return JoUEurS
	 */
	public function &setAvatar($avatar) {
		$this->notifyChanged(self::FIELD_AVATAR,$this->avatar,$avatar);
		$this->avatar=$avatar;
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
	 * @param mixed $ecolE
	 * @return JoUEurS
	 */
	public function &setEcolE($ecolE) {
		$this->notifyChanged(self::FIELD_ECOLE,$this->ecolE,$ecolE);
		$this->ecolE=$ecolE;
		return $this;
	}

	/**
	 * get value for ecole 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEcolE() {
		return $this->ecolE;
	}

	/**
	 * set value for date_de_naissance 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $dateDeNaISsaNcE
	 * @return JoUEurS
	 */
	public function &setDateDeNaISsaNcE($dateDeNaISsaNcE) {
		$this->notifyChanged(self::FIELD_DATE_DE_NAISSANCE,$this->dateDeNaISsaNcE,$dateDeNaISsaNcE);
		$this->dateDeNaISsaNcE=$dateDeNaISsaNcE;
		return $this;
	}

	/**
	 * get value for date_de_naissance 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDateDeNaISsaNcE() {
		return $this->dateDeNaISsaNcE;
	}

	/**
	 * set value for level 
	 *
	 * type:SMALLINT,size:5,default:5
	 *
	 * @param mixed $level
	 * @return JoUEurS
	 */
	public function &setLevel($level) {
		$this->notifyChanged(self::FIELD_LEVEL,$this->level,$level);
		$this->level=$level;
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
			self::FIELD_ID_JOUEUR=>$this->getIdJoUEur(),
			self::FIELD_PSEUDO=>$this->getPseudo(),
			self::FIELD_PASSWORD=>$this->getPassword(),
			self::FIELD_ID_EMPLACEMENT=>$this->getIdEmplacement(),
			self::FIELD_NOM=>$this->getNOm(),
			self::FIELD_PRENOM=>$this->getPRenoM(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_SEXE=>$this->getSexE(),
			self::FIELD_GSM=>$this->getGSm(),
			self::FIELD_PAYE=>$this->getPayE(),
			self::FIELD_AVATAR=>$this->getAvatar(),
			self::FIELD_ECOLE=>$this->getEcolE(),
			self::FIELD_DATE_DE_NAISSANCE=>$this->getDateDeNaISsaNcE(),
			self::FIELD_LEVEL=>$this->getLevel());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID_JOUEUR=>$this->getIdJoUEur());
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
	 * Match by attributes of passed example instance and return matched rows as an array of JoUEurS instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param JoUEurS $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return JoUEurS[]
	 */
	public static function findByExample(PDO $db,JoUEurS $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of JoUEurS instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return JoUEurS[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `joueurs`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of JoUEurS instances
	 *
	 * @param PDOStatement $stmt
	 * @return JoUEurS[]
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
	 * returns the result as an array of JoUEurS instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return JoUEurS[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new JoUEurS();
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
	 * Execute select query and return matched rows as an array of JoUEurS instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return JoUEurS[]
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
		$sql='DELETE FROM `joueurs`'
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
		$this->setIdJoUEur($result['id_joueur']);
		$this->setPseudo($result['pseudo']);
		$this->setPassword($result['password']);
		$this->setIdEmplacement($result['id_emplacement']);
		$this->setNOm($result['nom']);
		$this->setPRenoM($result['prenom']);
		$this->setEmail($result['email']);
		$this->setSexE($result['sexe']);
		$this->setGSm($result['gsm']);
		$this->setPayE($result['paye']);
		$this->setAvatar($result['avatar']);
		$this->setEcolE($result['ecole']);
		$this->setDateDeNaISsaNcE($result['date_de_naissance']);
		$this->setLevel($result['level']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return JoUEurS
	 */
	public static function findById(PDO $db,$idJoUEur) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idJoUEur);
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
		$o=new JoUEurS();
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
		$stmt->bindValue(1,$this->getIdJoUEur());
		$stmt->bindValue(2,$this->getPseudo());
		$stmt->bindValue(3,$this->getPassword());
		$stmt->bindValue(4,$this->getIdEmplacement());
		$stmt->bindValue(5,$this->getNOm());
		$stmt->bindValue(6,$this->getPRenoM());
		$stmt->bindValue(7,$this->getEmail());
		$stmt->bindValue(8,$this->getSexE());
		$stmt->bindValue(9,$this->getGSm());
		$stmt->bindValue(10,$this->getPayE());
		$stmt->bindValue(11,$this->getAvatar());
		$stmt->bindValue(12,$this->getEcolE());
		$stmt->bindValue(13,$this->getDateDeNaISsaNcE());
		$stmt->bindValue(14,$this->getLevel());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdJoUEur()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getPseudo());
			$stmt->bindValue(2,$this->getPassword());
			$stmt->bindValue(3,$this->getIdEmplacement());
			$stmt->bindValue(4,$this->getNOm());
			$stmt->bindValue(5,$this->getPRenoM());
			$stmt->bindValue(6,$this->getEmail());
			$stmt->bindValue(7,$this->getSexE());
			$stmt->bindValue(8,$this->getGSm());
			$stmt->bindValue(9,$this->getPayE());
			$stmt->bindValue(10,$this->getAvatar());
			$stmt->bindValue(11,$this->getEcolE());
			$stmt->bindValue(12,$this->getDateDeNaISsaNcE());
			$stmt->bindValue(13,$this->getLevel());
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
			$this->setIdJoUEur($lastInsertId);
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
		$stmt->bindValue(15,$this->getIdJoUEur());
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
		$stmt->bindValue(1,$this->getIdJoUEur());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch EquipEsJoUEur's which this JoUEurS references.
	 * `joueurs`.`id_joueur` -> `equipes_joueur`.`id_joueur`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return EquipEsJoUEur[]
	 */
	public function fetchEquipEsJoUEurCollection(PDO $db, $sort=null) {
		$filter=array(EquipEsJoUEur::FIELD_ID_JOUEUR=>$this->getIdJoUEur());
		return EquipEsJoUEur::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch JoUEurSGroupEs's which this JoUEurS references.
	 * `joueurs`.`id_joueur` -> `joueurs_groupes`.`id_joueur`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return JoUEurSGroupEs[]
	 */
	public function fetchJoUEurSGroupEsCollection(PDO $db, $sort=null) {
		$filter=array(JoUEurSGroupEs::FIELD_ID_JOUEUR=>$this->getIdJoUEur());
		return JoUEurSGroupEs::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch JoUeurTourNOi's which this JoUEurS references.
	 * `joueurs`.`id_joueur` -> `joueurtournoi`.`id_joueur`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return JoUeurTourNOi[]
	 */
	public function fetchJoUeurTourNOiCollection(PDO $db, $sort=null) {
		$filter=array(JoUeurTourNOi::FIELD_ID_JOUEUR=>$this->getIdJoUEur());
		return JoUeurTourNOi::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ManChesJoUEurS's which this JoUEurS references.
	 * `joueurs`.`id_joueur` -> `manches_joueurs`.`id_joueur`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ManChesJoUEurS[]
	 */
	public function fetchManChesJoUEurSCollection(PDO $db, $sort=null) {
		$filter=array(ManChesJoUEurS::FIELD_ID_JOUEUR=>$this->getIdJoUEur());
		return ManChesJoUEurS::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch MatchSJoUEurS's which this JoUEurS references.
	 * `joueurs`.`id_joueur` -> `matchs_joueurs`.`id_joueur`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return MatchSJoUEurS[]
	 */
	public function fetchMatchSJoUEurSCollection(PDO $db, $sort=null) {
		$filter=array(MatchSJoUEurS::FIELD_ID_JOUEUR=>$this->getIdJoUEur());
		return MatchSJoUEurS::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch Emplacement which references this JoUEurS. Will return null in case reference is invalid.
	 * `joueurs`.`id_emplacement` -> `emplacement`.`id_emplacement`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Emplacement
	 */
	public function fetchEmplacement(PDO $db, $sort=null) {
		$filter=array(Emplacement::FIELD_ID_EMPLACEMENT=>$this->getIdEmplacement());
		$result=Emplacement::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'JoUEurS');
	}

	/**
	 * get single JoUEurS instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return JoUEurS
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new JoUEurS();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of JoUEurS from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return JoUEurS[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('JoUEurS') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>