<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class Emplacement extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Emplacement';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='emplacement';
	const SQL_INSERT='INSERT INTO `emplacement` (`id_emplacement`,`numero`,`top`,`xy_left`,`width`,`height`) VALUES (?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `emplacement` (`numero`,`top`,`xy_left`,`width`,`height`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `emplacement` SET `id_emplacement`=?,`numero`=?,`top`=?,`xy_left`=?,`width`=?,`height`=? WHERE `id_emplacement`=?';
	const SQL_SELECT_PK='SELECT * FROM `emplacement` WHERE `id_emplacement`=?';
	const SQL_DELETE_PK='DELETE FROM `emplacement` WHERE `id_emplacement`=?';
	const FIELD_ID_EMPLACEMENT=-979160854;
	const FIELD_NUMERO=714087405;
	const FIELD_TOP=1966507812;
	const FIELD_XY_LEFT=1048758484;
	const FIELD_WIDTH=30981077;
	const FIELD_HEIGHT=527418616;
	private static $PRIMARY_KEYS=array(self::FIELD_ID_EMPLACEMENT);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_ID_EMPLACEMENT);
	private static $FIELD_NAMES=array(
		self::FIELD_ID_EMPLACEMENT=>'id_emplacement',
		self::FIELD_NUMERO=>'numero',
		self::FIELD_TOP=>'top',
		self::FIELD_XY_LEFT=>'xy_left',
		self::FIELD_WIDTH=>'width',
		self::FIELD_HEIGHT=>'height');
	private static $PROPERTY_NAMES=array(
		self::FIELD_ID_EMPLACEMENT=>'idEmplacement',
		self::FIELD_NUMERO=>'numero',
		self::FIELD_TOP=>'top',
		self::FIELD_XY_LEFT=>'xyLeft',
		self::FIELD_WIDTH=>'width',
		self::FIELD_HEIGHT=>'height');
	private static $PROPERTY_TYPES=array(
		self::FIELD_ID_EMPLACEMENT=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NUMERO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_TOP=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_XY_LEFT=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_WIDTH=>Db2PhpEntity::PHP_TYPE_FLOAT,
		self::FIELD_HEIGHT=>Db2PhpEntity::PHP_TYPE_FLOAT);
	private static $FIELD_TYPES=array(
		self::FIELD_ID_EMPLACEMENT=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NUMERO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,false),
		self::FIELD_TOP=>array(Db2PhpEntity::JDBC_TYPE_REAL,12,0,true),
		self::FIELD_XY_LEFT=>array(Db2PhpEntity::JDBC_TYPE_REAL,12,0,true),
		self::FIELD_WIDTH=>array(Db2PhpEntity::JDBC_TYPE_REAL,12,0,true),
		self::FIELD_HEIGHT=>array(Db2PhpEntity::JDBC_TYPE_REAL,12,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_ID_EMPLACEMENT=>null,
		self::FIELD_NUMERO=>'',
		self::FIELD_TOP=>null,
		self::FIELD_XY_LEFT=>null,
		self::FIELD_WIDTH=>null,
		self::FIELD_HEIGHT=>null);
	private $idEmplacement;
	private $numero;
	private $top;
	private $xyLeft;
	private $width;
	private $height;

	/**
	 * set value for id_emplacement 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $idEmplacement
	 * @return Emplacement
	 */
	public function &setIdEmplacement($idEmplacement) {
		$this->notifyChanged(self::FIELD_ID_EMPLACEMENT,$this->idEmplacement,$idEmplacement);
		$this->idEmplacement=$idEmplacement;
		return $this;
	}

	/**
	 * get value for id_emplacement 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdEmplacement() {
		return $this->idEmplacement;
	}

	/**
	 * set value for numero 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @param mixed $numero
	 * @return Emplacement
	 */
	public function &setNumero($numero) {
		$this->notifyChanged(self::FIELD_NUMERO,$this->numero,$numero);
		$this->numero=$numero;
		return $this;
	}

	/**
	 * get value for numero 
	 *
	 * type:VARCHAR,size:255,default:null
	 *
	 * @return mixed
	 */
	public function getNumero() {
		return $this->numero;
	}

	/**
	 * set value for top 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @param mixed $top
	 * @return Emplacement
	 */
	public function &setTop($top) {
		$this->notifyChanged(self::FIELD_TOP,$this->top,$top);
		$this->top=$top;
		return $this;
	}

	/**
	 * get value for top 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTop() {
		return $this->top;
	}

	/**
	 * set value for xy_left 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @param mixed $xyLeft
	 * @return Emplacement
	 */
	public function &setXyLeft($xyLeft) {
		$this->notifyChanged(self::FIELD_XY_LEFT,$this->xyLeft,$xyLeft);
		$this->xyLeft=$xyLeft;
		return $this;
	}

	/**
	 * get value for xy_left 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getXyLeft() {
		return $this->xyLeft;
	}

	/**
	 * set value for width 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @param mixed $width
	 * @return Emplacement
	 */
	public function &setWidth($width) {
		$this->notifyChanged(self::FIELD_WIDTH,$this->width,$width);
		$this->width=$width;
		return $this;
	}

	/**
	 * get value for width 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * set value for height 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @param mixed $height
	 * @return Emplacement
	 */
	public function &setHeight($height) {
		$this->notifyChanged(self::FIELD_HEIGHT,$this->height,$height);
		$this->height=$height;
		return $this;
	}

	/**
	 * get value for height 
	 *
	 * type:FLOAT,size:12,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getHeight() {
		return $this->height;
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
			self::FIELD_ID_EMPLACEMENT=>$this->getIdEmplacement(),
			self::FIELD_NUMERO=>$this->getNumero(),
			self::FIELD_TOP=>$this->getTop(),
			self::FIELD_XY_LEFT=>$this->getXyLeft(),
			self::FIELD_WIDTH=>$this->getWidth(),
			self::FIELD_HEIGHT=>$this->getHeight());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_ID_EMPLACEMENT=>$this->getIdEmplacement());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Emplacement instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Emplacement $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Emplacement[]
	 */
	public static function findByExample(PDO $db,Emplacement $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Emplacement instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Emplacement[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `emplacement`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Emplacement instances
	 *
	 * @param PDOStatement $stmt
	 * @return Emplacement[]
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
	 * returns the result as an array of Emplacement instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Emplacement[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Emplacement();
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
	 * Execute select query and return matched rows as an array of Emplacement instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Emplacement[]
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
		$sql='DELETE FROM `emplacement`'
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
		$this->setIdEmplacement($result['id_emplacement']);
		$this->setNumero($result['numero']);
		$this->setTop($result['top']);
		$this->setXyLeft($result['xy_left']);
		$this->setWidth($result['width']);
		$this->setHeight($result['height']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Emplacement
	 */
	public static function findById(PDO $db,$idEmplacement) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idEmplacement);
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
		$o=new Emplacement();
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
		$stmt->bindValue(1,$this->getIdEmplacement());
		$stmt->bindValue(2,$this->getNumero());
		$stmt->bindValue(3,$this->getTop());
		$stmt->bindValue(4,$this->getXyLeft());
		$stmt->bindValue(5,$this->getWidth());
		$stmt->bindValue(6,$this->getHeight());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdEmplacement()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getNumero());
			$stmt->bindValue(2,$this->getTop());
			$stmt->bindValue(3,$this->getXyLeft());
			$stmt->bindValue(4,$this->getWidth());
			$stmt->bindValue(5,$this->getHeight());
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
			$this->setIdEmplacement($lastInsertId);
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
		$stmt->bindValue(7,$this->getIdEmplacement());
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
		$stmt->bindValue(1,$this->getIdEmplacement());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch Joueurs's which this Emplacement references.
	 * `emplacement`.`id_emplacement` -> `joueurs`.`id_emplacement`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return Joueurs[]
	 */
	public function fetchJoueursCollection(PDO $db, $sort=null) {
		$filter=array(Joueurs::FIELD_ID_EMPLACEMENT=>$this->getIdEmplacement());
		return Joueurs::findByFilter($db, $filter, true, $sort);
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Emplacement');
	}

	/**
	 * get single Emplacement instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Emplacement
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Emplacement();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Emplacement from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Emplacement[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Emplacement') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>