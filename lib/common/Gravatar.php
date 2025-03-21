<?php

namespace Common;

class Gravatar {

	const URL = 'https://www.gravatar.com';
	const RATING_G = 'g';
	const RATING_PG = 'pg';
	const RATING_R = 'r';
	const RATING_X = 'x';

	// 404 | mm | identicon | monsterid | wavatar

	const IMAGESET_MM = 'mm';
	const IMAGESET_404 = '404';
	const IMAGESET_IDENTICON = 'identicon';
	const IMAGESET_MONSTERID = 'monsterid';
	const IMAGESET_WAVATAR = 'wavatar';

	private $_email = '';
	private $_properties = [];

	function __construct($email, $s = 80, $d = self::IMAGESET_IDENTICON, $r = self::RATING_G) {
		$this->_email = $email;
		$this->_properties['hash'] = md5(strtolower(trim($email)));
		$this->_properties['imageset'] = $d;
		$this->_properties['size'] = $s;
		$this->_properties['rating'] = $r;
	}

	function getUrl() {
		$url = self::URL.'/avatar/'.$this->_properties['hash'];
		$url .= '?s='.$this->_properties['size'].'&d='.$this->_properties['imageset'].'&r='.$this->_properties['rating'];

		return $url;
	}

	function getProfile() {
		$str = @file_get_contents(self::URL.'/'.$this->_properties['hash'].'.php');
		$profile = unserialize($str);

		return $profile ? $profile['entry'][0] : false;
	}

	function getImg($attrs = []) {
		$url = $this->getUrl();
		$arr_attrs = [];
		foreach ($attrs as $key => $value) {
			$arr_attrs[] = $key.'="'.escape($value).'"';
		}

		$result = '<img src="'.escape($url).'" '.implode(' ', $arr_attrs).' style="width: '.$this->_properties['size'].'px !important;" />';
		return $result;
	}

	function __call($name, $args) {
		$method = substr($name, 0, 3);
		$property = strtolower(substr($name, 3));

		switch ($method) {
			case 'get':
				if (isset($this->_properties[$property])) {
					return $this->_properties[$property];
				} else if ($property == 'img') {
					$size = substr($name, 6);
					$this->_properties['size'] = (int)$size;
					return $this->getImg(($args[0]) ? $args[0] : []);
				}

				break;
			case 'set':
				if (isset($this->_properties[$property]) && $args) {
					$this->_properties[$property] = $args[0];
					return true;
				} else return false;
				break;
			default:
				return null;
				break;
		}
	}
}

?>