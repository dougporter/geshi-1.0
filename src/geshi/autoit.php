<?php
/*************************************************************************************
 * autoit.php
 * --------
 * Author: big_daddy (robert.i.anthony@gmail.com)
 * Copyright: (c) 2006 and to GESHi ;)
 * Release Version: 1.0.7.17
 * Date Started: 26.01.2006
 *
 * Current bugs & todo:
 * ----------
 * - dosn't highlight symbols (Please note that in 1.0.X these are not used. Hopefully they will be used in 1.2.X.)
 * - not sure how to get sendkeys to work " {!}, {SPACE} etc... "
 * - jut copyied the regexp for variable from php so this HAVE to be checked and fixed to a better one ;)
 *
 * Reference: http://www.autoitscript.com/autoit3/docs/
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'AutoIt',
    'COMMENT_SINGLE' => array(';'),
    'COMMENT_MULTI' => array('#comments-start' => '#comments-end', '#cs' => '#ce'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'false', 'and', 'byref', 'case', 'const', 
            'continuecase', 'continueloop', 'default', 'dim', 'do', 
            'else', 'elseif', 'endfunc', 'endif', 'endselect', 
            'endswitch', 'endwith', 'enum', 'exit', 'exitloop', 
            'for', 'func', 'global', 'if', 'in', 
            'local', 'next', 'not', 'or', 'redim', 
            'return', 'select', 'step', 'switch', 'then', 
            'to', 'true', 'until', 'wend', 'while', 
            'with'
            ),
        2 => array(
            '@appdatacommondir', '@appdatadir', '@autoitexe', '@autoitpid', 
            '@autoitversion', '@com_eventobj', '@commonfilesdir', '@compiled', 
            '@computername', '@comspec', '@cr', '@crlf', '@desktopcommondir', 
            '@desktopdepth', '@desktopdir', '@desktopheight', 
            '@desktoprefresh', '@desktopwidth', '@documentscommondir', 
            '@error', '@exitcode', '@exitmethod', '@extended', 
            '@favoritescommondir', '@favoritesdir', '@gui_ctrlhandle', 
            '@gui_ctrlid', '@gui_dragfile', '@gui_dragid', '@gui_dropid', 
            '@gui_winhandle', '@homedrive', '@homepath', '@homeshare', 
            '@hotkeypressed', '@hour', '@inetgetactive', '@inetgetbytesread', 
            '@ipaddress1', '@ipaddress2', '@ipaddress3', '@ipaddress4', 
            '@kblayout', '@lf', '@logondnsdomain', '@logondomain', 
            '@logonserver', '@mday', '@min', '@mon', '@mydocumentsdir', 
            '@numparams', '@osbuild', '@oslang', '@osservicepack', '@ostype', 
            '@osversion', '@processorarch', '@programfilesdir', 
            '@programscommondir', '@programsdir', '@scriptdir', 
            '@scriptfullpath', '@scriptlinenumber', '@scriptname', '@sec', 
            '@startmenucommondir', '@startmenudir', '@startupcommondir', 
            '@startupdir', '@sw_disable', '@sw_enable', '@sw_hide', '@sw_lock', 
            '@sw_maximize', '@sw_minimize', '@sw_restore', '@sw_show', 
            '@sw_showdefault', '@sw_showmaximized', '@sw_showminimized', 
            '@sw_showminnoactive', '@sw_showna', '@sw_shownoactivate', 
            '@sw_shownormal', '@sw_unlock', '@systemdir', '@tab', '@tempdir', 
            '@tray_id', '@trayiconflashing', '@trayiconvisible', '@username', 
            '@userprofiledir', '@wday', '@windowsdir', '@workingdir', '@yday', 
            '@year'
            ),
        3 => array(
            'abs', 'acos', 'adlibdisable', 'adlibenable', 'asc', 'asin', 
            'assign', 'atan', 'autoitsetoption', 'autoitwingettitle', 
            'autoitwinsettitle', 'beep', 'binarystring', 'bitand', 'bitnot', 
            'bitor', 'bitrotate', 'bitshift', 'bitxor', 'blockinput', 'break', 
            'call', 'cdtray', 'ceiling', 'chr', 'clipget', 'clipput', 
            'consoleread', 'consolewrite', 'consolewriteerror', 'controlclick', 
            'controlcommand', 'controldisable', 'controlenable', 
            'controlfocus', 'controlgetfocus', 'controlgethandle', 
            'controlgetpos', 'controlgettext', 'controlhide', 
            'controllistview', 'controlmove', 'controlsend', 'controlsettext', 
            'controlshow', 'cos', 'dec', 'dircopy', 'dircreate', 'dirgetsize', 
            'dirmove', 'dirremove', 'dllcall', 'dllclose', 'dllopen', 
            'dllstructcreate', 'dllstructgetdata', 'dllstructgetptr', 
            'dllstructgetsize', 'dllstructsetdata', 'drivegetdrive', 
            'drivegetfilesystem', 'drivegetlabel', 'drivegetserial', 
            'drivegettype', 'drivemapadd', 'drivemapdel', 'drivemapget', 
            'drivesetlabel', 'drivespacefree', 'drivespacetotal', 
            'drivestatus', 'envget', 'envset', 'envupdate', 'eval', 'execute', 
            'exp', 'filechangedir', 'fileclose', 'filecopy', 
            'filecreatentfslink', 'filecreateshortcut', 'filedelete', 
            'fileexists', 'filefindfirstfile', 'filefindnextfile', 
            'filegetattrib', 'filegetlongname', 'filegetshortcut', 
            'filegetshortname', 'filegetsize', 'filegettime', 'filegetversion', 
            'fileinstall', 'filemove', 'fileopen', 'fileopendialog', 
            'fileread', 'filereadline', 'filerecycle', 'filerecycleempty', 
            'filesavedialog', 'fileselectfolder', 'filesetattrib', 
            'filesettime', 'filewrite', 'filewriteline', 'floor', 
            'ftpsetproxy', 'guicreate', 'guictrlcreateavi', 
            'guictrlcreatebutton', 'guictrlcreatecheckbox', 
            'guictrlcreatecombo', 'guictrlcreatecontextmenu', 
            'guictrlcreatedate', 'guictrlcreatedummy', 'guictrlcreateedit', 
            'guictrlcreategraphic', 'guictrlcreategroup', 'guictrlcreateicon', 
            'guictrlcreateinput', 'guictrlcreatelabel', 'guictrlcreatelist', 
            'guictrlcreatelistview', 'guictrlcreatelistviewitem', 
            'guictrlcreatemenu', 'guictrlcreatemenuitem', 
            'guictrlcreatemonthcal', 'guictrlcreateobj', 'guictrlcreatepic', 
            'guictrlcreateprogress', 'guictrlcreateradio', 
            'guictrlcreateslider', 'guictrlcreatetab', 'guictrlcreatetabitem', 
            'guictrlcreatetreeview', 'guictrlcreatetreeviewitem', 
            'guictrlcreateupdown', 'guictrldelete', 'guictrlgethandle', 
            'guictrlgetstate', 'guictrlread', 'guictrlrecvmsg', 
            'guictrlregisterlistviewsort', 'guictrlsendmsg', 
            'guictrlsendtodummy', 'guictrlsetbkcolor', 'guictrlsetcolor', 
            'guictrlsetcursor', 'guictrlsetdata', 'guictrlsetfont', 
            'guictrlsetgraphic', 'guictrlsetimage', 'guictrlsetlimit', 
            'guictrlsetonevent', 'guictrlsetpos', 'guictrlsetresizing', 
            'guictrlsetstate', 'guictrlsetstyle', 'guictrlsettip', 'guidelete', 
            'guigetcursorinfo', 'guigetmsg', 'guiregistermsg', 'guisetbkcolor', 
            'guisetcoord', 'guisetcursor', 'guisetfont', 'guisethelp', 
            'guiseticon', 'guisetonevent', 'guisetstate', 'guistartgroup', 
            'guiswitch', 'hex', 'hotkeyset', 'httpsetproxy', 'hwnd', 'inetget', 
            'inetgetsize', 'inidelete', 'iniread', 'inireadsection', 
            'inireadsectionnames', 'inirenamesection', 'iniwrite', 
            'iniwritesection', 'inputbox', 'int', 'isadmin', 'isarray', 
            'isbinarystring', 'isbool', 'isdeclared', 'isdllstruct', 'isfloat', 
            'ishwnd', 'isint', 'iskeyword', 'isnumber', 'isobj', 'isstring', 
            'log', 'memgetstats', 'mod', 'mouseclick', 'mouseclickdrag', 
            'mousedown', 'mousegetcursor', 'mousegetpos', 'mousemove', 
            'mouseup', 'mousewheel', 'msgbox', 'number', 'objcreate', 
            'objevent', 'objget', 'objname', 'opt', 'ping', 'pixelchecksum', 
            'pixelgetcolor', 'pixelsearch', 'pluginclose', 'pluginopen', 
            'processclose', 'processexists', 'processlist', 
            'processsetpriority', 'processwait', 'processwaitclose', 
            'progressoff', 'progresson', 'progressset', 'random', 'regdelete', 
            'regenumkey', 'regenumval', 'regread', 'regwrite', 'round', 'run', 
            'runasset', 'runwait', 'send', 'seterror', 'setextended', 
            'shellexecute', 'shellexecutewait', 'shutdown', 'sin', 'sleep', 
            'soundplay', 'soundsetwavevolume', 'splashimageon', 'splashoff', 
            'splashtexton', 'sqrt', 'srandom', 'statusbargettext', 
            'stderrread', 'stdinwrite', 'stdoutread', 'string', 'stringaddcr', 
            'stringformat', 'stringinstr', 'stringisalnum', 'stringisalpha', 
            'stringisascii', 'stringisdigit', 'stringisfloat', 'stringisint', 
            'stringislower', 'stringisspace', 'stringisupper', 
            'stringisxdigit', 'stringleft', 'stringlen', 'stringlower', 
            'stringmid', 'stringregexp', 'stringregexpreplace', 
            'stringreplace', 'stringright', 'stringsplit', 'stringstripcr', 
            'stringstripws', 'stringtrimleft', 'stringtrimright', 
            'stringupper', 'tan', 'tcpaccept', 'tcpclosesocket', 'tcpconnect', 
            'tcplisten', 'tcpnametoip', 'tcprecv', 'tcpsend', 'tcpshutdown', 
            'tcpstartup', 'timerdiff', 'timerinit', 'timerstart', 'timerstop', 
            'tooltip', 'traycreateitem', 'traycreatemenu', 'traygetmsg', 
            'trayitemdelete', 'trayitemgethandle', 'trayitemgetstate', 
            'trayitemgettext', 'trayitemsetonevent', 'trayitemsetstate', 
            'trayitemsettext', 'traysetclick', 'trayseticon', 'traysetonevent', 
            'traysetpauseicon', 'traysetstate', 'traysettooltip', 'traytip', 
            'ubound', 'udpbind', 'udpclosesocket', 'udpopen', 'udprecv', 
            'udpsend', 'winactivate', 'winactive', 'winclose', 'winexists', 
            'winflash', 'wingetcaretpos', 'wingetclasslist', 
            'wingetclientsize', 'wingethandle', 'wingetpos', 'wingetprocess', 
            'wingetstate', 'wingettext', 'wingettitle', 'winkill', 'winlist', 
            'winmenuselectitem', 'winminimizeall', 'winminimizeallundo', 
            'winmove', 'winsetontop', 'winsetstate', 'winsettitle', 
            'winsettrans', 'winshow', 'winwait', 'winwaitactive', 
            'winwaitclose', 'winwaitnotactive'
            ),
        4 => array(
            '_arrayadd', '_arraybinarysearch', '_arraycreate', '_arraydelete', 
            '_arraydisplay', '_arrayinsert', '_arraymax', '_arraymaxindex', 
            '_arraymin', '_arrayminindex', '_arraypop', '_arraypush', 
            '_arrayreverse', '_arraysearch', '_arraysort', '_arrayswap', 
            '_arraytoclip', '_arraytostring', '_arraytrim', '_colorgetblue', 
            '_colorgetgreen', '_colorgetred', '_dateadd', '_datedayofweek', 
            '_datedaysinmonth', '_datediff', '_dateisleapyear', '_dateisvalid', 
            '_datetimeformat', '_datetimesplit', '_datetodayofweek', 
            '_datetodayofweekiso', '_datetodayvalue', '_dayvaluetodate', 
            '_now', '_nowcalc', '_nowcalcdate', '_nowdate', '_nowtime', 
            '_setdate', '_settime', '_tickstotime', '_timetoticks', 
            '_weeknumberiso', '_filecountlines', '_filecreate', 
            '_filelisttoarray', '_fileprint', '_filereadtoarray', 
            '_filewritefromarray', '_filewritelog', '_filewritetoline', 
            '_pathfull', '_pathmake', '_pathsplit', '_replacestringinfile', 
            '_tempfile', '_guictrlcomboadddir', '_guictrlcomboaddstring', 
            '_guictrlcomboautocomplete', '_guictrlcombodeletestring', 
            '_guictrlcombofindstring', '_guictrlcombogetcount', 
            '_guictrlcombogetcursel', '_guictrlcombogetdroppedcontrolrect', 
            '_guictrlcombogetdroppedstate', '_guictrlcombogetdroppedwidth', 
            '_guictrlcombogeteditsel', '_guictrlcombogetextendedui', 
            '_guictrlcombogethorizontalextent', '_guictrlcombogetitemheight', 
            '_guictrlcombogetlbtext', '_guictrlcombogetlbtextlen', 
            '_guictrlcombogetlist', '_guictrlcombogetlocale', 
            '_guictrlcombogetminvisible', '_guictrlcombogettopindex', 
            '_guictrlcomboinitstorage', '_guictrlcomboinsertstring', 
            '_guictrlcombolimittext', '_guictrlcomboresetcontent', 
            '_guictrlcomboselectstring', '_guictrlcombosetcursel', 
            '_guictrlcombosetdroppedwidth', '_guictrlcomboseteditsel', 
            '_guictrlcombosetextendedui', '_guictrlcombosethorizontalextent', 
            '_guictrlcombosetitemheight', '_guictrlcombosetminvisible', 
            '_guictrlcombosettopindex', '_guictrlcomboshowdropdown', 
            '_guictrleditcanundo', '_guictrleditemptyundobuffer', 
            '_guictrleditfind', '_guictrleditgetfirstvisibleline', 
            '_guictrleditgetline', '_guictrleditgetlinecount', 
            '_guictrleditgetmodify', '_guictrleditgetrect', 
            '_guictrleditgetsel', '_guictrleditlinefromchar', 
            '_guictrleditlineindex', '_guictrleditlinelength', 
            '_guictrleditlinescroll', '_guictrleditreplacesel', 
            '_guictrleditscroll', '_guictrleditsetmodify', 
            '_guictrleditsetrect', '_guictrleditsetsel', '_guictrleditundo', 
            '_guictrlipaddressclear', '_guictrlipaddresscreate', 
            '_guictrlipaddressdelete', '_guictrlipaddressget', 
            '_guictrlipaddressisblank', '_guictrlipaddressset', 
            '_guictrlipaddresssetfocus', '_guictrlipaddresssetfont', 
            '_guictrlipaddresssetrange', '_guictrlipaddressshowhide', 
            '_guictrllistadddir', '_guictrllistadditem', '_guictrllistclear', 
            '_guictrllistcount', '_guictrllistdeleteitem', 
            '_guictrllistfindstring', '_guictrllistgetanchorindex', 
            '_guictrllistgetcaretindex', '_guictrllistgethorizontalextent', 
            '_guictrllistgetinfo', '_guictrllistgetitemrect', 
            '_guictrllistgetlocale', '_guictrllistgetselcount', 
            '_guictrllistgetselitems', '_guictrllistgetselitemstext', 
            '_guictrllistgetselstate', '_guictrllistgettext', 
            '_guictrllistgettextlen', '_guictrllistgettopindex', 
            '_guictrllistinsertitem', '_guictrllistreplacestring', 
            '_guictrllistselectedindex', '_guictrllistselectindex', 
            '_guictrllistselectstring', '_guictrllistselitemrange', 
            '_guictrllistselitemrangeex', '_guictrllistsetanchorindex', 
            '_guictrllistsetcaretindex', '_guictrllistsethorizontalextent', 
            '_guictrllistsetlocale', '_guictrllistsetsel', 
            '_guictrllistsettopindex', '_guictrllistsort', 
            '_guictrllistswapstring', '_guictrllistviewcopyitems', 
            '_guictrllistviewdeleteallitems', '_guictrllistviewdeletecolumn', 
            '_guictrllistviewdeleteitem', 
            '_guictrllistviewdeleteitemsselected', 
            '_guictrllistviewensurevisible', '_guictrllistviewfinditem', 
            '_guictrllistviewgetbackcolor', '_guictrllistviewgetcallbackmask', 
            '_guictrllistviewgetcheckedstate', 
            '_guictrllistviewgetcolumnorder', '_guictrllistviewgetcolumnwidth', 
            '_guictrllistviewgetcounterpage', '_guictrllistviewgetcursel', 
            '_guictrllistviewgetextendedlistviewstyle', 
            '_guictrllistviewgetheader', '_guictrllistviewgethotcursor', 
            '_guictrllistviewgethotitem', '_guictrllistviewgethovertime', 
            '_guictrllistviewgetitemcount', '_guictrllistviewgetitemtext', 
            '_guictrllistviewgetitemtextarray', '_guictrllistviewgetnextitem', 
            '_guictrllistviewgetselectedcount', 
            '_guictrllistviewgetselectedindices', 
            '_guictrllistviewgetsubitemscount', '_guictrllistviewgettopindex', 
            '_guictrllistviewgetunicodeformat', '_guictrllistviewhidecolumn', 
            '_guictrllistviewinsertcolumn', '_guictrllistviewinsertitem', 
            '_guictrllistviewjustifycolumn', '_guictrllistviewscroll', 
            '_guictrllistviewsetcheckstate', 
            '_guictrllistviewsetcolumnheadertext', 
            '_guictrllistviewsetcolumnorder', '_guictrllistviewsetcolumnwidth', 
            '_guictrllistviewsethotitem', '_guictrllistviewsethovertime', 
            '_guictrllistviewsetitemcount', '_guictrllistviewsetitemselstate', 
            '_guictrllistviewsetitemtext', '_guictrllistviewsort', 
            '_guictrlmonthcalget1stdow', '_guictrlmonthcalgetcolor', 
            '_guictrlmonthcalgetdelta', '_guictrlmonthcalgetmaxselcount', 
            '_guictrlmonthcalgetmaxtodaywidth', 
            '_guictrlmonthcalgetminreqrect', '_guictrlmonthcalset1stdow', 
            '_guictrlmonthcalsetcolor', '_guictrlmonthcalsetdelta', 
            '_guictrlmonthcalsetmaxselcount', '_guictrlslidercleartics', 
            '_guictrlslidergetlinesize', '_guictrlslidergetnumtics', 
            '_guictrlslidergetpagesize', '_guictrlslidergetpos', 
            '_guictrlslidergetrangemax', '_guictrlslidergetrangemin', 
            '_guictrlslidersetlinesize', '_guictrlslidersetpagesize', 
            '_guictrlslidersetpos', '_guictrlslidersetticfreq', 
            '_guictrlstatusbarcreate', '_guictrlstatusbarcreateprogress', 
            '_guictrlstatusbardelete', '_guictrlstatusbargetborders', 
            '_guictrlstatusbargeticon', '_guictrlstatusbargetparts', 
            '_guictrlstatusbargetrect', '_guictrlstatusbargettext', 
            '_guictrlstatusbargettextlength', '_guictrlstatusbargettip', 
            '_guictrlstatusbargetunicode', '_guictrlstatusbarissimple', 
            '_guictrlstatusbarresize', '_guictrlstatusbarsetbkcolor', 
            '_guictrlstatusbarseticon', '_guictrlstatusbarsetminheight', 
            '_guictrlstatusbarsetparts', '_guictrlstatusbarsetsimple', 
            '_guictrlstatusbarsettext', '_guictrlstatusbarsettip', 
            '_guictrlstatusbarsetunicode', '_guictrlstatusbarshowhide', 
            '_guictrltabdeleteallitems', '_guictrltabdeleteitem', 
            '_guictrltabdeselectall', '_guictrltabgetcurfocus', 
            '_guictrltabgetcursel', '_guictrltabgetextendedstyle', 
            '_guictrltabgetitemcount', '_guictrltabgetitemrect', 
            '_guictrltabgetrowcount', '_guictrltabgetunicodeformat', 
            '_guictrltabhighlightitem', '_guictrltabsetcurfocus', 
            '_guictrltabsetcursel', '_guictrltabsetmintabwidth', 
            '_guictrltabsetunicodeformat', '_guictrltreeviewdeleteallitems', 
            '_guictrltreeviewdeleteitem', '_guictrltreeviewexpand', 
            '_guictrltreeviewgetbkcolor', '_guictrltreeviewgetcount', 
            '_guictrltreeviewgetindent', '_guictrltreeviewgetlinecolor', 
            '_guictrltreeviewgetparenthandle', '_guictrltreeviewgetparentid', 
            '_guictrltreeviewgetstate', '_guictrltreeviewgettext', 
            '_guictrltreeviewgettextcolor', '_guictrltreeviewgettree', 
            '_guictrltreeviewinsertitem', '_guictrltreeviewsetbkcolor', 
            '_guictrltreeviewseticon', '_guictrltreeviewsetindent', 
            '_guictrltreeviewsetlinecolor', '_guictrltreeviewsetstate', 
            '_guictrltreeviewsettext', '_guictrltreeviewsettextcolor', 
            '_guictrltreeviewsort', '_ie_example', '_ie_introduction', 
            '_ie_versioninfo', '_ieaction', '_ieattach', '_iebodyreadhtml', 
            '_iebodyreadtext', '_iebodywritehtml', '_iecreate', 
            '_iecreateembedded', '_iedocgetobj', '_iedocinserthtml', 
            '_iedocinserttext', '_iedocreadhtml', '_iedocwritehtml', 
            '_ieerrorhandlerderegister', '_ieerrorhandlerregister', 
            '_ieerrornotify', '_ieformelementcheckboxselect', 
            '_ieformelementgetcollection', '_ieformelementgetobjbyname', 
            '_ieformelementgetvalue', '_ieformelementoptionselect', 
            '_ieformelementradioselect', '_ieformelementsetvalue', 
            '_ieformgetcollection', '_ieformgetobjbyname', '_ieformimageclick', 
            '_ieformreset', '_ieformsubmit', '_ieframegetcollection', 
            '_ieframegetobjbyname', '_iegetobjbyname', 
            '_ieheadinserteventscript', '_ieimgclick', '_ieimggetcollection', 
            '_ieisframeset', '_ielinkclickbyindex', '_ielinkclickbytext', 
            '_ielinkgetcollection', '_ieloadwait', '_ieloadwaittimeout', 
            '_ienavigate', '_iepropertyget', '_iepropertyset', '_iequit', 
            '_ietablegetcollection', '_ietablewritetoarray', 
            '_ietagnameallgetcollection', '_ietagnamegetcollection', '_getip', 
            '_inetexplorercapable', '_inetgetsource', '_inetmail', 
            '_inetsmtpmail', '_tcpiptoname', '_degree', '_mathcheckdiv', 
            '_max', '_min', '_radian', '_choosecolor', '_choosefont', 
            '_clipputfile', '_iif', '_ispressed', '_mousetrap', '_singleton', 
            '_processgetname', '_processgetpriority', '_rundos', 
            '_sendmessage', '_soundclose', '_soundlength', '_soundopen', 
            '_soundpause', '_soundplay', '_soundpos', '_soundresume', 
            '_soundseek', '_soundstatus', '_soundstop', '_sqlite_changes', 
            '_sqlite_close', '_sqlite_display2dresult', '_sqlite_encode', 
            '_sqlite_errcode', '_sqlite_errmsg', '_sqlite_escape', 
            '_sqlite_exec', '_sqlite_fetchdata', '_sqlite_fetchnames', 
            '_sqlite_gettable', '_sqlite_gettable2d', 
            '_sqlite_lastinsertrowid', '_sqlite_libversion', '_sqlite_open', 
            '_sqlite_query', '_sqlite_queryfinalize', '_sqlite_queryreset', 
            '_sqlite_querysinglerow', '_sqlite_savemode', '_sqlite_settimeout', 
            '_sqlite_shutdown', '_sqlite_sqliteexe', '_sqlite_startup', 
            '_sqlite_totalchanges', '_hextostring', '_stringaddcomma', 
            '_stringbetween', '_stringencrypt', '_stringinsert', 
            '_stringproper', '_stringrepeat', '_stringreverse', '_stringtohex', 
            '_viclose', '_viexeccommand', '_vifindgpib', '_vigpibbusreset', 
            '_vigtl', '_viopen', '_visetattribute', '_visettimeout'
            ),
        5 => array(
            '#include', '#include-once', '#notrayicon'
            ),
        6 => array(
            '#forceref', '#compiler_allow_decompile', '#compiler_au3check_dat', 
            '#compiler_au3check_parameters', 
            '#compiler_au3check_stop_onwarning', '#compiler_aut2exe', 
            '#compiler_autoit3', '#compiler_compression', '#compiler_icon', 
            '#compiler_outfile', '#compiler_outfile_type', 
            '#compiler_passphrase', '#compiler_plugin_funcs', 
            '#compiler_prompt', '#compiler_res_comment', 
            '#compiler_res_description', '#compiler_res_field', 
            '#compiler_res_field1name', '#compiler_res_field1value', 
            '#compiler_res_field2name', '#compiler_res_field2value', 
            '#compiler_res_fileversion', 
            '#compiler_res_fileversion_autoincrement', 
            '#compiler_res_legalcopyright', '#compiler_run_after', 
            '#compiler_run_au3check', '#compiler_run_before', 
            '#compiler_run_cvswrapper', '#compiler_run_tidy', 
            '#compiler_tidy_stop_onerror', '#compiler_useupx', '#endregion', 
            '#region', '#run_debug_mode', '#tidy_parameters'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '&', '*', '/', '<', '>', '+', '-', '^', '=', '.'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF; font-weight: bold;',
            2 => 'color: #800000; font-weight: bold;',
            3 => 'color: #000080; font-style: italic; font-weight: bold;',
            4 => 'color: #0080FF; font-style: italic; font-weight: bold;',
            5 => 'color: #F000FF; font-style: italic;',
            6 => 'color: #A00FF0; font-style: italic;'
            ),
        'COMMENTS' => array(
            0 => 'font-style: italic; color: #009933;',
            'MULTI' => 'font-style: italic; color: #669900;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #FF0000; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'font-weight: bold; color: #008080;'
            ),
        'NUMBERS' => array(
            0 => 'color: #AC00A9; font-style: italic; font-weight: bold;'
            ),
        'METHODS' => array(
            1 => 'color: #0000FF; font-style: italic; font-weight: bold;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #FF0000; font-weight: bold;'
            ),
        'REGEXPS' => array(
            0 => 'font-weight: bold; color: #AA0000;'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => '',
            4 => '',
            5 => '',
            6 => ''
            )
            ),
    'URLS' => array(
        1 => 'http://www.autoitscript.com/autoit3/docs/keywords.htm',
        2 => 'http://www.autoitscript.com/autoit3/docs/macros.htm',
        3 => 'http://www.autoitscript.com/autoit3/docs/functions/{FNAME}.htm',
        4 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        0 => '[\\$%@]+[a-zA-Z_][a-zA-Z0-9_]*'
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true,
        2 => true,
        3 => true
        )
);

?>
