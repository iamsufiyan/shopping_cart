<?php

class Product_model extends CI_Model {

    function get_all_product() {

        $sql = "SELECT * FROM product";
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query;
        }
    }

}
