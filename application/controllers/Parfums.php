<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Parfums extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('parfums_model');
    }

    public function index()
    {
        $data['data_parfums']=$this->parfums_model->ambil_data();
       
		$this->load->view('Parfum/parfums',$data);
        
    } 

    public function tambah(){
        
        $data=array(
            'action'    =>site_url('Parfums/tambah_aksi'),
            'kode_parfum'       =>set_value('kode_parfum'),
            'nama_parfum'      =>set_value('nama_parfum'),
            'harga_ml'   =>set_value('harga_ml'),
            
            'button'    =>'Tambah'
            );
        $this->load->view('Parfum/parfums_form',$data);
    }

function tambah_aksi(){
        $data=array(
            
            'kode_parfum'       =>$this->input->post('kode_parfum'),
            'nama_parfum'      =>$this->input->post('nama_parfum'),
            'harga_ml'   =>$this->input->post('harga_ml')
            
            );
        $this->parfums_model->tambah_data($data);
        redirect(site_url('Parfums')); 
}

public function edit($id){
        $mhs=$this->parfums_model->ambil_data_id($id);
        $data=array(
            
            'kode_parfum'        =>set_value('kode_parfum',$mhs->kode_parfum),
            'nama_parfum'       =>set_value('nama_parfum',$mhs->nama_parfum),
            'harga_ml'      =>set_value('harga_ml',$mhs->harga_ml),
            
            'action'    =>site_url('Parfums/edit_aksi'),
            'button'    =>'Edit'
            
            );
        $this->load->view('Parfum/parfums_form',$data);

    }
    
    function edit_aksi(){

            $data=array(
            
            'kode_parfum'       =>$this->input->post('kode_parfum'),
            'nama_parfum'      =>$this->input->post('nama_parfum'),
            'harga_ml'   =>$this->input->post('harga_ml')
            
            );
            $id=$this->input->post('kode_parfum');
            $this->parfums_model->edit_data($id,$data);
            redirect(site_url('Parfums'));

    }

     public function delete($id){
        
        $this->parfums_model->hapus_data($id);
        redirect(site_url('Parfums'));
    
    }

}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */