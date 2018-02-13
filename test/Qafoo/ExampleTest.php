<?php

namespace Qafoo;

class ExampleTest extends \PHPUnit\Framework\TestCase
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
