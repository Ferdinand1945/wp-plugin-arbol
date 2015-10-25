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
color: #000;
font-size: 21px;
background-color: #EBEBEB;
width: 270px;
padding: 21px;
border: 1px solid #000000;
text-align: center;
font-weight: bold;
margin:1px;
}

.inline {
display: inline-block;
margin: 7px 7px 7px 7px;
background-color: #eee;
min-height: 160px;
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
padding: 9px;
border: 1px solid rgb(0, 0, 0);
text-align: left;
display: inline-block;
margin: 1px;
float: left;
width: 270px;
}

.lista {
width: 550px;
    float: left;
}
h2 {   
 font-weight: 300;
}

.green-price {
color: #2ECC71;
    font-size: 21px;
    padding: 9px;
    border: 1px solid rgb(0, 0, 0);
    text-align: center;
    display: inline-block;
    margin: 1px;
width: 270px;
}
.header_color .main_menu .menu ul li a:hover, .header_color .av-subnav-menu ul a:hover {
    background-color: #61E168;
}
.main_color .primary-background, .main_color .primary-background a, div .main_color .button, .main_color #submit, .main_color input[type="submit"], .main_color .small-preview:hover, .main_color .avia-menu-fx, .main_color .avia-menu-fx .avia-arrow, .main_color.iconbox_top .iconbox_icon, .main_color .iconbox_top a.iconbox_icon:hover, .main_color .avia-data-table th.avia-highlight-col, .main_color .avia-color-theme-color, .main_color .avia-color-theme-color:hover, .main_color .image-overlay .image-overlay-inside::before, .main_color .comment-count, .main_color .av_dropcap2, #top #wrap_all .main_color .av-menu-button-colored > a .avia-menu-text, .main_color .av-colored-style .av-countdown-cell-inner, .responsive #top .main_color .av-open-submenu.av-subnav-menu > li > a:hover, #top .main_color .av-open-submenu.av-subnav-menu li > ul a:hover {
    background-color: #000000;
    border-color: #000000;
    color: #ffffff;
  visibility: hidden;
}

.main_color, .main_color div, .main_color header, .main_color main, .main_color aside, .main_color footer, .main_color article, .main_color nav, .main_color section, .main_color span, .main_color applet, .main_color object, .main_color iframe, .main_color h1, .main_color h2, .main_color h3, .main_color h4, .main_color h5, .main_color h6, .main_color p, .main_color blockquote, .main_color pre, .main_color a, .main_color abbr, .main_color acronym, .main_color address, .main_color big, .main_color cite, .main_color code, .main_color del, .main_color dfn, .main_color em, .main_color img, .main_color ins, .main_color kbd, .main_color q, .main_color s, .main_color samp, .main_color small, .main_color strike, .main_color strong, .main_color sub, .main_color sup, .main_color tt, .main_color var, .main_color b, .main_color u, .main_color i, .main_color center, .main_color dl, .main_color dt, .main_color dd, .main_color ol, .main_color ul, .main_color li, .main_color fieldset, .main_color form, .main_color label, .main_color legend, .main_color table, .main_color caption, .main_color tbody, .main_color tfoot, .main_color thead, .main_color tr, .main_color th, .main_color td, .main_color article, .main_color aside, .main_color canvas, .main_color details, .main_color embed, .main_color figure, .main_color fieldset, .main_color figcaption, .main_color footer, .main_color header, .main_color hgroup, .main_color menu, .main_color nav, .main_color output, .main_color ruby, .main_color section, .main_color summary, .main_color time, .main_color mark, .main_color audio, .main_color video, #top .main_color .pullquote_boxed, .responsive #top .main_color .avia-testimonial, .responsive #top.avia-blank #main .main_color.container_wrap:first-child, #top .main_color.fullsize .template-blog .post_delimiter, .main_color .related_posts.av-related-style-full a {
    border-color: #000;
}

.grid-image img {
    display: block;
    padding: 45px;
    width: 100%;
}
.button-custom {
background-color: #000;
padding: 14px;
color: #fff;
border: 1px solid #000;
font-size: 17px;
cursor: pointer;
}
/* mediaquery*/

@media screen and (max-width: 300px) {
.inline {
display: block;
height: 200px;
padding: 0 10px;
}
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
</div>';


echo '<form id="contacto" name="contacto" action="http://arbol.se/send.php" method="POST">
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
<p><button class="button-custom" type="submit" name="Submit" value="Enviar"/>Skicka din förslag</button></p>
</form>';

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
  <button class="button-custom" name="submit" type="submit" value="Beräkna kostnaden" />Beräkna kostnaden</button>

</form></div>