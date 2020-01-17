<?php
    namespace App\Http\Resources;
//    use App\Http\Controllers\Controller;
    use Illuminate\Http\Resources\Json\JsonResource;
    class CompanyUserAPI extends JsonResource
    {
//        public function index()
//        {
//            $users = CompanyUsers::all()->sortBy('id');
//            return $users;
//        }

        public function toArray($request)
        {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ];
        }
    }
