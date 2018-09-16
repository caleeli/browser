<?php
if (empty($_REQUEST['u'])) {
    header('Location: index.php');
    return;
}
exec('open ' . escapeshellarg($_REQUEST['u']));
