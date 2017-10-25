<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>5 boeken die POC</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.vrt.be/etc/designs/vrtnieuws/clientlib-all.min.806fc7e484750f8d0bfcd3df693acf2a.css" />
    
</head>
<body>
   <div class="intro notification is-primary">
            <h1>Proof of concept bibliotheeklinks bij de '5 boeken die' reeks van vrtNWS.be</h1>
            
            <p>Deze pagina is bedoeld als voorbeeld van hoe bij cultuuritems op de vrtNWS-website steeds links voorzien zouden kunnen worden naar de besproken items in de catalogus van de Vlaamse openbare biblioteheken. In dit voorbeeld is vertrokken van een link naar manueel gecureerde lijstjes in de provinciale bibcatalogus van Antwerpen. Indien metadata zoals isbn/ean zou toegevoegd worden aan de vrt-website kan ook een script geschreven worden dat automatisch links naar individuele items genereert.</p>
            <p>Dit voorbeeld is snel in mekaar geknutseld, hou er rekening mee dat:</p>
            <ul>
                <li>niet bij elk item een werkende link voorzien is</li>
                <li>de artikelafbeeldingen niet ingeladen worden</li>
                <li>je niet kunt doorklikken naar de individuele artikeltjes, maar het idee zou zijn om de links eerder daar te tonen dan hier op het overzicht.</li>
            </ul>
            <p><a href="">Meer info - contact</a></p>
    </div>
    <div class="vrtnwspagina">
    <?php echo file_get_contents('https://www.vrt.be/vrtnws/nl/dossiers/2017/09/boekentips/'); ?>
    </div>

</body>

<script>
    
    $(window).on('load', function() {        
        var artikels = $('h2.vrt-teaser__title');
        for (i= 0 ; i < artikels.length; i++) {
            var bv = artikels[i].innerText;
            var bv = bv.replace("De vijf boeken die het leven van ","");
            var bv = bv.replace("De 5 boeken die het leven van ","");
            var bv = bv.replace(" hebben veranderd","");
            
            var link ="";
            for (j= 0 ; j < boekenlijstjes.length; j++) {
                if (boekenlijstjes[j].persoon == bv) {
                    var link = boekenlijstjes[j].lijstURL;
                }
            }
            if (link == "") {
                $('h2.vrt-teaser__title:eq('+i+')').append("<p class='nobiblink'><img class='biblogo' src='biblogo.jpg'/>sorry - nog geen biblink beschikbaar</p></p>");
            }
            else {
                $('h2.vrt-teaser__title:eq('+i+')').append("<p><a class='biblink' target='_blank' href='" + link + "'><img class='biblogo' src='biblogo.jpg'/>toon in bibcatalogus</a></p>");
            }
        }
    });
    
        
    var boekenlijstjes = [
            { "persoon":"Jan Verheyen" , "lijstURL":"http://mijn.bibliotheek.be/list/view/6296" },
            { "persoon":"Ingeborg" , "lijstURL":"http://mijn.bibliotheek.be/list/view/6297" },
            { "persoon":"Liesbeth Homans" , "lijstURL":"http://mijn.bibliotheek.be/list/view/6298" },
            { "persoon":"Bart De Wever" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5723" },
            { "persoon":"Eva Mouton" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5722" },
            { "persoon":"imam Khalid Benhaddou" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5729" },
            { "persoon":"Johan Braeckman" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5718" },
            { "persoon":"Koen Geens" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5719" },
            { "persoon":"Kristien Hemmerechts" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5731" },
            { "persoon":"Marc Didden" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5730" },
            { "persoon":"Nic Balthasar" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5726" },
            { "persoon":"Saskia De Coster" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5724" },
            { "persoon":"Yves Desmet" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5725" },
            { "persoon":"Björn Soenens" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5693" },
            { "persoon":"Dalila Hermans" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5687" },
            { "persoon":"Elke Weylandt" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5681" },
            { "persoon":"Fatma Taspinar" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5684" },
            { "persoon":"Filip Watteeuw" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5702" },
            { "persoon":"Freek Braeckman" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5695" },
            { "persoon":"Goedele Liekens" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5692" },
            { "persoon":"Herman Brusselmans" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5690" },
            { "persoon":"Joris Hessels (Radio Gaga)" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5697" },
            { "persoon":"Kurt Van Eeghem" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5701" },
            { "persoon":"striptekenaar Merho" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5710" },
            { "persoon":"Meyrem Almaci" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5698" },
            { "persoon":"Michiel Hendryckx" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5700" },
            { "persoon":"pedagoog Pedro Debruyckere" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5694" },
            { "persoon":"staatssecretaris Philippe De Backer" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5673" },
            { "persoon":"Rik Van Puymbroek" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5689" },
            { "persoon":"Rudi Vranckx" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5671" },
            { "persoon":"Sven Gatz" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5682" },
            { "persoon":"Thomas Van Den Spiegel" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5696" },
            { "persoon":"Wim Distelmans" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5699" },
            { "persoon":"Wim Oosterlinck" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5672" },
            { "persoon":"Xander De Rycke" , "lijstURL":"http://mijn.bibliotheek.be/list/view/5683" }
    ];
</script>
</html>
