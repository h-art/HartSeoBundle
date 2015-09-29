<?php

namespace Hart\SeoBundle\Manager;

use Symfony\Component\HttpFoundation\Request;

class SeoManager
{
    protected $em = null;
    protected $tr = null;
    protected $request;

    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    public function setEntityManager($entityManager)
    {
        $this->em = $entityManager;
    }

    public function setTranslator($translator)
    {
        $this->tr = $translator;
    }

    public function getByPlaceholder($placeholder)
    {
        return $this->em->getRepository('HartSeoBundle:Seo')
            ->findOneByPlaceholder($placeholder);
    }
}
