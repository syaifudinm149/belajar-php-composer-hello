<?php

namespace BelajarPhpComposerHello\Belajar;

class Customer{
  public function __consturct(private string $name)
  {

  }
  public function sayHello(string $name)
  {
    return "hello $name, My Name is $this->name";
  }
}