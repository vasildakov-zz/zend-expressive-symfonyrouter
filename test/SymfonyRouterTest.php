<?php

namespace ZendTest\Expressive\Router;

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

use Zend\Expressive\Router\SymfonyRouter;

class ZendRouterTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->symfonyRouter = $this->prophesize(RouteCollection::class);
    }

    public function getRouter()
    {
        return new RouteCollection($this->zendRouter->reveal());
    }

    public function testWillLazyInstantiateAZendTreeRouteStackIfNoneIsProvidedToConstructor()
    {
        $router = new SymfonyRouter();
        $this->assertAttributeInstanceOf(RouteCollection::class, 'symfonyRouter', $router);
    }
}
