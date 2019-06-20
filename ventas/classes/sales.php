<?php
    include_once('model.php');
  	  class Sales extends Model{
  		public function __construct(){ 
        parent::__construct(); 
      }

      public function detail_sale($id){
        $sql = $this->db->query("SELECT p.*, d.* FROM tbl_detalle_venta AS d LEFT JOIN tbl_producto AS p ON d.producto_id = p.producto_id WHERE d.venta_id = '$id'");
        return $sql;
      }

      public function header_sale($id){
        $sql = $this->db->query("SELECT v.*, e.* FROM tbl_venta AS v LEFT JOIN tbl_cliente AS e ON v.cliente_id = e.cliente_id WHERE v.venta_id = '$id'");
        return $sql;
      }

      public function delete_sale($id){
        $sql = $this->db->query("UPDATE tbl_venta SET venta_estado = 0 WHERE venta_id = '$id'");  
        if($sql){
          $status = 1; 
        }else{
          $status = 0;
        }
        return $status;
      }

      public function update_total($sale_id, $total){
        $this->db->query("UPDATE tbl_venta SET venta_total = '$total' WHERE venta_id = '$sale_id'");  
      }

      public function save_detail($sale_id, $d_id, $d_price, $d_amount){
        $sql = $this->db->query("INSERT INTO tbl_detalle_venta (venta_id, producto_id, detalle_precio, detalle_cantidad, detalle_estado) VALUES ('$sale_id', '$d_id', '$d_price', '$d_amount', 1)");  
        if($sql){
          $id = $this->db->insert_id; 
        }else{
          $id = 0;
        }
        return $id;
      }

      public function save_product($d_description, $d_unit, $d_price){
        $sql = $this->db->query("INSERT INTO tbl_producto (producto_descripcion, producto_unidad, producto_precio, producto_estado) VALUES ('$d_description', '$d_unit', '$d_price', 1)");
        if($sql){
          $id = $this->db->insert_id; 
        }else{
          $id = 0;
        }
        return $id;
      }

      public function save_sale($sale_date, $sale_serie, $sale_number, $entity_id){
        $sql = $this->db->query("INSERT INTO tbl_venta (venta_fecha_hora, venta_factura, venta_numero, cliente_id, venta_estado) VALUES ('$sale_date', '$sale_serie', '$sale_number', '$entity_id', 1)");
        if($sql){
          $id = $this->db->insert_id; 
        }else{
          $id = 0;
        }
        return $id;
      }

      public function save_entity($entity_rfc, $entity_social_name, $entity_address){
        $sql = $this->db->query("INSERT INTO tbl_cliente (cliente_rfc, cliente_razon_social, cliente_direccion, cliente_estado) VALUES ('$entity_rfc', '$entity_social_name', '$entity_address', 1)");
        if($sql){
          $id = $this->db->insert_id; 
        }else{
          $id = 0;
        }
        return $id;
      }

      public function get_data(){
        $sql = $this->db->query("SELECT venta_id FROM tbl_venta WHERE venta_estado > 0 ORDER BY venta_fecha_hora DESC");
        $html = '';
        foreach($sql as $row){
          $html .= $this->build_row($row['venta_id']);
        }
        return $html;
      }

      public function build_row($id){
        $sql = $this->db->query("SELECT v.*, e.* FROM tbl_venta AS v LEFT JOIN tbl_cliente AS e ON v.cliente_id = e.cliente_id WHERE v.venta_id = '$id'");
        $html = '';
        foreach($sql as $row){
          $id = $row['venta_id'];
          $date = date('d/m/Y H:i:s', strtotime($row['venta_fecha_hora'])); 
          $serie = $row['venta_factura']; 
          $number = $row['venta_numero']; 
          $rfc = $row['cliente_rfc']; 
          $social_name = $row['cliente_razon_social']; 
          $total = number_format($row['venta_total'], 2); 
          $option = '<button class="btn btn-default btn-sm" onClick="print_sale('.$id.');">
                       <i class="glyphicon glyphicon-print"></i> Imprimir
                     </button>
                     <button class="btn btn-danger btn-sm" onClick="delete_sale('.$id.');">
                       <i class="glyphicon glyphicon-remove-sign"></i> Eliminar
                     </button>';
          $html = '<tr id="reg-'.$id.'">
                    <td>'.$date.'</td>
                    <td>'.$serie.'</td>
                    <td>'.$number.'</td>
                    <td>'.$rfc.'</td>
                    <td>'.$social_name.'</td>
                    <td align="right">'.$total.'</td>
                    <td>'.$option.'</td>
                  </tr>';
        }
        return $html;
      }
    }
?>