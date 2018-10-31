<?php

echo phpversion;

if (function_exists("array_combine"))
{
echo "Must be PHP version 5. We're all good.";
}
else
{
echo"Not PHP version 5! No array combine function! We are fucked!";
}

?>