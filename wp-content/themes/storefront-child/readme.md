Moment:

1. Laddade ner wordpress-projekt.
2. Skapade en "tema-mapp", en ny databas "lab2-emilia" och en ny wordpressprofil med användarnamn medie-admin. 
3. Installerade wordpress woocommerce-tillägget och fyllde i nödvändiga uppgifter.
4. Kopplade på ett barntema till storefront, kallat för "storefront-child". 
5. Jag skapade sedan 4 produkter, samt två olika kategorier (beskrivning nedan).
6. Jag skapade därefter ett plugin "emilias-plugin" och la till nödvändiga mappar, samt filer. Jag testkörde sedan plugin, med ett echo och det verkar fungera.
7. Därefter så installerade jag CPT tillägg och testade tillägget.
8. Jag skapade sedan en woocommerce-mapp med en fil från föräldramappen som jag skrev en override echo-kod i. Jag valde archive filen och man ser nu mitt echo precis ovanför footern på min arkivsida.
9. Jag har också lagt till en functions.php och har testat att ändra checkout. 




Valda produkter (samt motivation):

1. Löparskor - Löparskor för långdistanslöparen. Löpning är en form av träning som många deltar i, samt att den finns i många olika former. Både för de som hobbytränar, eller hobbylöptränar, men också för de som anser löpning som sin huvudsakliga aktivitet, eller de som elitlöper. Löparskor har därför en stor efterfrågan, med en stor variation av utbud beroende på löparen och terrängen. 

2. Terrängskor - Egentligen samma som ovan. En terrängsko möter också en stor kundgrupp, till exempel orienteringslöpare, cross countrylöpare, skolgymnastik-elever med fler. Det är också en vara som slits och behövs bytas ut med jämna mellanrum, vilket innebär att utbudet kommer att finnas kvar. 

3. Hörlurar - för den aktiva personen. Idag är många på språng och behöver ett enkelt sätt att vara tillgängliga på. Genom en trådlös hörlur, kan de ta med musiken, samtal, podcast eller annat med sig ut utomhus, till gymmet eller andra åtaganden. Branschen för trådlösa hörlurar har exploderat de senaste åren och efterfrågan för nya eller utvecklade produkter. Det är också en stor marknad inom sportsindustrin.

4. Klocka - Jag valde klockan för att det är ett lätt sätt för människor att få med sig livet ut. Det är verkligen enkelt att slippa ta med mobil, klocka plånbok ut på löpturen och placera allt ansvar i klockan. Det är också många som är intresserade av att veta vad deras statistisk är såsom sovrytm, stegpoäng, distansen de sprang på träningen, hur hög puls de har med mer. Även active watch-branschen har exploderat de senaste åren och samma utbud finns här.

5. Gymsko - Ytterligare ett komplement till sko-kollektionen.

6. Beanie - Jag ville också ha något form av klädesplagg. Anledningen till det är för att jag upplever att det är en bra produkt att nyttja för variable products-typen. En mössa är också en enkel produkt att sälja in, vilket jag upplever följer idéen med min e-handel.

7. WorkoutSchedule - Jag ville komma på och testa en produkt som fungerar bra som en nedladdningsbar produkt. Ett träningsschema följer också temat på e-handeln och ingår i samma kategori. 

8. Watch mini - egentligen samma som klocka, men för de som önskar en mindre produkt. Ville fylla ut elektronik-kategorin.




Valda produktkategorier:

1. Skor - Jag har bland annat skapat produkten löparskor, men tänker mig också att skor som kategori har ett brett utbud för idrottaren. Dels finns det skor för olika typer av sporter, såsom fotboll, basket, klättring, gymnastik med fler. Men det finns också olika typer av skor för olika typer av träning, såsom träning inomhus, utomhus, i skogen, på asfalt osv. Därför är kategorin "skor" ett fantastiskt val av kategori för att möta alla kundgrupper. Det är också en kategori som många känner till från andra webbshoppar, samt är en tydlig kategori för dess innehåll. 

2. Elektronik - det är en stor och bred kategori som sväljer många produkter, men ändå har en enhetlig relevans, framför allt på en sportsida. Det är givet att det då är sportrelaterade elektronikprodukter och jag tror också att det faktiskt till och med kan locka mer att välja sin elektronik på en sida som har fokus sport, än på en vanlig elektroni-butik, då jag kan tänka mig att man enbart tagit in tränings-lämpliga produkter som är testade i tuffare miljöer, med mer krav. 

3. Kläder - En kategori som är väldigt bred och som innehåller många olika typer av plagg. Det är därför en enkel kategori att fylla.

4. Workouts - Jag ville också ha någon form av tjänst på hemsidan och inom workouts kan man ladda ner olika typer av träningsscheman som är individuellt anpassade efter det personliga behovet. 




 /* ----- ÄR det, de här han menar med justera woocommerce via hook, 
 remove och add? Eller hur skriver man funktionen?

 function addandremove()

{

add_action()
remove_action()

}

add_action( 'woocommerce', 'addandremove' ); 

*/

template override föreläsning 17/4 del 1, 1.54 in