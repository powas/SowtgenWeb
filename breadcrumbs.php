<?php
    echo '<a href="/">Home</a>';
    $currentDirectory = basename(dirname($_SERVER['SCRIPT_FILENAME']));
    if ($currentDirectory == "ingenieria-y-obras") {
        echo ' <i class="las la-angle-right mx-2"></i> <a href="/ingenieria-y-obras">Ingenieria y Obras</a>';
    }
    elseif ($currentDirectory == "process-solutions") {
        echo ' <i class="las la-angle-right mx-2"></i> <a href="/process-solutions">Process Solutions</a>';
    }
    elseif ($currentDirectory == "liquidos") {
        echo ' <i class="las la-angle-right mx-2"></i> <a href="/process-solutions">Process Solutions</a> <i class="las la-angle-right mx-2"></i> <a href="/process-solutions/liquidos">Líquidos</a>';
    }
    elseif ($currentDirectory == "mercados") {
        echo ' <i class="las la-angle-right mx-2"></i> <a href="/mercados">Mercados</a>';
    }
    elseif ($currentDirectory == "productos") {
        echo ' <i class="las la-angle-right mx-2"></i> <a href="/productos">Productos</a>';
    }
    echo ' <i class="las la-angle-right"></i> <strong>' . $title . '</strong>';
?>