<?php


class HomeController
{
    function default()
    {
        require __DIR__ . '/../views/home.php';
    }

    function page()
    {
        require __DIR__ . '/../views/page.php';
    }

    function b()
    {
        require __DIR__ . '/../views/b.php';
    }
}