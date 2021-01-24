<?php
require_once 'class.github-repo.php';
require_once 'class.github-user.php';

function get_user($username) {
  $json = get_json('https://api.github.com/users/' . $username);
  return new GitHubUser($json);
}

function get_repo($username, $repo) {
  $json = get_json('https://api.github.com/repos/' . $username . '/' . $repo);
  return new GithubRepo($json);
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
  if ($json == false || $json == null) die('Failed to parse response from GitHub!');
  return $json;
}
?>
