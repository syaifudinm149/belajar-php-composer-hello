<?php

namespace Jerry\BelajarPhpComposerHello;

class Customer{
  public function __consturct(private string $name)
  {

  }
  public function sayHello(string $name = "Guest"): string
  {
    return "hello $name, My Name is $this->name";
  }
}