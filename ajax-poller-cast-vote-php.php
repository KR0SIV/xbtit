<?php

/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2016  Btiteam
//
//    This file is part of xbtit.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////

if (isset($_GET['pollId'])) {
    require_once __DIR__.'/include/functions.php';
    dbconn();

    $optionId = false;

    if (isset($_GET['optionId'])) {
        $optionId = $_GET['optionId'];
        $optionId = preg_replace('/[^0-9]/si', '', $optionId);
    }
    $pollId = $_GET['pollId'];
    $pollId = preg_replace('/[^0-9]/si', '', $pollId);

    $userID = ((int) 0 + $CURUSER['uid']);

    // Insert new vote into the database
    // You may put in some more code here to limit the number of votes the same ip adress could cast.

    if ($optionId) {
        mysqli_query($GLOBALS['conn'], "INSERT INTO {$TABLE_PREFIX }poller_vote(pollerID,optionID,ipAddress,voteDate,memberID) VALUES('".$pollId."','".$optionId."','".ip2long(getenv('REMOTE_ADDR'))."',unix_timestamp(),'".$userID."')");
    }

    // Returning data as xml

    echo '<?xml version="1.0" ?>';

    $res = mysqli_query($GLOBALS['conn'], "select ID,pollerTitle from {$TABLE_PREFIX}poller where ID='".$pollId."'");
    if ($inf = mysqli_fetch_array($res)) {
        echo '<pollerTitle>'.unesc($inf['pollerTitle'])."</pollerTitle>\n";

        $resOptions = mysqli_query($GLOBALS['conn'], "select ID,optionText from {$TABLE_PREFIX}poller_option where pollerID='".$inf['ID']."' order by pollerOrder") or die(((is_object($GLOBALS['conn'])) ? mysqli_error($GLOBALS['conn']) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        while ($infOptions = mysqli_fetch_array($resOptions)) {
            echo "<option>\n";
            echo "\t<optionText>".unesc($infOptions['optionText'])."</optionText>\n";
            echo "\t<optionId>".$infOptions['ID']."</optionId>\n";

            $resVotes = mysqli_query($GLOBALS['conn'], "select count(ID) from {$TABLE_PREFIX}poller_vote where optionID='".$infOptions['ID']."' AND pollerID='".$inf['ID']."'");
            if ($infVotes = mysqli_fetch_array($resVotes)) {
                echo "\t<votes>".$infVotes['count(ID)']."</votes>\n";
            }
            echo '</option>';
        }
    }
    exit;
} else {
    echo 'No success';
}
