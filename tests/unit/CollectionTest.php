<?php

class CollectionTest extends \PHPUnit_Framework_TestCase
{

  public function testEmptyNewCollectionReturnsNoItems($value='')
  {
    $collection = new \App\Support\Collection;

    $this->assertEmpty($collection->get());

  }

  public function testCountIsCorrect()
  {
    $collection = new \App\Support\Collection([
      'one', 'two', 'three'
    ]);

    $this->assertEquals(3, $collection->count());
  }

  public function itemsReturnedMatchItemsPassedIn()
  {
    $collection = new \App\Support\Collcetion([
      'one', 'two'
    ]);

    $this->assertCount(2, $collection->get());
    $this->assertEquals($collection->get()[0], 'one');
    $this->assertEquals($collection->get()[1], 'two');
  }

  public function testInstanceOfIteratorAggregate()
  {
    $collection = new \App\Support\Collection();
    $this->assertInstanceOf(IteratorAggregate::class, $collection);
  }

  public function testCollectionCanBeIterated()
  {
    $collection = new \App\Support\Collection([
      'one', 'two', 'three'
    ]);

    $items = [];

    foreach ($collection as $item) {
      $items[] = $item;
    }

    $this->assertCount(3, $items);
  }
}
