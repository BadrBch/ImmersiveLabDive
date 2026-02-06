<?php
    if($lang == 'en')
        $schedule = json_decode(file_get_contents("_schedule_en.json"), true);
    else
        $schedule = json_decode(file_get_contents("_schedule.json"), true);
    function blockSpeaker ($tabList_i, $article_i, $line, $lang){
       return '
            <article class="card card-custom card-corporate">
              <div class="card-header" role="tab">
                <div class="card-title">
                  <a class="collapsed" id="accordion'. $tabList_i .'-card-head-title'. $article_i .'" data-toggle="collapse" data-parent="#accordion'. $tabList_i .'" href="#accordion'.$tabList_i.'-card-body-content'.$article_i.'" aria-controls="accordion'.$tabList_i.'-card-body-content'.$article_i.'" aria-expanded="false" role="button">
                    <span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="'.$line["image"].'" alt="" width="122" height="122"/></span></span>
                      <span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">'.$line["time"].'</span>
                        <span class="schedule-classic-title heading-4">'.$line["title"].'</span>
                        <span class="schedule-classic-author">'.($lang=="en"?"by":"par").' <span class="schedule-classic-author-name">'.$line["speaker"].'</span> -  '.$line["speakerTitle"].', '.$line["etablissement"].'</span></span>
                      </span></span>
                    </span>
                  </a></div>
              </div>
              <div id="accordion'.$tabList_i.'-card-body-content'.$article_i.'" aria-labelledby="accordion'. $tabList_i .'-card-head-title'. $article_i .'" data-parent="#accordion'.$tabList_i.'" role="tabpanel">
                <div class="card-body">
                  '.($line["description"]?$line["description"]:'').($line["link"]?'<a href="'.$line["link"].'" target="new"><svg class="svg-icon-md svg-icon-primary" role="img">
                    <use xlink:href="images/svg/sprite.svg#lightbulb"></use>
                  </svg></a>':'').'
                </div>
              </div>
            </article>';
    }

    function blockSession ($tabList_i, $article_i, $line, $lang){
       return '
            <article class="card card-custom card-corporate">
              <div class="card-header" role="tab">
                <div class="card-title">
                  <a class="collapsed" id="accordion'. $tabList_i .'-card-head-title'. $article_i .'" data-toggle="collapse" data-parent="#accordion'. $tabList_i .'" href="#accordion'.$tabList_i.'-card-body-content'.$article_i.'" aria-controls="accordion'.$tabList_i.'-card-body-content'.$article_i.'" aria-expanded="false" role="button">
                    <span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img">'.$line["svg"].'</span></span>
                      <span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">'.$line["time"].'</span>
                        <span class="schedule-classic-title heading-4">'.$line["title"].'</span>
                      </span></span>
                    </span>
                  </a></div>
              </div>
              <div id="accordion'.$tabList_i.'-card-body-content'.$article_i.'" aria-labelledby="accordion'. $tabList_i .'-card-head-title'. $article_i .'" data-parent="#accordion'.$tabList_i.'" role="tabpanel">
                <div class="card-body unit-spacing-xxs">
                  '.$line["description"].'
                </div>
              </div>
            </article>';
    }

    function blockBreak ($tabList, $article_i, $line, $lang){
        echo '
            <div class="schedule-classic schedule-classic-simple">
              <div class="schedule-classic-content">
                <div class="schedule-classic-img">
                  <svg class="svg-icon-md svg-icon-primary" role="img">
                    <use xlink:href="images/svg/sprite.svg#clock"></use>
                  </svg>
                </div><span class="schedule-classic-time">'.$line["time"].'</span><span class="schedule-classic-title heading-4">Enjoy the coffee break</span>
              </div>
            </div>';
    }

    function blockLunch ($tabList, $article_i, $line){
        echo '
            <div class="schedule-classic schedule-classic-simple">
              <div class="schedule-classic-content">
                <div class="schedule-classic-img">
                  <svg class="svg-icon-md svg-icon-primary" role="img">
                    <use xlink:href="images/svg/sprite.svg#clock"></use>
                  </svg>
                </div><span class="schedule-classic-time">'.$line["time"].'</span><span class="schedule-classic-title heading-4">LUNCH</span>
              </div>
            </div>';
    }

?>

<section class="section section-lg bg-default text-center">
  <div class="container">
    <h6>Event Schedule plan</h6>
    <h3><?php if($lang== 'fr') echo "Organisation des journées"; else echo "Days Organization";?></h3>
    <div class="block-lg block-center">
    <?php
        for($i=0;$i<sizeof($schedule);$i++){
          echo '<div class="card-group-custom card-group-corporate" id="accordion'.$i.'" role="tablist" aria-multiselectable="false">';  
          $i=0;
          foreach($schedule as $k1 => $journee){
              $i++;
              $j = 0;
              foreach($journee as $k2 => $tuto){
                  $j++;
                  if($tuto["type"] == "break")
                    echo blockBreak ($i, $j, $tuto, $lang);
                  else if($tuto["type"] == "lunch")
                    echo blockLunch ($i, $j, $tuto, $lang);
                  else if($tuto["type"] == "session")
                    echo blockSession ($i, $j, $tuto, $lang);
                  else
                    echo blockSpeaker ($i, $j, $tuto, $lang);
            }
          }
          echo '</div>';
        }
    ?>
    </div>
  </div>
</section>
