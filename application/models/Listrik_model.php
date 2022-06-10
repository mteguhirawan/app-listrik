<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listrik_model extends CI_model
{

    public function tambahDataListrik()
    {
			$data = [
                'produk_layanan' => htmlspecialchars($this->input->post('produk_layanan', true)),
				'daya' => htmlspecialchars($this->input->post('daya', true)),
			];
			$this->db->insert('listrik', $data);

    }

    public function getListrikAll()
    {
        return $this->db->get_where('listrik')->result_array();
    }

    public function hapusDataListrik($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('listrik');
    }

    public function getListrikById($id)
    {
        $data = [
            'id' => $id
        ];
        return $this->db->get_where('listrik', $data)->row_array();
    }

        public function editDataListrik($id)
    {
        $data = [
            'produk_layanan' => htmlspecialchars($this->input->post('produk_layanan', true)),
            'daya' => htmlspecialchars($this->input->post('daya', true))
        ];
        $this->db->where('id', $id);
        $this->db->update('listrik', $data);
    }

}