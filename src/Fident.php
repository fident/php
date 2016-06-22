<?php
namespace Fident\Php;

class Fident
{
  public function __construct(array $headers)
  {
    //Process headers
  }

  public function isAuthed()
  {
    return $this->getUserId() !== null;
  }

  public function getUserId()
  {
    return '1234';
  }

  public function getUser()
  {
    $user = new FidentUser();
    $user->setUserid($this->getUserId());
    return $user;
  }
}
