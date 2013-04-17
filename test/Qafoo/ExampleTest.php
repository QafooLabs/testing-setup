<?php

namespace Qafoo;

/**
 * @covers \Qafoo\Example
 */
class ExampleTest extends \PHPUnit_Framework_TestCase
{
    public function testCorrectQuestionAnswer()
    {
        $exampleSubject = new Example();

        $this->assertEquals(
            42,
            $exampleSubject->getQuestionAnswer()
        );
    }
}
