<?php
class Hng {
  public $f;
  public $l;
  public $id;
  public $lan;
  public $email;
  

  function __construct($f,$l,$id,$lan,$email) {
    $this->f = $f; 
    $this->l = $l; 
    $this->id = $id;
    $this->lan = $lan;
    $this->email = $email; 
  }
  function get_task() {
      return "Hello World, this is ".$this->f." ".$this->l." with HNGi7 ID ".$this->id." using ".$this->lan." for stage 2 task. ".$this->email;
  }
}

$eze = new Hng("Ezenwata","Destiny","HNG-05063","PHP","ezenwataobioma96@gmail.com");
echo $eze->get_task();
?>
