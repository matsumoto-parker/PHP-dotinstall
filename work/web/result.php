<?php

require('../app/functions.php');

$colorFroGet = filter_input(INPUT_GET, 'color') ?? 'transparent';
setcookie('color', $colorFroGet);

include('../app/_parts/_header.php');

?>

<p><?= h($colorFroGet); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');
