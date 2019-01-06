
<?php include('hider.php'); ?>

<br/>

<input style="width:98%; padding-top: 0px; color: white; background: black; height: 20px; border-radius: 8px; font-size: .89em" type="submit" value="Ambil access_token android/iphone">
<br/>
<br/>

<form action="" method="post">
Nama : <input style="margin-bottom:5px;" type="text" name="email" value placeholder=" Email/No tlp"/>
<br/>
Password : <input style="margin-bottom:10px;" type="password" name="password" value placeholder=" Password"/>
<br/>
Pilih access_token :
 <select name="app_id">
     <option value="350685531728">android</option>
     <option value="6628568379">iphone</option>
<option value="ios">ios</option>
 </select>
<br/>
Kode Keamanan :
<textarea style="margin-top:10px; border-align:center; center: 50px;" name="kode" rows="3" cols="16" value placeholder="Kode keamanan/autentifikasi 2 faktor">
</textarea>
<br/>
<br/>
<input type="submit" value="Generate access_token" >
</form>

<?php include('token/full.php'); ?>

<hr/>
<br/>

<form>
<input style="width:98%; padding-top: 0px; color: white; background: black; height: 20px; border-radius: 8px; font-size: .89em" type="submit" VALUE="Copy access_token nya di box bawah">
<br/>
<br/>

<textarea style="border-radius:10px;" name="hasil" rows="25px" cols="37px" border="1"><?php print_r($access_token); ?>
</textarea>
</form>


<br>

<?php include('futter.php'); ?>


</body>
</html>


