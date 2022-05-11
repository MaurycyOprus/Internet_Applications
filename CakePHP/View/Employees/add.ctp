<h1>Dodaj pracownika</h1>
<?php
 $options = array('dyrektor' =>'dyrektor', 'profesor' =>'profesor', 'adiunkt' =>'adiunkt', 'sekretarka' =>'sekretarka', 'asystent' =>'asystent', 'doktorant' =>'doktorant');
 echo $this->Form->create('Employee');
 echo $this->Form->input('id');
 echo $this->Form->input('nazwisko');
 echo $this->Form->input('imie');
 echo $this->Form->input('etat',
 array('options'=>$options, 'default'=>'asystent'));
 echo $this->Form->input('id_szefa');
 echo $this->Form->input('zatrudniony');
 echo $this->Form->input('placa_pod');
 echo $this->Form->input('placa_dod');
 echo $this->Form->input('id_zesp');
 echo $this->Form->end('Zapisz');
?>
