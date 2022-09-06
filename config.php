<?php

declare(strict_types=1);

return [
    // Relation ID of the OpenstreetMap City
    'relationId' => 62768,

    // Languages in which you want to extract Wiki informations
    'languages' => ['de', 'en'],

    // Exclude datas from beeing extracted. Usefull to exclude streets at the edge of the city for example
    'exclude' => [
	    'relation' => [
	    	3255371 // exclude black forest relation: cuts through the city and is irrelevant to the project
	    ],
        'way' => [
            /*
            15221322, // Half Included street
            */
        ],
    ],

    // Manualy assign gender to ways/relations (when there are no wikidata page for example)
    'gender' => [
        'relation' => [],
        'way' => [
		'4411840' => 'M'		// Wannerstraße
        '4520796' => 'M'		// Wannerstraße
        '4520797' => 'M'		// Wannerstraße
        '4520798' => 'M'		// Wannerstraße
        '24986214' => 'M'		// Wannerstraße
        '45323653' => 'M'		// Wannerstraße
        '45323717' => 'M'		// Wannerstraße
        '83631431' => 'M'		// Wannerstraße
        '106942241' => 'M'		// Wannerstraße
        '234112156' => 'M'		// Wannerstraße
        '234112157' => 'M'		// Wannerstraße
        '234112158' => 'M'		// Wannerstraße
        '669858755' => 'M'		// Wannerstraße
        '760271241' => 'M'		// Wannerstraße
        '864700411' => 'M'		// Wannerstraße
        '37285158' => 'M'		// Staudingerstraße
        '338973388' => 'M'		// Bauhöferstraße
        '478282843' => 'M'		// Bauhöferstraße
        '875327197' => 'M'		// Bauhöferstraße
        '4870626' => 'M'		// Hornusstraße
        '4870628' => 'M'		// Hornusstraße
        '30279576' => 'M'		// Hornusstraße
        '30335882' => 'M'		// Hornusstraße
        '1050992273' => 'M'		// Hornusstraße
        '1051284237' => 'M'		// Hornusstraße
        '4820883' => 'M'		// Franz-Kohlhepp-Straße
        '181388135' => 'F'		// Philomene-Steiger-Weg
        '26582086' => 'F'		// St.-Agatha-Weg
        '26582092' => 'F'		// St.-Agatha-Weg
        '207597931' => 'F'		// St.-Agatha-Weg
        '717730248' => 'F'		// St.-Agatha-Weg
        '238933368' => 'F'		// Magdalena-Gerber-Straße
        '356982933' => 'F'		// Magdalena-Gerber-Straße
        '4603821' => 'M'		// Adolf-Keller-Weg
        '4567881' => 'M'		// Gresserstraße
        '24043130' => 'M'		// Alfred-Döblin-Platz
        '4548511' => 'F'		// Adinda-Flemmich-Straße
        '4545846' => 'M'		// Heinrich-von-Gayling-Weg
        '4603815' => 'M'		// Hermann-Ehret-Weg
        '88142220' => 'M'		// Rehlingstraße
        '97062146' => 'M'		// Rehlingstraße
        '234368202' => 'M'		// Rehlingstraße
        '36001532' => 'M'		// Otto-Molz-Straße
        '4855898' => 'M'		// Seitzstraße
        '144887985' => 'M'		// Wippertstraße
        '144890847' => 'M'		// Wippertstraße
        '187706419' => 'M'		// Wippertstraße
        '187706429' => 'M'		// Wippertstraße
        '109376090' => 'M'		// Laisweg
        '4881245' => 'F'		// Colombistraße
        '4881246' => 'F'		// Colombistraße
        '728815669' => 'F'		// Colombistraße
        '728815670' => 'F'		// Colombistraße
        '801420093' => 'F'		// Colombistraße
        '4616981' => 'M'		// Zenlinweg
        '294432896' => 'M'		// Zenlinweg
        '761775388' => 'M'		// Zenlinweg
        '27456921' => 'M'		// Guntramstraße
        '330403754' => 'M'		// Guntramstraße
        '330403755' => 'M'		// Guntramstraße
        '330403756' => 'M'		// Guntramstraße
        '330403757' => 'M'		// Guntramstraße
        '4865373' => 'F'		// Christaweg
        '4865375' => 'F'		// Christaweg
        '775631246' => 'F'		// Christaweg
        '4230443' => 'F'		// Annaplatz
        '4230444' => 'F'		// Annaplatz
        '184198137' => 'F'		// Annaplatz
        '4555715' => 'M'		// Robert-Ruh-Weg
        '54845144' => 'M'		// Robert-Ruh-Weg
        '23078608' => 'M'		// Fritz-Horch-Weg
        '24765515' => 'M'		// Fritz-Horch-Weg
        '82198418' => 'M'		// Fritz-Horch-Weg
        '82198430' => 'M'		// Fritz-Horch-Weg
        '117848638' => 'M'		// Fritz-Horch-Weg
        '138164470' => 'M'		// Fritz-Horch-Weg
        '238026658' => 'M'		// Fritz-Horch-Weg
        '4488025' => 'M'		// Hauriweg
        '4866066' => 'M'		// Ferrandstraße
        '321027359' => 'M'		// Ferrandstraße
        '4672045' => 'M'		// Gottfriedstraße
        '4672046' => 'M'		// Gottfriedstraße
        '4672047' => 'M'		// Gottfriedstraße
        '156357746' => 'F'		// Christahof
        '156594749' => 'F'		// Christahof
        '321642164' => 'F'		// Christahof
        '30617998' => 'M'		// Dannemannstraße
        '405371987' => 'M'		// Dannemannstraße
        '4567895' => 'M'		// Kunzenhof
        '36001524' => 'M'		// Caspar-Schrenk-Weg
        '4751972' => 'M'		// Wihlerweg
        '30344818' => 'M'		// Hans-Schneider-Weg
        '7408334' => 'F'		// Els-Schmidin-Weg
        '185409245' => 'F'		// Schwester-Adolfa-Weg
        '544354611' => 'M'		// Robert-Grumbach-Platz
        '264531941' => 'F'		// Swetlana-Geier-Straße
        '264531942' => 'F'		// Swetlana-Geier-Straße
        '264531943' => 'F'		// Swetlana-Geier-Straße
        '264531945' => 'F'		// Swetlana-Geier-Straße
        '264531946' => 'F'		// Swetlana-Geier-Straße
        '989186483' => 'F'		// Swetlana-Geier-Straße
        '989186484' => 'F'		// Swetlana-Geier-Straße
        '4607205' => 'M'		// Imberyweg
        '4499520' => 'M'		// Johann-Fraider-Weg
        '338995780' => 'M'		// Johann-Fraider-Weg
        '10304559' => 'F'		// Amalie-Gramm-Weg
        '4229163' => 'M'		// Christoph-Mang-Straße
        '24739709' => 'M'		// Christoph-Mang-Straße
        '24739720' => 'M'		// Christoph-Mang-Straße
        '24941248' => 'M'		// Christoph-Mang-Straße
        '52692645' => 'M'		// Christoph-Mang-Straße
        '95026919' => 'M'		// Christoph-Mang-Straße
        '174682441' => 'M'		// Christoph-Mang-Straße
        '234003859' => 'M'		// Christoph-Mang-Straße
        '234886098' => 'M'		// Christoph-Mang-Straße
        '264788242' => 'M'		// Otto-Dangelmaier-Platz
        '500282720' => 'M'		// Otto-Dangelmaier-Platz
        '4567892' => 'M'		// Kunzenweg
        '4567893' => 'M'		// Kunzenweg
        '4567894' => 'M'		// Kunzenweg
        '288355218' => 'M'		// Kunzenweg
        '288355219' => 'M'		// Kunzenweg
        '1059027831' => 'M'		// Kunzenweg
        '126733198' => 'M'		// Hans-Carl-Scherrer-Platz
        '126733206' => 'M'		// Hans-Carl-Scherrer-Platz
        '126733209' => 'M'		// Hans-Carl-Scherrer-Platz
        '4702022' => 'F'		// Anna-Müller-Weg
        '24598362' => 'F'		// Anna-Müller-Weg
        '338210788' => 'F'		// Maria-Salome-Buchmüller-Straße
        '689484332' => 'F'		// Maria-Salome-Buchmüller-Straße
        '895636087' => 'F'		// Maria-Salome-Buchmüller-Straße
        '223699888' => 'F'		// Elisabeth-von-zur-Mühlen-Platz
        '360122198' => 'M'		// Mallingerstraße
        '1023468825' => 'M'		// Mallingerstraße
        '37264734' => 'M'		// Melanchthonweg
        '164461358' => 'M'		// Melanchthonweg
        '164461359' => 'M'		// Melanchthonweg
        '1035109065' => 'M'		// Melanchthonweg
        '4548507' => 'M'		// Paul-Klee-Straße
        '67884718' => 'M'		// Franz-Josef-Gassenschmidt-Weg
        '67884725' => 'M'		// Franz-Josef-Gassenschmidt-Weg
        '67884728' => 'M'		// Franz-Josef-Gassenschmidt-Weg
        '67884733' => 'M'		// Franz-Josef-Gassenschmidt-Weg
        '321118818' => 'M'		// Franz-Josef-Gassenschmidt-Weg
        '384683523' => 'M'		// Eugen-Martin-Straße
        '384683525' => 'M'		// Eugen-Martin-Straße
        '384683526' => 'M'		// Eugen-Martin-Straße
        '384683528' => 'M'		// Eugen-Martin-Straße
        '384683529' => 'M'		// Eugen-Martin-Straße
        '384683530' => 'M'		// Eugen-Martin-Straße
        '384683531' => 'M'		// Eugen-Martin-Straße
        '384683532' => 'M'		// Eugen-Martin-Straße
        '384683533' => 'M'		// Eugen-Martin-Straße
        '384683536' => 'M'		// Eugen-Martin-Straße
        '384683537' => 'M'		// Eugen-Martin-Straße
        '384683538' => 'M'		// Eugen-Martin-Straße
        '384683542' => 'M'		// Eugen-Martin-Straße
        '1024245670' => 'M'		// Eugen-Martin-Straße
        '1024245671' => 'M'		// Eugen-Martin-Straße
        '1024245672' => 'M'		// Eugen-Martin-Straße
        '1024245673' => 'M'		// Eugen-Martin-Straße
        '1024245674' => 'M'		// Eugen-Martin-Straße
        '1024245675' => 'M'		// Eugen-Martin-Straße
        '23943024' => 'F'		// Selma-Stern-Weg
        '26762348' => 'M'		// St.-Martins-Gasse
        '26762349' => 'M'		// St.-Martins-Gasse
        '189301123' => 'F'		// Elly-Heuss-Knapp-Straße
        '4499524' => 'F'		// Elisabeth-Hettich-Straße
        '971300790' => 'F'		// Elisabeth-Hettich-Straße
        '235998696' => 'F'		// Elisabeth-Emter-Weg
        '22935096' => 'M'		// Karl-Hausch-Weg
        '42220775' => 'M'		// Karl-Hausch-Weg
        '81112018' => 'M'		// Karl-Hausch-Weg
        '117848639' => 'M'		// Karl-Hausch-Weg
        '117848641' => 'M'		// Karl-Hausch-Weg
        '117848642' => 'M'		// Karl-Hausch-Weg
        '801436838' => 'M'		// Karl-Hausch-Weg
        '801436839' => 'M'		// Karl-Hausch-Weg
        '801436845' => 'M'		// Karl-Hausch-Weg
        '801436846' => 'M'		// Karl-Hausch-Weg
        '217643281' => 'M'		// Johann-Jakob-Fechter-Weg
        '24716935' => 'F'		// Lina-Hähnle-Weg
        '24376041' => 'M'		// Vinzenz-Zahn-Straße
        '52022964' => 'M'		// Vinzenz-Zahn-Straße
        '4599103' => 'M'		// Wildtalstraße
        '4638600' => 'M'		// Wildtalstraße
        '24393960' => 'M'		// Wildtalstraße
        '29060345' => 'M'		// Wildtalstraße
        '51798719' => 'M'		// Wildtalstraße
        '51798720' => 'M'		// Wildtalstraße
        '245369739' => 'M'		// Wildtalstraße
        '265439448' => 'M'		// Wildtalstraße
        '4616974' => 'M'		// Ekkebertstraße
        '145113357' => 'M'		// Häberlestraße
        '23656238' => 'F'		// Ida-Kerkovius-Straße
        '4451499' => 'M'		// Mathias-Blank-Straße
        '6249635' => 'M'		// Mathias-Blank-Straße
        '6249637' => 'M'		// Mathias-Blank-Straße
        '6249638' => 'M'		// Mathias-Blank-Straße
        '24717737' => 'M'		// Mathias-Blank-Straße
        '24717742' => 'M'		// Mathias-Blank-Straße
        '34990978' => 'M'		// Mathias-Blank-Straße
        '34990981' => 'M'		// Mathias-Blank-Straße
        '34994558' => 'M'		// Mathias-Blank-Straße
        '231732209' => 'M'		// Mathias-Blank-Straße
        '231732210' => 'M'		// Mathias-Blank-Straße
        '243356387' => 'M'		// Mathias-Blank-Straße
        '243356388' => 'M'		// Mathias-Blank-Straße
        '243356389' => 'M'		// Mathias-Blank-Straße
        '243356390' => 'M'		// Mathias-Blank-Straße
        '240147661' => 'F'		// Rosastraße
        '530684563' => 'F'		// Rosastraße
        '4855893' => 'M'		// Walter-Knoell-Straße
        '24678384' => 'M'		// Walter-Gropius-Straße
        ],
    ],

    // Array that defines what instances of Wikidata are considered "a person". (you can probably leave this as is)
    'instances' => [
        'Q5'        => true,  // human
        'Q2985549'  => true,  // mononymous person
        'Q20643955' => true,  // human biblical figure

        'Q8436'     => false, // family
        'Q101352'   => false, // family name
        'Q327245'   => false, // team
        'Q3046146'  => false, // married couple
        'Q13417114' => false, // noble family
    ],
];
