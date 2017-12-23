<?php

namespace App\Library;

class StringHelper
{
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
	 * @param  string $lang
	 * @return string
	 */
	public static function formatStringLanguage($lang)
	{
		$lang = self::formatStringJapanLanguage($lang);
		$lang = self::formatStringChinaOldLanguage($lang);
		$lang = self::formatStringChinaNewLanguage($lang);
		$lang = self::formatStringKoreaLanguage($lang);
		$arrayLang = ['en', 'ja', 'zh-cn', 'zh-tw', 'ko'];
		if (!$lang || !in_array($lang, $arrayLang)) {
			$lang = 'en';
		}
		return $lang;
	}
}