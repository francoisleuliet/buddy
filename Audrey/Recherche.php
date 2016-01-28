

1 ) mettre un id sur le select et le input ( pas oblige on peux utilise le name mais plus simple )
2) en jquery tu ajoutes un even change sur l'id select
3) avec jquery ajax post/get tu envois les donnes a une page php qui va te retourne la valeur
4) tu récupère la valeur et modifie la valeur de l'input

code JS modifie idselect et idinput et fichier.php
[javascript]
$(document).ready(function () {
$("#idselect").change(function(){
var id=$('#idselect').val();
$.ajax({
type: "POST",
data: {"id" : id}, 
url: "./fichier.php", --> mettre une route avec la catégorie en paramètre genre "/sous-categories/5" <- ex ID cat=5 -> /sous-categories/[:id]
success:function(data){
$("#idinput").val(data); 

}
}); 
});
});
[/javascript]

on envoi l'id du select au fichier php puis de la tu fais un echo de se que tu veux mettre dans l'input

j'envoi la variable $_POST['id'];


FAIRE UNE REQUETE PERMETTANT DE CHARGER TOUTES LES CATEGORIES.
En fonction de la selection de ma categorie, je n'affiche que les sous cat de parent = cat.


A FAIRE DANS LE TEMPLATE DE LA PAGE DE RECHERCHE
