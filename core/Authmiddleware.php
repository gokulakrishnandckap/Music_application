<?php
// namespace core;

class Auths
{
    public function handle()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: /login');
        }
    }
}

