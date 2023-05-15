/*function checkFormUser() {
    // Récupération du FormularUser
    var form = document.getElementById("myFormUser");

    // Parcours de tous les champs du FormularUser
    for (var i = 0; i < form.elements.length; i++) {
    // Vérification si le champ est vide

      if (form.elements[i].value === "") {
        alert("Veuillez remplir tous les champs !");
        event.preventDefault(); // Annulation de la soumission du FormularUser
        return;
      }
              // Soumission du FormularUser si tous les champs sont remplis
        alert("Le FormularUser est soumis avec succès !");
        return true;
      }
    }
*/
function action()
         {
         var ok = confirm("Etes-vous sûr ?");
         if (ok)
            {
            alert("suppression ok !");
            return true;
            }
         else
            {
            alert("abandon");
            return false;
            }
         }

 function selection(field) {
  // Réinitialisation de la couleur de fond de tous les champs
  var fields = document.getElementsByTagName("input");
  for (var i = 0; i < fields.length; i++) {
  fields[i].style.backgroundColor = "white";
    }
    // Changement de la couleur de fond du champ sélectionné
  field.style.backgroundColor = "yellow";
   }


    function ControleUser(){
        var last_name = document.forms["FormularUser"]["last_name"];
        var first_name = document.forms["FormularUser"]["first_name"];
        var email = document.forms["FormularUser"]["email"];
        var password = document.forms["FormularUser"]["password"];
        var address = document.forms["FormularUser"]["address"];
        var phone = document.forms["FormularUser"]["phone"];

        if (last_name.value == "" || first_name.value == "" || email.value == "" || password.value == "" ||
            address.value == "" || phone.value == "")
        {
            alert("Manque une ou plusieurs informations !");
            event.preventDefault(); // Annulation de la soumission du FormularUser
            return false;
        }
        if (email.value.indexOf("@" , 0) < 0 || email.value.indexOf("." , 0) <0)
        {
            alert("il manque @ ou . ");
            email.focus();
            event.preventDefault(); // Annulation de la soumission du FormularUser
            return  false;
        }
        if (!/^[a-zA-Z]+$/i.test(last_name.value))
        {
          alert("contient un chiffre dans le nom");
          event.preventDefault(); // Annulation de la soumission du FormularUser
          return false;
        }
        if (!/^[a-zA-Z]+$/i.test(first_name.value))
        {
            alert("contient un chiffre dans le prenom");
            event.preventDefault(); // Annulation de la soumission du FormularUser
            return false;
        }
        return true;
    }
