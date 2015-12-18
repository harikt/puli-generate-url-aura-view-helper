<?php
namespace Harikt;

use Puli\UrlGenerator\DiscoveryUrlGenerator;

class PuliUrlGenerator
{
    protected $generator;

    public function __construct(DiscoveryUrlGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function __invoke($url)
    {
        return $this->generator->generateUrl($url);
    }
}
