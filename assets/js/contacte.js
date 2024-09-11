

// Fonction de verification de formulaire
document.getElementById("FormulaireContacte").addEventListener("submit", function(e) {
    e.preventDefault();

    var data = new FormData(this);
    var requetteHTML = new XMLHttpRequest();

    requetteHTML.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this);
            console.log(this.response);
            var resultat = this.response;
            if (resultat.success) {
                console.log("Commentaire ajouter avec succes !");
            } else {
                alert(resultat.msg);
            }
        } else if (this.readyState == 4) {
            alert("Une erreur lors de la liason avec le Script d'envoie");
        }
    };

    requetteHTML.open("POST", "scriptEnvoie.php", true);
    requetteHTML.responseType = "json";
    requetteHTML.send(data);

    return false;
});