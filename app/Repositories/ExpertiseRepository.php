<?php

namespace App\Repositories;

use App\Models\Expertise;

class ExpertiseRepository implements ExpertiseRepositoryInterface{
    public function getExpertises()
    {
        return Expertise::all();
    }

    public function store($input)
    {
        var_dump($input);
        try{
            $data = array(
                'name' => $input['name']
            );
            Expertise::create($data);
            return true;
        } catch(\Exception $e){
            return false;
        }
        
    }

    public function getExpertise($id)
    {
        
    }
    public function update($input, $id)
    {
        
    }
    public function delete($id)
    {

    }
}