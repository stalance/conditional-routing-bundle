<?php

namespace Piotrpolak\ConditionalRoutingBundle\Tests\Model\RoutingDefinition;

use Piotrpolak\ConditionalRoutingBundle\Model\RoutingDefinition\XmlBundleRoutingDefinition;

class XmlBundleRoutingDefinitionTest extends \PHPUnit_Framework_TestCase
{
    public function testDefault()
    {
        $definition = new XmlBundleRoutingDefinition('SampleBundle');
        $this->assertEquals('SampleBundle', $definition->getBundleName());
        $this->assertEquals('xml', $definition->getType());
        $this->assertEquals('@SampleBundle/Resources/config/routing.xml', $definition->getResource());
    }
}
