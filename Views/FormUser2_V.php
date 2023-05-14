
 <div class="container-sm">
<form action="../Controllers/AddUser_C.php" method="post" name="FormularUser" accept-charset="utf-8" id="myFormUser">


<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" id="last_name" placeholder="Enter nom " name="last_name" value="" onclick="selection(this);" >
    <small id="" class="form-text text-muted">Ex Tartenpion</small>
</div>
<br>
<div>
    <label for="">Prenom</label>
    <input type="text" class="form-control" id="first_name"  placeholder="Enter prenom " name="first_name" value="" onclick="selection(this)" onclick="checkField()">
    <small id="" class="form-text text-muted">Ex Odile</small>
</div>
<br>
<div>
    <label for="">Email</label>
    <input type="email" class="form-control" id="email"  placeholder="Enter email " name="email" value="" onclick="selection(this)" onclick="checkField()">
    <small id="" class="form-text text-muted">Es odile.tartenpion@exemple.be</small>
</div>
<br>
<div>
    <label for="">Password</label>
    <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Entrer password " name="password" value="" onclick="selection(this)" onclick="checkField()">
    <small id="" class="form-text text-muted">Un conseil : 8 caractères au minimum</small>
</div>
<br>
<div>
    <label for="">Adresse</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter adresse " name="address" value="" onclick="selection(this)" onclick="checkField()">
    <small id="" class="form-text text-muted">Ex: 32 rue des tartenpions, 6000, Charleroi</small>
  </div>
<br>
<div>
    <label for="">Téléphone</label>
    <input type="number" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter numéro de téléphone " name="phone" value="" onclick="selection(this)" onclick="checkField()">
    <small id="" class="form-text text-muted">15 chiffres maxi</small>
</div>

<div class="form-group">

<button type="submit" class="btn btn-primary" name="submit" onclick="Controle();checkFormUser();">Submit</button>

</form>


</div>


