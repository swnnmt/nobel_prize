<?php include "header.php" ?>
<?php
include "./class/brand_class.php";
include "./class/quickfact_class.php";
include "./class/generality_class.php";
?>
<?php
$brand = new brand;
if(!isset($_GET['brand_id']) || $_GET['brand_id'] ==NULL ){
    echo "<script>window.location = 'brandlis.php'</script>";
}
else{
    $brand_id = $_GET['brand_id'];
    $get_brand = $brand -> get_brand($brand_id);
}
if ($get_brand){
    $result= $get_brand -> fetch_assoc();
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
<section>
    <!-- đổ từ database -->
    <div class="banner">
        <img src="./img/<?php echo $result['img_banner']?>" alt="" style="width:100%; height: 480px;" >
    </div>
    
    <div class="content_nobel_will">
    <div class="title_main">
    <h1 >Alfred Nobel’s will</h1>
    </div>
    <div class="first_content">
        <p>On November 27, 1895, Alfred Nobel signed his third and last will 
            at the Swedish-Norwegian Club in Paris. When it was opened and read after his death, 
            the will caused a lot of controversy both in Sweden and internationally, as Nobel had left much of his wealth for the 
            establishment of a prize. His family opposed the establishment of the Nobel Prize, and the prize awarders he named refused 
            to do what he had requested in his will. It was five years before the first Nobel Prize could be awarded in 1901.
        </p>
    </div>
    <div class="title_content">
        <h1>The establishment of the Nobel Prize</h1>
    </div>
    <div class="img_des">
        <img src="./img/img_nobel_will.jpg" alt="">
    </div>
    <div class="first_content">
        <p>In this excerpt of the will, Alfred Nobel dictates that his entire remaining estate should be used to 
            endow “prizes to those who, during the preceding year, have conferred the greatest benefit to humankind”
        </p>
    </div>
    <div class="first_content">
        <p>“All of my remaining realisable assets are to be disbursed as follows: the capital, 
            converted to safe securities by my executors, is to constitute a fund, the interest on which is 
            to be distributed annually as prizes to those who, during the preceding year, have conferred the greatest benefit 
            to humankind. The interest is to be divided into five equal parts and distributed as follows: one part to the person 
            who made the most important discovery or invention in the field of physics; one part to the person who made the most 
            important chemical discovery or improvement; one part to the person who made the most important discovery within the 
            domain of physiology or medicine; one part to the person who, in the field of literature, produced the most outstanding
             work in an idealistic direction; and one part to the person who has done the most or best to advance fellowship among nations, 
             the abolition or reduction of standing armies, and the establishment and promotion of peace congresses. The prizes for physics 
             and chemistry are to be awarded by the Swedish Academy of Sciences; that for physiological or medical achievements by the Karolinska 
             Institute in Stockholm; that for literature by the Academy in Stockholm; and that for champions of peace by a committee of five persons 
             to be selected by the Norwegian Storting. It is my express wish that when awarding the prizes, no consideration be given to nationality, 
            but that the prize be awarded to the worthiest person, whether or not they are Scandinavian.”
        </p>
    </div>
    </div>
    <!-- life -->
    <div class="content_nobel_life">
    <div class="title_main">
    <h1 >Alfred Nobel’s will</h1>
    </div>
    <div class="first_content">
        <p>Alfred Nobel (1833-1896) was born in Stockholm, Sweden, on 21 October 1833. His family was descended from Olof Rudbeck, 
            the best-known technical genius in Sweden in the 17th century, an era in which Sweden was a great power in northern Europe. 
            Nobel was fluent in several languages, and wrote poetry and drama. Nobel was also very interested in social and peace-related issues,
             and held views that were considered radical during his time. Alfred Nobel’s interests are reflected in the prize he established. 
            Learn more about his life and his interests – science, inventions, entrepreneurship, literature and peace work.
        </p>
    </div>
    <div class="title_content">
        <h1>Alfred Nobel’s life and work</h1>
    </div>
    <div class="first_content">
        <p>Alfred Nobel was born in Stockholm on 21 October 1833. His father, Immanuel Nobel, was an engineer and inventor who built 
            bridges and buildings in Stockholm. In connection with his construction work Immanuel Nobel also experimented with different 
            techniques for blasting rocks
        </p>
    </div>
    <div class="img_alfred">
        <img src="./img/alfred1.jpg" alt="">
    </div>
    <div class="first_content">
        <p>Alfred’s mother, born Andriette Ahlsell, came from a wealthy family. Due to misfortunes in his 
            construction work caused by the loss of some barges of building material, 
            Immanuel Nobel was forced into bankruptcy the same year Alfred Nobel was born.
            <br>
            In 1837 Immanuel Nobel left Stockholm and his family to start a new career in Finland and in Russia. 
            To support the family, Andriette Nobel started a grocery store which provided a modest income. Meanwhile 
            Immanuel Nobel was successful in his new enterprise in St. Petersburg, Russia. He started a mechanical workshop which 
            provided equipment for the Russian army and he also convinced the Tsar and his generals that naval mines could be used to block 
            enemy naval ships from threatening the city. 
        </p>
    </div>
    <p id="more">More</p>
    <div class="continue" style="display:none;">
        <div class="img_alfred">
            <img src="./img/alfred2.jpg" alt="">
        </div>
        <div class="first_content">
        <p>Immanuel Nobel and Andriette Nobel
            <br>
            The naval mines designed by Immanuel Nobel were simple devices consisting of submerged 
            wooden casks filled with gunpowder. Anchored below the surface of the Gulf of Finland, they effectively 
            deterred the British Royal Navy from moving into firing range of St. Petersburg during the Crimean war (1853-1856). 
            Immanuel Nobel was also a pioneer in arms manufacture and in designing steam engines.
        </p>
        </div>
        <div class="img_alfred">
            <img src="./img/alfred3.jpg" alt="">
        </div>
        <div class="first_content">
        <p>Successful in his industrial and business ventures, Immanuel Nobel was able, in 1842, to bring his family to St. Petersburg. 
            There, his sons were given a first class education by private teachers. The training included natural sciences,
             languages and literature.
             <br>
             By the age of 17 Alfred Nobel was fluent in Swedish, Russian, French, English and German. His primary interests were in English 
             literature and poetry as well as in chemistry and physics. Alfred’s father, who wanted his sons to join his enterprise as engineers, 
             disliked Alfred’s interest in poetry and found his son rather introverted.
             <br>
             In order to widen Alfred’s horizons his father sent him abroad for further training in chemical engineering. 
             During a two year period Alfred Nobel visited Sweden, Germany, France and the United States. In Paris, the city he came to like best, 
             he worked in the private laboratory of Professor T. J. Pelouze, a famous chemist. There he met the young Italian chemist Ascanio Sobrero 
             who, three years earlier,had invented nitroglycerine, a highly explosive liquid.
             <br>
             Nitroglycerine was produced by mixing glycerine with sulfuric and nitric acid. It was considered too dangerous to be of 
             any practical use. Although its explosive power greatly exceeded that of gunpowder, the liquid would explode in a very unpredictable manner 
             if subjected to heat and pressure.
             <br>
             Alfred Nobel became very interested in nitroglycerine and how it could be put to practical use in construction work. 
             He also realized that the safety problems had to be solved and a method had to be developed for the controlled detonation of nitroglycerine. 
             In the United States he visited John Ericsson, the Swedish-American engineer who had developed the screw propeller for ships. 
             In 1852 Alfred Nobel was asked to come back and work in the family enterprise which was booming because of its deliveries to the Russian army. 
             Together with his father he performed experiments to develop nitroglycerine as a commercially and technically useful explosive.
             <br>
             As the war ended and conditions changed, Immanuel Nobel was again forced into bankruptcy. 
             Immanuel and two of his sons, Alfred and Emil, left St. Petersburg together and returned to Stockholm. His other two sons,
              Robert and Ludvig, remained in St. Petersburg. With some difficulties they managed to salvage the family enterprise and then went on to 
              develop the oil industry in the southern part of the Russian empire. 
             They were very successful and became some of the wealthiest persons of their time.
        </p>
        <div class="img_alfred">
            <img src="./img/alfred4.jpg" alt="">
        </div>
        <div class="first_content">
        <p>After his return to Sweden in 1863, Alfred Nobel concentrated on developing nitroglycerine as an explosive. 
            Several explosions, including one (1864) in which his brother Emil and several other persons were killed, convinced 
            the authorities that nitroglycerine production was exceedingly dangerous. They forbade further experimentation with nitroglycerine 
            within the Stockholm city limits and Alfred Nobel had to move his experimentation to a barge anchored on Lake Mälaren. 
            Alfred was not discouraged and in 1864 he was able to start mass production of nitroglycerine.
            <br>
            To make the handling of nitroglycerine safer Alfred Nobel experimented with different additives.
             He soon found that mixing nitroglycerine with kieselguhr would turn the liquid into a paste which could be shaped into rods of a 
             size and form suitable for insertion into drilling holes. In 1867 he patented this material under the name of dynamite. To be able to
              detonate the dynamite rods he also invented a detonator (blasting cap) which could be ignited by lighting a fuse. 
            These inventions were made at the same time as the diamond drilling crown and the pneumatic drill came into general use.
            <br>
            Together these inventions drastically reduced the cost of blasting rock, drilling tunnels, building canals and many other forms of construction work.
        </p>
        </div>
        <div class="img_alfred">
            <img src="./img/alfred5.jpg" alt="">
        </div>
        <div class="first_content">
        <p>The market for dynamite and detonating caps grew very rapidly and Alfred Nobel also proved himself to be a very skillful
             entrepreneur and businessman. By 1865 his factory in Krümmel near Hamburg, 
            Germany, was exporting nitroglycerine explosives to other countries in Europe, America and Australia.
            <br>
            Over the years he founded factories and laboratories in some 90 different places in more than 20 countries. Although he lived in Paris much of his life he was constantly traveling. Victor Hugo at one time described him as “Europe’s richest vagabond”. When he was not traveling or engaging in business activities Nobel himself worked intensively in his various laboratories, first in Stockholm and later in Hamburg (Germany), Ardeer (Scotland), Paris and Sevran (France), Karlskoga (Sweden) and San Remo (Italy). He focused on the development of explosives technology as well as other chemical inventions, including such materials as synthetic rubber and leather, 
            artificial silk, etc. By the time of his death in 1896 he had 355 patents.
            <br>
            The most qualified applicant turned out to be an Austrian woman, 
            Countess Bertha Kinsky. After working a very short time for Nobel she decided to 
            return to Austria to marry Count Arthur von Suttner. In spite of this Alfred Nobel and Bertha von Suttner 
            remained friends and kept writing letters to each other for decades. Over the years Bertha von Suttner became increasingly
             critical of the arms race. She wrote a famous book, Lay Down Your Arms and became a prominent figure in the peace movement. 
             No doubt this influenced Alfred Nobel when he wrote his final will which was to include a Prize for persons or organizations 
             who promoted peace. Several years after the death of Alfred Nobel, the Norwegian Storting (Parliament) decided to award the 1905 
             Nobel Peace Prize to Bertha von Suttner.
        </p>
        </div>
        <div class="img_alfred">
            <img src="./img/alfred6.jpg" alt="">
        </div>
        <div class="first_content">
        <p>Alfred Nobel’s greatness lay in his ability to combine the penetrating mind of the scientist and 
            inventor with the forward-looking dynamism of the industrialist. Nobel was very interested in social and peace-related issues 
            and held what were considered radical views in his era. He had a great interest in literature and wrote his own poetry and dramatic works. 
            The Nobel Prizes became an extension and a fulfillment of his lifetime interests.
            <br>
            Many of the companies founded by Nobel have developed into industrial enterprises that still play a prominent role in 
            the world economy, for example Imperial Chemical Industries (ICI), Great Britain; Société Centrale de Dynamite, France; and Dyno 
            Industries in Norway. Toward the end of his life, 
            he acquired the company AB Bofors in Karlskoga, where Björkborn Manor became his Swedish home.
            <br>
            Alfred Nobel died in San Remo, Italy, on 10 December 1896. When his will was opened it came as
             a surprise that his fortune was to be used for Prizes in Physics, Chemistry, Physiology or Medicine, 
             Literature and Peace. The executors of his will were two young engineers, Ragnar Sohlman and Rudolf Lilljequist. 
             They set about forming the Nobel Foundation as an organization to take care of the financial assets left by Nobel for this purpose
              and to coordinate the work of the Prize-Awarding Institutions. This was not without its difficulties since the 
            will was contested by relatives and questioned by authorities in various countries.
        </p>
        </div>
        <div class="img_alfred">
            <img src="./img/alfred7.jpg" alt="">
        </div>
        <div class="first_content">
        <p>* Nils Ringertz was born in 1932. He got an MD/PhD in medicine in 1960 and specialized in medical cell genetics.
             His main line of research has been nucleocytoplasmic signaling and digital imaging of cell structures using fluorescent probes.
              Nils Ringertz served as professor of medical cell genetics at Karolinska Institutet, Stockholm in 1969-1993, was chairman at the
               Department of Cell and Molecular Biology (CMB) of the Medical Nobel Institute in 1977-1993, and chairman of the Medical Nobel Committee 
               1976-1999. From 1963 to 1993 he was editor of Experimental Cell Research (Academic Press). Nils Ringertz was a member of the Royal Swedish
                Academy of Sciences and served with a number of international scientific organizations. In 1994 he initiated the Electronic Nobel Museum 
                Project (ENM) which led to the Nobelprize.org (NeM). Nils Ringertz died in his home in Stockholm on June 8, 2002.
        </p>
        </div>
        </div>
        <p id="less">Less</p>
    </div>
    </div>
    </section>
    <?php 
     if($result['brand_id']!=8){
        ?>
        <script>
        var elements = document.getElementsByClassName("content_nobel_will");
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = "none";
        }
        </script>
        <?php
     }
     if($result['brand_id']!=7){
        ?>
        <script>
        var elements = document.getElementsByClassName("content_nobel_life");
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = "none";
        }
        </script>
        <?php
     }
    ?>
    <!-- <script src="./Js/controler_alfred.js"></script> -->
    <script>
        document.getElementById("more").onclick = function() {
        document.querySelector(".continue").style.display = "";
        document.getElementById("more").style.display = "none"
        
    };
    document.getElementById("less").onclick = function() {
        document.querySelector(".continue").style.display = "none";
        
    };
    </script>
</body>
</html>