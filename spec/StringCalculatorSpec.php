<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('StringCalculator');
    }
    
    function it_returns_zero_when_empty_string_is_passed()
    {
        $this->add("")->shouldReturn(0);
    }

    function it_returns_three_when_one_and_two_is_passed()
    {
        $this->add("1,2")->shouldReturn(3);
    }

    function it_returns_the_sum_of_the_given_numbers()
    {
        $this->add("1,2,3")->shouldReturn(6);
        $this->add("1,2,3,4")->shouldReturn(10);
        $this->add("1,2,3,4,1000")->shouldReturn(1010);
    }
}
