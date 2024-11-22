<?php

namespace App\View\Components\Welcome\WelcomeBody;

use Illuminate\View\Component;
use Illuminate\View\View;

class WelcomeBody extends Component
{
  public function __construct(
    public array $news,
  ) {}

  public function render(): View
  {
    return view('components.welcome.welcome-body.welcome-body');
  }
}
