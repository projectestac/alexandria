<?php
// This file is part of Oauth2 authentication plugin for Moodle.
//
// Oauth2 authentication plugin for Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Oauth2 authentication plugin for Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Oauth2 authentication plugin for Moodle.  If not, see <http://www.gnu.org/licenses/>.

require_once($CFG->dirroot . '/auth/googleoauth2/vendor/autoload.php');

class provideroauth2facebook extends League\OAuth2\Client\Provider\Facebook {

    // THE VALUES YOU WANT TO CHANGE WHEN CREATING A NEW PROVIDER.
    public $sskstyle = 'facebook';
    public $name = 'facebook'; // It must be the same as the XXXXX in the class name provideroauth2XXXXX.
    public $readablename = 'Facebook';
    public $scopes = array('email');
    public $responseType = 'json';

    /**
     * Constructor.
     *
     * @throws Exception
     * @throws dml_exception
     */
    public function __construct() {
        global $CFG;

        parent::__construct([
            'clientId'      => get_config('auth/googleoauth2', $this->name . 'clientid'),
            'clientSecret'  => get_config('auth/googleoauth2', $this->name . 'clientsecret'),
            'redirectUri'   => $CFG->wwwroot .'/auth/googleoauth2/' . $this->name . '_redirect.php',
            'scopes'        => $this->scopes
        ]);
    }

    /**
     * Is the provider enabled.
     *
     * @return bool
     * @throws Exception
     * @throws dml_exception
     */
    public function isenabled() {
        return (get_config('auth/googleoauth2', $this->name . 'clientid')
            && get_config('auth/googleoauth2', $this->name . 'clientsecret'));
    }

    /**
     * The html button.
     *
     * @param $authurl
     * @param $providerdisplaystyle
     * @return string
     * @throws coding_exception
     */
    public function html_button($authurl, $providerdisplaystyle) {
        return googleoauth2_html_button($authurl, $providerdisplaystyle, $this);
    }

    /**
     * We have to override this method because facebook no longer supports the bio field.
     */
    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        $fields = implode(',', [
            'id',
            'name',
            'first_name',
            'last_name',
            'email',
            'hometown',
            'picture.type(large){url}',
            'gender',
            'locale',
            'link',
            'verified'
        ]);

        return 'https://graph.facebook.com/'.$this->graphApiVersion.'/me?fields='.$fields.'&access_token='.$token;
    }

}
