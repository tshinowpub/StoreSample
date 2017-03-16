<?php

namespace StoreSample\Domain\Usecase;

use StoreSample\Domain\Repository\StoreRepositoryInterface;
use StoreSample\Domain\Entity\Store;

class GetStoresTest extends \PHPUnit_Framework_TestCase {

    /**
    * @test
    */
    public function 店舗を保存する()
    {
        $store = new Store();

        $repository = \Phake::mock(StoreRepositoryInterface::class);
        $repository->save($store);

        \Phake::verify($repository, \Phake::times(1))->save($store);
    }

    /**
    * @test
    */
    public function 店舗一覧を取得する()
    {
        $criteria = [];

        $repository = \Phake::mock(StoreRepositoryInterface::class);
        $repository->get($criteria);

        \Phake::verify($repository, \Phake::times(1))->get($criteria);
    }

}
