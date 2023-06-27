<?php
require_once 'config/db.php';

class ModelHome extends Mastermodel
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getProperties()
    {
        $query = "SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url
        FROM properties p
        INNER JOIN property_types pt ON p.type_id = pt.type_id
        INNER JOIN property_details pd ON p.property_id = pd.property_id
        INNER JOIN bedrooms bd ON pd.bedroom_id = bd.bedroom_id
        INNER JOIN bathrooms ba ON pd.bathroom_id = ba.bathroom_id
        LEFT JOIN locations l ON p.property_id = l.property_id
        LEFT JOIN (
            SELECT property_id, MIN(image_url) AS image_url
            FROM property_images
            GROUP BY property_id
        ) pi ON p.property_id = pi.property_id
        ORDER BY property_id DESC";

        $result = $this->db->getList($query);   

        return $result;
    }

    public function SellProperties()
    {
        $query = "SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url
        FROM properties p
        INNER JOIN property_types pt ON p.type_id = pt.type_id
        INNER JOIN property_details pd ON p.property_id = pd.property_id
        INNER JOIN bedrooms bd ON pd.bedroom_id = bd.bedroom_id
        INNER JOIN bathrooms ba ON pd.bathroom_id = ba.bathroom_id
        LEFT JOIN locations l ON p.property_id = l.property_id
        LEFT JOIN (
            SELECT property_id, MIN(image_url) AS image_url
            FROM property_images
            GROUP BY property_id
        ) pi ON p.property_id = pi.property_id
        WHERE p.status = 'Bán'
        ORDER BY property_id DESC";

        $result = $this->db->getList($query);   

        return $result;
    }

    public function RentProperties()
    {
        $query = "SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url
        FROM properties p
        INNER JOIN property_types pt ON p.type_id = pt.type_id
        INNER JOIN property_details pd ON p.property_id = pd.property_id
        INNER JOIN bedrooms bd ON pd.bedroom_id = bd.bedroom_id
        INNER JOIN bathrooms ba ON pd.bathroom_id = ba.bathroom_id
        LEFT JOIN locations l ON p.property_id = l.property_id
        LEFT JOIN (
            SELECT property_id, MIN(image_url) AS image_url
            FROM property_images
            GROUP BY property_id
        ) pi ON p.property_id = pi.property_id
        WHERE p.status = 'Thuê'
        ORDER BY property_id DESC";

        $result = $this->db->getList($query);   

        return $result;
    }

    public function getPropertyById($propertyId)
    {
        $query = "
        SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url, GROUP_CONCAT(DISTINCT u.utility_name SEPARATOR ', ') AS utilities
        FROM properties p
        INNER JOIN property_types pt ON p.type_id = pt.type_id
        INNER JOIN property_details pd ON p.property_id = pd.property_id
        INNER JOIN bedrooms bd ON pd.bedroom_id = bd.bedroom_id
        INNER JOIN bathrooms ba ON pd.bathroom_id = ba.bathroom_id
        LEFT JOIN locations l ON p.property_id = l.property_id
        LEFT JOIN property_images pi ON p.property_id = pi.property_id
        LEFT JOIN property_utilities pu ON p.property_id = pu.property_id
        LEFT JOIN utilities u ON pu.utility_id = u.utility_id
        WHERE p.property_id = ?
        GROUP BY p.property_id";
    
        $params = array($propertyId);
        $result = $this->db->getRow($query, $params);
    
        return $result;
    }
    


    
    

}
?>
