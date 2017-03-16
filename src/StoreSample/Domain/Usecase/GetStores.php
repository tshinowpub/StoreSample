<?php

namespace StoreSample\Domain\Usecase;

use StoreSample\Domain\Repository\StoreRepositoryInterface;

class GetStores {

    private $repository;

    public function __construct(StoreRepositoryInterface $storeRepository)
    {
        $this->repository = $storeRepository;
    }

    public function getStores(array $criteria)
    {
        return $this->repository->get($criteria);
    }

}
