<?php # Script 3.7 - index.php #2

// This function outputs theoretical HTML
// for adding ads to a Web page.
function create_ad() {
  echo '<div class="alert alert-info" role="alert"><p>This is an annoying ad! This is an annoying ad! This is an annoying ad! This is an annoying ad!</p></div>';
} // End of the function definition.

$page_title = 'Welcome to this Site!';
include('includes/header.html');

// Call the function:
// create_ad();
?>

<p>This is where the page-specific content goes. This section, and the corresponding header, will change from one page to the next.</p>
<p>This is where the page-specific content goes. This section, and the corresponding header, will change from one page to the next.</p>
<?php
// Call the function again:
// create_ad();

include('includes/footer.html');
?>