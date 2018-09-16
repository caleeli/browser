<?php
if (empty($_REQUEST['u'])) {
    header('Location: index.php');
    return;
}
passthru('open ' . escapeshellarg($_REQUEST['u']));
