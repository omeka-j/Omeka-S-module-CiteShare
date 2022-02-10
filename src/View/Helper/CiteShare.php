<?php
namespace CiteShare\View\Helper;

use Omeka\Api\Representation\AbstractResourceEntityRepresentation;
use Laminas\View\Helper\AbstractHelper;

class CiteShare extends AbstractHelper {

    public function __invoke(AbstractResourceEntityRepresentation $resource)
    {
        $view = $this->getView();

        $title = $resource->displayTitle();

        $url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://").$_SERVER["HTTP_HOST"].$resource->url();

        return $view->partial('common/cite-share',
            [
                'url' =>  $url,
                "title" => $title,
                'uri' =>  $resource->apiUrl()
            ]
        );
    }

}
