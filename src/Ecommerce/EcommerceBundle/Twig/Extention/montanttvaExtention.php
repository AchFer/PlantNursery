<?php
namespace Ecommerce\EcommerceBundle\Twig\Extention;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class montanttvaExtention extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('montanttva', array($this, 'montanttva')),
        );
    }

    function montanttva($prixht,$tva)
    {
        return round((($prixht / $tva) - $prixht),2);
    }
}