<?php

namespace StoreSample\Domain\Repository;

use StoreSample\Domain\Entity\Store;

interface StoreRepositoryInterface {

    public function save(Store $store);

    public function get(array $criteria);
}
