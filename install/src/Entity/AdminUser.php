<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use PhpGuild\DoctrineExtraBundle\Model\Uuid\UuidInterface;
use PhpGuild\DoctrineExtraBundle\Model\Uuid\UuidTrait;
use PhpGuild\RhapsodySecurityBundle\Model\AdminUser as BaseAdminUser;

/**
 * Class AdminUser
 *
 * @ORM\Entity(repositoryClass="App\Repository\AdminUserRepository")
 */
class AdminUser extends BaseAdminUser implements UuidInterface
{
    use UuidTrait;
}
