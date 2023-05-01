
// Définition des jours de la semaine
var joursSemaine = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

// Définition des mois de l'année
var moisAnnee = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

// Définition de la date du mois à afficher
var date = new Date(); // date actuelle
var mois = date.getMonth(); // mois actuel
var annee = date.getFullYear(); // année actuelle
var nbJours = new Date(annee, mois+1, 0).getDate(); // nombre de jours dans le mois

// Création du tableau du calendrier
var tableauCalendrier = "<table>";

// Ajout de l'en-tête du calendrier avec les jours de la semaine
tableauCalendrier += "<thead><tr>";
for (var j = 0; j < 7; j++) {
  tableauCalendrier += "<th>" + joursSemaine[j] + "</th>";
}
tableauCalendrier += "</tr></thead>";

// Ajout du corps du calendrier avec les jours du mois
tableauCalendrier += "<tbody>";
var jour = 1;
for (var i = 0; i < 6; i++) {
  tableauCalendrier += "<tr>";
  for (var j = 0; j < 7; j++) {
    if (i === 0 && j < date.getDay()) {
      tableauCalendrier += "<td></td>";
    } else if (jour > nbJours) {
      tableauCalendrier += "<td></td>";
    } else {
      tableauCalendrier += "<td>" + jour + "</td>";
      jour++;
    }
  }
  tableauCalendrier += "</tr>";
}
tableauCalendrier += "</tbody></table>";

// Affichage du calendrier dans un élément HTML
document.getElementById("calendrier").innerHTML = tableauCalendrier;
