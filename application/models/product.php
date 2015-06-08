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

 /*    function validate_course($id){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('c_name', "Course Name", 'required|trim|alpha_numeric|min_length[15]');

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

     /*function delete_course($id){
        $query = "DELETE FROM courses WHERE id = $id";
        return $this->db->query($query);  
     }*/
}
?>