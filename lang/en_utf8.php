<?
$pa_texts=Array(
"ID_NEXT" => "next",
"ID_PREV" => "previous",
"ID_NEXT_PAGE" => "next",
"ID_PREV_PAGE" => "previous",
"ID_ALBUM_NAME" => "Photoalbum",
"ID_PHOTO_DIR" => "Photos",
"ID_SETUP" => "Setup",
"ID_HOME" => "Home",
"ID_NAME" => "Name",
"ID_EMAIL" => "E-Mail",
"ID_NAME_EMAIL" => "Optional you can enter your name and email",
"ID_COMMENT_INSTR" => "Please type your message click Add New Comment",
"ID_ADD_COMMENT" => "Add new comment",
"ID_ENTER_PASSWD" => "Enter password:",
"ID_DELETE_COMMENT" => "Delete Comment",
"ID_ALBUMS" => "Albums",
"ID_SEARCH" => "Search",
/////////////setup menu
"ID_ENABLE"=>"Enable",
"ID_SETUP_MENU"=>"Menu:",
"ID_SETUP_MENU_MAIN"=>"Main setup",
"ID_SETUP_MENU_LOGS"=>"Access logging",
"ID_SETUP_MENU_DIRS"=>"Galleries",
"ID_SETUP_MENU_CACHE"=>"Cache options",
"ID_SETUP_MENU_ADMIN"=>"Upload manager",
"ID_SETUP_MENU_COMMENTS"=>"Comments and Voting",
"ID_SETUP_MENU_ECARD"=>"E-Card",
"ID_SETUP_MENU_TEXTS"=>"Translations",
"ID_SETUP_MENU_ERRORLOG"=>"Errors log",
"ID_SETUP_MENU_SYSCHECK"=>"System check",
"ID_SETUP_MENU_THUMBNAILS"=>"Thumbnails",
"ID_SETUP_MENU_THEMES"=>"Themes",
"ID_SETUP_MENU_USERS"=>"Users",
"ID_SETUP_MENU_GROUPS"=>"Groups",
"ID_SETUP_SAVE_CONFIG"=>"Save configuration",
"ID_SETUP_MY_ACCOUNT"=>"My Account",
"ID_SETUP_MENU_PARAMS"=>"Photo parameters",
"ID_SETUP_MENU_PICS"=>"Pictures",

"ID_SETUP_THUMBNAILS"=>"Thumbnails settings",
"ID_SETUP_DESC_MAIN"=>"This is the main setup page. Here you can setup main settings, thumbnails settings and some theme settings. This page is called after installing automatically and you have to setup this befor using phpAlbum.",
"ID_SETUP_DESC_THUMBNAILS"=>"On this page you can setup size and quality of thumbnails and resized photos. Each group of Thumbnail settings represent one quality setting. User can then change one of enabled quality settings. Default quality setting is taken for forst time visitors. You can add new quality settings or delete them. It is not possible to delete last setting, so one enabled and default is still there.",
"ID_SETUP_DESC_THEMES"=>"On this page you can change all things regarding the visual appereance of your album. You can choos style of thumbnailes eather flowing or raster. You can further choose the theme you want to use and edit your colour maps",
"ID_SETUP_DESC_LOGS"=>"In this setup page you can enable logging of hits on your gallery, you can also change log file name, so nobody can read this and for example make some exclude-strings so you can ignore some hostnames.",
"ID_SETUP_DESC_CACHE"=>"In this section you can setup if cache should be used and for what types of files. Also you can see how much place is taking your cache and you can delete it.",
"ID_SETUP_RESET_CONFIG"=>"Reset to default",
"ID_SETUP_DESC_ADMIN"=>"On this page you can upload new photos and administrate the photos directory, for this it is needed that you set up the ftp-server and Photos direcotry on ftp-server variables in main-setup. If you installed phpAlbum.net with wizard, this should be already setted up and be correct. If you moved phpAlbum main directory, you must also move the directory setting.",
"ID_SETUP_DESC_COMMENTS"=>"On this page you can setup settings about commenting and voting for your pictures. This page is also used for approving of new comments, or just viewing new comments.",
"ID_SETUP_DESC_ECARD"=>"On this page you can change settings about e-cards. E-cards are electronical post-cards, users of your album can send e-cards with your pictures (only linked in email) to other people.",
"ID_SETUP_ALBUM_DIR"=>"Album directory:",
"ID_SETUP_ALBUM_DIR_DESC"=>"Please choose here your directory where you have your photos relative to script (main.php) directory.",
"ID_SETUP_ERRORLOG_DESC"=>"Here you can find error messages. This is usable if you don't know why for example something doesnt function. You can use it for reporting bugs or for getting help from phpAlbum support.",
"ID_SETUP_TEXTS_DESC"=>"On this page you can create your own language translation. Please check main setup for already aviable languages. There you can change your preferable language and here you can make som fine tuning of it or just translate it to some fully other language. If you feel you made some perfect translation for your language you can send us your translation file and we can incorporate your translation to the standard (file is in your data directory named translation.dat).",
"ID_SETUP_TEXTS_GUIDE"=>"Translation Guide: You can translate only the phrases you want to change. This will be then used instead of the orginal language element.</br>You can se here 3 fields for each language element. Its ID in grey color, its original language text in green color and an input field for your translation. This is then yellow if not translated and white if already translated. <b> For translating full language you want to contribute transate also the fields where the translation is the same as original</b>. Pleas be careful to use %s where it was originally and also som html tags like &lt;b&gt; ...",
"ID_SETUP_CACHE_DIR"=>"Cache directory:",
"ID_SETUP_CACHE_DIR_DESC"=>"Please choose here your cache directory relative to script (main.php) directory. It must be writable by script user (i.e. wwwrun)",
"ID_SETUP_MY_ACCOUNT_DESC"=>"Here you can edit your user data, the name, email, homepage, change your password.",
"ID_SETUP_DESC_USERS"=>"On this page you can manage your registered users. You can delete or edit them. For creating new one, just use the Ordinary Register functionality.",
"ID_SETUP_DESC_GROUPS"=>"On this page you can manage the groups. Later you can assign the users to this groups. You can also restrict the visibility of some galleries / directories to these groups. So for example every one from your family (Family group) can see also the family photos and so on...",
"ID_SETUP_DESC_DIRS"=>"On this page you can setup the galleries. You can change the descriptions, access groups, sorting and you can also make some basic manipulation of images.",
"ID_SETUP_DESC_PICS"=>"On this page you can setup the descriptions or parameters of photos.",
"ID_SETUP_DESC_PARAMS"=>"Here you can add,delete and modify variables you want to be able to enter for each of your photos. This will be showed then under each picture. It is also possible to switch visibility of every parameter for each directory separately, this you can do it in Galleries section.",
"ID_SETUP_PASSWORD"=>"Password:",
"ID_SETUP_PASSWORD_DESC"=>"Please choose a password and retype it in the second field. Actual password can not be shown as this is stored onyl as encrypted string. That is why no body can know your password.",
"ID_SETUP_LANGUAGE"=>"Language:",
"ID_SETUP_LANGUAGE_DESC"=>"Please choose language with character set for displaying the page. Please look at system check if you have enabled mbstring module, if not be careful when choosing UTF-8 with naming the files and directories, do not use special characters.",

"ID_SETUP_HOME_URL"=>"Return Home URL:",
"ID_SETUP_HOME_URL_DESC"=>"Please choose URL where the HOME link should point.",

"ID_SETUP_SITE_NAME"=>"Site name:",
"ID_SETUP_SITE_NAME_DESC"=>"Please choose a site name, this is used as tile for this page.",

"ID_SETUP_NEW_DIR_INDIC"=>"New files in gallery indicator:",
"ID_SETUP_NEW_DIR_INDIC_DESC"=>"How long should be with ohter type of direcotry icon indicated, that there are new files in gallery. Type number in Hours",

"ID_SETUP_FTP_SERVER"=>"FTP Server:",
"ID_SETUP_FTP_SERVER_DESC"=>"Please type your ftp server url , for example ftp.myserver.com",

"ID_SETUP_FTP_PHOTO_DIR"=>"FTP Photo Directory:",
"ID_SETUP_FTP_PHOTO_DIR_DESC"=>"This is a photo directory on your ftp server, i.e. /phpAlbum/photos_xyz/ , leading and ending back slashes are mandatory",

"ID_SETUP_QUALITY_NAME"=>"Description:",
"ID_SETUP_QUALITY_NAME_DESC"=>"Describes this quality settings. This text is used for the switch quality link on album page",
"ID_SETUP_QUALITY_THMB"=>"Thumbnails size / quality",
"ID_SETUP_QUALITY_THMB_DESC"=>"Please type here the largest size of thumbnails (i.e. 100 or 150). As a second parameter type quality of jpeg compression (normal valuses from 40 to 90). Quality is used only for JPG files not for PNG or GIF. You can also check <b>Square Thumbnails</b> getting then all thumbnails the same size.",
"ID_SETUP_QUALITY_PHOTO"=>"Photo size / quality",
"ID_SETUP_QUALITY_PHOTO_DESC"=>"Please type here the largest size of reized photo (i.e. 100 or 150). As a second parameter type quality of jpeg compression (normal valuses from 40 to 90). Quality is used only for JPG files not for PNG or GIF. <b> Use for size = 0 (zero) if no resizing at all should be done</b>",
"ID_SETUP_DEFAULT_SORT"=>"Default sorting:",
"ID_SETUP_DEFAULT_SORT_DESC"=>"Choose default sorting used for sorting of thumbnails and directories. This is used for directories where sorting is set to default.",
"ID_SETUP_SQUARE_THMB"=>"Square Thumbnails",
"ID_SETUP_ADD_QUALITY"=>"Add new quality setting",
"ID_SETUP_DELETE_QUALITY"=>"Delete this quality setting",
"ID_SETUP_RESIZE_IF_BIGGER"=>"Resize only if bigger",
"ID_SETUP_RESIZE_TO_FIT"=>"Resize photos to fit:",
"ID_SETUP_RESIZE_TO_FIT_DESC"=>"Select how should be photos resized, concerning both widht and height to fit the size or only widht or height. You can so setup that all resized photos has same hight or width or that they fit into square size x size.",
"ID_BOTH_WIDTH_AND_HEIGHT"=>"Both width and height",
"ID_WIDTH"=>"Width",
"ID_HEIGHT"=>"Height",
"ID_SETUP_THEME_SETTINGS"=>"Theme settigs",
"ID_SETUP_THEME_COLOR_SETTINGS"=>"Theme colors",
"ID_SETUP_THEME_THUMBNAILS_STYLE"=>"Thumbnails style:",
"ID_SETUP_THEME"=>"Theme:",
"ID_SETUP_THEME_DESC"=>"Please choos one of the aviable themes. For creating your own theme just copy for example Borders directory to some other and this will automatically aviable for select here.",
"ID_SETUP_LOGO_PATH"=>"Logo file path:",
"ID_SETUP_LOGO_PATH_DESC"=>"Enter relative path to the logo you want use.(used for file- style logo)",
"ID_SETUP_LOGO_STYLE"=>"Logo style:",
"ID_SETUP_LOGO_STYLE_DESC"=>"Please choose how should be the logo generated. NONE for no logo,GRAPHICAL for generated logo, TEXT for simple text logo and FILE for logo taken from logo path.",
"ID_SETUP_LOGO_TEXT"=>"Logo text:",
"ID_SETUP_LOGO_TEXT_DESC"=>"Enter the text for graphical or text style of logo.",
"ID_SETUP_THEME_FLOWING_STYLE"=>"Flowing style",
"ID_SETUP_THEME_RASTER_STYLE"=>"Raster style",
"ID_SETUP_MAX_PHOTO_PER_PAGE"=>"Max. thumbnails per page:",
"ID_SETUP_MAX_PHOTO_PER_PAGE_DESC"=>"Enter the maximum number of showed thumbnails. If there are more photos in one gallery there will be displayed link for next or previous page.",
"ID_SETUP_RASTER_SIZE"=>"Columns / Rows :",
"ID_SETUP_RASTER_SIZE_DESC"=>"Enter count of columns and rows for raster style of thumbnails viewing",
"ID_SETUP_SHOW_FILENAMES"=>"Show Filenames",
"ID_SETUP_SHOW_FILENAMES_DESC"=>"Enable if you want to show filenames under the thumbnails. These are then showed if no short description exits for this picture.",
"ID_SETUP_DISABLE_BOTTOM_NEXTPREV"=>"Disable bottom next/prev",
"ID_SETUP_DISABLE_BOTTOM_NEXTPREV_DESC"=>"This checkbox will disable the bottom links for next or previous picture.",

"ID_SETUP_COLOR_SETTINGS"=>"Color settings:",
"ID_SETUP_ADD_COLOR_MAP"=>"Add new color map",
"ID_SETUP_COLOR_DELETE"=>"Delete this color map",
"ID_SETUP_COLOR_NAME"=>"Color map name:",
"ID_SETUP_COLOR_NAME_DESC"=>"This is the name of this color map. If this is not the last one you can even delete it.",
"ID_SETUP_COLOR_BG"=>"Background:",
"ID_SETUP_COLOR_LINK"=>"Link:",
"ID_SETUP_COLOR_DIR_DESC"=>"Dir.Desc:",
"ID_SETUP_COLOR_BORDER"=>"Photo Border:",
"ID_SETUP_COLOR_PHOTO_DESC"=>"Photo Desc:",
"ID_SETUP_COLOR_LOGO"=>"Logo:",

"ID_SETUP_ENABLE_LOGGING"=>"Logging enabled",
"ID_SETUP_ENABLE_LOGGING_DESC"=>"This checkbox enables access logging on you album",
"ID_SETUP_LOGS_FILENAME"=>"Logs filename:",
"ID_SETUP_LOGS_FILENAME_DESC"=>"Filename in which the logging will be saved.",
"ID_SETUP_LOGS_EXCLUDE"=>"Exclude strings:",
"ID_SETUP_LOGS_EXCLUDE_DESC"=>"Enter strings delimited with ; (semiclon). You can so exclude from logging some hosts. For example if you know that all your access will be looged as from your_internet_provider.com you just type here your_internet_provider",

"ID_SETUP_CACHE_THUMBNAILS"=>"Cache thumbnails",
"ID_SETUP_CACHE_RESIZED_PHOTOS"=>"Cache resized photos",
"ID_SETUP_CACHE_THUMBNAILS_DESC"=>"This checkbox enables caching of generated thumbnails. This is highly recomended, because it is then much faster if the program loads the stored thumbnails insted of generating it for each request.",
"ID_SETUP_CACHE_RESIZED_PHOTOS_DESC"=>"This checkbox enables caching of resized photos. This is also very helpful for speeding up your album, but it takes also quite much space from your webspace. So be creful for enabling this.",
"ID_SETUP_LOGIN"=>"Login",
"ID_USERNAME"=>"Username",
"ID_PASSWORD"=>"Password",
"ID_SETUP_ACT_DIR"=>"Actual directory:",
"ID_SETUP_ACT_DIR_DESC"=>"You can cange here manually the actual folder on ftp server. Easier is to user the directory links in list of files.",
"ID_SETUP_UPLOAD_FILE"=>"Upload file:",
"ID_SETUP_UPLOAD_FILE_DESC"=>"With this you can upload single file to the actual directory on the ftp server.",
"ID_UPLOAD"=>"Upload",
"ID_SETUP_MAX_SIZE"=>"Max.Size:",
"ID_SETUP_UPLOAD_ZIP_FILE"=>"Upload zip-file:",
"ID_SETUP_UPLOAD_ZIP_FILE_DESC"=>"With this you can upload zip file to the actual directory on the ftp server. This zip file will be extracted and the directory structure in it on the server recreated. If you want to upload zip file without extracting then us upload file.",
"ID_UPLOAD_ZIP"=>"Upload Zip",
"ID_SETUP_CREATE_DIR"=>"Create directory:",
"ID_SETUP_CREATE_DIR_DESC"=>"Here you can create new directory in actual directory on the ftp-server",
"ID_CREATE"=>"Create",
"ID_FILENAME"=>"Filename",
"ID_SIZE"=>"Size",
"ID_IMAGE_SIZE"=>"Image Size",
"ID_OWNER"=>"Owner",
"ID_GROUP"=>"Group",
"ID_FUNCTIONS"=>"Functions",
"ID_TIME"=>"Time",
"ID_COMMAND"=>"Command",
"ID_FILE_DIR"=>"File / Directory",
"ID_HOST"=>"Host",
"ID_PATH"=>"Path",
"ID_ALIAS"=>"Alias",
"ID_PASSWORDS"=>"Passwords",
"ID_SETUP_ENABLE_COMMENTS"=>"Enable Comments",
"ID_SETUP_ENABLE_COMMENTS_DESC"=>"This checkbox enables commenting of your pictures",
"ID_SETUP_COMMENT_QUEUE"=>"Approve queue size",
"ID_SETUP_COMMENT_QUEUE_DESC"=>"Here you can setup how many comments will stay in approve queue. Older comments will be automatically approved, but you can every time delete comments right under the pictures. Actually this is also the count of newest comments you can see here.",
"ID_SETUP_COMMENT_APPROVING_DESC"=>"Here you will see all comments you have not approved or deleted. Approving will delete it from this list but the comment stays under the picture, there you can delete it also after approving. Deleting it here will delete it also under picture. There are no questions like, do you really want to delete it? So be careful. You can delete it also under picture but only if you already typed the setup password. So here are all the new not approved not deleted comments:",
"ID_SETUP_NEW_COMMENTS"=>"New Comments",
"ID_SETUP_ENABLE_ECARD"=>"Enable E-Cards",
"ID_SETUP_ENABLE_ECARD_DESC"=>"This checkbox enables the sending of e-cards from your page",
"ID_SETUP_ECARD_SUBJECT"=>"Subject of e-card's E-Mail",
"ID_SETUP_ECARD_SUBJECT_DESC"=>"This text will be used as a subject in the e-mail of the e-card",
"ID_SETUP_ECARD_PICKED_SUBJECT"=>"Picked Up! e-mail subject",
"ID_SETUP_ECARD_PICKED_SUBJECT_DESC"=>"This text will be used as a subject of <b>picked up!</b> e-mail, which will be sent to the sender of the e-card",
"ID_SETUP_ECARD_TEXT"=>"e-card's e-mail text",
"ID_SETUP_ECARD_TEXT_DESC"=>"This will be message sent in the email. You can use here several special strings which will be replaced by the correct values. (#TO_NAME, #TO_EMAIL, #FROM_NAME, #FROM_EMAIL, #DATE, #TIME, #ECARD_ADRESS, #IMAGE_ADRESS)",
"ID_SETUP_ECARD_PICKED_TEXT"=>"Picked Up! e-mail text",
"ID_APPROVE"=>"Approve",
"ID_DELETE"=>"Delete",
"ID_TEXT"=>"Text",
"ID_PICTURE"=>"Picture",
"ID_TYPE"=>"Type",
"ID_ERROR_NUMBER"=>"ErrNum",
"ID_ERROR_MESSAGE"=>"Error Message",
"ID_SCRIPT_NAME"=>"Script name",
"ID_LINE"=>"Line",
"ID_LOGIN"=>"Login",
"ID_LOGOUT"=>"Logout",
"ID_SAVE"=>"Save",
"ID_REGISTER"=>"Register New User",
"ID_REMEMBER"=>"Remember",
"ID_SETUP_USERNAME_DESC"=>"Please enter your desired username here. You get an error message if this already exists",#
"ID_RETYPE_PASSWORD"=>"Retype password:",
"ID_SETUP_EMAIL"=>"Your E-Mail adress:",
"ID_SETUP_EMAIL_DESC"=>"Please enter here your email adress, this will not be published.",
"ID_SETUP_HOMEPAGE"=>"Homepage",
"ID_SETUP_HOMEPAGE_DESC"=>"Please enter your homepage, this will be published with your comments on pictures.",
"ID_SETUP_REGISTER_NEW_USER"=>"Register",
"ID_THANKS_FOR_REGISTER"=>"Thank you for registerig on this site.",
"ID_SETUP_DELETE_ERROROLOG"=>"Delete Errorlog",
"ID_SETUP_ADD_GROUP"=>"Add new user group",
"ID_SETUP_NEW_GROUP_NAME"=>"Name of new group:",
"ID_SETUP_ADD_GROUP_DESC"=>"Please enter the name of new group and click thu button. This will create a new group. You can then assign it to the users and galleries.",
"ID_SETUP_SHOW_DIRS"=>"Show assigned galleries",
"ID_SETUP_SHOW_USERS"=>"Show Users",
"ID_USER"=>"User",
"ID_EDIT"=>"Edit",
"ID_ID"=>"Id",
"ID_NOT_POSSIBLE"=>"Not possible",
"ID_SETUP_ADD_NEW_PARAM"=>"Add new parameter",
"ID_SETUP_ADD_PARAM_DESC"=>"Type name of the new Parameter and select type of the new parameter. <ul><li><b>User value</b> - user defined value as text</li><li><b>User list of values</b> - user predefined list of values selectable then for each picture</li><li><b>System value</b> - you can then select as default value some system variables of picture like dimesnion, size, creation date, filename, filename with download fullsize link ..</li></ul>",
"ID_SETUP_PARAM_NAME"=>"Parameter name:",
"ID_SETUP_PARAM_NAME_DESC"=>"Please enter new parameter name if you whish to change it. With clicking on delete link you delete this parameter here and under each picture also, so be careful doing this.",
"ID_SETUP_DELETE_PARAM"=>"Delete parameter",
"ID_SETUP_PARAM_DEFAULT"=>"Default value:",
"ID_SETUP_PARAM_DEFAULT_DESC"=>"Here you can setup default value of this parameter, which will be showed on all photos where it was not overwritten with other photo specific value.",
"ID_ALLOW_HTML"=>"Allow HTML code (not filter this out)",
"ID_SETUP_PARAM_SYS_DEFAULT"=>"Automatic value:",
"ID_SETUP_PARAM_SYS_DEFAULT_DESC"=>"Choose value to be displayed for this parameter.",
"ID_SETUP_EDIT_LOV"=>"Edit list of values",
"ID_SETUP_DELETE_LOV"=>"Delete value",
"ID_NOT_DEFINED"=>"NOT DEFINED",
"ID_ADD_NEW_VALUE"=>"Add new value",
"ID_SETUP_ACCOUNT_GROUP_DESC"=>"Please choos groups you would like to assign to this account.",
"ID_SETUP_GALLERY"=>"Gallery:",
"ID_SETUP_GALLERY_DESC"=>"Please choose the gallery you want to setup. If you do not find what you expected, try to scan direcotries with the link donw ..",
"ID_SETUP_ALIAS"=>"Alias name:",
"ID_SETUP_ALIAS_DESC"=>"Please enter alias name of the directory which should be displayed insted of directory name",
"ID_SETUP_DESC"=>"Short description:",
"ID_SETUP_DESC_DESC"=>"This is short description of directory, may be displayed under the thumbnail/logo of this directory",
"ID_SETUP_PIC_DESC_DESC"=>"This is short description of picture, may be displayed under the thumbnail of this picture",
"ID_SETUP_LONG_DESC"=>"Long description:",
"ID_SETUP_LONG_DESC_DESC"=>"Enter the long description displayed for this directory. You can enter also HTML code. For new line use &lt;br&gt;.",
"ID_SETUP_PIC_LONG_DESC_DESC"=>"Enter the long description displayed under this picture together with short description. You can enter also HTML code. For new line use &lt;br&gt;.",
"ID_SETUP_SORTING"=>"Sorting:",
"ID_SETUP_SORTING_DESC"=>"Please choose desired sorting of the pictures in this directory. Default means to choose sorting defined in Main Setup",
"ID_SETUP_VISIBLE"=>"Visible",
"ID_SETUP_VISIBLE_DESC"=>"Choose if the directory should be visible or not.",
"ID_SETUP_ACCESS_RIGHTS"=>"Access rights",
"ID_SETUP_GALLERY_GROUP_DESC"=>"Please choose the groups if you want to restrict the visibility of this gallery to selected groups. Disabled checkboxes are inherited from some gallery above int the structure,so you can't change it here but in the respective gallery",
"ID_SETUP_GALLERY_PARAMS_DESC"=>"Select parameters you would like to see with picters. For defining more parameters please go to Photo Parameters section.",
"ID_SETUP_SHOW_CUSTOM_PARAMS"=>"Show custom parameters",
"ID_SETUP_SHOW_DEFAULT_PARAMS"=>"Show default parameters",
"ID_SETUP_PARAMS_DEFAULT_CUSTOM_DESC"=>"Please choose if you want to display default parameters under each photo of this gallery or customized selection of parameters.",
"ID_SETUP_SHOW_PARAMS"=>"Custom or Default:",
"ID_NO_DEFINED_PARAMS"=>"There are no defined parameters.",
"ID_SETUP_NEXT_SCAN"=>"Next automatic full directory scan : %s",
"ID_SETUP_SCAN_DIRS"=>"Scan directories now!",
"ID_DEFAULT_DISPLAYED"=>"Default displayed",
"ID_SETUP_PARAM_DEFAULT_DISPLAYED_DESC"=>"Check this checkbox if you want to display this parameter as default, i.e. for each gallery which has setup display default parameters.",
"ID_HTML_NOT_ALLOWED"=>"HTML code is not allowed.",
"ID_HTML_ALLOWED"=>"HTML code is allowed.",
"ID_DEFAULT_VALUE"=>"Default value is <b>%s</b>",
"ID_NO_DEFAULT_VALUE"=>"No default value is defined",
"ID_DEFAULT"=>"Default",
"ID_SETUP_THEME_BORDERS"=>"Picture and thumbnail borders",
"ID_SETUP_THEME_PIC_BORDER_SIZE"=>"Size of picture border",
"ID_SETUP_THEME_THMB_BORDER_SIZE"=>"Size of Thumbnail border",
"ID_SETUP_THEME_DISPLAY_SHADOWS"=>"Display shadows",
"ID_SETUP_THEME_DISPLAY_SHADOWS_DESC"=>"When by theme supported then displays shadows for behind the thumbnails and pictures",
"ID_SETUP_THEME_PIC_BORDER_SIZE_DESC"=>"Please enter the width of picture borders",
"ID_SETUP_THEME_THMB_BORDER_SIZE_DESC"=>"Please enter the width of Thumbnail borders",
"ID_SETUP_WATERMARK_FILE"=>"Watermark file",
"ID_SETUP_WATERMARK_FILE_DESC"=>"Select png-file to be used as watermark on resized photos. Put your transparent PNGs in main phpAlbum directory.",
"ID_NO_WATERMARK"=>"No Watermark selected",
"ID_SETUP_WATERMARK_POSITION"=>"Watermark position",
"ID_SETUP_WATERMARK_POSITION_DESC"=>"Choose position for watermark",
"ID_SETUP_DIR_LOGO_STYLE"=>"Gallery logo (icon) style",
"ID_SETUP_DIR_LOGO_STYLE_DESC"=>"Please choose how the gallery(directory) will be displayed, as directory icon, or as thumbnail of some picture in it with normal thumbnail size or with other specified size.",
"ID_SETUP_DIR_LOGO_STYLE_LOGO"=>"Show directory logo",
"ID_SETUP_DIR_LOGO_STYLE_PIC1"=>"Show picture thumbnails (same size as thumbnails)",
"ID_SETUP_DIR_LOGO_STYLE_PIC2"=>"Show picture thumbnails (other size)",
"ID_USE_FOR_LOGO"=>"Use for directory logo",
"ID_SETUP_ADD_THMB_HEIGHT"=>"Additional height for thumbnails",
"ID_SETUP_ADD_THMB_WIDTH"=>"Additional width for thumbnails",
"ID_SETUP_ADD_THMB_HEIGHT_WIDTH_DESC"=>"Please increase this value if you are using more lines for directory or thumbnail description. This will make then more place under thumbnails. This is used only in flowing style where more lines of description can couse layout problems.",
"ID_SETUP_SHARPEN_WITH_PARAM"=>"Enable sharpening with parameters:",
"ID_SETUP_AMOUNT"=>"Amount",
"ID_SETUP_RADIUS"=>"Radius",
"ID_SETUP_TRESHOLD"=>"Treshold",
"ID_SETUP_SHARPEN_DESC"=>"You can enable sharpening of thumbnails which are normally quite soft after resizing. <b>Please be aware that this can take quite much performance.</b>",
"ID_SETUP_SHARPEN_THMB"=>"Thumbnails sharpening",
"ID_SETUP_INFO_THMB"=>"Show following under thumbnails:",
"ID_SETUP_INFO_THMB_DESC"=>"Please choose which informations should be showed under thumbnails",
"ID_SETUP_INFO_THMB_VIEWS"=>"View count",
"ID_SETUP_INFO_THMB_COMMENTS"=>"Comment count",
"ID_SETUP_INFO_THMB_VOTES"=>"Voting summary",
"ID_SETUP_DATE_FORMAT"=>"Date/Time Format",
"ID_SETUP_DATE_FORMAT_DESC"=>"Set the date/time format you want to use. Use for this PHP standards used for function date()",
"ID_SYS_PAR_SIZ"=>"%s KB",
"ID_SYS_PAR_DIM"=>"%s x %s ( W x H )",
"ID_SYS_PAR_FNM"=>"%s",
"ID_SYS_PAR_FNL"=>"<a class=\"me3\" href=\"%s\" target=\"_blank\">%s</a>",
"ID_SYS_PAR_DWL"=>"<a class=\"me3\" href=\"%s\" target=\"_blank\">(click to download original file)</a>",
"ID_SYS_PAR_CDT"=>"%s",
"ID_SYS_PAR_EXIF_F"=>"F %s",
"ID_SYS_PAR_EXIF_FL"=>"%smm",
"ID_SYS_PAR_EXIF_ISO"=>"ISO %s",
"ID_SYS_PAR_EXIF_EXP_TIME"=>"%s sec",
"ID_PHOTO_DETAILS"=>"Photo details",
"ID_SETUP_PRIVILEGES"=>"Privileges",
"ID_SETUP_PRIVILEGES_DESC"=>"Here you can setup which group has access to which funcitons in setup.Green color means it is enabled and red that it is disabled for the specific group. Clicking on the link will change the status and so grant or revoke the access to clicken function.<br/><br/>In Default column you can check which groups should be assigned automatically to the new registered users.",

"ID_DISABLE_ERROR_LOG"=>"Disable error logging",
"ID_SETUP_ENABLE_ANTISPAM"=>"Enable antispam",
"ID_SETUP_ENABLE_ANTISPAM_DESC"=>"Enable antispam code pictures. This will make unpossible to automatically put some spam comments on your site.",
"ID_SETUP_PUBLISH_ONLY_APPROVED"=>"Publish only Approved comments",
"ID_SETUP_PUBLISH_ONLY_APPROVED_DESC"=>"If this checkbox is checked, comments will be published only after approving on this page",
"ID_SETUP_THEME_NEWEST_COUNT"=>"Show newest pictures count",
"ID_SETUP_THEME_NEWEST_COUNT_DESC"=>"Enter the count of the newest picuters which should be displayed on the front page",
"ID_NEWEST_PICTURES"=>"Newest Pictures",
"ID_SETUP_USE_IPTC_DESC"=>"Use IPTC Photo Description",
"ID_SETUP_USE_IPTC_DESC_DESC"=>"If this is checked, when scanning the pictures first time then IPTC Caption and Headline will be used for Long and Short description of photos.",
"ID_IMAGEORIG"=>"Image Download",
"ID_IMAGEVIEW"=>"Imageview",
"ID_ERROR_PAGE_MESSAGE"=>"You are not allowed view this page or download this image!",
"ID_RECIPIENT_NAME"=>"Recipient Name",
"ID_RECIPIENT_EMAIL"=>"Recipient Email",
"ID_SENDER_NAME"=>"Sender Name",
"ID_SENDER_EMAIL"=>"Sender Email",
"ID_YOUR_MESSAGE"=>"Your Message",
"ID_WRITE_ECARD"=>"Write E-Card",
"ID_FROM"=>"From:&nbsp;",
"ID_TO"=>"To:&nbsp;",
"ID_SETUP_SHOW_SEARCH_BOX"=>"Show Search Box",
"ID_SETUP_SHOW_SEARCH_BOX_DESC"=>"With this you can enable search field on the album pages. Currently searching only works for the keywords imported from IPTC",
"ID_SETUP_TRACKING_CODE"=>"Tracking Code",
"ID_SETUP_TRACKING_CODE_DESC"=>"Here you can put for example Javascript tracking code (like from Google Analytics) which will be displayed on every page.", 
////////////// messages
"ID_MSG_DIR_NOT_EXISTS"=>"Directory %s does not exists, change it !",
"ID_MSG_DIR_NOT_WRITABLE"=>"Directory %s is not writable, change rights with CHMOD !",
"ID_MSG_FILE_NOT_EXISTS"=>"File %s could not be found",
"ID_FILE_WAS_DELETED"=>"File %s was deleted",
"ID_MSG_SETUP_FTP"=>"Please go to the Main section and set up ftp-server and ftp-photos-dir in order to be able use upload manager",
"ID_MSG_FTP_SUPPORT"=>"FTP-Support is not enabled!! You are not able to use upload manager. Ask your provider to enable or install it.",
"ID_MSG_FTP_UNABLE_CONNECT"=>"Unable to connect to the server %s",
"ID_MSG_FTP_INVALID_LOGIN"=>"Username or password invalid!",
"ID_MSG_FTP_PASSIVE_MODE"=>"Unable to setup passive mode on ftp server",
"ID_MSG_FTP_UNABLE_CHDIR"=>"Unable to change to directory %s",
"ID_MSG_FTP_PHOTO_DIR"=>"Ftp-server photos directory points to another directory not to the photos",
"ID_MSG_FTP_UNABLE_DELETE"=>"Unable to delete file %s on ftp server",
"ID_MSG_FTP_UNABLE_UPLOAD"=>"Unable to upload file %s!",
"ID_MSG_FTP_UNABLE_OPEN_TMP"=>"Unable to open temporary file!",
"ID_MSG_FTP_UNABLE_MKDIR"=>"Unable to create directory %s on ftp server!",
"ID_MSG_FTP_UNABLE_RMDIR"=>"Unable to remove directory %s on ftp server!",
"ID_MSG_FTP_NOT_ZIP"=>"Not a zip file or not supported format!",
"ID_MSG_FTP_ZIP_UNSUPPORTED"=>"No ZIP-Support in PHP installed!",
"ID_MSG_FTP_FILE_UPLOAD_ATTACK"=>"Possible file upload attack!",
"ID_MSG_PASSWORD_ERROR"=>"Retyped password was not identical with the password. Password is not changed!",
"ID_MSG_EMAIL_REQUIRED"=>"E-Mail is required field. Please type your email, this will be not published on the site.",
"ID_MSG_USERNAME_EXISTS"=>"Username <b>%s</b> is already used!",
"ID_MSG_PASSWORD_REQUIRED"=>"Password is required!",
"ID_MSG_GROUP_EXISTS"=>"Group <b>%s</b> already exist. You can not create groups with the same name!",
"ID_MSG_PARAM_EXISTS"=>"Parameter <b>%s</b> already exist. Please use some other name to add parameter.",
"ID_MSG_PARAM_MANDATORY"=>"Parameter name is mandatory, please enter some name of the new parameter",
"ID_MSG_USERNAME_MANDATORY"=>"Usernamy is mandatory field!",
"ID_MSG_VIEW_COUNT"=>"%s",
"ID_MSG_COMMENT_COUNT"=>"%s",
);
?>