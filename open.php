<pre>
<?php
if (empty($_REQUEST['u'])) {
    header('Location: index.php');
    return;
}
print_r('open ' . escapeshellarg($_REQUEST['u']));
passthru('open ' . escapeshellarg($_REQUEST['u']) . ' 2>&1');
