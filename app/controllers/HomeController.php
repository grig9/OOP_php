<?php

namespace App\controllers;

use League\Plates\Engine;


class HomeController 
{
  private $db;
  private $templates;

  public function __construct() 
  {
    $this->db = include __DIR__ . "/../database/start.php";
    $this->templates = new Engine('../app/views');
  }

  public function index($vars) 
  {
    $result = $this->db->getAll('books');
    echo $this->templates->render('homepage', 
      [
        'title' => 'This is a book store',
        'books' => $result,
      ]
    );
  }

  public function about() 
  {
    echo $this->templates->render('page', 
      [
        'title' => 'About',
      ]
    );
  }

  public function contacts() 
  {
    echo $this->templates->render('page', 
      [
        'title' => 'Contacts',
      ]
    );
  }

  public function show($params) 
  {
    $id = $params['id'];

    $result = $this->db->getOneById('books', $id);

    echo $this->templates->render('page', 
      [
        'title' => $result['title'],
      ]
    );
  }

  public function add_book() 
  {
    echo $this->templates->render('add_book', 
      [
        'title' => 'Add book',
      ]
    );
  }

  public function create() 
  {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];

    $this->db->insert('books', [ 
      'title' => $title,
      'author' => $author,
      'price' => $price
     ]);
    header('Location: /');
    exit();
  }

  public function edit_book($params) 
  {
    $id = $params['id'];

    $result = $this->db->getOneById('books', $id);

    echo $this->templates->render('edit_book', 
      [
        'title' => 'Edit book',
        'book' => $result,
      ]
    );
  }

  public function update_by_id($params)
  {
    $id = $params['id'];
 
    $data = [ 
      'title' => $_POST['title'],
      'author' => $_POST['author'],
      'price' => $_POST['price']
    ];
  
    $this->db->updateById('books', $data, $id);
  
    header('Location: /');
    exit();
  }

  public function delete_by_id($params)
  {
    $id = $params['id'];

    $this->db->deleteById('books', $id);
    header('Location: /');
    exit();
  }

}

