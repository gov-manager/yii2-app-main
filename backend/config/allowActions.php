<?php
/*$controllersDir = realpath(__DIR__.'/../controllers');
$actions = [];
foreach (glob($controllersDir.'/*Controller.php') as $filename) {
    $actions[] = strtolower(str_replace('Controller.php', '', basename($filename))).'/*';
}
$actions[] = 'debug/*';
//$actions[] = 'categories/*';
//$actions[] = 'treemanager/*';

return $actions;*/
return [
    'site/*',
    'debug/*',
    // 'user/*',
    // 'rbac/*',
    // 'gii/*',
];
?>