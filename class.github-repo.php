<?php
class GitHubRepo {
  private $name;
  private $owner_username;
  private $description;
  private $fork;
  private $stargazers_count;
  private $watchers_count;
  private $forks_count;

  public function __construct($json) {
    $this->name = $json->name;
    $this->owner_username = $json->owner->login;
    $this->description = $json->description;
    $this->fork = $json->fork;
    $this->stargazers_count = $json->stargazers_count;
    $this->watchers_count = $json->watchers_count;
    $this->forks_count = $json->forks_count;
  }

  public function get_name() {
    return $this->name;
  }

  public function get_owner_username() {
    return $this->owner_username;
  }

  public function get_description() {
    return $this->description;
  }

  public function is_fork() {
    if ($this->fork) {
      return 'true';
    } else {
      return 'false';
    }
  }

  public function get_stargazers_count() {
    return $this->stargazers_count;
  }

  public function get_watchers_count() {
    return $this->watchers_count;
  }

  public function get_forks_count() {
    return $this->forks_count;
  }
}
?>
