<?php

namespace spec\MarsRover;

use MarsRover\Grid;
use PhpSpec\ObjectBehavior;

class GridSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Grid::class);
    }
}
