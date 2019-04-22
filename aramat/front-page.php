<?php get_header();?>

<style>

.youtube-responsive-container {
position:relative;
padding-bottom:56.25%;
padding-top:10px;
height: 0;


}

.youtube-responsive-container iframe, .youtube-responsive-container object, .youtube-responsive-container embed {
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
}

.social{
  padding: 1px 40%;
}

.social i{
  font-size: 20px;
  background-color: black;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  color: white;
  border-radius: 50px;
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<div id="song" style="width:100%; height:100%; background-color:#151515; padding: 50px 15%;">

   <div class="youtube-responsive-container" >
    <iframe  src="https://www.youtube.com/embed/yx2piPUudlE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>

    <div class="Spotify-play-list" style="padding: 20px 0%">
      <iframe src="https://open.spotify.com/embed/artist/37Mn5YK8so1CkMUiurQGcc" width=100% height="280" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>

    <div class="social">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-youtube"></i>
     </div>



</div>

<div id="event" class="container pt-5 pb-5">


          <?php if (have_posts()) :while(have_posts()) : the_post();?>

                    <?php the_content();?>


          <?php endwhile; endif;?>
</div>

<div id="gallery" style="width:100%; height:100%; background-color:#151515;">
<br>
<br>
<?php
$post_id = 25;
$queried_post = get_post($post_id);
?>
<h1 style="text-align: center;"><?php
$title = $queried_post->post_title;
echo $title;
?></h1>
<?php
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>

</div>

<div id="shop" style="width:100%; height:600px; background-color:black;">

  <?php
  $post_id = 21;
  $queried_post = get_post($post_id);
  ?>
  <h1 style="text-align: center;"><?php
  $title = $queried_post->post_title;
  echo $title;
  ?></h1>
  <?php
  $content = $queried_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  echo $content;
  ?>
</div>


<?php get_footer();?>
