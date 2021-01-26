<?php

namespace App\Services;

use App\Repositories\ExpertiseRepositoryInterface;

class ExpertiseService implements ExpertiseServiceInterface{

    protected $expertiseRepository;
    
    public function __construct(ExpertiseRepositoryInterface $expertiseRepository)
    {
        return $this->expertiseRepository = $expertiseRepository;
    }
    public function getExpertises()
    {
        return $this->expertiseRepository->getExpertises();
    }
    public function store($input)
    {
        return $this->expertiseRepository->store($input);
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
