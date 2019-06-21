<?php

include("../includes/db.php");

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
        $singer_id = $row['   '];
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
