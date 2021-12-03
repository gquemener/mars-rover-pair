<?php

namespace spec\MarsRover;

use MarsRover\MarsRover;
use PhpSpec\ObjectBehavior;

class MarsRoverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MarsRover::class);
    }
}
