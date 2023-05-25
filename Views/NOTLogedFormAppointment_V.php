<?php
    require '../Views/NOTLogedHeader_V.php' ;
?>
 <div class="container-sm">
<form action="../Controllers/NOTLogedAddAppointment_C.php" method="post" name="FormularAppointment" accept-charset="utf-8" id="myFormAppointment">


<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" id="last_name" placeholder="Enter nom " name="last_name" value="" onclick="selection(this);" >
    <small id="" class="form-text text-muted">Ex Tartenpion</small>
</div>
<br>
<div>
    <label for="">Prenom</label>
    <input type="text" class="form-control" id="first_name"  placeholder="Enter prenom " name="first_name" value="" onclick="selection(this)">
    <small id="" class="form-text text-muted">Ex Odile</small>
</div>
<br>
<div>
    <label for="">Email</label>
    <input type="email" class="form-control" id="email"  placeholder="Enter email " name="email" value="" onclick="selection(this)">
    <small id="" class="form-text text-muted">Es odile.tartenpion@exemple.be</small>
</div>
<br>
<div>
    <label for="">Adresse</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter adresse " name="address" value="" onclick="selection(this)">
    <small id="" class="form-text text-muted">Ex: 32 rue des tartenpions, 6000, Charleroi</small>
  </div>
<br>
<div>
    <label for="">Téléphone</label>
    <input type="number" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter numéro de téléphone " name="phone" value="" onclick="selection(this)">
    <small id="" class="form-text text-muted">15 chiffres maxi</small>
</div>
<br>
<div>
    <label for="date">Sélectionnez une date:</label>
    <input type="date" id="date" name="date" onclick="selection(this)">
</div>
<br>
<div>
<select id="hour" name="hour" onclick="selection(this)">
  <option value="09:00">09:00 - 10:00</option>
  <option value="10:00">10:00 - 11:00</option>
  <option value="14:00">14:00 - 15:00</option>
  <option value="15:00">15:00 - 16:00</option>
</select>
</div>
<br>
<div class="form-group">

<button type="submit" class="btn btn-primary" name="submit" onclick="ControleAppointment();">Submit</button>

</form>
</div>
<?php
    require '../Views/Foot_V.php' ;
?>