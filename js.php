<?php

function js(string $code)
{
    echo "<script type=\"text/javascript\">$code</script>";
}

function console(string $str)
{
    js("console.log(\"" . htmlentities($str) . "\");");
}

function alert(string $str)
{
    js("alert(\"$str\");");
}

function displayException(PDOException $e)
{
    alert( "Code SQL : ".$e->getCode());
    //SQLSTATE[42000]: Syntax error or access violation: 1064 You have anerror in your SQL syntax ...
    console( $e->getFile()."\\nLine : ". $e->getLine()."\\n". $e->getMessage());
}
?>