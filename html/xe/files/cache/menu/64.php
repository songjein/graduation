<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[66] = array("en"=>"Welcome Page","ko"=>"Welcome Page","jp"=>"Welcome Page","zh-CN"=>"Welcome Page","zh-TW"=>"Welcome Page","fr"=>"Welcome Page","de"=>"Welcome Page","ru"=>"Welcome Page","es"=>"Welcome Page","tr"=>"Welcome Page","vi"=>"Welcome Page","mn"=>"Welcome Page",); $_menu_names[105] = array("en"=>"자유게시판","ko"=>"자유게시판","jp"=>"자유게시판","zh-CN"=>"자유게시판","zh-TW"=>"자유게시판","fr"=>"자유게시판","de"=>"자유게시판","ru"=>"자유게시판","es"=>"자유게시판","tr"=>"자유게시판","vi"=>"자유게시판","mn"=>"자유게시판",); ; $menu->list = array(66=>array("node_srl"=>"66","parent_srl"=>"0","menu_name_key"=>'Welcome Page',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[66][$lang_type]:""),"href"=>(true?"/xe/page_NkNG68":""),"url"=>(true?"page_NkNG68":""),"is_shortcut"=>"N","open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("Free","page_NkNG68")&&in_array(Context::get("mid"),array("Free","page_NkNG68"))?1:0),"expand"=>"N", "list"=>array(105=>array("node_srl"=>"105","parent_srl"=>"66","menu_name_key"=>'자유게시판',"isShow"=>(true?true:false),"text"=>(true?$_menu_names[105][$lang_type]:""),"href"=>(true?"/xe/Free":""),"url"=>(true?"Free":""),"is_shortcut"=>"N","open_window"=>"N","normal_btn"=>"","hover_btn"=>"","active_btn"=>"","selected"=>(array("Free")&&in_array(Context::get("mid"),array("Free"))?1:0),"expand"=>"N", "list"=>array(),  "link"=>(true? ( array("Free")&&in_array(Context::get("mid"),array("Free")) ?$_menu_names[105][$lang_type]:$_menu_names[105][$lang_type]):""),),),  "link"=>(true? ( array("Free","page_NkNG68")&&in_array(Context::get("mid"),array("Free","page_NkNG68")) ?$_menu_names[66][$lang_type]:$_menu_names[66][$lang_type]):""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>