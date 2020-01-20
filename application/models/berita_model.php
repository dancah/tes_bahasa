<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class berita_model extends CI_Model{



    function __construct()

    {

        parent::__construct();

    }

    function tampil_berita()

    {

        $q = $this->db->query("select * from berita");

        return $q;

    }

    function detail_berita($id)

    {

        $q = $this->db->query("select * from berita where id_berita=$id");

        return $q;

    }

}
