<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class User2Service {
    use ConsumeExternalService;

    public $baseUrl;

    public function _construct(){
        $this->baseUrl = config('services.user2.base_url');
    }
    
    public function obtainUser2($id){
        return $this->performRequest('GET', "/users/{$id}");
    }

    public function createUser2($data){
        return $this->performRequest('POST', '/users', $data);
    }

    public function editUser2($data, $id){
        return $this->performRequest('PUT', "/users/{$id}", $data);
    }

    public function deleteUser2($id){
        return $this->performRequest('DELETE', "/users/{$id}");
    }
}