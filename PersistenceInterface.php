<?php
/**
 * Created by PhpStorm.
 * User: lisatokunaga
 * Date: 6/19/17
 * Time: 7:01 PM
 */
interface PersistenceInterface {
    public function Count();
    public function Create($item);
    public function Read($id);
    public function ReadAll();
    public function Update($id, $values);
    public function Delete($id);

}