<?php
class GitHubUser {
  private $username;
  private $avatar_url;
  private $profile_url;
  private $followers_url;
  private $following_url;
  private $gists_url;
  private $starred_url;
  private $subscriptions_url;
  private $organizations_url;
  private $repos_url;
  private $events_url;
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

  public function __construct(
    $username, $avatar_url, $profile_url, $followers_url,
    $following_url, $gists_url, $starred_url, $subscriptions_url,
    $organizations_url, $repos_url, $events_url, $name,
    $company, $blog, $location, $email, $hireable, $bio,
    $twitter_username, $public_repo_count, $public_gist_count,
    $follower_count, $following_count
  ) {
    $this->username = $username;
    $this->avatar_url = $avatar_url;
    $this->profile_url = $profile_url;
    $this->followers_url = $followers_url;
    $this->following_url = $following_url;
    $this->gists_url = $gists_url;
    $this->starred_url = $starred_url;
    $this->subscriptions_url = $subscriptions_url;
    $this->organizations_url = $organizations_url;
    $this->repos_url = $repos_url;
    $this->events_url = $events_url;
    $this->name = $name;
    $this->company = $company;
    $this->blog = $blog;
    $this->location = $location;
    $this->email = $email;
    $this->hireable = $hireable;
    $this->bio = $bio;
    $this->twitter_username = $twitter_username;
    $this->public_repo_count = $public_repo_count;
    $this->public_gist_count = $public_gist_count;
    $this->follower_count = $follower_count;
    $this->following_count = $following_count;
  }

  public function get_username() {
    return $this->username;
  }

  public function get_avatar_url() {
    return $this->avatar_url;
  }

  public function get_profile_url() {
    return $this->profile_url;
  }

  public function get_followers_url() {
    return $this->followers_url;
  }

  public function get_following_url() {
    return $this->remove_url_endings($this->following_url);
  }

  public function get_gists_url() {
    return $this->remove_url_endings($this->gists_url);
  }

  public function get_starred_url() {
    return $this->remove_url_endings($this->starred_url);
  }

  public function get_subscriptions_url() {
    return $this->subscriptions_url;
  }

  public function get_organizations_url() {
    return $this->organizations_url;
  }

  public function get_repos_url() {
    return $this->repos_url;
  }

  public function get_events_url() {
    return $this->remove_url_endings($this->events_url);
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

  public function get_hireable() {
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

  private function remove_url_endings($content) {
    return preg_replace('/{(.*?)}/', '', $content);
  }
}
?>
