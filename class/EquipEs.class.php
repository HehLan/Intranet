<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class EquipEs extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='EquipEs';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='equipes';
	const SQL_INSERT='INSERT INTO `equipes` (`id_equipes`,`nom`,`mot_de_passe`,`tag`) VALUES (?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `equipes` (`nom`,`mot_de_passe`,`tag`) VALUES (?,?,?)';
	const SQL_UPDATE='UPDATE `equipes` SET `id_equipes`=?,`nom`=?,`mot_de_passe`=?,`tag`=? WHERE `id_equipes`=?';
	const SQL_SELECT_PK='SELECT * FROM `equipes` WHERE `id_equipes`=?';
	const SQL_DELETE_PK='DELETE FROM `equipes` WHERE `id_equipes`=?';
	const FIELD_ID_EQUIPES=-1954090806;
	const FIELD_NOM=-926540356;
	const FIELD_MOT_DE_PASSE=883860179;
	const FIELD_TAG=-926535030;
	private static $PRIMARY_KEYS=array(self::FIELD_ID_EQUIPES);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID_EQUIPES);
	private static $FIELD_NAMES=array(
		self::FIELD_ID_EQUIPES=>'id_equipes',
		self::FIELD_NOM=>'nom',
		self::FIELD_MOT_DE_PASSE=>'mot_de_passe',
		self::FIELD_TAG=>'tag');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID_EQUIPES=>'idEquipEs',
		self::FIELD_NOM=>'nOm',
		self::FIELD_MOT_DE_PASSE=>'motDePasse',
		self::FIELD_TAG=>'tag');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID_EQUIPES=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_MOT_DE_PASSE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TAG=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_ID_EQUIPES=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_MOT_DE_PASSE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_TAG=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID_EQUIPES=>null,
		self::FIELD_NOM=>'',
		self::FIELD_MOT_DE_PASSE=>'',
		self::FIELD_TAG=>'');
	private $idEquipEs;
	private $nOm;
	private $motDePasse;
	private $tag;

	/**
	 * set value for id_equipes 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $idEquipEs
	 * @return EquipEs
	 */
	public function &setIdEquipEs($idEquipEs) {
		$this->notifyChanged(self::FIELD_ID_EQUIPES,$this->idEquipEs,$idEquipEs);
		$this->idEquipEs=$idEquipEs;
		return $this;
	}

	/**
	 * get value for id_equipes 
	 *
	 * type:INT UNSIGNED,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdEquipEs() {
		return $this->idEquipEs;
	}

	/**
	 * set value for nom 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $nOm
	 * @return EquipEs
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
	 * set value for mot_de_passe 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $motDePasse
	 * @return EquipEs
	 */
	public function &setMotDePasse($motDePasse) {
		$this->notifyChanged(self::FIELD_MOT_DE_PASSE,$this->motDePasse,$motDePasse);
		$this->motDePasse=$motDePasse;
		return $this;
	}

	/**
	 * get value for mot_de_passe 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getMotDePasse() {
		return $this->motDePasse;
	}

	/**
	 * set value for tag 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $tag
	 * @return EquipEs
	 */
	public function &setTag($tag) {
		$this->notifyChanged(self::FIELD_TAG,$this->tag,$tag);
		$this->tag=$tag;
		return $this;
	}

	/**
	 * get value for tag 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getTag() {
		return $this->tag;
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
			self::FIELD_ID_EQUIPES=>$this->getIdEquipEs(),
			self::FIELD_NOM=>$this->getNOm(),
			self::FIELD_MOT_DE_PASSE=>$this->getMotDePasse(),
			self::FIELD_TAG=>$this->getTag());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID_EQUIPES=>$this->getIdEquipEs());
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
	 * Match by attributes of passed example instance and return matched rows as an array of EquipEs instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param EquipEs $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return EquipEs[]
	 */
	public static function findByExample(PDO $db,EquipEs $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of EquipEs instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return EquipEs[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `equipes`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of EquipEs instances
	 *
	 * @param PDOStatement $stmt
	 * @return EquipEs[]
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
	 * returns the result as an array of EquipEs instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return EquipEs[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new EquipEs();
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
	 * Execute select query and return matched rows as an array of EquipEs instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return EquipEs[]
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
		$sql='DELETE FROM `equipes`'
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
		$this->setIdEquipEs($result['id_equipes']);
		$this->setNOm($result['nom']);
		$this->setMotDePasse($result['mot_de_passe']);
		$this->setTag($result['tag']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return EquipEs
	 */
	public static function findById(PDO $db,$idEquipEs) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idEquipEs);
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
		$o=new EquipEs();
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
		$stmt->bindValue(1,$this->getIdEquipEs());
		$stmt->bindValue(2,$this->getNOm());
		$stmt->bindValue(3,$this->getMotDePasse());
		$stmt->bindValue(4,$this->getTag());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdEquipEs()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getNOm());
			$stmt->bindValue(2,$this->getMotDePasse());
			$stmt->bindValue(3,$this->getTag());
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
			$this->setIdEquipEs($lastInsertId);
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
		$stmt->bindValue(5,$this->getIdEquipEs());
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
		$stmt->bindValue(1,$this->getIdEquipEs());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch EquipEsGroupEs's which this EquipEs references.
	 * `equipes`.`id_equipes` -> `equipes_groupes`.`id_equipe`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return EquipEsGroupEs[]
	 */
	public function fetchEquipEsGroupEsCollection(PDO $db, $sort=null) {
		$filter=array(EquipEsGroupEs::FIELD_ID_EQUIPE=>$this->getIdEquipEs());
		return EquipEsGroupEs::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch EquipEsJoUEur's which this EquipEs references.
	 * `equipes`.`id_equipes` -> `equipes_joueur`.`id_equipes`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return EquipEsJoUEur[]
	 */
	public function fetchEquipEsJoUEurCollection(PDO $db, $sort=null) {
		$filter=array(EquipEsJoUEur::FIELD_ID_EQUIPES=>$this->getIdEquipEs());
		return EquipEsJoUEur::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch EquipEsTourNOi's which this EquipEs references.
	 * `equipes`.`id_equipes` -> `equipes_tournoi`.`id_equipe`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return EquipEsTourNOi[]
	 */
	public function fetchEquipEsTourNOiCollection(PDO $db, $sort=null) {
		$filter=array(EquipEsTourNOi::FIELD_ID_EQUIPE=>$this->getIdEquipEs());
		return EquipEsTourNOi::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch ManChesEquipEs's which this EquipEs references.
	 * `equipes`.`id_equipes` -> `manches_equipes`.`id_equipe`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return ManChesEquipEs[]
	 */
	public function fetchManChesEquipEsCollection(PDO $db, $sort=null) {
		$filter=array(ManChesEquipEs::FIELD_ID_EQUIPE=>$this->getIdEquipEs());
		return ManChesEquipEs::findByFilter($db, $filter, true, $sort);
	}

	/**
	 * Fetch MatchSEquipEs's which this EquipEs references.
	 * `equipes`.`id_equipes` -> `matchs_equipes`.`id_equipe`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return MatchSEquipEs[]
	 */
	public function fetchMatchSEquipEsCollection(PDO $db, $sort=null) {
		$filter=array(MatchSEquipEs::FIELD_ID_EQUIPE=>$this->getIdEquipEs());
		return MatchSEquipEs::findByFilter($db, $filter, true, $sort);
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'EquipEs');
	}

	/**
	 * get single EquipEs instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return EquipEs
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new EquipEs();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of EquipEs from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return EquipEs[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('EquipEs') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>