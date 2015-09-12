<?php
/**
 * Created by PhpStorm.
 * User: Garrafote
 * Date: 9/12/2015
 * Time: 2:19 PM
 */

abstract class Model
{
    protected $db;
    protected $q;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=farmboyz;charset=utf8', 'root', 'capstone');
        $this->q = array();

        $this->prepareQueries();
    }

    protected function prepareQuery($name, $query)
    {
        $this->q[$name] = $this->db->prepare($query);
    }

    protected abstract function prepareQueries();
}