<?php
namespace Desirene\OAuth2\Entities;
use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use League\OAuth2\Server\Entities\Traits\RefreshTokenTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;

class RefreshTokenEntity implements RefreshTokenEntityInterface
{
  use RefreshTokenTrait, EntityTrait;
}