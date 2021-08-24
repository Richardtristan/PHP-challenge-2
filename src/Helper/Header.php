<?php

namespace App\Helper;

class Header
{
    /**
     * @param string $linkJs
     * @param string $linkCss
     * @param string $title
     * @example
     */
    function openHtml(string $linkJs,
                      string $linkCss,
                      string $title)
    {
        echo "<!doctype html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <link href=' $linkCss ' rel='stylesheet'>
        <script type='text/javascript' src=' $linkJs '></script>
        <title>$title</title>
        </head>
        <body>
        <header>";
    }

    function navNotConnected()
    {
        echo "<ul>
          <li><a href='home'>Connection</a></li>

        </ul>";
    }
    public function navAdmin(array $name, array $values)
    {
         echo "<ul><li><a href='home'>logout</a></li>";
        for ($i=0; $i< count($values); $i++) {
           echo "<li><a href=' $values[$i]'>$name[$i]</a></li>";
        }
        echo "</ul>";
    }
    public function navDeroulantAdmin(array $name, array $values)
    {
        echo "<ul><li>Admin</li><ul>";

        for ($i=0; $i< count($values); $i++) {
            echo "<li><a href=' $values[$i]'>$name[$i]</a></li>";
        }
        echo "</ul></ul>";
    }
    public function navDeroulantModo(array $name, array $values)
    {
        echo "<ul><li>Modo</li><ul>";

        for ($i=0; $i< count($values); $i++) {
            echo "<li><a href=' $values[$i]'>$name[$i]</a></li>";
        }
        echo "</ul></ul>";
    }
    public function navModo(array $name, array $values)
    {
        echo "<ul><li><a href='home'>logout</a></li>";
        for ($i=0; $i< count($values); $i++) {
            echo "<li><a href=' $values[$i]'>$name[$i]</a></li>";
        }
        echo "</ul>";
    }

    function closeHeader(){
        echo '</header>';
    }
}
