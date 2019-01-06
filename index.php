
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="Content-Style-Type" content="text/css" />

<link rel="stylesheet" href="pengaturan.css" type="text/css" />

<title>Free Bot Comment</title>
</head>

<body>



<?php include('hider.php'); ?>


<br>
<hr/>
<br/>

<form class = "huruf_sedang" method="GET" action ="petunjuk_pengikut.php">
sebelum menginstal bot, anda harus masuk kepengaturan fb anda, setting umur diatas 18 tahun, dan izinkan pengikut yang dapat mengikuti anda, semua orang  <input style="padding-top: 0px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="submit" VALUE="klik disini">untuk melihat petunjuk.
</form>


<br/>
<hr/>


<div class="menu"><div class="menu_ico2"><center>Ambil Access Token</center><hr/></div></div>


<form class = "huruf_sedang" method="GET" action ="petunjuk_token_windows.php"><input style="padding-top: 0px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="submit" VALUE="klik disini"> untuk melihat petunjuk cara mengetahui kode access token.
</form>


<div class="border"><div class="and" style="text-align:center;">
<a href="https://mobile.facebook.com/v1.0/dialog/oauth/permission?client_id=1576585912599779&scope=email,publish_actions,user_about_me,user_actions.books,user_actions.music,user_actions.news,user_actions.video,user_activities,user_birthday,user_education_history,user_events,user_games_activity,user_groups,user_hometown,user_interests,user_likes,user_location,user_notes,user_photos,user_questions,user_relationship_,user_relationships,user_religion_politics,user_status,user_subscriptions,user_videos,user_website,user_work_history,friends_about_me,friends_actions.books,friends_actions.music,friends_actions.news,friends_actions.video,friends_activities,friends_birthday,friends_education_history,friends_events,friends_games_activity,friends_groups,friends_hometown,friends_interests,friends_likes,friends_location,friends_notes,friends_photos,friends_questions,friends_relationship_details,friends_relationships,friends_religion_politics,friends_status,friends_subscriptions,friends_videos,friends_website,friends_work_history,ads_management,create_event,create_note,export_stream,friends_online_presence,manage_friendlists,manage_notifications,manage_pages,photo_upload,publish_stream,read_friendlists,read_insights,read_mailbox,read_page_mailboxes,read_requests,read_stream,rsvp_event,share_item,sms,status_update,user_online_presence,video_upload,xmpp_login&redirect_uri=fb1576585912599779://authorize&response_type=token&ret=login" target="_blank" style="padding-left:5px;" class="submit">
<center>Klik disini</center>
untuk mengambil access_token windows phone </a>
</div>
</div>


<br/>
<hr>
<br/>

INFO :

<font class = "huruf_sedang">
Pengambilan token untuk tiap app berbeda-beda, untuk mengambil token fb for windows
dapat dilakukan tanpa login ke app.

untuk access token yang tanpa login, fitur bot kurang berjan lancar karena token fesbuk for windows sekarang ini sudah tidak support lagi untuk tag nama teman, nama teman dari teman,
dan baca status teman dari teman.
</font>
<br/>
<hr/>
<br/>

<font class = "huruf_sedang">

<form class = "huruf_sedang" method="GET" action ="petunjuk_generate_token.php">
untuk menggunakan full fitur bot agar bisa tag nama teman dari teman, generate token facebook for iphone, login dengan email dan password.
<input style="padding-top: 0px; margin-top:10px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="submit" VALUE="klik disini"> untuk melihat petunjuk cara ambil token fb for iphone metode login.
</form>
<br/>
generate_token
<a href="generate_token.php">
<div class="kotak-kecil-input" style="float:left"; >klik disini</div></a>untuk genarate token android/iphone.

<br/>
<hr/>
<hr/>
<hr/>

<br/>
<br/>

<form method="POST" action="install.php">
<center>Masukkan access token dibawah ini dan klik install :
</center>
<br>

<textarea type="text" name="token" id="token" rows="2" cols="15" style="margin:3px; height: 90px; width: 96%; border="3"; class="td8">
</textarea>
<br><br>



<div style="padding-top:10px; margin-left:2px; margin-top:5px; color: white; background: green; height: 30px; border-radius: 5px; font-size:.89em">
<center>Set Pengaturan bot</center>
</div>
<br>

Like status teman :
<input style="margin-left:45px; margin-top:1px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="l" value="on" checked/> On
<br><br>

Komentari Status Teman : 
<input style="margin-left:5px; margin-top:5px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="kmn" value="on" checked/>
On
<input type="radio" name="kmn" value="off"/> 
Off
<br><br>

Auto Respon Like : 
<input style="margin-left:50px; margin-top:5px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="rlk" value="on" checked/>
On
<input type="radio" name="rlk" value="Off"/> 
Off
<br><br>

Respon Status sendiri : 
<input style="margin-left:25px; margin-top:5px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="rss" value="on" checked/>
On
<input type="radio" name="rss" value="off"/> 
Off
<br><br>

Auto Update Status : 
<input style="margin-left:40px; margin-top:5px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="upstat" value="on" checked/>
On
<input type="radio" name="upstat" value="off"/> 
Off
<br><br>

<center>
<input style="margin-top:10px; color:black" class="submit" name="submit" type="submit" VALUE="install">
</center>
</form>

<br/>
<hr/>
<br/>
<br/>

<?php include('futter.php'); ?>
</font>
</div>
</body>
</html>
