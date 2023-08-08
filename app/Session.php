<?php

class Session
{
    public function startSession() {
        ini_set('session.use_only_cookies', 1);
        ini_set('session.use_strict_mode', 1);

        session_set_cookie_params([
            'lifetime' => 1800,
            'domain' => 'localhost',
            'path' => '/',
            'secure' => true,
            'httponly' => true
        ]);

        session_start();

        if (!isset($_SESSION['last_generation'])) {
            self::regenerateSessionId();
        } else {
            $interval = 60 * 30;
            if (time() - $_SESSION['last_generation'] >= $interval) {
                self::regenerateSessionId();
            }
        }
    }

    private static function regenerateSessionId() {
        session_regenerate_id();
        $_SESSION['last_generation'] = time();
    }
}