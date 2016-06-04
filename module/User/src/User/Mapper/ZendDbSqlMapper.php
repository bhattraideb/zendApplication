<?php
	namespace User\Mapper;
	
	use User\Model\UserInterface;
	use Zend\Db\Adapter\AdapterInterface;
	use Zend\Db\Adapter\Driver\ResultInterface;
	use Zend\Db\ResultSet\HydratingResultSet;
	use Zend\Stdlib\Hydrator\HydratorInterface;
	use Zend\Db\Sql\Sql;
	use Zend\Db\Sql\Insert;
	use Zend\Db\Sql\Update;

	class ZendDbSqlMapper implements UserMapperInterface{
		protected $dbAdapter;
		protected $hydrator;
		protected $userPrototype;
		
		public function __construct(
			AdapterInterface $dbAdapter,
			HydratorInterface $hydrator,
			UserInterface $userPrototype
		){
			$this->dbAdapter = $dbAdapter;
			$this->hydrator  = $hydrator;
			$this->userPrototype = $userPrototype;
		}
		
		public function find($id){
			$sql = new Sql($this->dbAdapter);
			$select = $sql->select('tbl_users');
			$select->where(array('id = ?' => $id));
			$stmt = $sql->prepareStatementForSqlObject($select);
			$result = $stmt->execute();
			if($result instanceof ResultInterface && $result->isQueryResult() && $result->getAffectedRows()){
				return $this->hydrator->hydrate($result->current(), $this->userPrototype);
			}
			throw new \InvalidArgumentException("User with given ID:{$id} not found");
		
		}
		
		public function findAll(){
			$sql = new Sql($this->dbAdapter);
			$select = $sql->select('tbl_users');
			$stmt = $sql->prepareStatementForSqlObject($select);
			$result = $stmt->execute();
			//\Zend\Debug\Debug::dump($result); die;
			if($result instanceof ResultInterface && $result->isQueryResult()){
				//$resultSet = new ResultSet();
				$resultSet = new HydratingResultSet($this->hydrator, $this->userPrototype);
				//\Zend\Debug\Debug::dump($resultSet->initialize($result)); die;
				return $resultSet->initialize($result);
			}
			return array();			
				
		}
		
		public function save(UserInterface $userObject){
			$userData = $this->hydrator->extract($userObject);
			unset($userData['id']);
			if($userObject->getId()){
				$action = new Update('tbl_users');
				$action->setData($userData);
				$action->where(array('id = ?' => $userObject->getId()));
			}else{
				$action = new Insert('tbl_users');
				$action->values($userData);
			}
			$sql = new Sql($this->dbAdapter);
			$stmt = $sql->prepareStatementForSqlObject($action);
			$result = $stmt->execute();
			
			if($result instanceof ResultInterface){
				if($newId = $result->getGeneratedValue()){
					$userObject->setId($newId);
				}
				return $userObject;
			}
			return new \Exception("Database Error");
		}
	}
?>