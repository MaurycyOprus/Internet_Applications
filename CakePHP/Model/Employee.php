<?php
 class Employee extends AppModel {
 var $name = 'Employee';
 var $validate = array('nazwisko' => array('rule' => 'notBlank'), 'etat' => array('rule' => 'notBlank'), 'placa_pod' => array('rule' => array('range', 0, 2000), 'message' => 'Płaca powinna zawierać się w przedziale 0-2000'));
 }
?>
