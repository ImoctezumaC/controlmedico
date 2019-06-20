<?php
    include_once('model.php');
  	  class Autocomplete extends Model{
  		public function __construct(){ 
        parent::__construct(); 
      }

      public function product_description($value){
        $sql = $this->db->query("SELECT * FROM tbl_producto WHERE producto_descripcion LIKE '%$value%' LIMIT 10");
        $data = array();
        foreach($sql as $row){
          $id = $row['producto_id'];
          $description = $row['producto_descripcion'];
          $unit = $row['producto_unidad'];
          $price = $row['producto_precio'];
          $data[] = array('value' => $description,
                          'id' => $id,
                          'unit' => $unit,
                          'price' => $price);
        }
        return json_encode($data);
      }

      public function entity_name($value){
        $sql = $this->db->query("SELECT * FROM tbl_cliente WHERE cliente_razon_social LIKE '%$value%' LIMIT 10");
        $data = array();
        foreach($sql as $row){
          $id = $row['cliente_id'];
          $social_name = $row['cliente_razon_social'];
          $rfc = $row['cliente_rfc'];
          $address = $row['cliente_direccion'];
          $data[] = array('value' => $social_name,
                          'id' => $id,
                          'rfc' => $rfc,
                          'address' => $address);
        }
        return json_encode($data);
      }

      public function entity_rfc($value){
        $sql = $this->db->query("SELECT * FROM tbl_cliente WHERE cliente_rfc LIKE '%$value%' LIMIT 10");
        $data = array();
        foreach($sql as $row){
          $id = $row['cliente_id'];
          $social_name = $row['cliente_razon_social'];
          $rfc = $row['cliente_rfc'];
          $address = $row['cliente_direccion'];
          $data[] = array('value' => $rfc,
                          'id' => $id,
                          'social_name' => $social_name,
                          'address' => $address);
        }
        return json_encode($data);
      }
    }
?>