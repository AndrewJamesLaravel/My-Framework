<?php

namespace App\Models;

use System\BaseModel;

class Comment extends BaseModel {

    public function getComments($id)
    {
        return $this->db->select('comments.body, comments.created_at, users.username
        FROM comments, users
        WHERE comments.user_id = users.id
        AND contact_id = :id', [':id' => $id]);
    }

    public function insert($data)
    {
        $this->db->insert('comments', $data);
    }
}