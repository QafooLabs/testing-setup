<?php

namespace Qafoo;

class MultiDisplayAdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testTriggersAllDisplays()
    {
        $displayAMock = $this->getMockBuilder('Qafoo\\Display')->getMock();
        $displayAMock->expects($this->once())
            ->method('display')
            ->with($this->isType('float'));
        $displayBMock = $this->getMockBuilder('Qafoo\\Display')->getMock();
        $displayBMock->expects($this->once())
            ->method('display')
            ->with($this->isType('float'));

        $multiDisplay = new MultipleDisplaysAdapter(array($displayAMock, $displayBMock));

        $multiDisplay->display(23.42);
    }
}
