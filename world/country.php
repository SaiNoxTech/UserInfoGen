<?php

include ("./header.php");

if(isset($_GET['country_id'])) {
  $country_id = $_GET['country_id'];
  $query = "SELECT * FROM names where country = '".$country_id."' ORDER BY RAND()";
  $run = mysqli_query($link,$query);

  if(mysqli_num_rows($run) > 0) {
    $row = mysqli_fetch_array($run);
        $firstname_id = $row['id'];
        $f_name = $row['first_name'];
        $user_country = $row['country'];
        $gender = $row['gender'];

}else {
    header('location: index.php');
  }

}


$query = "SELECT * FROM surnames WHERE country = '".$user_country."' ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $surname_id = $row['id'];
        $l_name = $row['s_names'];
        $sur_country = $row['country'];

        $query = "SELECT * FROM DOB  ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $Dob_id = $row['id'];
        $dob = $row['dob'];

        $query = "SELECT * FROM address WHERE country = '".$user_country."'  ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $add_id = $row['id'];
        $street = $row['street'];
        $city = $row['city'];
        $state = $row['state'];
        $zip = $row['zip'];

        $query = "SELECT * FROM contact WHERE country = '".$user_country."'  ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $c_id = $row['id'];
        $ph_no = $row['ph_no'];


        $query = "SELECT * FROM email ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $e_id = $row['id'];
        $mail = $row['email_id'];

        $query = "SELECT * FROM usr_physical ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $usr_id = $row['id'];
        $height = $row['height'];
        $weight = $row['weight'];
        $hair_color = $row['hair_color'];

        $query = "SELECT * FROM blood_group ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $id = $row['id'];
        $bgroup = $row['bgroup'];

        $query = "SELECT * FROM zodiac ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $z_id = $row['id'];
        $zodiac = $row['zodiac'];

        $query = "SELECT * FROM civilstatus ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $st_id = $row['id'];
        $status = $row['status'];

        $query = "SELECT * FROM education_status ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $ed_id = $row['id'];
        $ed_status = $row['ed_status'];

        $query = "SELECT * FROM DL  WHERE country = '".$user_country."' ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $dl_id = $row['id'];
        $license = $row['license'];
        $car_no = $row['car_no'];

        $query = "SELECT * FROM credit_card ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $cc_id = $row['id'];
        $type = $row['type'];
        $cc_no = $row['cc_no'];
        $cvv2 = $row['cvv2'];
        $exp_date = $row['exp_date'];

        $query = "SELECT * FROM vehicle ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $v_id = $row['id'];
        $vehicle = $row['vehicle'];

        $query = "SELECT * FROM online_status ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $status_id = $row['id'];
        $online_status = $row['online_status'];

        $query = "SELECT * FROM online_bio ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $bio_id = $row['id'];
        $bio = $row['bio'];

        $query = "SELECT * FROM online_signature ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $signature_id = $row['id'];
        $signature = $row['signature'];

        $query = "SELECT * FROM intrest ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $intrest_id = $row['id'];
        $intrest = $row['intrest'];

        $query = "SELECT * FROM fav_color ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $color_id = $row['id'];
        $color = $row['color'];

        $query = "SELECT * FROM fav_book ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $book_id = $row['id'];
        $book = $row['book'];

        $query = "SELECT * FROM fav_food ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $food_id = $row['id'];
        $food = $row['food'];

        $query = "SELECT * FROM fav_movie ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $movie_id = $row['id'];
        $movie = $row['movie'];

        $query = "SELECT * FROM fav_moviestar ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $ms_id = $row['id'];
        $movie_star = $row['movie_star'];

        $query = "SELECT * FROM fav_music ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $music_id = $row['id'];
        $music = $row['music'];

        $query = "SELECT * FROM fav_singer ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $singer_id = $row['id'];
        $singer = $row['singer'];

        $query = "SELECT * FROM fav_song ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $song_id = $row['id'];
        $song = $row['song'];

        $query = "SELECT * FROM fav_sports ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $sports_id = $row['id'];
        $sports = $row['sports'];

        $query = "SELECT * FROM fav_tv ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $tv_id = $row['id'];
        $tv = $row['tv'];

        $query = "SELECT * FROM security ORDER BY RAND()";
        $run = mysqli_query($link,$query);
        $row = mysqli_fetch_array($run);
        $s_id = $row['id'];
        $question = $row['question'];
        $answer = $row['answer'];

?>
<!-- Revolution Slider -->
<div id="rev_slider_263_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="bubble-morph" data-source="gallery" style="background:transparent;padding:0px;">
  <!-- START REVOLUTION SLIDER 5.4.7.4 fullscreen mode -->
  <div id="rev_slider_263_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.4">
    <ul>
      <li data-index="rs-639" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="../assets/images/resslider/transparent.png" data-bgcolor='#ffffff' style='background:#ffffff' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->
        <div id="rrzm_639" class="rev_row_zone rev_row_zone_middle" style="z-index: 9;">

          <!-- LAYER NR. 16 -->
          <div class="tp-caption  "
			 id="slide-639-layer-2"
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
			 data-y="['middle','middle','middle','middle']" data-voffset="['-426','-426','-426','-426']"
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"

			data-type="row"
			data-columnbreak="2"
			data-responsive_offset="on"
			data-responsive="off"
			data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,75,50,30]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,75,50,30]"

			style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
            <!-- LAYER NR. 17 -->
            <div class="tp-caption  "
			 id="slide-639-layer-3"
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
			 data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"

			data-type="column"
			data-responsive_offset="on"
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="33.33%"
 data-verticalalign="top"
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 10; width: 100%;"> </div>

            <!-- LAYER NR. 18 -->
            <div class="tp-caption  "
			 id="slide-639-layer-23"
			 data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
			 data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"

			data-type="column"
			data-responsive_offset="on"
			data-responsive="off"
			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
 data-columnwidth="66.67%"
 data-verticalalign="top"
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 11; width: 100%;">
              <!-- LAYER NR. 21 -->
              <div class="tp-caption  "
			 id="slide-639-layer-1"
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
						data-fontsize="['46','46','36','30']"
			data-lineheight="['50','50','40','35']"
			data-width="none"
			data-height="none"
			data-whitespace="normal"

			data-type="text"
			data-responsive_offset="off"
			data-responsive="off"
			data-frames='[{"delay":"+190","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 14; white-space: normal; font-size: 45px; line-height: 50px; font-weight: 800; color: #000000; letter-spacing: 0px; display: block;font-family:Poppins;">Fake User Information Generator</div>

              <!-- LAYER NR. 24 -->
              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
			 id="slide-639-layer-13"
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
						data-width="full"
			data-height="['30','30','30','20']"
			data-whitespace="normal"

			data-type="shape"
			data-responsive_offset="on"

			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 17; display: block;"> </div>

              <!-- LAYER NR. 25 -->
              <div class="tp-caption  "
			 id="slide-639-layer-6"
			 data-x="['left','left','left','left']" data-hoffset="['0','10','10','10']"
			 data-y="['top','top','top','top']" data-voffset="['0','10','10','10']"
						data-fontsize="['16','16','16','14']"
			data-lineheight="['30','30','30','22']"
			data-width="['640','480','360','100%']"
			data-height="none"
			data-whitespace="normal"

			data-type="text"
			data-responsive_offset="off"
			data-responsive="off"
			data-frames='[{"delay":"+390","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 18; min-width: 640px; max-width: 640px; white-space: normal; font-size: 16px; line-height: 30px; font-weight: 400; color: rgba(0,0,0,0.75); letter-spacing: 0px; display: inline-block;font-family:Poppins;">We have brought together different utilities used in other fields into one place. To protect your real information from being leaked

Contact</div>

              <!-- LAYER NR. 26 -->
              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
			 id="slide-639-layer-14"
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
						data-width="full"
			data-height="['50','50','50','30']"
			data-whitespace="normal"

			data-type="shape"
			data-responsive_offset="on"

			data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[0,0,0,0]"
			data-marginbottom="[0,0,0,0]"
			data-marginleft="[0,0,0,0]"
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 19; display: block;"> </div>

              <!-- LAYER NR. 27 -->
             <!-- <a class="tp-caption rev-btn "
 href="index-7.html#" target="_blank" id="slide-639-layer-9"
			 data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
			 data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
						data-fontsize="['14','14','13','13']"
			data-lineheight="['60','60','50','40']"
			data-width="['280','280','250','250']"
			data-height="none"
			data-whitespace="normal"

			data-type="button"
			data-actions=''
			data-responsive_offset="off"
			data-responsive="off"
			data-frames='[{"delay":"+790","speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(69,42,255);bg:rgb(255,255,255);"}]'
			data-margintop="[0,0,0,0]"
			data-marginright="[10,10,10,10]"
			data-marginbottom="[10,10,10,10]"
			data-marginleft="[10,10,10,10]"
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 20; min-width: 280px; max-width: 280px; white-space: normal; font-size: 14px; line-height: 60px; font-weight: 700; color: #ffffff; letter-spacing: 2px; display: inline-block;font-family:Open Sans;background-color:rgb(69,42,255);border-color:rgb(69,42,255);border-style:solid;border-width:1px 1px 1px 1px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">To Know More!</a>--> </div>
          </div>
        </div>

        <!-- LAYER NR. 29 -->
        <div class="tp-caption tp-shape tp-shapewrapper tp-bubblemorph "
			 id="slide-639-layer-21"
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
			 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
						data-width="100%"
			data-height="100%"
			data-whitespace="nowrap"

			data-type="shape"
			data-bubblesbg="transparent"
			data-numbubbles="6|6|6|6"
			data-bubblesbufferx="0|0|0|0"
			data-bubblesbuffery="0|0|0|0"
			data-bubblesspeedx="0.25|0.25|0.25|0.25"
			data-bubblesspeedy="1|1|1|1"
			data-bubblesbordercolor="#45ffff|#45ffff|#45ffff|#45ffff"
			data-bubblesbordersize="1|1|1|1"
			data-basealign="slide"
			data-responsive_offset="on"

			data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			data-blendmode="multiply"

			style="z-index: 5;"> </div>

        <!-- LAYER NR. 30 -->
        <div class="tp-caption  tp-no-events tp-shape tp-shapewrapper tp-bubblemorph "
			 id="slide-639-layer-16"
			 data-x="['center','center','center','center']" data-hoffset="['-600','-400','200','100']"
			 data-y="['middle','middle','bottom','bottom']" data-voffset="['150','150','0','0']"
						data-width="['600','400','500','300']"
			data-height="['600','450','300','200']"
			data-whitespace="nowrap"

			data-type="shape"
			data-bubblesbg="{&type&:&linear&,&angle&:&180&,&colors&:[{&r&:69,&g&:42,&b&:255,&a&:&1&,&position&:0,&align&:&top&},{&r&:69,&g&:42,&b&:255,&a&:&1&,&position&:0,&align&:&bottom&},{&r&:69,&g&:255,&b&:255,&a&:&1&,&position&:100,&align&:&bottom&},{&r&:69,&g&:255,&b&:255,&a&:&1&,&position&:100,&align&:&top&}]}"
			data-numbubbles="6|6|inherit|6"
			data-bubblesbufferx="100|50|inherit|20"
			data-bubblesbuffery="100|50|inherit|20"
			data-bubblesspeedx="0.25|0.25|0.25|0.25"
			data-bubblesspeedy="0.25|0.25|0.25|0.25"
			data-basealign="slide"
			data-responsive_offset="off"
			data-responsive="off"
			data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"opacity:0;fb:30px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6;background:linear-gradient(180deg, rgba(69,42,255,1) 0%, rgba(69,255,255,1) 100%);pointer-events:none;"> </div>

        <!-- LAYER NR. 31 -->
        <div class="tp-caption  tp-no-events tp-shape tp-shapewrapper tp-bubblemorph "
			 id="slide-639-layer-10"
			 data-x="['center','center','center','center']" data-hoffset="['-500','-460','-200','-100']"
			 data-y="['middle','middle','bottom','bottom']" data-voffset="['-150','-150','0','0']"
						data-width="['600','400','500','300']"
			data-height="['600','450','300','200']"
			data-whitespace="nowrap"

			data-type="shape"
			data-bubblesbg="{&type&:&linear&,&angle&:&180&,&colors&:[{&r&:255,&g&:251,&b&:0,&a&:&1&,&position&:0,&align&:&top&},{&r&:255,&g&:251,&b&:0,&a&:&1&,&position&:0,&align&:&bottom&},{&r&:0,&g&:255,&b&:230,&a&:&1&,&position&:100,&align&:&bottom&},{&r&:0,&g&:255,&b&:230,&a&:&1&,&position&:100,&align&:&top&}]}"
			data-numbubbles="6|6|inherit|6"
			data-bubblesbufferx="100|50|inherit|20"
			data-bubblesbuffery="100|50|inherit|20"
			data-bubblesspeedx="0.25|0.25|0.25|0.25"
			data-bubblesspeedy="0.25|0.25|0.25|0.25"
			data-basealign="slide"
			data-responsive_offset="off"
			data-responsive="off"
			data-frames='[{"delay":1500,"speed":3000,"frame":"0","from":"opacity:0;fb:30px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			data-blendmode="multiply"

			style="z-index: 7;background:linear-gradient(180deg, rgba(255,251,0,1) 0%, rgba(0,255,230,1) 100%);pointer-events:none;"> </div>

        <!-- LAYER NR. 32 -->
        <div class="tp-caption   tp-resizeme"
			 id="slide-639-layer-24"
			 data-x="['center','center','center','center']" data-hoffset="['-680','-660','0','0']"
			 data-y="['middle','middle','top','top']" data-voffset="['60','60','20','20']"
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"

			data-type="image"
			data-basealign="slide"
			data-responsive_offset="on"

			data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8;"><img src="../assets/images/resslider/iphone.png" alt="" data-ww="['1000px','1000px','400px','400px']" data-hh="['509px','509px','204px','204px']" width="1200" height="611" data-no-retina> </div>
      </li>
    </ul>
    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
  </div>
</div><br><Br>
<!-- End Revolution Slider -->

<section class="no-pad-top">
  <div class="container">
    <div class="row">
    <div class="col-sm-2 col-md-6">
  <h2>User Information</h2>
   <div class="div-liner" style="width: 50%"></div>
 </div>
<form class="form-inline" action="./" method="POST">
  <div class="form-group mb-2">
    <select name="country" class='form-control select-sm'>
                                    <option value=''>Select Countries</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="In">IN(India)</option>
                                    <option value="Us">US(United States)</option>
                                </select>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <select name="sex" class='form-control select-sm'>
                                    <option value=''>Select Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Generate</button>
</form>

</div>
<p></p>
  <p>Following are the fake user info generated by our own data set. You can use this information to stay anonymous on the internet and to not leak your original info.</p>
  <p>Resize the browser window to see the effect.</p>
  <div class="row">
    <div class="col-sm-3 col-md-3">
      <span style="float: center;"><center><img  src=<?php
              											if ($gender == 'F') {
																echo "../assets/images/female.png";
															} else {
																echo "https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png";
															}
													?> width="50%" alt="User Info"></center></span><br><br>
       <span style="text-align: center;"><p><b>Full Name:</b><span style="color:#000;"> <?php echo ucfirst($f_name); ?>&nbsp;<?php echo ucfirst($l_name); ?></span></p></span>
       <center ><span><a  class="button button2" style="color:#fff !important;" value="Refresh Page" onClick="window.location.reload();"><i class="fa fa-refresh" aria-hidden="true"></i>  Refresh</a></span></center><br>
    </div>
    <div class="col-sm-9 col-md-9">
      <table>
            <tr>
              <td>First Name:</td>
              <td><span style="font-weight: bold;"><?php echo ucfirst($f_name); ?></span></td>
            </tr>
            <tr>
              <td>Last Name:</td>
              <td><span style="font-weight: bold;"><?php echo ucfirst($l_name); ?></span></td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td><span style="font-weight: bold;"><?php
              											if ($gender == 'F') {
																echo "Female";
															} else {
																echo "Male";
															}
													?>
				  </span></td>
            </tr>
            <tr>
              <td>Date Of Birth:</td>
              <td><span style="font-weight: bold;"><?php echo $dob; ?></span></td>
            </tr>
            <tr>
              <td>Street:</td>
              <td><span style="font-weight: bold;"><?php echo ucfirst($street); ?></span></td>
            </tr>
            <tr>
              <td>City, State, Zip:</td>
              <td><span style="font-weight: bold;"><?php  $add = ("$city, $state, $zip"); echo ucfirst($add); ?></span></td>
            </tr>
            <tr>
              <td>Mobile:</td>
              <td> <span style="font-weight: bold;"><?php echo $ph_no; ?></span></td>
            </tr>
          </table>

    </div>
  </div><br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-md-6">
        <h3> BASIC INFORMATION</h3>
        <div class="div-liner" style="width: 50%"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12">
            <table>
              <tr>
                <td>Email</td>
                <td><span style="font-weight: bold;"><?php echo "$f_name"?><script> var ranNo = Math.floor(Math.random() * 90 + 10); document.write(ranNo);</script><?php echo "$l_name$mail"; ?></span></td>
              </tr>
              <tr>
                <td>Height</td>
                <td><span style="font-weight: bold;"><?php echo $height; ?></span></td>
              </tr>
              <tr>
                <td>Weight</td>
                <td><span style="font-weight: bold;"><?php echo $weight; ?></span></td>
              </tr>
              <tr>
                <td>Hair Color</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($hair_color); ?></span></td>
              </tr>
              <tr>
                <td>Blood Type</td>
                <td><span style="font-weight: bold;"><?php echo $bgroup; ?></span></td>
              </tr>
              <tr>
                <td>Starsign(Tropical Zodiac)</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($zodiac); ?></span></td>
              </tr>
              <tr>
                <td>Civil Status</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($status); ?></span></td>
              </tr>
              <tr>
                <td>Educational Background</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($ed_status); ?></span></td>
              </tr>
              <tr>
                <td>Passport</td>
                <td><span style="font-weight: bold;">No: <script> var ranNo = Math.floor(100000000 + Math.random() * 900000000); document.write(ranNo);</script></span></td>
              </tr>
              <tr>
                <td>Driver License</td>
                <td><span style="font-weight: bold;"><?php echo $license; ?></span></td>
              </tr>
              <tr>
                <td>Car License Plate</td>
                <td><span style="font-weight: bold;"><?php echo $car_no ?></span></td>
              </tr>
            </table>
      </div>
    </div>

    <br><br>
    <div class="row">
      <div class="col-sm-2 col-md-6">
        <h3> FINANCE</h3>
        <div class="div-liner" style="width: 50%"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12">
            <table>
              <tr>
                <td>Credit Card Type</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($type); ?></span></td>
              </tr>
              <tr>
                <td>Credit Card Number</td>
                <td><span style="font-weight: bold;"><?php echo $cc_no; ?></span></td>
              </tr>
              <tr>
                <td>CVV2</td>
                <td><span style="font-weight: bold;"><?php echo $cvv2; ?></span></td>
              </tr>
              <tr>
                <td>Expires</td>
                <td><span style="font-weight: bold;"><?php echo $exp_date; ?></span></td>
              </tr>
            </table>
      </div>
    </div>

    <br><br>
    <div class="row">
      <div class="col-sm-2 col-md-6">
        <h3>PERSONAL INFORMATION</h3>
        <div class="div-liner" style="width: 50%"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12">
            <table>
              <tr>
                <td>Family Members</td>
                <td><span style="font-weight: bold;"><script>var x = Math.floor((Math.random() * 7) + 2); document.write(x);</script> members</span></td>
              </tr>
              <tr>
                <td>Vehicle</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($vehicle) ?></span></td>
              </tr>
              <tr>
                <td>Online Status</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($online_status); ?></span></td>
              </tr>
              <tr>
                <td>Online Signature</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($bio); ?></span></td>
              </tr><tr>
                <td>Online Biography</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($signature); ?></span></td>
              </tr>
              <tr>
                <td>Interest</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($intrest); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Color</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($color); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Movie</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($movie); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Music</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($music); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Song</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($song); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Book</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($book); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Sports</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($sports); ?></span></td>
              </tr>
              <tr>
                <td>Favorite TV</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($tv); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Movie Star</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($movie_star); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Singer</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($singer); ?></span></td>
              </tr>
              <tr>
                <td>Favorite Food</td>
                <td><span style="font-weight: bold;"><?php echo ucfirst($food); ?></span></td>
              </tr>
              <!--tr>
                <td>Personality</td>
                <td><span style="font-weight: bold;">Egoistic</span></td>
              </tr>
              <tr>
                <td>Personal Style</td>
                <td><span style="font-weight: bold;">No underwear</span></td>
              </tr-->
            </table>
      </div>
    </div>

    <br><Br>
    <div class="row">
      <div class="col-sm-2 col-md-6">
        <h3>ONLINE PROFILE</h3>
        <div class="div-liner" style="width: 50%"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12">
            <table>
              <tr>
                <td>Username</td>
                <td><span style="font-weight: bold;"><?php echo "$f_name"?><?php echo "$l_name"; ?><script> var ranNo = Math.floor(Math.random() * 90 + 10); document.write(ranNo);</script></span></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><span style="font-weight: bold;"><script type="text/javascript">var ID =  '_' + Math.random().toString(36).substr(2, 9); document.write(ID);</script></span></td>
              </tr>
              <tr>
                <td>Password after MD5</td>
                <td><span style="font-weight: bold;"><script type="text/javascript"> var MD5 = function(d){result = M(V(Y(X(d),8*d.length)));return result.toLowerCase()};function M(d){for(var _,m="0123456789ABCDEF",f="",r=0;r<d.length;r++)_=d.charCodeAt(r),f+=m.charAt(_>>>4&15)+m.charAt(15&_);return f}function X(d){for(var _=Array(d.length>>2),m=0;m<_.length;m++)_[m]=0;for(m=0;m<8*d.length;m+=8)_[m>>5]|=(255&d.charCodeAt(m/8))<<m%32;return _}function V(d){for(var _="",m=0;m<32*d.length;m+=8)_+=String.fromCharCode(d[m>>5]>>>m%32&255);return _}function Y(d,_){d[_>>5]|=128<<_%32,d[14+(_+64>>>9<<4)]=_;for(var m=1732584193,f=-271733879,r=-1732584194,i=271733878,n=0;n<d.length;n+=16){var h=m,t=f,g=r,e=i;f=md5_ii(f=md5_ii(f=md5_ii(f=md5_ii(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_hh(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_gg(f=md5_ff(f=md5_ff(f=md5_ff(f=md5_ff(f,r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+0],7,-680876936),f,r,d[n+1],12,-389564586),m,f,d[n+2],17,606105819),i,m,d[n+3],22,-1044525330),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+4],7,-176418897),f,r,d[n+5],12,1200080426),m,f,d[n+6],17,-1473231341),i,m,d[n+7],22,-45705983),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+8],7,1770035416),f,r,d[n+9],12,-1958414417),m,f,d[n+10],17,-42063),i,m,d[n+11],22,-1990404162),r=md5_ff(r,i=md5_ff(i,m=md5_ff(m,f,r,i,d[n+12],7,1804603682),f,r,d[n+13],12,-40341101),m,f,d[n+14],17,-1502002290),i,m,d[n+15],22,1236535329),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+1],5,-165796510),f,r,d[n+6],9,-1069501632),m,f,d[n+11],14,643717713),i,m,d[n+0],20,-373897302),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+5],5,-701558691),f,r,d[n+10],9,38016083),m,f,d[n+15],14,-660478335),i,m,d[n+4],20,-405537848),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+9],5,568446438),f,r,d[n+14],9,-1019803690),m,f,d[n+3],14,-187363961),i,m,d[n+8],20,1163531501),r=md5_gg(r,i=md5_gg(i,m=md5_gg(m,f,r,i,d[n+13],5,-1444681467),f,r,d[n+2],9,-51403784),m,f,d[n+7],14,1735328473),i,m,d[n+12],20,-1926607734),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+5],4,-378558),f,r,d[n+8],11,-2022574463),m,f,d[n+11],16,1839030562),i,m,d[n+14],23,-35309556),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+1],4,-1530992060),f,r,d[n+4],11,1272893353),m,f,d[n+7],16,-155497632),i,m,d[n+10],23,-1094730640),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+13],4,681279174),f,r,d[n+0],11,-358537222),m,f,d[n+3],16,-722521979),i,m,d[n+6],23,76029189),r=md5_hh(r,i=md5_hh(i,m=md5_hh(m,f,r,i,d[n+9],4,-640364487),f,r,d[n+12],11,-421815835),m,f,d[n+15],16,530742520),i,m,d[n+2],23,-995338651),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+0],6,-198630844),f,r,d[n+7],10,1126891415),m,f,d[n+14],15,-1416354905),i,m,d[n+5],21,-57434055),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+12],6,1700485571),f,r,d[n+3],10,-1894986606),m,f,d[n+10],15,-1051523),i,m,d[n+1],21,-2054922799),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+8],6,1873313359),f,r,d[n+15],10,-30611744),m,f,d[n+6],15,-1560198380),i,m,d[n+13],21,1309151649),r=md5_ii(r,i=md5_ii(i,m=md5_ii(m,f,r,i,d[n+4],6,-145523070),f,r,d[n+11],10,-1120210379),m,f,d[n+2],15,718787259),i,m,d[n+9],21,-343485551),m=safe_add(m,h),f=safe_add(f,t),r=safe_add(r,g),i=safe_add(i,e)}return Array(m,f,r,i)}function md5_cmn(d,_,m,f,r,i){return safe_add(bit_rol(safe_add(safe_add(_,d),safe_add(f,i)),r),m)}function md5_ff(d,_,m,f,r,i,n){return md5_cmn(_&m|~_&f,d,_,r,i,n)}function md5_gg(d,_,m,f,r,i,n){return md5_cmn(_&f|m&~f,d,_,r,i,n)}function md5_hh(d,_,m,f,r,i,n){return md5_cmn(_^m^f,d,_,r,i,n)}function md5_ii(d,_,m,f,r,i,n){return md5_cmn(m^(_|~f),d,_,r,i,n)}function safe_add(d,_){var m=(65535&d)+(65535&_);return(d>>16)+(_>>16)+(m>>16)<<16|65535&m}function bit_rol(d,_){return d<<_|d>>>32-_};  var ID =  '_' + Math.random().toString(36).substr(2, 9); var result = MD5(ID);  document.write(result);</script></span></td>
              </tr>
              <tr>
                <td>Fake email</td>
                <td><span style="font-weight: bold;">Comming Soon!</span></td>
              </tr><tr>
                <td>Security Question</td>
                <td><span style="font-weight: bold;"><?php echo $question; ?></span></td>
              </tr>
              <tr>
                <td>Security Answer</td>
                <td><span style="font-weight: bold;"><? echo $answer; ?></span></td>
              </tr>
            </table>
      </div>
    </div>


</div>
</section>


<?php include("./footer.php"); ?>
