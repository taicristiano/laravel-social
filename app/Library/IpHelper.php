<?php

namespace App\Library;

class IpHelper
{
	/**
	 * get language by ip
	 * @param  array $user
	 * @param  string $ip
	 * @return string
	 */
	public static function getLangByIp($user, $ip)
	{
		if (!empty($user->user['lang'])) {
            $lang = $user->user['lang'];
        } elseif(!empty($user->user['language'])) {
            $lang = $user->user['language'];
        } else {
			$data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));    
			$lang = null;
	        if($data && $data->geoplugin_countryName != null){
	            $lang = $data->geoplugin_countryCode;
	        }
        }
        return $lang;
	}
}