<?php

namespace Qafoo;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    public function testCorrectQuestionAnswer()
    {
        $exampleSubject = new Example();

        // Simple equals assertion, most common others are:
        // assertSame() (important for objects!), assertTrue/False(), assertNull(), ...
        $this->assertEquals(
            42,
            $exampleSubject->getQuestionAnswer()
        );
    }

    public function testAnExampleForMocking()
    {
        // Create a mock
        $exampleMock = $this->getMockBuilder('Qafoo\\Example')
            ->disableOriginalConstructor()
            ->getMock();

        // Can also be ->excactly($n), ->never(), ...
        $exampleMock->expects($this->any())
            ->method('getQuestionAnswer')
            // Can also be ->throwException($e), ...
            ->will($this->returnValue(23));

        // Maybe this assertion is ...?
        $this->assertEquals(
            23,
            $exampleMock->getQuestionAnswer()
        );
    }

    public function testAnExampleForCapturingOutputForATest()
    {
        $exampleSubject = new Example();

        // Capture output and assert equality
        $this->expectOutputString("42\n");

        echo $exampleSubject->getQuestionAnswer() . "\n";
    }
}
