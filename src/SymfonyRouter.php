<?php

namespace Zend\Expressive\Router;

use Fig\Http\Message\RequestMethodInterface as RequestMethod;
use Psr\Http\Message\ServerRequestInterface as PsrRequest;

use Zend\Expressive\Exception;
use Zend\Psr7Bridge\Psr7ServerRequest;
use Zend\Router\Http\TreeRouteStack;
use Zend\Router\RouteMatch;


use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

/**
 * Router implementation that Symfony RouteCollection.
 */
class SymfonyRouter implements RouterInterface
{
    /**
     * Implicitly supported HTTP methods on any route.
     */
    const HTTP_METHODS_IMPLICIT = [
        RequestMethod::METHOD_HEAD,
        RequestMethod::METHOD_OPTIONS,
    ];

    const METHOD_NOT_ALLOWED_ROUTE = 'method_not_allowed';

    /**
     * Store the HTTP methods allowed for each path.
     *
     * @var array
     */
    private $allowedMethodsByPath = [];

    /**
     * Map a named route to a ZF2 route name to use for URI generation.
     *
     * @var array
     */
    private $routeNameMap = [];

    /**
     * @param Route[]
     */
    private $routes = [];

    /**
     * Routes aggregated to inject.
     *
     * @var Route[]
     */
    private $routesToInject = [];

    /**
     * @var RouteCollection
     */
    private $symfonyRouter;


    /**
     * Constructor.
     *
     * Lazy instantiates a RouteCollection if none is provided.
     *
     * @param null|RouteCollection $router
     */
    public function __construct(RouteCollection $router = null)
    {
        if (null === $router) {
            $router = $this->createRouter();
        }

        $this->symfonyRouter = $router;
    }


    /**
     * @return RouteCollection
     */
    private function createRouter()
    {
        return new RouteCollection();
    }


    public function addRoute(Route $route)
    {
        //
    }

    public function match(PsrRequest $request)
    {
        //
    }

    public function generateUri($name, array $substitutions = [], array $options = [])
    {
        //
    }
}
