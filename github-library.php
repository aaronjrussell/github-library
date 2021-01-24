<?php
require_once 'class.github-user.php';

function get_user($username) {
  $json = get_json('https://api.github.com/users/' . $username);
  $user = new GitHubUser(
    $json->login,
    $json->avatar_url,
    $json->html_url,
    $json->followers_url,
    $json->following_url,
    $json->gists_url,
    $json->starred_url,
    $json->subscriptions_url,
    $json->organizations_url,
    $json->repos_url,
    $json->events_url,
    $json->name,
    $json->company,
    $json->blog,
    $json->location,
    $json->email,
    $json->hireable,
    $json->bio,
    $json->twitter_username,
    $json->public_repos,
    $json->public_gists,
    $json->followers,
    $json->following
  );
  return $user;
}

function get_json($url) {
  /* GitHub API expects some simple headers */
  $options = [
    'http' => [
      'method' => 'GET',
      'header' => [
        'User-Agent: PHP'
      ]
    ]
  ];
  $context = stream_context_create($options);
  $content = file_get_contents($url, false, $context);
  $json = json_decode($content);
  if ($json == false || $json == null) die("Failed to parse response from GitHub!");
  return $json;
}
?>
