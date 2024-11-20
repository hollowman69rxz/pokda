<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CmsModel extends CI_Model
{
    public function getAllContent()
    {
        return $this->db->get('cms_content')->result();
    }

    public function getContentById($id)
    {
        return $this->db->get_where('cms_content', ['id' => $id])->row();
    }

    public function insertContent($data)
    {
        return $this->db->insert('cms_content', $data);
    }

    public function updateContent($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('cms_content', $data);
    }

    public function deleteContent($id)
    {
        return $this->db->delete('cms_content', ['id' => $id]);
    }
}
