<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[139] = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',); $_menu_names[140] = array("en"=>'SAMPLE 1',"ko"=>'SAMPLE 1',"jp"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"de"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"es"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"mn"=>'SAMPLE 1',); $_menu_names[141] = array("en"=>'SAMPLE 2',"ko"=>'SAMPLE 2',"jp"=>'SAMPLE 2',"zh-CN"=>'SAMPLE 2',"zh-TW"=>'SAMPLE 2',"fr"=>'SAMPLE 2',"de"=>'SAMPLE 2',"ru"=>'SAMPLE 2',"es"=>'SAMPLE 2',"tr"=>'SAMPLE 2',"vi"=>'SAMPLE 2',"mn"=>'SAMPLE 2',); $_menu_names[142] = array("en"=>'SAMPLE 3',"ko"=>'SAMPLE 3',"jp"=>'SAMPLE 3',"zh-CN"=>'SAMPLE 3',"zh-TW"=>'SAMPLE 3',"fr"=>'SAMPLE 3',"de"=>'SAMPLE 3',"ru"=>'SAMPLE 3',"es"=>'SAMPLE 3',"tr"=>'SAMPLE 3',"vi"=>'SAMPLE 3',"mn"=>'SAMPLE 3',); $_menu_names[143] = array("en"=>'Board',"ko"=>'Board',"jp"=>'Board',"zh-CN"=>'Board',"zh-TW"=>'Board',"fr"=>'Board',"de"=>'Board',"ru"=>'Board',"es"=>'Board',"tr"=>'Board',"vi"=>'Board',"mn"=>'Board',); $_menu_names[144] = array("en"=>'SAMPLE 1',"ko"=>'SAMPLE 1',"jp"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"de"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"es"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"mn"=>'SAMPLE 1',); $_menu_names[145] = array("en"=>'SAMPLE 2',"ko"=>'SAMPLE 2',"jp"=>'SAMPLE 2',"zh-CN"=>'SAMPLE 2',"zh-TW"=>'SAMPLE 2',"fr"=>'SAMPLE 2',"de"=>'SAMPLE 2',"ru"=>'SAMPLE 2',"es"=>'SAMPLE 2',"tr"=>'SAMPLE 2',"vi"=>'SAMPLE 2',"mn"=>'SAMPLE 2',); $_menu_names[146] = array("en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',); $_menu_names[147] = array("en"=>'SAMPLE 1',"ko"=>'SAMPLE 1',"jp"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"de"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"es"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"mn"=>'SAMPLE 1',); ; $menu->list = array(139=>array("node_srl" => 139, "parent_srl" => 0, "menu_name_key" => 'Welcome Page', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[139][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#","#","#","#") && in_array(Context::get("mid"), array("#","#","#","#")) ? 1 : 0), "expand" => 'N', "list" => array(140=>array("node_srl" => 140, "parent_srl" => 139, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[140][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[140][$lang_type] : $_menu_names[140][$lang_type]) : ""),),141=>array("node_srl" => 141, "parent_srl" => 139, "menu_name_key" => 'SAMPLE 2', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[141][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[141][$lang_type] : $_menu_names[141][$lang_type]) : ""),),142=>array("node_srl" => 142, "parent_srl" => 139, "menu_name_key" => 'SAMPLE 3', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[142][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[142][$lang_type] : $_menu_names[142][$lang_type]) : ""),),), "link" => (true ? (array("#","#","#","#") && in_array(Context::get("mid"), array("#","#","#","#")) ? $_menu_names[139][$lang_type] : $_menu_names[139][$lang_type]) : ""),),143=>array("node_srl" => 143, "parent_srl" => 0, "menu_name_key" => 'Board', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[143][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#","#","#") && in_array(Context::get("mid"), array("#","#","#")) ? 1 : 0), "expand" => 'N', "list" => array(144=>array("node_srl" => 144, "parent_srl" => 143, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[144][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[144][$lang_type] : $_menu_names[144][$lang_type]) : ""),),145=>array("node_srl" => 145, "parent_srl" => 143, "menu_name_key" => 'SAMPLE 2', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[145][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[145][$lang_type] : $_menu_names[145][$lang_type]) : ""),),), "link" => (true ? (array("#","#","#") && in_array(Context::get("mid"), array("#","#","#")) ? $_menu_names[143][$lang_type] : $_menu_names[143][$lang_type]) : ""),),146=>array("node_srl" => 146, "parent_srl" => 0, "menu_name_key" => 'XEIcon', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[146][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? 1 : 0), "expand" => 'N', "list" => array(147=>array("node_srl" => 147, "parent_srl" => 146, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[147][$lang_type] : ""), "href" => (true ? "#" : ""), "url" => (true ? "#" : ""), "is_shortcut" => "Y", "desc" => '', "open_window" => "N", "normal_btn" => "", "hover_btn" => "", "active_btn" => "", "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[147][$lang_type] : $_menu_names[147][$lang_type]) : ""),),), "link" => (true ? (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? $_menu_names[146][$lang_type] : $_menu_names[146][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>