<!--

<style>.form {
padding-top: 21px;
width:1180px;
}
.form-label {
background-color: #eee;
margin: 7px;
padding: 4px;

}
.form label {
display: inline-flex;
}

#top label {
font-weight: bold;
font-size: 15px;
}

.red {
color: #F00;
font-size: 21px;
background-color: #EBEBEB;
width: 270px;
padding: 21px;
border: 1px dashed #000000;
text-align: center;
font-weight: bold;
}

.inline {
display: inline-block;
margin-top: 30px;
background-color: #eee;
height: 160px;
width: 270px;
border: 1px dashed #e0e0e0;
}

.p-custom {
padding: 14px;
margin: 0px;
}

.hr-custom {
margin: 0px 0px 0px;
}

.green {
color: #2ECC71;
font-size: 21px;
background-color: #000000;
padding: 9px;
border: 1px solid rgb(0, 0, 0);
text-align: left;
display: inline-block;
margin: 1px;

}
display: inline-flex;
}
.lista {
width: 500px;
}

/* mediaquery*/

@media screen and (max-width: 500px) {

.inline {
display: block;
height: 200px;
padding: 0 10px;
}
}

}
@media screen and (min-width: 1100px){
.form-selection {
margin-top: -100px;
}
}
.form-selection{
float:right;
}
</style>-->

[insert_php]

if(isset($_POST['submit'])){

$checkbox = $_POST['checkbox']; // Devuelve un array que contiene los valores de los campos activos

$suma = 2500;

foreach($_POST['checkbox'] as $indice => $valor ) {
echo '
<div class="lista">
<div class="green">' .$indice. '</div>
', '
<div class="green-price">' .$valor. ' kr</div>
';
}

if(count($checkbox) > 0){ // Me fijo si hay algun valor seleccionado, sino estaría el IF provocaría un warning del PHP

foreach($checkbox as $valor){ // Recorre el array

$suma += $valor; // Va sumando los valores

}
}

echo '
<div class="red">Totalpris: ' .$suma. ' kr</div>
</div>
';


echo '
<form id="contacto" name="contacto" action="http://arbol.se/send.php" method="POST">
<p>
<label>Namn <input name="nombre" type="text" id="nombre"
 size="42"/></label>
</p>
<p>
<label>Företag
<input name="empresa" type="text" id="empresa" size="31"/></label></p>
<p><label>E-post <input name="mail" type="text" id="mail" size="43"/>
</label>
</p>
<p><label>Övriga kommentarer<br>
<textarea name="mensaje" cols="40" rows="8" id="mensaje">
</textarea></label>
</p>
<p><input type="submit" name="Submit" value="Enviar"/></p>
</form>
';

}



[/insert_php]
<div class="form"><form class="form" action="" method="post" name="form1">
<div class="pull-down"></div>
<div class="titulo">
<h2>Välj tillägg</h2>
</div>
<div class="inline"><label class="form-label">
<input name="checkbox[Domän + hosting]" type="checkbox" value="900" />
Domän + webbhotell - 900kr
</label>

<hr class="hr-custom" />
<p class="p-custom">Ett webbhotell behöver alla som har en hemsida, vi hjälper er med säkerhet, backup, bevakning samt uppladdning av er nya hemsida.</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[+ 3 undersidor]" type="checkbox" value="1000" />
+ 3 undersidor - 1000kr
</label>

<hr class="hr-custom" />
<p class="p-custom">Om du behöver mera sidor i din webbsajt den här är din lösning. + 3 undersidor, lägg till gallerier, e-handelslösningar eller bara info!</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[E-handel]" type="checkbox" value="8000" />
E-handel - 8000kr
</label>

<hr class="hr-custom" />
<p class="p-custom">Förvandla din webbsajt till en onlinebutik med vår E-handels tjänst! Njut av fördelarna av att sälja din produkt online!</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Blog]" type="checkbox" value="1000" />
Blog - 1000kr
</label>

<hr class="hr-custom" />
<p class="p-custom">En blogg är ett mycket bra sätt att skapa ett förtroende för ert företag samtidigt som det ökar chansen till en bättre placering på Google.</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Bild galleri]" type="checkbox" value="1000" />
Bild Galleri - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">Med ett bildgalleri kan ni lägga upp bilder på t.ex. utförda jobb, personal och annat som fångar besökaren intresse och förtroende.</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Logo design]" type="checkbox" value="1000" />
Logo design - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">Ditt företag behöver en logo? Tillsammans med er tar vi fram en helt ny logotyp, banner, och broschyr i tryckformat.</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Nyhetsflöde]" type="checkbox" value="1000" />
Nyhetsflöde - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">Ett nyhetsflöde där besökare kan läsa det senaste inom ert företag eller produkt. Uppdatera information i real time!</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[SEO]" type="checkbox" value="1000" />
SEO - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">Den viktigaste delen för dit företag! SEO och media marknadsföring. Placera dit företag eller produkt först i sökmotorer!</p>

</div>
<div class="pull-up"></div>
<div class="titulo">
<h2>Speciella tillägg</h2>
</div>
<div class="pull-down"></div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Bild redigering]" type="checkbox" value="1000" />
Bild redigering - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">Arbol är ledande inom bildbehandling och friläggning av produktbilder för e-handlare, bloggare, designers, fotografer, webmasters, mm...</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Anpassad design]" type="checkbox" value="1000" />
Anpassad design - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">Design för oss handlar inte bara om att skaffa en snygg logotyp, bilder och ett färgschema. Vi jobbar även med interaktionsdesign.</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Google addwords]" type="checkbox" value="1000" />
Google addwords - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">Oavsett om du vill ha fler besökare till din webbplats, öka din försäljning eller se till att dina kunder kommer tillbaka, kan du ta hjälp av Google AdWords.</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Responsive design]" type="checkbox" value="1000" />
Responsive design - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">En responsiv sida ändrar textstorlek, bilder och layout efter besökaren skärm oavsett om kunden går in via telefonen, dator eller surfplattan.</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Test och lansering]" type="checkbox" value="1000" />
Test och lansering - 1000kr</label>

<hr class="hr-custom" />
<p class="p-custom">Vi testar och publicerar er nya hemsida på webben och placerar den i sökmotorer!</p>

</div>
<div class="inline"><label class="form-label">
<input class="checkbox" name="checkbox[Fotografering]" type="checkbox" value="1500" />
Fotografering - 1500kr</label>

<hr class="hr-custom" />
<p class="p-custom">Vi fotograferar eller redigerar dina befintliga bilder, allt efter era behov och önskemål!</p>

</div>
<div class="pull-up"></div>
<div class="pull-down"></div>
<input class="button-calculate" name="submit" type="submit" value="Beräkna kostnaden" />

</form></div>