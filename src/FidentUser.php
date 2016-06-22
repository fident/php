<?php
namespace Fident\Php;

class FidentUser
{
  private $username;
  private $userid;
  private $name;
  private $type;
  private $firstName;
  private $lastName;
  private $gender;
  private $language;
  private $timezone;
  private $timeFormat;
  private $dateFormat;

  /**
   * @return mixed
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * @param mixed $username
   *
   * @return FidentUser
   */
  public function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getUserid()
  {
    return $this->userid;
  }

  /**
   * @param mixed $userid
   *
   * @return FidentUser
   */
  public function setUserid($userid)
  {
    $this->userid = $userid;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   *
   * @return FidentUser
   */
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * @param mixed $type
   *
   * @return FidentUser
   */
  public function setType($type)
  {
    $this->type = $type;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
   * @param mixed $firstName
   *
   * @return FidentUser
   */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   * @param mixed $lastName
   *
   * @return FidentUser
   */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getGender()
  {
    return $this->gender;
  }

  /**
   * @param mixed $gender
   *
   * @return FidentUser
   */
  public function setGender($gender)
  {
    $this->gender = $gender;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getLanguage()
  {
    return $this->language;
  }

  /**
   * @param mixed $language
   *
   * @return FidentUser
   */
  public function setLanguage($language)
  {
    $this->language = $language;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getTimezone()
  {
    return $this->timezone;
  }

  /**
   * @param mixed $timezone
   *
   * @return FidentUser
   */
  public function setTimezone($timezone)
  {
    $this->timezone = $timezone;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getTimeFormat()
  {
    return $this->timeFormat;
  }

  /**
   * @param mixed $timeFormat
   *
   * @return FidentUser
   */
  public function setTimeFormat($timeFormat)
  {
    $this->timeFormat = $timeFormat;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getDateFormat()
  {
    return $this->dateFormat;
  }

  /**
   * @param mixed $dateFormat
   *
   * @return FidentUser
   */
  public function setDateFormat($dateFormat)
  {
    $this->dateFormat = $dateFormat;
    return $this;
  }

}
