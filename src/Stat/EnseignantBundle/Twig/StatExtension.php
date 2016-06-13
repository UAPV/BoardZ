<?php

namespace Stat\EnseignantBundle\Twig;

class StatExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'titreCours' => new \Twig_Filter_Method($this, 'titreCoursFilter'),
        );
    }

    public function titreCoursFilter($titre)
    {
        return str_replace(" ","_",$titre);
    }

    public function getName()
    {
        return 'stat_extension';
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('die', 'die'),
        );
    }
}