<?php
	//1) set the variable "$title" of the page
	//2) Must set the file name of list of items in variable "$list"

    function item ($tabList_i, $line){
    	$article_i = "art_".$tabList_i;
       return '
            <article class="card card-custom card-corporate">
              <div class="card-header" role="tab">
                <div class="card-title">
                    <h2><span class="schedule-classic-title heading-5">'.$line["title"].'</span></h2>
                    <span ><a href="'.$line["link"].'" target="new">'.$line["link"].'</a></span>
                  </div>
              </div>
            </article>';
    }
?>

<section class="section section-lg bg-default text-center">
  <div class="container">
    <div class="block-lg block-center">
    <?php
        for($i=0;$i<sizeof($doc["items"]);$i++){
          echo '<div class="card-group-custom card-group-corporate" id="accordion'.$i.'" role="tablist" aria-multiselectable="false">';  
          $i=0;
          foreach($doc["items"] as $k1 => $item){
          	$i++;
          	echo item ($i, $item);
          }
          echo '</div>';
        }
    ?>
    </div>
  </div>
</section>
