<?php
    interface InterfaceModel
    {
        public function add();
        public function getAll();
        public function getById($id) ;
        public function update($id,$objet) ;
    }