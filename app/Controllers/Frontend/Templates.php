<?php

namespace App\Controllers;

class Templates extends BaseController
{
    private $userId;
    private $sessionObject;

    /**
     * Check if the user is logged in
     * 
     * @return bool
     */
    public function user_loggedin() {
        $session = session();
        if(empty($session->get('user_id')) && empty($session->get('user_loggedin'))) {
            return false;
        }
        $this->userId = $session->get('user_id');
        return true;
    }

    /**
     * Logout the user
     * 
     * @return void
     */
    public function logout() {
        $session = session();
        $session->remove('user_id');
        $session->remove('user_loggedin');
        $session->remove('user_token');
        $session->remove('userLongitude');
        $session->destroy();
    }

    /**
     * Global variables for the templates
     * 
     * @return array
     */
    public function globalVariables() {
        $urlPath = rtrim(getenv('baseURL'), '/');

        // get the session object
        $this->sessionObject = !empty($this->sessionObject) ? $this->sessionObject : session();

        return [
            'baseUrl' => $urlPath,
            'version' => '1.3.4',
            'privacyVersion' => '1.0',
            'privacyUpdatedDate' => 'June 20, 2025',
            'userId' => (int) (!empty($this->sessionObject->user_id) ? $this->sessionObject->user_id : 0),
            'userData' => $this->sessionObject->get('userData'),
            'userLoggedIn' => $this->user_loggedin(),
            'userToken' => $this->sessionObject->get('user_token'),
            'appName' => 'TalkLowKey',
        ];
    }

    /**
     * Get the page description
     * 
     * @param string $page
     * @return string
     */
    public function pgDesc($page) {

        $page = explode('/', $page);
        $page = end($page);

        // get the page description
        $metaDescriptions = [
            'install' => 'Download and install TalkLowKey – the anonymous social app where you can post freely, connect privately, and share without judgment.',
            'terms' => 'Read the terms and conditions for using TalkLowKey. Understand your rights, responsibilities, and our platform policies.',
            'privacy' => 'Learn how TalkLowKey protects your privacy. We are committed to keeping your identity safe and your data secure.',
            'signup' => 'Create your anonymous profile on TalkLowKey and start connecting with a community that listens—no names, no pressure.',
            'login' => 'Login to TalkLowKey and jump back into anonymous conversations, confessions, and trending topics.',
            'forgot-password' => 'Forgot your password? Reset your TalkLowKey account securely and regain access to your anonymous community.',
            'chat' => 'Chat with TalkLowKey users anonymously. Share your thoughts, connect with others, and explore trending topics without revealing your identity.',
            'notifications' => 'View your notifications on TalkLowKey. Stay updated with likes, comments, and messages from your anonymous community.',
            'profile' => 'View your profile on TalkLowKey. Manage your settings, update your bio, and connect with other users.'
        ];

        // return the page description
        return $metaDescriptions[$page] ?? 'TalkLowKey is an anonymous social app where you can post freely, connect privately, and share without judgment.';
    }

    /**
     * Load the header template
     * 
     * @return void
     */
    public function loadHeader($data = []) {
        return view('templates/header', $data);
    }

    /**
     * Load the footer template
     * 
     * @return void
     */
    public function loadFooter($data = []) {
        return view('templates/footer', $data);
    }

    /**
     * Load a page
     * 
     * @param string $page
     * @param array $data
     * @return void
     */
    public function loadPage($page, $data = []) {
        // merge the global variables with the data
        $data = array_merge($this->globalVariables(), $data);

        // get the page description
        $data['pgDesc'] = !empty($data['pgDesc']) ? $data['pgDesc'] : $this->pgDesc($page);

        $data['isAdmin'] = is_admin($data['userData'] ?? []);
        $data['isDriver'] = is_driver($data['userData'] ?? []);
        $data['isAdminOrDriver'] = is_admin_or_driver($data['userData'] ?? []);

        // print the files contents
        echo $this->loadHeader($data);
        echo view($page, $data);
        echo $this->loadFooter($data);
    }

    /**
     * Load the 404 page
     * 
     * @return void
     */
    public function load404Page($item = 'Page', $shouldLogin = false) {
        $data['topMargin'] = 0;
        $data['item'] = $item;
        $data['shouldLogin'] = $shouldLogin;

        // merge the global variables with the data
        $data = array_merge($this->globalVariables(), $data);

        // get the page description
        $data['pgDesc'] = $this->pgDesc('404');

        // print the files contents
        echo $this->loadHeader($data);
        echo view('errors/404', $data);
        echo $this->loadFooter($data);
    }
}