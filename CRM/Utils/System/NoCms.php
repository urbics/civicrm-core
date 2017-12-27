<?php

/* CRM_Utils_System_NoCms stub */
class CRM_Utils_System_NoCms extends CRM_Utils_System_Base {

    /* Implements abstract function in CRM_Utils_System_Base. */
    public function getLoginURL($destination = '')
    {
        return '';
    }

    /* Uses Laravel default storage folder */
    public function getDefaultFileStorage()
    {
        return array(
            'url' => env('APP_URL', 'http://localhost') . '/storage',
            'path' => storage_path(),
        );
    }
}
