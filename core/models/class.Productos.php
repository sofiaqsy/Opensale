<?php

class Productos {

  private $db;
  private $EST_PROD;
  private $IMA_PROD;
  private $PRE_PROD;
  private $SIT_PROD;
  private $COD_MOD;



  public function __construct() {
    $this->db = new Conexion();
  }

  private function Errors($url) {
    try {
          if(empty($_POST['estado'] || empty($_POST['precio']))) {
            throw new Exception(1);
          } else {
            $this->COD_MOD=$this->db->real_escape_string('MA59');
            $this->EST_PROD=$this->db->real_escape_string($_POST['estado']);
            $this->IMA_PROD=$this->db->real_escape_string($_POST['campofotografia']);
            $this->PRE_PROD=$this->db->real_escape_string($_POST['precio']);
            $this->SIT_PROD=$this->db->real_escape_string('A');



          }
        } catch(Exception $error) {
          header('location: '.$url .$error->getMessage());
          exit;
        }





  }


  public function Add() {

    $this->Errors('?view=productos&mode=add&error=');
    $this->db->query("INSERT INTO producto(EST_PROD,IMA_PROD,PRE_PROD,SIT_PROD,COD_MOD) VALUES ('$this->EST_PROD','$this->IMA_PROD','$this->PRE_PROD','$this->SIT_PROD','$this->COD_MOD');");
    
    header('location: ?view=productos&mode=add&success=true');

  }

  public function Edit() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=categorias&mode=add&id='.$this->id.'&error=');
    $this->db->query("UPDATE categorias SET nombre='$this->nombre' WHERE id='$this->id';");
    header('location: ?view=categorias&mode=edit&id='.$this->id.'&success=true');
  }

  public function Delete() {
    $this->id = intval($_GET['id']);

    $q = "DELETE FROM categorias WHERE id='$this->id';";
    $q .= "DELETE FROM foros WHERE id_categoria='$this->id';";

    $sql = $this->db->query("SELECT id FROM foros WHERE id_categoria='$this->id';");
    if($this->db->rows($sql) > 0) {
      while($data = $this->db->recorrer($sql)) {
        $id_foro = $data[0];
        $q .= "DELETE FROM temas WHERE id_foro='$id_foro';";
      }
    }
    $this->db->liberar($sql);
    $this->db->multi_query($q);
    header('location: ?view=categorias');
  }

  public function __destruct() {
    $this->db->close();
  }

}

?>
