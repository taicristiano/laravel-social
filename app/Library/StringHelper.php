<?php

namespace App\Library;

class StringHelper
{
	public static function getLangOfUser($user, $provider)
	{
		$lang = null;
        if (!empty($user->user['lang'])) {
            $lang = $user->user['lang'];
        } elseif(!empty($user->user['language'])) {
            $lang = $user->user['language'];
        } else {
            if($provider == 'facebook') {
                $client = new \GuzzleHttp\Client();
                $urlFace = 'https://graph.facebook.com/v2.6/' . $user->id . '/?access_token='.$user->token.'&fields=locale';
                $response      = $client->request('GET', $urlFace);
                $result        = json_decode($response->getBody()->getContents(), true);
                if(!empty($result['locale'])) {
                    $lang = $result['locale'];
                }
            }
        }
        return $lang;
	}
	/**
	 * format string japan language
	 * @param  string $lang
	 * @return string
	 */
	public static function formatStringJapanLanguage($lang)
	{
		$lang = strtolower($lang);
		if($lang == 'ja' || $lang == 'ja_jp' || $lang == 'ja_ks' || $lang == 'jp') {
			return 'ja';
		}
		return $lang;
	}

	/**
	 * format string china old language
	 * @param  string $lang
	 * @return string
	 */
	public static function formatStringChinaOldLanguage($lang)
	{
		$lang = strtolower($lang);
		if($lang == 'zh-cn' || $lang == 'zh_cn') {
			return 'zh-cn';
		}
		return $lang;
	}

	/**
	 * format string china new language
	 * @param  string $lang
	 * @return string
	 */
	public static function formatStringChinaNewLanguage($lang)
	{
		$lang = strtolower($lang);
		if($lang == 'zh-tw' || $lang == 'zh_tw') {
			return 'zh-tw';
		}
		return $lang;
	}

	/**
	 * format string korea language
	 * @param  string $lang
	 * @return string
	 */	
	public static function formatStringKoreaLanguage($lang)
	{
		$lang = strtolower($lang);
		if($lang == 'ko' || $lang == 'ko_kr') {
			return 'ko';
		}
		return $lang;
	}

	/**
	 * format string language
	 * @param  array $user
	 * @param  string $provider
	 * @param  string $langSession
	 * @return string
	 */
	public static function formatStringLanguage($user, $provider, $langSession)
	{
		$lang = self::getLangOfUser($user, $provider);
		$lang = self::formatStringJapanLanguage($lang);
		$lang = self::formatStringChinaOldLanguage($lang);
		$lang = self::formatStringChinaNewLanguage($lang);
		$lang = self::formatStringKoreaLanguage($lang);

		$arrayLang = ['en', 'ja', 'zh-cn', 'zh-tw', 'ko'];
		if (!$lang || !in_array($lang, $arrayLang)) {
			if ($langSession) {
				$lang = $langSession;
			} else {
				$lang = 'en';
			}
		}
		return $lang;
	}

	/**
	 * sub content string
	 * @param  string $content
	 * @param  integer $length
	 * @return string
	 */
    public static function subContentString($content, $length)
    {
    	$result = [];
    	$result['content'] = $content;
    	$lenghtContent = strlen($content);
        if ($lenghtContent > $length) {
	        $result['sub'] = str_limit($content, $length);
        	if (strlen($result['sub']) == strlen($result['content'])) {
		        unset($result['sub']);
        	}
        }
        return $result;
    }
}