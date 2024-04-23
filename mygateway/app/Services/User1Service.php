<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class User1Service {
    use ConsumeExternalService;

    public $baseUrl;

    public function _construct(){
        $this->baseUrl = config('services.user1.base_url');
    }

    public function obtainUser1($id){
        return $this->performRequest('GET', "/users/{$id}");
    }

    public function createUser1($data){
        return $this->performRequest('POST', '/users', $data);
    }

    public function editUser1($data, $id){
        return $this->performRequest('PUT', "/users/{$id}", $data);
    }

    public function deleteUser1($id){
        return $this->performRequest('DELETE', "/users/{$id}");
    }
}
