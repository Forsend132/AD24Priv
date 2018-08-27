<?php

//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* Features SETUP */

$setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 0,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/hot.txt",
    "fromname"       => "Aρρle Client",//ALREADY SET TO GO INBOX [ DONT CHANGE! ]
    "frommail"       => "n0replying-trustedsender##randstring##@livemail.com",//ALREADY SET TO GO INBOX [ DONT CHANGE! ]
    "subject"        => "Re: ( Account Locked ) ( New Sumary Report ) Your Apple Subscription Account Automatically Locked for Security Reasons on ( $date ). [FWD]",
    "msgfile"        => "file/letter/Hot.html",
    "filepdf"        => "file/attachment/Apple_Subscription.pdf",
    "scampage"       => ["https://google.com"],
];
