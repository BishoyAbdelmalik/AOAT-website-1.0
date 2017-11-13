<?php
error_reporting(0);
global  $connection;
function mysql_connection(){
    global  $connection;

    $dbhost="localhost";
    $dbuser="AOAT";
    $dbpass="123456";
    $dbname="aoat";
    $connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(mysqli_connect_errno()){
        die("Database connection failes: ".
            mysqli_connect_error(). " (" . mysqli_connect_errno().")"
           );
    }
}
mysql_connection();
$query="SELECT * FROM `studentworkdp` ORDER BY id ASC;
";
$result=mysqli_query($connection,$query);
$rows=array();
while($row= mysqli_fetch_assoc($result)){
    array_push($rows, $row);
}
mysqli_free_result($result);
mysqli_close($connection);  
/*var_dump($row);*/
/*
var_dump($rows);
*/
$instructor=$rows[0][instructor];
$instructor_url=$rows[0][url];
$course=$rows[0][course];
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/student_work.css" />
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>AOAT | Photograpy</title>
    </head>

    <body>
        <header>
            <?php
        require 'header.php';

        ?>
        </header>
        <div class="banner" id="digitalPhotography">
            <div class="container-fluid lockcontent">
                <h2>Digital Photograpy</h2>

            </div>
        </div>
        <main>

            <section class="container-fluid lockcontent">
                <p>
                    <i>Instructor:</i>
                    <a href="teachers.php?t=<?php echo $instructor_url; ?>">
                        <?php echo $instructor; ?>
                    </a>
                </p>
                <p>
                    <?php echo $course; ?>
                </p>
            </section>

            <?php
            $projects="";
            $modal="";
            $projects.='<section class="blue_background">';
            
            $x=1;
            foreach($rows  as $value){
                $images = preg_split("/[\s,]+/", $value[images]);
//                $projects.='<div class="flex_b studentwork '.$x.'">';
                $projects.='<div class="flex_b studentwork '.$x." ".preg_replace('/\s+/', '', $value[project]).'">';
                $projects.='<article class="flex_b  dgPhotography">';
                $projects.='<div>';
                $projects.='<h3>'.$value[project].'</h3>';
                $projects.='<p class="justify">'.$value[description].'</p>';
                $projects.='</div>';
                $projects.='</article>';
                $projects.='<img id="$x" class="only_img" src='.$images[0].'>';
                $projects.='<div class="studentworkTile projects_grid flex_b wrap">';
                $projects.='<img src='.$images[1].'>';
                $projects.='<img src='.$images[2].'>';
                $projects.='<img src='.$images[3].'>';
                $projects.='<img src='.$images[4].'>';
                $projects.='</div>';
                $projects.='</div>';
                
                
                
                $modal.=' <div class="modal center_ver'.preg_replace('/\s+/', '', $value[project]).'" id="mygallery" role="dialog">';
                $modal.='<div class="modal-dialog">
                    <div class="modal-content flex_b flex_column">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button></div>';
                $modal.='<div class="modal-body">
                            <span id="back" class="fa fa-chevron-left fa-2x"></span>
                            <img class="gallery_viewing" src='.$images[0].'>
                            <span id="forward" class="fa fa-chevron-right fa-2x"></span>
                        </div>';
                
                $modal.='<div class="modal-footer flex_b">';
                foreach ($images as $img) { 
                    $modal.='<img class="gallery_items" src='.$img.'>';
                }                               
                $modal.='</div>';
                $modal.='</div></div></div>';

                
           
                $x++;                 
            }
            $projects.='</section>';
            echo $projects;
            echo $modal;
            
                
            
            ?>





                <!--<div class="modal center_ver" id="mygallery" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content flex_b flex_column">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <span id="back" class="fa fa-chevron-left fa-2x"></span>
                <img class="gallery_viewing" src="images/student_work/digital_photography/hockney_calampiano-thumb.jpg">
                <span id="forward" class="fa fa-chevron-right fa-2x"></span>

            </div>
            <div class="modal-footer flex_b">
                <img class="gallery_items" src="images/student_work/digital_photography/hockney_calampiano-thumb.jpg">
                <img class="gallery_items" src="images/student_work/digital_photography/hockney_soberanis-thumb.jpg">
                <img class="gallery_items" src="images/student_work/digital_photography/hockney_correa-thumb.jpg">
                <img class="gallery_items" src="images/student_work/digital_photography/hockney_martineza-thumb.jpg">
                <img class="gallery_items" src="images/student_work/digital_photography/hockney_ngo-thumb.jpg">
                <img class="gallery_items" src="images/student_work/digital_photography/hockney_parada-thumb.jpg">
                <img class="gallery_items" src="images/student_work/digital_photography/hockney_pena-thumb.jpg">
            </div>
        </div>

    </div>
</div>-->


                <!--


<div class="container-fluid">

    <h3>
        <a href="#hockney" data-toggle="collapse">
				Hockney Inspired Digital Photo Collage
			</a>
    </h3>
    <div id="hockney" class="collapse">
        <p>
            Objective: Study and analyze the style and method of David Hockney’s photographic work. Begin by researching the tools he used to make the images, his technique in organizing and executing the project, and his relationship to the subject he is photographing. Using 15-20 individual photographs taken with your cellphone, photograph a significant subject in your life. It may be a person, place, or thing. By the end of the project, you should know your subject matter better than you did before starting this project.
        </p>
    </div>
    <div class="gallery_col">
        <a href="images/student_work/digital_photography/hockney_calampiano.jpg" data-lightbox="photography" data-title="Hockney Inspired Digital Photo Collage">
				<img src="images/student_work/digital_photography/hockney_calampiano-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/hockney_soberanis.jpg" data-lightbox="photography" data-title="Hockney Inspired Digital Photo Collage">
				<img src="images/student_work/digital_photography/hockney_soberanis-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/hockney_correa.jpg" data-lightbox="photography" data-title="Hockney Inspired Digital Photo Collage">
				<img src="images/student_work/digital_photography/hockney_correa-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/hockney_martineza.jpg" data-lightbox="photography" data-title="Hockney Inspired Digital Photo Collage">
				<img src="images/student_work/digital_photography/hockney_martineza-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/hockney_ngo.jpg" data-lightbox="photography" data-title="Hockney Inspired Digital Photo Collage">
				<img src="images/student_work/digital_photography/hockney_ngo-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/hockney_parada.jpg" data-lightbox="photography" data-title="Hockney Inspired Digital Photo Collage">
				<img src="images/student_work/digital_photography/hockney_parada-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/hockney_pena.jpg" data-lightbox="photography" data-title="Hockney Inspired Digital Photo Collage">
				<img src="images/student_work/digital_photography/hockney_pena-thumb.jpg">
			</a>
    </div>


    <h3>
        <a href="#kaleidescope" data-toggle="collapse">
                    Kaleidescope
			</a>
    </h3>
    <div id="kaleidescope" class="collapse">
        <p>
            <b>Objective:</b> An extension to the Selective Focus Project students will refine their Photoshop skills by creating a kaleidoscope image. They will begin with a Single image and create a seamless rhythmic geometric pattern.
        </p>
    </div>
    <div class="gallery_col">
        <a href="images/student_work/digital_photography/kaleidescope_aguilar.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_aguilar-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_aguilera.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_aguilera-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_alavarado.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_alavarado-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_arceo.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_arceo-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_morenoa.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_morenoa-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_obrego.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_obrego-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_rafaelov.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_rafaelov-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_sotelo.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_sotelo-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_gonzalez.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_gonzalez-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_hernandez.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_hernandez-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_lapuz.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_lapuz-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kaleidescope_mendoza.jpg" data-lightbox="photography" data-title="kaleidescope">
				<img src="images/student_work/digital_photography/kaleidescope_mendoza-thumb.jpg">
			</a>
    </div>
    <h3>
        <a href="#kruger" data-toggle="collapse">
				Politics + Art: The Power of Words and Text
			</a>
    </h3>
    <div id="kruger" class="collapse">
        <p>
            Objective: Reflecting on the issues that may impact your learning or lifestyle, create a work of art using text and image to make your viewer understand a problem in your school or community. Having studied the work of Barbara Kruger and Jenny Holzer, select an issue from your school or community that you feel is necessary for others to know about. Make an original photograph using your digital camera or cellphone and create an original five word slogan that will illustrate the image and the problem you’re addressing.
        </p>
    </div>
    <div class="gallery_col">
        <a href="images/student_work/digital_photography/kruger_aguilar.jpg" data-lightbox="photography" data-title="Whatever goes up must go down">
				<img src="images/student_work/digital_photography/kruger_aguilar.jpg">
			</a>
        <a href="images/student_work/digital_photography/kruger_callaway.jpg" data-lightbox="photography" data-title="I BELONG TO ME... PLEASE?">
				<img src="images/student_work/digital_photography/kruger_callaway-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kruger_villa.jpg" data-lightbox="photography" data-title="Stop the peer pressure">
				<img src="images/student_work/digital_photography/kruger_villa-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kruger_ruano.jpg" data-lightbox="photography" data-title="DO NOT DRINK FROM FAUCET">
				<img src="images/student_work/digital_photography/kruger_ruano-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kruger_torres.jpg" data-lightbox="photography" data-title="Help Clean The Environment">
				<img src="images/student_work/digital_photography/kruger_torres-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/kruger_tran.jpg" data-lightbox="photography" data-title="Pick what's best for you">
				<img src="images/student_work/digital_photography/kruger_tran-thumb.jpg">
			</a>
    </div>
    <h3>
        <a href="#narrative" data-toggle="collapse">
				Photo Narrative - Story Telling in Five Photos
			</a>
    </h3>
    <div id="narrative" class="collapse">
        <p>
            Objective: Use cellphone or digital camera to tell a story (myth, fairy tale, etc.) in five still images. Explain how visual artists and writers represent similar stories in different ways; how does cultural and language affect the way a story is told? Discuss universal story themes such as love, desire, death and immortality.
        </p>
    </div>
    <div class="gallery_col">
        <a href="images/student_work/digital_photography/narrative.LaLlorona_1.jpg" data-lightbox="photography" data-title="La Llorona Title">
				<img src="images/student_work/digital_photography/narrative.LaLlorona_1-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.LaLlorona_2.jpg" data-lightbox="photography" data-title="La Llorona 1 of 5">
				<img src="images/student_work/digital_photography/narrative.LaLlorona_2-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.LaLlorona_3.jpg" data-lightbox="photography" data-title="La Llorona 2 of 5">
				<img src="images/student_work/digital_photography/narrative.LaLlorona_3-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.LaLlorona_4.jpg" data-lightbox="photography" data-title="La Llorona 3 of 5">
				<img src="images/student_work/digital_photography/narrative.LaLlorona_4-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.LaLlorona_5.jpg" data-lightbox="photography" data-title="La Llorona 4 of 5">
				<img src="images/student_work/digital_photography/narrative.LaLlorona_5-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.LaLlorona_6.jpg" data-lightbox="photography" data-title="La Llorona 5 of 5">
				<img src="images/student_work/digital_photography/narrative.LaLlorona_6-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.LaLlorona_7.jpg" data-lightbox="photography" data-title="La Llorona 1 of 5">
				<img src="images/student_work/digital_photography/narrative.LaLlorona_7-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.SleepingBeauty_1.jpg" data-lightbox="photography" data-title="Sleeping Beauty Title">
				<img src="images/student_work/digital_photography/narrative.SleepingBeauty_1-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.SleepingBeauty_2.jpg" data-lightbox="photography" data-title="Sleeping Beauty 1 of 5">
				<img src="images/student_work/digital_photography/narrative.SleepingBeauty_2-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.SleepingBeauty_3.jpg" data-lightbox="photography" data-title="Sleeping Beauty 2 of 5">
				<img src="images/student_work/digital_photography/narrative.SleepingBeauty_3-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.SleepingBeauty_4.jpg" data-lightbox="photography" data-title="Sleeping Beauty 3 of 5">
				<img src="images/student_work/digital_photography/narrative.SleepingBeauty_4-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.SleepingBeauty_5.jpg" data-lightbox="photography" data-title="Sleeping Beauty 4 of 5">
				<img src="images/student_work/digital_photography/narrative.SleepingBeauty_5-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.SleepingBeauty_6.jpg" data-lightbox="photography" data-title="Sleeping Beauty 5 of 5">
				<img src="images/student_work/digital_photography/narrative.SleepingBeauty_6-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/narrative.SleepingBeauty_7.jpg" data-lightbox="photography" data-title="Sleeping Beauty End">
				<img src="images/student_work/digital_photography/narrative.SleepingBeauty_7-thumb.jpg">
			</a>
    </div>
    <h3>
        <a href="#composition" data-toggle="collapse">
				Photo Composition
			</a>
    </h3>
    <div id="composition" class="collapse">
        <p>
            Objective: Good composition is a key elements of good art, therefore, good photography. Instead of looking at photographic composition as a set of rules to follow, look at it like a set of ingredients, a recipe to follow, that you can modify and change as you become better skilled. Begin documenting what see see around you, at school or at home, while maintaining the idea of good photographic composition in mind.
        </p>
    </div>
    <div class="gallery_col">
        <a href="images/student_work/digital_photography/composition_bonilla.jpg" data-lightbox="photography" data-title="Photo Composition">
				<img src="images/student_work/digital_photography/composition_bonilla-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/composition_butler.jpg" data-lightbox="photography" data-title="Photo Composition">
				<img src="images/student_work/digital_photography/composition_butler-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/composition_diosdado.jpg" data-lightbox="photography" data-title="Photo Composition">
				<img src="images/student_work/digital_photography/composition_diosdado-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/composition_lacson.jpg" data-lightbox="photography" data-title="Photo Composition">
				<img src="images/student_work/digital_photography/composition_lacson-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/composition_gonzalez.jpg" data-lightbox="photography" data-title="Photo Composition">
				<img src="images/student_work/digital_photography/composition_gonzalez-thumb.jpg">
			</a>
        <a href="images/student_work/digital_photography/composition_pineda.jpg" data-lightbox="photography" data-title="Photo Composition">
				<img src="images/student_work/digital_photography/composition_pineda-thumb.jpg">
			</a>
    </div>
                    <h3>
                        <a href="#mood" data-toggle="collapse">
				Mood Portrait
			</a>
                    </h3>
                    <div id="mood" class="collapse">
                        <p>
                            Objective: Great portrait photographers have been able to manipulate their sitters and viewers into believing that a true emotion is occurring in front of the lens. Using your skills in lighting, composition, and story telling, create a portrait inspired by a portrait photographer to tell a short story about your sitter.
                    </div>
                    <div class="gallery_col">
                        <a href="images/student_work/digital_photography/retouch_sheen.jpg" data-lightbox="photography" data-title="Mood Portrait">
				<img src="images/student_work/digital_photography/retouch_sheen-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/retouch_fuentes.jpg" data-lightbox="photography" data-title="Mood Portrait">
				<img src="images/student_work/digital_photography/retouch_fuentes-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/retouch_trujillo.jpg" data-lightbox="photography" data-title="Mood Portrait">
				<img src="images/student_work/digital_photography/retouch_trujillo-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/retouch_martinez.jpg" data-lightbox="photography" data-title="Mood Portrait">
				<img src="images/student_work/digital_photography/retouch_martinez-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/retouch_bonilla.jpg" data-lightbox="photography" data-title="Mood Portrait">
				<img src="images/student_work/digital_photography/retouch_bonilla-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/retouch_anaya.jpg" data-lightbox="photography" data-title="Mood Portrait">
				<img src="images/student_work/digital_photography/retouch_anaya-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/retouch_bravo.jpg" data-lightbox="photography" data-title="Mood Portrait">
				<img src="images/student_work/digital_photography/retouch_bravo-thumb.jpg">
			</a>
                    </div>
                    <h3>
                        <a href="#shutter" data-toggle="collapse">
				Our Moving World - Shutter Speed Project
			</a>
                    </h3>
                    <div id="shutter" class="collapse">
                        <p>
                            Objective: A photographer is a story-teller and a photograph is a slice of time from that story. Just as you select the section that you want to photograph out of a larger scene, you can also choose the section of time you want to record. You can think of a photograph as carving through time, taking a wide slice at a slow shutter speed or a narrow slice at a fast shutter speed. In that slice of time, things are moving, and, depending on the shutter speed and direction of the motion, you can show objects frozen in mid-movement, blurred until they are almost unrecognizable, or blurred to any extent in between.
                        </p>
                    </div>
                    <div class="gallery_col">
                        <a href="images/student_work/digital_photography/shutter.fast_bravo.jpg" data-lightbox="photography" data-title="Shutter Speed-Fast">
				<img src="images/student_work/digital_photography/shutter.fast_bravo-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/shutter.slow_martinez.jpg" data-lightbox="photography" data-title="Shutter Speed-Slow">
				<img src="images/student_work/digital_photography/shutter.slow_martinez-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/shutter.fast_caseres.jpg" data-lightbox="photography" data-title="Shutter Speed-Fast">
				<img src="images/student_work/digital_photography/shutter.fast_caseres-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/shutter.fast_cruz.jpg" data-lightbox="photography" data-title="Shutter Speed-Fast">
				<img src="images/student_work/digital_photography/shutter.fast_cruz-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/shutter.fast_rafaelov.jpg" data-lightbox="photography" data-title="Shutter Speed-Fast">
				<img src="images/student_work/digital_photography/shutter.fast_rafaelov-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/shutter.fast_sheen.jpg" data-lightbox="photography" data-title="Shutter Speed-Fast">
				<img src="images/student_work/digital_photography/shutter.fast_sheen-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/shutter.slow_lacson.jpg" data-lightbox="photography" data-title="Shutter Speed-Slow">
				<img src="images/student_work/digital_photography/shutter.slow_lacson-thumb.jpg">
			</a>
                    </div>
                    <h3>
                        <a href="#focus" data-toggle="collapse">
				Selective Focus - Controlling Depth of Field Project
			</a>
                    </h3>
                    <div id="focus" class="collapse">
                        <p>
                            Objective: Depth of field (DOF) is the area from near to far in a scene that is acceptably sharp in a photograph. Using the Aperture Priority setting on your camera, control the focus of your background and foreground while photographing your subject. Keep in mind that as the aperture widens, the amount of light increases and as the aperture closes, the amount of light decreases; which means you need to be aware of the amount of light that is on your subject.
                        </p>
                    </div>
                    <div class="gallery_col">
                        <a href="images/student_work/digital_photography/depth.deep_avalos.jpg" data-lightbox="photography" data-title="Depth of Field-Deep">
				<img src="images/student_work/digital_photography/depth.deep_avalos-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/depth.macro_martinez.jpg" data-lightbox="photography" data-title="Depth of Field-Macro">
				<img src="images/student_work/digital_photography/depth.macro_martinez-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/depth.macro_cruz.jpg" data-lightbox="photography" data-title="Depth of Field-Macro">
				<img src="images/student_work/digital_photography/depth.macro_cruz-thumb.jpg">
			</a>
                        <a href="images/student_work/digital_photography/depth.shallow_avalos.jpg" data-lightbox="photography" data-title="Depth of Field-Shallow">
				<img src="images/student_work/digital_photography/depth.shallow_avalos-thumb.jpg">
			</a>
                    </div>
                </div>-->
        </main>
        <footer>
            <?php 
        require 'footer.php';
        require 'js.php' ;
        ?>
        </footer>
        <?php
    jquery(0);
    nav();
    bootstrap(0);
    ?>

            <script src="js/student_work_gallery.js"></script>

    </body>

    </html>
