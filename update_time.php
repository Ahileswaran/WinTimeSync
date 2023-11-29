<?php
    exec('w32tm /resync'); // Resynchronize the Windows Time service
    echo 'Time updated successfully.';
?>
