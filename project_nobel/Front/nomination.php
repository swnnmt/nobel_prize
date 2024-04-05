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

<div class="content_nobel_will">
    <div class="title_main">
    <h1 >Nomination and selection of <br> <?php echo $result['brand_name'] ?></h1>
    </div>
    <div class="title_content nomin">
    Nomination to the <?php echo $result['brand_name'] ?> is by invitation only. 
    The names of the nominees and other information about the nominations 
    cannot be revealed until 50 years later.
    </div>
    <hr>    
    <div class="title_content" style=" font-size: 30px;">
     <b>Process of nomination and selection</b>
    </div>
    <div class="first_content"style="border:none;">
        <p>The Nobel Committee for <?php echo $result['brand_name'] ?> sends confidential forms to persons who are competent 
        and qualified to nominate.
        </p>
    </div>
    <div class="title_content" style=" font-size: 30px;"><b>Qualified nominators</b></div>
    <p class="title_content">
        The right to submit proposals for the award of a Nobel Prize in Physics shall, by statute, be enjoyed by:</p>
        <div class="first_content">
        <ol class="first_content"style="margin-left: 25px;">
            <li style="list-style-type: style;">Swedish and foreign members of the Royal Swedish Academy of Sciences;</li>
            <li style="list-style-type: style;">Members of the Nobel Committee for <?php echo $result['brand_name'] ?>;</li>
            <li style="list-style-type: style;">Nobel Prize laureates in <?php echo $result['brand_name'] ?>;</li>
            <li style="list-style-type: style;">Tenured professors in the <?php echo $result['brand_name'] ?> sciences at the universities and institutes of technology of Sweden, Denmark, Finland, Iceland and Norway, and Karolinska Institutet, Stockholm;</li>
            <li style="list-style-type: style;">Holders of corresponding chairs in at least six universities or university colleges (normally, hundreds of universities) selected by the Academy of Sciences with a view to ensuring the appropriate distribution over the different countries and their seats of learning; and</li>
            <li style="list-style-type: style;">Other scientists from whom the Academy may see fit to invite proposals.</li>
        </ol>
        </div>
    <div class="title_content" >
        <p>Decisions as to the selection of the scientific scholars
            referred to in paragraphs 5 and 6 above shall be taken each year before the end of the month of September.
        </p>
    </div>
    <div class="title_content" style=" font-size: 30px;">
    Selection of <?php echo $result['brand_name'] ?> nobel
    </div>
    <div class="first_content">
    <p >
    The Royal Swedish Academy of Sciences'is responsible for the selection of the Nobel 
    Prize laureates in physics. The Academy appoints a working body, the Nobel Committee for Physics, 
    which screens the nominations and presents a proposal for final candidates. The committee consists nominally of five voting members,
     but since many years, it also includes voting adjunct members. The Committee''s proposal is discussed in a larger body, the Physics 
     Class of the Academy, who may suggest a modification or forward a different proposal to the Academy. Finally, additional proposals may be 
     raised at the final Academy meeting. It is in principle possible to suggest that no Prize be given the current year, but that is a 
     seldom used choice.
    </p>
    </div>
    <div  class="title_content" style=" font-size: 30px;">
    Who is eligible for the Nobel Prize in <?php echo $result['brand_name'] ?>?
    </div>
    <div class="first_content">
    <p>The candidates eligible for the <?php echo $result['brand_name'] ?> are those nominated by qualified persons who have 
    received an invitation from the Nobel Committee to submit names for consideration. No one can nominate himself or herself.
    </p>
    </div>
    <div class="img_nomination">
        <img src="./img/nomination.jpg" alt="">
    </div>
    <div>
    <p>The nomination process for Nobel Prize laureates in <?php echo $result['brand_name']?></p>
    </div>
    <div class="first_content" style="border:none;">
    <p>Below is a brief description of the process involved in selecting the Nobel Prize laureates in <?php echo $result['brand_name']?>
    </p>
    </div>
    <div class="first_content" style="border:none;">
    <p>
        <b>September</b>- Nomination forms are sent out. The Nobel Committee sends out confidential forms to around 3,000 people – selected 
        professors at universities around the world, Nobel Prize laureates in physics and chemistry, 
        and members of the Royal Swedish Academy of Sciences, among others.
    </p>
    </div>
    <div class="first_content" style="border:none;">
    <p>
    <b>February</b> – Deadline for submission.The completed nomination forms must reach the Nobel Committee no later than 31 January of the following year.
     The Committee screens the nominations and selects the preliminary candidates. About 250–350 names are nominated as several nominators often 
     submit the same name.
    </p>
    </div>
    <div class="first_content" style="border:none;">
    <p>
    <b>March-May</b> – Consultation with experts. The Nobel Committee sends the names of the preliminary 
    candidates to specially appointed experts for their assessment of the candidates’ work
    </p>
    </div>
    <div class="first_content" style="border:none;">
    <p>
    <b>June-August</b> – Writing of the report. The Nobel Committee puts together the report with recommendations to be submitted to the Academy.
     The report is signed by all members of the Committee.
    </p>
    </div>
    <div class="first_content" style="border:none;">
    <p>
    <b>September</b> – Committee submits recommendations. The Nobel Committee submits its report with recommendations on the final candidates to the members of the Academy. The report is discussed at two meetings of the Physics Class of the Academy.
    </p>
    </div>
    <div class="first_content" style="border:none;">
    <p>
    <b>October</b> – Nobel Prize laureates are chosen. In early October, the Academy selects the Nobel Prize laureates in physics through a majority vote. The decision is final and without appeal. The names of the Nobel Laureates are then announced.
    </p>
    </div>
    <div class="first_content" style="border:none;">
    <p>
    <b>December</b> – Nobel Prize laureates receive their prize. The Nobel Prize award ceremony takes place on 10 December in Stockholm, where the Nobel Prize laureates receive their Nobel Prize, which consists of a Nobel Prize medal and diploma, and a document confirming the prize amount.
    </p>
    </div>
    <div  class="title_content" style=" font-size: 30px;">
    Are the nominations made public?
    </div>
    <div class="first_content">
    <p>
    The statutes of the Nobel Foundation restrict disclosure of information about the nominations, whether publicly or privately, for 50 years. The restriction concerns the nominees and nominators, as well as investigations and opinions related to the award of a prize.
    </p>
    </div>
</div>