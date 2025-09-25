<?php

namespace DayasKr\Broui\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
  public string $type;

  public function __construct(string $type = 'button')
  {
    $this->type = $type;
  }

  public function render()
  {
    return view('ui::components.button');
  }
}
