<script>

// Récupérer l'input de type time
var inputHeure = document.getElementById("heure");

// Récupérer la date sélectionnée
var dateHeure = new Date(inputHeure.value);

// Formater l'heure en utilisant toLocaleTimeString()
var heure = dateHeure.toLocaleTimeString('fr-FR', {hour12:false});

// Afficher la valeur de l'heure
console.log(heure);

</script>