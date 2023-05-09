<?php

//var_dump($user['id_user']);

echo '<div class="container-sm">
<form action="../Controllers/ModifyUser_C.php" method="post" accept-charset="utf-8">

<div class="form-group">
    <label for="">ID</label>
    <input  class="form-control" id="" aria-describedby="emailHelp" name="id_user" value='.$user['id_user'].' readonly="readonly">
</div>

<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter nom " name="last_name" value="'.$user["last_name"].'">
    <small id="" class="form-text text-muted">sous forme de xx,x</small>
</div>
<br>
<div>
    <label for="">Prénom</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter prenom " name="first_name" value="'.$user['first_name'].'">
    <small id="" class="form-text text-muted">sous forme de xx,x</small>
</div>
<br>
<div>
    <label for="">Email</label>
    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email " name="email" value="'.$user['email'].'">
    <small id="" class="form-text text-muted">sous forme de xx,x</small>
</div>
<br>
<div>
    <label for="">Password</label>
    <input type="password" class="form-control" id="" aria-describedby="emailHelp" placeholder="Entrer password " name="password" value="'.$user['password'].'">
    <small id="" class="form-text text-muted">sous forme de text</small>
</div>
<br>
<div>
    <label for="">Adresse</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter adresse " name="address" value="'.$user['address'].'">
    <small id="" class="form-text text-muted">sous forme de text</small>
  </div>
<br>
<div>
    <label for="">Téléphone</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter numéro de téléphone " name="phone" value='.$user['phone'].'>
    <small id="" class="form-text text-muted">sous forme de text</small>
  </div>
<br>




<button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
</div>';
