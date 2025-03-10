<?php
    if (DB::connection()->getPdo())
    {
        echo"succcessfully".DB::connection()->getDatabaseName();
    }
?>