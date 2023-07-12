<?php
// namespace core;

class guests
{
    public function handle()
    {
        if (isset($_SESSION['login'])) {
            header('Location: /users');
        }
    }
}
