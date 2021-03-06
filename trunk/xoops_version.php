<?php
if (!defined('ICMS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$modversion['name'] = _MI_BD_TITRE;
$modversion['version'] = 2.2;
$modversion['description'] = _MI_BD_DESC;
$modversion['author'] = "Herv� Thouzard sur la base du module r�alis� par Sultan El Turrah<br />http://www.theclubbing.com<br /> Sur base du travail de Lmaix <br />http://www.bahut.com";
$modversion['credits'] = "The XOOPS Project";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = 'images/birthday_slogo2.png';
$modversion['dirname'] = "birthday";

// ********************************************************************************************************************
// Administration *****************************************************************************************************
// ********************************************************************************************************************
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';


// ********************************************************************************************************************
// Blocks *************************************************************************************************************
// ********************************************************************************************************************
$cptb = 0;

$cptb++;
$modversion['blocks'][$cptb]['file'] = 'b_birthday.php';
$modversion['blocks'][$cptb]['name'] = _MI_BD_TITRE;
$modversion['blocks'][$cptb]['description'] = '_MI_BD_DESC';
$modversion['blocks'][$cptb]['show_func'] = 'b_birthday_show';
$modversion['blocks'][$cptb]['edit_func'] = 'b_birthday_edit';
$modversion['blocks'][$cptb]['options'] = '5';	// nombre d'�l�ments visibles
$modversion['blocks'][$cptb]['template'] = 'birthday_block_birthday.html';


// ********************************************************************************************************************
// Search *************************************************************************************************************
// ********************************************************************************************************************
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'birthday_search';


// ********************************************************************************************************************
// Templates **********************************************************************************************************
// ********************************************************************************************************************
$cptt = 0;

$cptt++;
$modversion['templates'][$cptt]['file'] = 'birthday_index.html';
$modversion['templates'][$cptt]['description'] = "Index page";

$cptt++;
$modversion['templates'][$cptt]['file'] = 'birthday_user.html';
$modversion['templates'][$cptt]['description'] = "Display a user page";

$cptt++;
$modversion['templates'][$cptt]['file'] = 'birthday_users.html';
$modversion['templates'][$cptt]['description'] = "List of Users";


// ********************************************************************************************************************
// Menu ***************************************************************************************************************
// ********************************************************************************************************************
$modversion['hasMain'] = 1;

$cptm = 0;
$cptm++;
$modversion['sub'][$cptm]['name'] = _MI_BIRTHDAY_USERS_LIST;
$modversion['sub'][$cptm]['url'] = 'users.php';


// ********************************************************************************************************************
// Tables *************************************************************************************************************
// ********************************************************************************************************************
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
$modversion['tables'][0] = 'users_birthday';

// ********************************************************************************************************************
// Preferences ********************************************************************************************************
// ********************************************************************************************************************
$cpto = 0;

/**
 * Images width
 */
$cpto++;
$modversion['config'][$cpto]['name']= 'images_width';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_IMAGES_WIDTH';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'textbox';
$modversion['config'][$cpto]['valuetype'] = 'int';
$modversion['config'][$cpto]['default'] = 150;


/**
 * Images height
 */
$cpto++;
$modversion['config'][$cpto]['name']= 'images_height';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_IMAGES_HEIGHT';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'textbox';
$modversion['config'][$cpto]['valuetype'] = 'int';
$modversion['config'][$cpto]['default'] = 150;

/**
 * Folder's path (where to save pictures)
 */
$cpto++;
$modversion['config'][$cpto]['name']= 'folder_path';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_FOLDER_PATH';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'textbox';
$modversion['config'][$cpto]['valuetype'] = 'text';
$modversion['config'][$cpto]['default'] = XOOPS_UPLOAD_PATH;

/**
 * Folder's url (where to save pictures)
 */
$cpto++;
$modversion['config'][$cpto]['name']= 'folder_url';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_FOLDER_URL';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'textbox';
$modversion['config'][$cpto]['valuetype'] = 'text';
$modversion['config'][$cpto]['default'] = XOOPS_UPLOAD_URL;

/**
 * Items count per page
 */
$cpto++;
$modversion['config'][$cpto]['name'] = 'perpage';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_PERPAGE';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'textbox';
$modversion['config'][$cpto]['valuetype'] = 'int';
$modversion['config'][$cpto]['default'] = 15;

/**
 * Mime Types
 * Default values : Web pictures (png, jpeg)
 */
$cpto++;
$modversion['config'][$cpto]['name'] = 'mimetypes';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_MIMETYPES';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'textarea';
$modversion['config'][$cpto]['valuetype'] = 'text';
$modversion['config'][$cpto]['default'] = "image/jpeg\nimage/pjpeg\nimage/x-png\nimage/png";

/**
 * MAX Filesize Upload in kilo bytes
 */
$cpto++;
$modversion['config'][$cpto]['name'] = 'maxuploadsize';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_UPLOADFILESIZE';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'textbox';
$modversion['config'][$cpto]['valuetype'] = 'int';
$modversion['config'][$cpto]['default'] = 1048576;

/**
 * Editor to use
 */
$cpto++;
$modversion['config'][$cpto]['name'] = 'form_options';
$modversion['config'][$cpto]['title'] = "_MI_BIRTHDAY_FORM_OPTIONS";
$modversion['config'][$cpto]['description'] = '_MI_BIRTHDAY_FORM_OPTIONS_DESC';
$modversion['config'][$cpto]['formtype'] = 'select';
$modversion['config'][$cpto]['valuetype'] = 'text';
$modversion['config'][$cpto]['options'] = array(
											_MI_BIRTHDAY_FORM_DHTML=>'dhtml',
											_MI_BIRTHDAY_FORM_COMPACT=>'textarea',
											_MI_BIRTHDAY_FORM_SPAW=>'spaw',
											_MI_BIRTHDAY_FORM_HTMLAREA=>'htmlarea',
											_MI_BIRTHDAY_FORM_KOIVI=>'koivi',
											_MI_BIRTHDAY_FORM_FCK=>'fck',
											_MI_BIRTHDAY_FORM_TINYEDITOR=>'tinyeditor'
											);
$modversion['config'][$cpto]['default'] = 'dhtml';

/**
 * Enable users of your site to fill their form ?
 */
$cpto++;
$modversion['config'][$cpto]['name'] = 'enable_users';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_ENABLE_USERS';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'yesno';
$modversion['config'][$cpto]['valuetype'] = 'int';
$modversion['config'][$cpto]['default'] = 1;

/**
 * Sort order
 */
$cpto++;
$modversion['config'][$cpto]['name'] = 'userslist_sortorder';
$modversion['config'][$cpto]['title'] = "_MI_BIRTHDAY_SORT_ORDER";
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'select';
$modversion['config'][$cpto]['valuetype'] = 'int';
$modversion['config'][$cpto]['options'] = array(
											_MI_BIRTHDAY_SORT_ORDER1 => 1,
											_MI_BIRTHDAY_SORT_ORDER2 => 2
											);
$modversion['config'][$cpto]['default'] = 2;

/**
 * Activate CAPTCHA ?
 */
$cpto++;
$modversion['config'][$cpto]['name'] = 'use_captcha';
$modversion['config'][$cpto]['title'] = '_MI_BIRTHDAY_USE_CAPTCHA';
$modversion['config'][$cpto]['description'] = '';
$modversion['config'][$cpto]['formtype'] = 'yesno';
$modversion['config'][$cpto]['valuetype'] = 'int';
$modversion['config'][$cpto]['default'] = 0;


// ********************************************************************************************************************
// Comments ***********************************************************************************************************
// ********************************************************************************************************************
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'birthday_id';
$modversion['comments']['pageName'] = 'user.php';

// Comment callback functions
$modversion['comments']['callbackFile'] = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'birthday_com_approve';
$modversion['comments']['callback']['update'] = 'birthday_com_update';
?>