<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="header">
      <div class="topright">
        <!-- <h1 class="font-size:8vw;"><b><strong>About me</b></strong> </h1> -->

      </div>
      <div class="topleft">
      <img src="<?= Yii::$app->request->baseUrl ?>/images/felo.jpg" alt="test pic" height="100px" width="100px">

        
      </div>
    </div>
        <div class="content">
          <p>I am a millenial computer sciencist, a holder of second class upper division from Meru University. I love computing
            since its a great career field and a nice outlet for my creativity. 
            I spend most of my time coding, surfing the web, 
            listening to reggae music and most recently electronic music.
             At this point you must be thinking, “Wow! What a nerd!” </p>
          <p>I beg to differ. I am not a nerd. Well, not in the sense of being opinionated and politically acute. 
            I do enjoy doing a couple of other things that don't involve Data structures, 
            vscode and staring at my terminal for a couple of hours. 
            These things are; 
              <ol>
                  <li><em>Attending events;</em> my favorite being music events such as; <ul><li>Koroga festival</li><li>Esagasaga night</li></ul></li><br>
                  <li><em>Eating;</em> and to be specific, I particularly enjoy having tender chapati's with any good stew you may think of.
                     I'd even like to think of myself as a chapati connoisseur. Here are a few hang joints I'd recommend you check out;<ul><li>Pitstop Langata Road</li><li>Lazurus Inn</li><li>Mama Rocks</li></ul></li><br>
                
                  <li><em>Reading;</em> It's sad that we the human race have to live for 90 or so years!Damn there is a lot to read and learn.
                     I wish I was able to do this more often. But when I can, I am always reaching for financial literacy and investment genres</li><br>
                  <li><em>Photography:</em> thank God for the great camera quality our phones now come with. It is because of such great technology that I am able to enjoy photography. I love taking photos of sunsets, clouds and food (like the typical millenial that I am!)</li><br>
                  <li><em>Blogging and vlogging;</em> whenever I have spare time and want to share my thoughts with the world, I do so on my <b><em><a href="">blog</a></em></b> and <b><em><a href="https://www.youtube.com/channel/UC7Daovo5kA_JvgEqJXSs_QA?view_as=subscriber">Youtube</a></em></b> channel. </li><br>
                  <li><em>Sleeping;</em> they say sleep is for the weak but I honestly enjoy sleeping. Most especially afternoon naps! & morning bed lags.</li><br>
                  <li><em>Netflix and chill;</em> everyone loves to enjoy a good movie or series once in a while and I am no exception. Let me put you onto one really good series - Chicago pd. Thank me later!</li><br>   
              </ol>
             To get to know more about my educational background and my work experience, have a look at my <b><em><a href= "resume.html">résumé.</a></em></b>
          </p>
      </div>
      </div>
    </div>
</div>
