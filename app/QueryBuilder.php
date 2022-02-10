<?php

namespace App;
use Aura\SqlQuery\QueryFactory;
use PDO;

class QueryBuilder 
{
  private $pdo;
  private $queryFactory;

  public function __construct($pdo) {
    $this->pdo = $pdo;
    $this->queryFactory = new QueryFactory('mysql');
  }

  public function getAll($table) 
  {
    $select = $this->queryFactory->newSelect();
    $select->cols(['*']);
    $select->from($table);

    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());

    return $sth->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getOne($table, $id) {

  }

  public function insert($table, $data) {
    
  }

  public function update($table, $data, $id) {
    
  }

  public function delete($table, $id) {
    
  }
}