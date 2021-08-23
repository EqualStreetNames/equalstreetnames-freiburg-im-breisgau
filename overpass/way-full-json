[out:json][timeout:300];
( area["admin_level"="6"]["wikidata"="Q2833"]; )->.a;
(
    way["highway"]["name"]["highway"!="bus_stop"]["highway"!="elevator"]["highway"!="platform"]["highway"!="service"]["highway"!="proposed"](area.a);
    way["place"="square"]["name"](area.a);
);
out body;
>;
out skel qt;
