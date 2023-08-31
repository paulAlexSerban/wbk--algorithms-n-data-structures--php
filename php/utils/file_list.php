<?php
function generateFileList()
{
  $files = scandir('.');
  foreach ($files as $file) {
    // Skip current and parent directory entries, index.php, and utils
    if ($file === '.' || $file === '..' || $file === 'index.php' || $file === 'utils') {
      continue;
    }

    // Get the current directory relative to the root
    $currentDirectory = ltrim(dirname($_SERVER['PHP_SELF']), '/');

    // Generate the relative URL
    $relativeUrl = ($currentDirectory !== '') ? $currentDirectory . '/' . $file : $file;

    // Determine the protocol based on HTTPS
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';

    // Get the dynamic server URL
    $serverUrl = $protocol . '://' . $_SERVER['HTTP_HOST'];

    echo "<a href='" . $serverUrl . "/" . $relativeUrl . "'>" . $file . "</a> <br>";
  }
}
?>
