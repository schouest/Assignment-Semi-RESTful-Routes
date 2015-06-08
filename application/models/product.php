<?php
class product extends CI_Model {
     function get_all_product()
     {
         return $this->db->query("SELECT * FROM products ORDER BY date_added DESC")->result_array();
     }
     
     function get_product_by_id($id)
     {   
         return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();
     }

 /*    function validate_product($id){
        $this->load->library('form_validation');

        if($this->form_validation->run()===FALSE){
            return FALSE;
        }
        else
            return TRUE;
     }*/

     function add_product($product_info)
     {   
         $query = "INSERT INTO products (name, description, price, date_added) VALUES (?,?,?,?)";
         $values = array($product_info['name'], $product_info['descr'], $product_info['price'], date("Y-m-d, H:i:s")); 
         return $this->db->query($query, $values);
     }

     function delete_product($id){
        $query = "DELETE FROM products WHERE id = $id";
        return $this->db->query($query);  
     }

     function update_product($product_info){
        $id = $product_info['idnumber'];
        $query = "UPDATE products SET name=?, description=?, price=? WHERE id=$id";
        $values = array($product_info['name'], $product_info['descr'], $product_info['price']); 
        return $this->db->query($query, $values);
     }
}
?>