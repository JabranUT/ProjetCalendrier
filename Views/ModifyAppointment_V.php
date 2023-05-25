
<div class="container-sm">
<form action="../Controllers/ModifyAppointment_C.php" method="post" accept-charset="utf-8">

<div class="form-group">
    <label for="">ID</label>
    <input  class="form-control" id="" aria-describedby="emailHelp" name="id_appointment" value="<?php echo $appointment['id_appointment']; ?>" readonly="readonly">
</div>

<div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter nom " name="last_name" value="<?php echo $appointment["last_name"]; ?>">
    <small id="" class="form-text text-muted">sous forme de xx,x</small>
</div>
<br>
<div>
    <label for="">Prénom</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter prenom " name="first_name" value="<?php echo $appointment['first_name']; ?>">
    <small id="" class="form-text text-muted">sous forme de xx,x</small>
</div>
<br>
<div>
    <label for="">Email</label>
    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email " name="email" value="<?php echo $appointment['email']; ?>">
    <small id="" class="form-text text-muted">sous forme de xx,x</small>
</div>
<br>
<div>
    <label for="">Adresse</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter adresse " name="address" value="<?php echo $appointment['address']; ?>">
    <small id="" class="form-text text-muted">sous forme de text</small>
  </div>
<br>
<div>
    <label for="">Téléphone</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter numéro de téléphone " name="phone" value="<?php echo $appointment['phone']; ?>">
    <small id="" class="form-text text-muted">sous forme de text</small>
  </div>
<br>

<div>
    <label for="Date">Date</label>
    <input type="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Modifier la date" name="date" value="<?php echo $appointment['date']; ?>">
</div>
<br>
<div>

<select id="hour" name="hour" value="<?php echo $appointment['hour']; ?>">
  <option value="09:00">09:00 - 10:00</option>
  <option value="10:00">10:00 - 11:00</option>
  <option value="14:00">14:00 - 15:00</option>
  <option value="15:00">15:00 - 16:00</option>
</select>
</div>



<button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
</div>
