<?php

namespace Model;

use Model\Base\AuthToken as BaseAuthToken;

/**
 * Skeleton subclass for representing a row from the 'auth_tokens' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class AuthToken extends BaseAuthToken
{
  public function setScope($scope)
  {
    parent::setScope(json_encode($scope));
  }
  
  public function getScope()
  {
    return json_decode(parent::getScope());
  }
}
