<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[136] = array("en"=>'XE Official Site',"ko"=>'XE Official Site',"jp"=>'XE Official Site',"zh-CN"=>'XE Official Site',"zh-TW"=>'XE Official Site',"fr"=>'XE Official Site',"de"=>'XE Official Site',"ru"=>'XE Official Site',"es"=>'XE Official Site',"tr"=>'XE Official Site',"vi"=>'XE Official Site',"mn"=>'XE Official Site',); $_menu_names[137] = array("en"=>'GitHub',"ko"=>'GitHub',"jp"=>'GitHub',"zh-CN"=>'GitHub',"zh-TW"=>'GitHub',"fr"=>'GitHub',"de"=>'GitHub',"ru"=>'GitHub',"es"=>'GitHub',"tr"=>'GitHub',"vi"=>'GitHub',"mn"=>'GitHub',); ; $menu->list = array(136=>array("node_srl" => 136, "parent_srl" => 0, "menu_name_key" => 'XE Official Site', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[136][$lang_type] : ""), "href" => (true ? "http://www.xpressengine.com" : ""), "url" => (true ? "http://www.xpressengine.com" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("http://www.xpressengine.com") && in_array(Context::get("mid"), array("http://www.xpressengine.com")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("http://www.xpressengine.com") && in_array(Context::get("mid"), array("http://www.xpressengine.com")) ? $_menu_names[136][$lang_type] : $_menu_names[136][$lang_type]) : ""),),137=>array("node_srl" => 137, "parent_srl" => 0, "menu_name_key" => 'GitHub', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[137][$lang_type] : ""), "href" => (true ? "https://github.com/xpressengine" : ""), "url" => (true ? "https://github.com/xpressengine" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("https://github.com/xpressengine") && in_array(Context::get("mid"), array("https://github.com/xpressengine")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("https://github.com/xpressengine") && in_array(Context::get("mid"), array("https://github.com/xpressengine")) ? $_menu_names[137][$lang_type] : $_menu_names[137][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>