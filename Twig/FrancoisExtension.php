<?php

namespace Sly\FrancoisBundle\Twig;

use \Twig_Function_Method;

/**
 * FrancoisExtension.
 *
 * @author Cédric Dugat <cedric@dugat.me>
 */
class FrancoisExtension extends \Twig_Extension
{
    const YOUTUBE_URL = '//www.youtube-nocookie.com/embed/hVuFzkpyyaw?start=25&amp;autoplay=1';

    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getFunctions()
    {
        return array(
            'francois_video' => new Twig_Function_Method($this, 'videoFunction', array('is_safe' => array('html'))),
        );
    }

    public function videoFunction()
    {
        if (false === $this->config['twig']['exception']['video']) {
            return ;
        }

        return sprintf(
            '<iframe width="420" height="315" src="%s" frameborder="0" allowfullscreen></iframe>',
            self::YOUTUBE_URL
        );
    }

    public function getName()
    {
        return 'sly_francois_extension';
    }
}
