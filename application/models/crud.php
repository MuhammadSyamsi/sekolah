<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class crud extends CI_Model{

    public function Get($table){

        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan

        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array

    }



    public function GetOrder($table, $col, $order){

        $this->db->order_by($col, $order);

        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan

        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array

    }



    public function GetCount($table){

        $res=$this->db->get($table);

        return $res->num_rows();

    }



    public function GetCountWhere($table, $where){

        $res=$this->db->get_where($table, $where);

        return $res->num_rows();

    }



    public function GetCountGroup(){

        $this->db->select('kelas, COUNT(kelas) as total');

        $this->db->group_by('kelas'); 

        $this->db->order_by('kelas', 'asc'); 

        $res=$this->db->get('data_siswa');

        return $res->result_array();

    }



    public function GetWhere($table, $where){

        $res=$this->db->get_where($table, $where); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan

        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array

    }



    public function GetWhereOrder($table, $where, $col, $order){

        $this->db->order_by($col, $order);

        $res=$this->db->get_where($table, $where); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan

        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array

    }

    public function GetLike($table, $like){

        $this->db->like($like);

        $res = $this->db->get($table);

        return $res->result_array();

    }

    public function GetLimit($table, $order, $direct, $limit){

        $this->db->limit($limit);

        $this->db->order_by($order, $direct);

        $res = $query = $this->db->get($table);

        return $res->result_array();

    }

    public function GetLimitWhere($table, $order, $direct, $where, $limit){

        $this->db->limit($limit);

        $this->db->where($where);

        $this->db->order_by($order, $direct);

        $res = $query = $this->db->get($table);

        return $res->result_array();

    }

    public function Insert($table,$data){

        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel

        return $res; // Kode ini digunakan untuk mengembalikan hasil $res

    }

    public function pict($path, $input){

        $config['upload_path']          = './assets/'.$path;

        $config['allowed_types']        = 'jpg|png|jpeg';

		$config['max_size']	= '2048';

		$config['remove_space'] = TRUE;



        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))

        {

            // echo array('error' => $this->upload->display_errors());

            // $this->load->view('upload_error');

            $data = array('status' => 0, 'error' => $this->upload->display_errors());

            return $data;

        }

        else

        {   

            $dataUp = $this->upload->data();

			//for image resize

			$img_array = array();

			$img_array['image_library'] = 'gd2';

			$img_array['maintain_ratio'] = TRUE;

			$img_array['create_thumb'] = TRUE;

			//you need this setting to tell the image lib which image to process

			$img_array['source_image'] = $dataUp['full_path'];

			$img_array['width'] = 330;

			$img_array['height'] = 160;

			$this->image_lib->clear(); // added this line

			$this->image_lib->initialize($img_array); // added this line

			if (!$this->image_lib->resize()){

				$thumbErr =  $this->image_lib->display_errors();

			}else{

				$thumbErr = '';

			}

            $data = array('status' => 1, 'error' => $thumbErr);

            return $data;

            // $this->load->view('upload_success', $data);

            // return $data['file_name'];

        }

    }

    public function Update($table, $data, $where){

        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel

        return $res;

    }

    public function UpdateBatch($table, $data, $where){

        $res = $this->db->update_batch($table, $data, $where);

        return $res;

    }

    public function InsertBatch($table, $data){

        $res = $this->db->insert_batch($table, $data);

        return $res;

    }

    public function DeleteBatch($table, $where, $data)

    {

        $res = $this->db->where_in($where, $data);

        $res = $this->db->delete($table);

        return $res;

        

    }

    public function Delete($table, $where){

        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada

        return $res;

    }

    public function DeleteAll($table)

    {

        $res = $this->db->empty_table($table);

        return $res;

    }

    public function GetWhereGroupBy($group, $table, $where){

        $this->db->group_by($group);

        $res = $this->db->get_where($table, $where);

        return $res->result_array();

    }

    public function GetSelectWhereGroupBy($table, $select, $where, $group){

        $this->db->select($select);

        $this->db->group_by($group);

        $res = $this->db->get_where($table, $where);

        return $res->result_array();

    }

    // PAGING

    public function dataSort($table, $number, $offset, $order, $direct)

    {

        $this->db->order_by($order, $direct);

        $res = $this->db->get($table,$number, (($offset - 1) * $number));

        return $res->result_array();

    }

    public function dataSortWhere($table, $number, $offset, $where, $order, $direct)

    {

        $this->db->where($where);

        $this->db->order_by($order, $direct);

        $res = $this->db->get($table,$number, (($offset - 1) * $number));

        return $res->result_array();

    }

}

?>