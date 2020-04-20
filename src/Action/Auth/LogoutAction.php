<?php

declare(strict_types=1);

namespace PhpGuild\RhapsodySecurityBundle\Action\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LogoutAction
 */
class LogoutAction extends AbstractController
{
    /**
     * __invoke
     *
     * @return Response
     */
    public function __invoke(): Response
    {
        return new Response();
    }
}
