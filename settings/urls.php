<?php

require_once (dirname(__FILE__) . '/../controllers/room.php');
require_once (dirname(__FILE__) . '/../controllers/message.php');
require_once (dirname(__FILE__) . '/../controllers/admin.php');
require_once (dirname(__FILE__) . '/../controllers/main.php');
require_once (dirname(__FILE__) . '/../controllers/sns.php');
require_once (dirname(__FILE__) . '/../controllers/channel.php');

/**
 * URL patterns and the associated controllers that are provided to the URL dispatcher.
 */
$url_patterns = array (
    "#^/$#"                 => main_welcome,
    "#^/main/$#"            => main_welcome,
    "#^/main/signup/$#"     => main_signup,
    "#^/main/signin/$#"     => main_signin,
    "#^/main/signout/$#"    => main_signout,
    "#^/main/room/$#"       => main_goto_room,
    "#^/room/$#"            => room,
    "#^/room/join/$#"       => room_join,
    "#^/room/title/save/$#" => room_title_save,
    "#^/room/description/save/$#" => room_description_save,
    "#^/room/open-status/save/$#" => room_open_status_save,
    "#^/channel/$#"         => channel_event,
    "#^/admin/$#"           => admin_dashboard,
    "#^/admin/fetch/$#"     => admin_ajax_dispatcher,
    "#^/admin/dashboard/$#" => admin_dashboard,
    "#^/admin/rooms/$#"     => admin_rooms,
    "#^/admin/users/$#"     => admin_users,
    "#^/admin/settings/$#"  => admin_settings,
    "#^/admin/channel/start/$#" => admin_channel_start,
    "#^/admin/channel/stop/$#" => admin_channel_stop,
    "#^/admin/channel/restart/$#" => admin_channel_restart,
    "#^/message/demo/$#"    => message_demo,
    "#^/sns/test/$#"        => sns_test,
);

?>
