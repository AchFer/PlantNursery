<?php
namespace Ecommerce\EcommerceBundle\Twig\Extention;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ProduitExtention extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('tva', array($this, 'calcultva')),
        );
    }

    public function calcultva($prixht, $tva )
    {


        return $prixht/$tva;
    }
}