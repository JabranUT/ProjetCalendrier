



 <div class="container-sm">
<form action="../Controllers/NOTLogedAddAppointment_C.php" method="post" accept-charset="utf-8">


<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" id="last_name" placeholder="Enter nom " name="last_name" value="">
    <small id="" class="form-text text-muted">Ex Tartenpion</small>
</div>
<br>
<div>
    <label for="">Prenom</label>
    <input type="text" class="form-control" id="first_name"  placeholder="Enter prenom " name="first_name" value="">
    <small id="" class="form-text text-muted">Ex Odile</small>
</div>
<br>
<div>
    <label for="">Email</label>
    <input type="email" class="form-control" id="email"  placeholder="Enter email " name="email" value="">
    <small id="" class="form-text text-muted">Es odile.tartenpion@exemple.be</small>
</div>
<br>
<div>
    <label for="">Password</label>
    <input type="password" class="form-control" id="" aria-describedby="emailHelp" placeholder="Entrer password " name="password" value="">
    <small id="" class="form-text text-muted">Un conseil : 8 caractères au minimum</small>
</div>
<br>
<div>
    <label for="">Adresse</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter adresse " name="address" value="">
    <small id="" class="form-text text-muted">Ex: 32 rue des tartenpions, 6000, Charleroi</small>
  </div>
<br>
<div>
    <label for="">Téléphone</label>
    <input type="number" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter numéro de téléphone " name="phone" value="">
    <small id="" class="form-text text-muted">15 chiffres maxi</small>
</div>
<br>
<div>
    <label for="date">Sélectionnez une date:</label>
    <input type="date" id="date" name="date">
</div>
<br>
<div>
<select id="hour" name="hour">
  <option value="09:00">09:00 - 10:00</option>
  <option value="10:00">10:00 - 11:00</option>
  <option value="14:00">14:00 - 15:00</option>
  <option value="15:00">15:00 - 16:00</option>
</select>
</div>
<br>
<div class="form-group">

<button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
</div>
