<?php
namespace App\Support;

use IteratorAggregate;
use ArrayIterator;

class Collection implements IteratorAggregate
{

  protected $items = [];

// items = [] because we might send empty array but we dont want test to fail
  public function __construct(array $items=[])
  {
    $this->items = $items;
  }
  //this is because IA requires this
  public function getIterator()
  {
    return new ArrayIterator($this->items);
  }

  public function get()
  {
    return $this->items;
  }

  public function count()
  {
    return count($this->items);
  }
}
