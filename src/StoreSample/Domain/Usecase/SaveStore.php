<?php

namespace StoreSample\Domain\Usecase;

use StoreSample\Domain\Repository\StoreRepositoryInterface;
use StoreSample\Domain\Entity\Store;

class SaveStore {

    private $repository;

    public function __construct(StoreRepositoryInterface $storeRepository)
    {
        $this->repository = $storeRepository;
    }

    public function saveStore(Store $store)
    {
        $this->repository->save($store);
    }

}
