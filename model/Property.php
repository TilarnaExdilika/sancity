<?php
require_once 'config/db.php';

class ModelHome extends Mastermodel
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getProperties($keyword, $city, $propertyType, $utilities)
    {
        $query = "SELECT DISTINCT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url, p.view_count
        FROM properties p
        INNER JOIN property_types pt ON p.type_id = pt.type_id
        INNER JOIN property_details pd ON p.property_id = pd.property_id
        INNER JOIN bedrooms bd ON pd.bedroom_id = bd.bedroom_id
        INNER JOIN bathrooms ba ON pd.bathroom_id = ba.bathroom_id
        LEFT JOIN locations l ON p.property_id = l.property_id
        LEFT JOIN property_utilities pu ON p.property_id = pu.property_id
        LEFT JOIN utilities u ON pu.utility_id = u.utility_id
        LEFT JOIN (
            SELECT property_id, MIN(image_url) AS image_url
            FROM property_images
            GROUP BY property_id
        ) pi ON p.property_id = pi.property_id";
    
        $conditions = array();
        $params = array();
    
        if (!empty($keyword)) {
            $conditions[] = "p.property_name LIKE ?";
            $params[] = "%$keyword%";
        }
    
        if (!empty($city)) {
            $conditions[] = "l.city = ?";
            $params[] = $city;
        }
    
        if (!empty($propertyType)) {
            $conditions[] = "p.type_id = ?";
            $params[] = $propertyType;
        }
    
        if (!empty($utilities)) {
            $utilityConditions = array();
            foreach ($utilities as $utility) {
                $utilityConditions[] = "pu.utility_id = ?";
                $params[] = $utility;
            }
            $conditions[] = "(" . implode(" OR ", $utilityConditions) . ")";
        }
    
        if (!empty($conditions)) {
            $query .= " WHERE " . implode(" AND ", $conditions);
        }
    
        $query .= " ORDER BY p.property_id DESC LIMIT 6";

        $result = $this->db->getList($query, $params);
    
        return $result;
    }
    
    

    public function getLimitedProperties($keyword, $city, $propertyType, $utilities, $offset, $limit)
    {
        $query = "SELECT p.property_id, p.property_name, p.price, p.city, pt.property_type
                FROM properties AS p
                INNER JOIN property_types AS pt ON p.property_type_id = pt.property_type_id
                WHERE 1 = 1";

        $params = array();

        if ($keyword) {
            $query .= " AND p.property_name LIKE :keyword";
            $params[':keyword'] = '%' . $keyword . '%';
        }

        if ($city) {
            $query .= " AND p.city = :city";
            $params[':city'] = $city;
        }

        if ($propertyType) {
            $query .= " AND pt.property_type = :propertyType";
            $params[':propertyType'] = $propertyType;
        }

        if (!empty($utilities)) {
            $utilityConditions = array();
            foreach ($utilities as $utility) {
                $utilityConditions[] = "p.utilities LIKE :utility" . $utility;
                $params[':utility' . $utility] = '%' . $utility . '%';
            }
            $query .= " AND (" . implode(" OR ", $utilityConditions) . ")";
        }

        $query .= " ORDER BY p.property_id DESC LIMIT :offset, :limit";
        $params[':offset'] = $offset;
        $params[':limit'] = $limit;

        $result = $this->db->getList($query, $params);

        return $result;
    }



    public function SellProperties()
    {
        $query = "SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url, p.view_count
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
        $query = "SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url, p.view_count
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
        SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url, GROUP_CONCAT(DISTINCT u1.utility_name SEPARATOR ', ') AS utilities, u2.username, u2.fullname, u2.user_address, u2.state, u2.about, u2.phone_number, u2.facebook, u2.linkedin, u2.avatar_url, p.view_count
        FROM properties p
        INNER JOIN property_types pt ON p.type_id = pt.type_id
        INNER JOIN property_details pd ON p.property_id = pd.property_id
        INNER JOIN bedrooms bd ON pd.bedroom_id = bd.bedroom_id
        INNER JOIN bathrooms ba ON pd.bathroom_id = ba.bathroom_id
        LEFT JOIN locations l ON p.property_id = l.property_id
        LEFT JOIN property_images pi ON p.property_id = pi.property_id
        LEFT JOIN property_utilities pu ON p.property_id = pu.property_id
        LEFT JOIN utilities u1 ON pu.utility_id = u1.utility_id
        LEFT JOIN users u2 ON p.user_id = u2.user_id
        WHERE p.property_id = ?
        GROUP BY p.property_id";
        
    
    
        $params = array($propertyId);
        $result = $this->db->getRow($query, $params);
    
        return $result;
    }
      
    
    
    public function getPropertyImages($propertyId)
    {
        $query = "SELECT image_url FROM property_images WHERE property_id = ?";
        $params = array($propertyId);
        $result = $this->db->getList($query, $params);
        
        return $result;
    }

    public function getSimilarProperties($propertyId, $typeId)
{
    $query = "
    SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url
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
    WHERE p.property_id != ? AND p.type_id = ?
    ORDER BY p.property_id DESC";

    $params = array($propertyId, $typeId);
    $result = $this->db->getList($query, $params);

    return $result;
}

public function incrementViewCount($propertyId)
{
    $query = 'UPDATE properties SET view_count = view_count + 1 WHERE property_id = :propertyId';
    $params = array(':propertyId' => $propertyId);
    $this->db->exec($query, $params);
}








}
?>
