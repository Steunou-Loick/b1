<div class="PartieCentrale">
    <h1> "SA LAC" : <span class="lettresRouges">L</span>ouez 
                    votre <span class="lettresRouges">A</span>ppartement 
                    ou votre <span class="lettresRouges">C</span>hambre ! </h1> 
    <img class="imgLogo" src="Photos/Logo.jpg">
    <hr>
    <h2>Coordonnées de la société :</h2>

    <p>SA LAC</p>
    <p>Rue des oliviers</p>
    <p>29200 BREST</p>

    <hr>
    <h2>Informations complémentaires</h2>
    <p>Remplissez le formulaire</p>
            <fieldset class="exterieur">
            <form action="coordonnees_exec.php"  method="POST">
                <fieldset class="interieur">
                    <legend>Coordonnées : </legend>
                    <label for="nom">Nom : &nbsp; &nbsp; </label>
                    <input type="text" name="nom" id="nom" required>
                    <br><br>
                    <label for="prenom">Prénom : </label>
                    <input type="text" name="prenom" id="prenom">
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email">
                </fieldset>    
                <fieldset class="interieur">
                    <legend>Vous désirer de la documentation sur :</legend>
					<!-- select>option*3 -->
					<select name="lesResidences">
						<option value="1">Résidence Ampère</option>
						<option value="2">Résidence Coulomb</option>
						<option value="3">Résidence Fresnel</option>
					</select>
                </fieldset>
                
                <fieldset class="interieur">
                    <legend>Question en lien avec la résidence : </legend>
                    <textarea id="" cols="70" rows="10" placeholder="votre  question..." name="question"></textarea>
                </fieldset>
                <input type="submit" value="Envoyer">
                <input type="reset" value="Effacer">

            </form>
        </fieldset>
        <!-- TODO remplir les informations manquantes -->
        <p style="font-size=10px">
        Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par [identité et coordonnées du responsable de traitement] pour [finalités du traitement]. La base légale du traitement est [base légale du traitement].

Les données collectées seront communiquées aux seuls destinataires suivants : [destinataires des données].

Les données sont conservées pendant <b>1 an</b>.
<br>

Vous pouvez accéder aux données vous concernant, les rectifier, demander leur effacement ou exercer votre droit à la limitation du traitement de vos données. (en fonction de la base légale du traitement, mentionner également : Vous pouvez retirer à tout moment votre consentement au traitement de vos données ; Vous pouvez également vous opposer au traitement de vos données ; Vous pouvez également exercer votre droit à la portabilité de vos données)

Consultez le site cnil.fr pour plus d’informations sur vos droits.

Pour exercer ces droits ou pour toute question sur le traitement de vos données dans ce dispositif, vous pouvez contacter (le cas échéant, notre délégué à la protection des données ou le service chargé de l’exercice de ces droits) : [adresse électronique, postale, coordonnées téléphoniques, etc.] 
</p>

</div>
<?php
	if(isset($_GET["notif"]))
	{
?>
	<script>
		alert("Votre demande d'information a bien été prise en compte")
	</script>
<?php
	}
?>