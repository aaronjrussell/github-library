<?php
class GitHubUser {
  private $username;
  private $avatar_url;
  private $name;
  private $company;
  private $blog;
  private $location;
  private $email;
  private $hireable;
  private $bio;
  private $twitter_username;
  private $public_repo_count;
  private $public_gist_count;
  private $follower_count;
  private $following_count;

  public function __construct($json) {
    $this->username = $json->login;
    $this->avatar_url = $json->avatar_url;
    $this->name = $json->name;
    $this->company = $json->company;
    $this->blog = $json->blog;
    $this->location = $json->location;
    $this->email = $json->email;
    $this->hireable = $json->hireable;
    $this->bio = $json->bio;
    $this->twitter_username = $json->twitter_username;
    $this->public_repo_count = $json->public_repos;
    $this->public_gist_count = $json->public_gists;
    $this->follower_count = $json->followers;
    $this->following_count = $json->following;
  }

  public function get_username() {
    return $this->username;
  }

  public function get_avatar_url() {
    return $this->avatar_url;
  }

  public function get_name() {
    if (empty($this->name)) {
      return "Not provided";
    } else {
      return $this->name;
    }
  }

  public function get_company() {
    if (empty($this->company)) {
      return "Not provided";
    } else {
      return $this->company;
    }
  }

  public function get_blog() {
    if (empty($this->blog)) {
      return "Not provided";
    } else {
      return $this->blog;
    }
  }

  public function get_location() {
    if (empty($this->location)) {
      return "Not provided";
    } else {
      return $this->location;
    }
  }

  public function get_email() {
    if (empty($this->email)) {
      return "Not provided";
    } else {
      return $this->email;
    }
  }

  public function is_hireable() {
    if ($this->hireable) {
      return "true";
    } else {
      return "false";
    }
  }

  public function get_bio() {
    if (empty($this->bio)) {
      return "Not provided";
    } else {
      return $this->bio;
    }
  }

  public function get_twitter_username() {
    if (empty($this->twitter_username)) {
      return "Not provided";
    } else {
      return $this->twitter_username;
    }
  }

  public function get_public_repo_count() {
    return $this->public_repo_count;
  }

  public function get_public_gist_count() {
    return $this->public_gist_count;
  }

  public function get_follower_count() {
    return $this->follower_count;
  }

  public function get_following_count() {
    return $this->following_count;
  }
}
?>
