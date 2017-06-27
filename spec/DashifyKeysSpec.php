<?php

namespace spec\RadHam;

use RadHam\DashifyKeys;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DashifyKeysSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DashifyKeys::class);
    }

    function it_factories_an_array()
    {
        self::factory([])->shouldBeLike([]);
    }

    function it_should_dashify_a_key()
    {
        self::factory(['hello_world' => 'hi'])->shouldBeLike(['hello-world' => 'hi']);
    }
}
