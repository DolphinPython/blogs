<?php

/**
 * The template for displaying category archives.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    a {
        color: #000;
        text-decoration: none !important;
    }

    .container {
    width: 83.7%;
    margin-left: 8.3%;
    display: flex;
    }

    .post-excerpt {
        overflow: hidden;
        position: relative;
/*         height: 62px; */
        font-family: 'Red Hat Display' !important;
        font-weight: 400 !important;
/*         line-height: 30px !important; */
/*         margin-bottom: 10px !important; */
/*         margin-top: 10px; */
        font-size: 18px;
    }

  .page-numbers {
    font-weight: 400;
    font-size: 12px;
  }

    .heading-trending {
        padding: 20px 0 50px 0;
        font-weight: 800;
        font-size: 32px !important;

    }
    .divider-container {
        padding: 0 110px 0 125px;
    }

    .heading1 {
        font-size: 24px;
        line-height: 28px;
        font-weight: 800;
        font-family: "Roboto-Black" !important;
        margin-bottom: 4px;
        font-weight: 800;
    }

    .heading {
        font-size: 24px;
        line-height: 51px;
        font-weight: 800;
        font-family: "Roboto-Black" !important;
        margin-bottom: 10px;
        font-weight: 800;
    }

    .heading2 {
    font-size: 48px;
    line-height: 51px;
    font-weight: 700;
    font-family: Roboto-Black !important;
    margin: 15px 0px 10px 0px;
    }

    .author {
        display: flex;
        gap: 15px;
        font-size: 14px;
        margin-top: 10px;
    margin-bottom: -10px;
    align-items: center;
    }

    .name {
        font-size: 16px;
        letter-spacing: 2px !important;
        font-family: "Roboto", sans-serif;
        line-height: 1.2;
        font-weight: 600;
    }

    .name1 {
        font-size: 16px;
        letter-spacing: 1px;
        font-family: "Roboto", sans-serif;
        line-height: 1.2;
        letter-spacing: 2px !important;
        font-weight: 400;
    }
    .date1 {
        font-size: 16px;
        letter-spacing: 1px;
        font-family: "Roboto", sans-serif;
        line-height: 1.2;
        letter-spacing: 2px !important;
        font-weight: 400;
        margin-left:12px;
    }
.video-js {
      width: 100%;
      height: 100%;
   }

   #my-video-player {

      width: 100%;
      height: 100%;
      object-fit: cover;
   }
    .left-side {
        width: 75%;
        /* width: vw; */
        /* padding: 20px; */
        /* padding: 15px; */
        /*padding: 15px 15px 15px 0px;*/
        padding: 15px 15px 15px 0px;
    }
    .right-side {
        width: 25%;
        /* width: 30vw; */
        /* padding: 15px; */
        padding: 15px 0px 15px 5px;
    }

    .left-side1 {
        width: 100%;
        padding: 0px;
    }

    .trending {
/*         width: 285px; */
        margin: 0px 0px 10px 10px;
        padding: 20px;
        border: 1px solid black;
        border-top: 8px solid black;
    }


    .trending .heading {
        font-size: 30px;
        line-height: 1.1;
        font-weight: 800;
        font-family: PlayfairDisplay-Bold !important;
    }

    .trending .line .smallheading a {
        font-size: 12px !important;
        font-weight: 700 !important;
        line-height: .8;
        padding: 12px 0;
        color: #000;
    }

  .smallheading{
    font-size: 12px !important;
    font-family: 'Red Hat Display', sans-serif !important;
    height: 20px;
    color: #767676;
    padding-right: 10px;
    margin: 15px 0px 0px 0px !important;
    text-transform: capitalize;
    font-weight: 400;
    line-height:0px !important;
  }

    .smallheading1{
    font-size: 15px ! important;
    line-height: 1.2;
    padding: 5px 0;
    font-family: 'Red Hat Display' !important;
    font-weight:400;
  }


    .trending .line a {
        font-size: 16px !important;
        line-height: 1.1;
        font-weight: 700;
        font-family: PlayfairDisplay-Bold !important;
        color: #000;
    }

    /* .trending  {
    border-top: 1px dotted #000;
    padding: 5px 0;
    position: relative;
    font-size: 15px;
    line-height: 20px;
} */
    .trending .line {
        border-top: 1px dotted #000;
        padding: 5px 0;
        position: relative;
        font-size: 15px;
        line-height: 20px;
    }

    .card-image {
        width: 100%;
        /* height: 160px; */
        /* width: 277.5px; */
        height: 156.09px;
    }

    .card {
        width: 100%;


    }
    .card-content{
        min-height: 35% !important;
        border-bottom: 1px dotted grey;
        margin-bottom: 20px;
    margin-top: 20px;
    }
  .contentimgsize{
    min-height: 30% !important;
    border-bottom: 1px dotted grey;
    margin-bottom: 20px;
    margin-top: 65px;
  }

    .card-title {
        font-size: 18px;
        font-family: "Roboto-Bold";
        font-weight: 700;
        overflow: hidden;
        padding-right: 5px;
        word-spacing: 0px;
        line-height: 20px;
    }
    .card-title1 {
        font-size: 18px;
        font-family: "Roboto-Bold";
        font-weight: normal !important;
        overflow: hidden;
        /* height: 108px; */
        padding-right: 5px;
        word-spacing: 0px;
        line-height: 20px;
/*         margin: 20px 0px; */
    }

    .card-date {
/* 		height: 30px !important; */
    font-size: 12px;
    font-family: 'Red Hat Display', sans-serif !important;
    overflow: hidden;
    height: 20px;
    color: #767676;
    padding-right: 10px;
    margin: 10px 0px 0px 0px;
    /* border-bottom: 1px dotted #111; */
    text-transform: capitalize;
    font-weight: 400;
    }

    .card-0 {
        display: flex;
        gap: 20px;
        margin: 10px 0px 30px 0px;
    }

    .card-image-0 {
        width: 50%;
    }

    .card-content-0 {
        width: 50%;
    }

    .card-date-0 {
        font-size: 14px;
        font-family: 'Red Hat Display', sans-serif !important;
        overflow: hidden;
        height: 20px;
        color: #212529;
        padding-right: 10px;
        margin: 0px 0px 16px 0px;
        /* border-bottom: 1px dotted #111; */
        text-transform: capitalize;
    font-weight:400;
    }

    .card-date-2 {
        font-size: 14px;
        font-family: 'Red Hat Display', sans-serif !important;
        overflow: hidden;
/*         height: 30px; */
        color: #212529;
        padding-right: 10px;
/*         margin: 0px 0px 10px 0px; */
        text-transform: capitalize;
    font-weight:400;

    }

    .card-title-0 {
        font-size: 32px;
        font-family: "Roboto-Black" !important;
        font-weight: 900;
        font-style: normal;
        overflow: hidden;
        height: max-content;
        padding-right: 5px;
        word-spacing: 0px;
        line-height: 35px !important;
        margin: 0px 0px;
    }

    .card-post p {
        /* overflow: hidden; */
        height: 70px;
        margin: 10px 0px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Number of lines to show */
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        width: 94%;
        font-weight: 400;
        /* width: 450px; */
        /* line-height: 22px; */
        font-family: 'Red Hat Display', sans-serif !important;

        border-top: 1px dotted #000;
        border-bottom: 1px dotted #000;
        padding: 5px 0;
        /* position: relative; */
        font-size: 15px;
        line-height: 20px;
    }

    .divider {

        padding: 0 142px 0 120px;
        bottom: 1px;
        height: 1px;

        text-align: center;

        margin: 0px 0 50px 0;
        width: 100%;
        height: 10px;
        border-bottom: 1px dotted #000;
        border-top: 1px dotted #000;

    }

    .card-button a {

        display: inline-block;
        border: 1px solid #888;
        padding: 7px 12px;
        box-shadow: 0 0 0;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 18px;
        letter-spacing: 0;
        background: 0 0;
        color: #111;
        border-color: #888;
        border-radius: 0;
        margin-bottom: 30px;

    }

    .card-button a:hover {
        background: #e1624b;
        color: #fff;
        border-color: #e1624b;
    }

    .grid-1 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 30px;
        row-gap: 30px;
    }

    .page-numbers {
        border: 1px solid grey;
        padding: 4px 10px;



    }

    .page-numbers:hover {
        background: grey;
        color: white;

    }


    @media (max-width:900px) {

        .card-image-0 img {
            height: 150px !important;
        }
        .container {
            padding: 0 0px 0 63px;
        }

        .left-side {
            width: 67%;
        }

        .trending {
            width: 180px;

        }

        .card-date-2 {
            font-size: 12px;
            height: 14px;

        }

        .card-title-0 {
            font-size: 16px;
            line-height: 18px !important;

        }

        .card-post p {
            height: 49px;
            -webkit-line-clamp: 2;
            font-size: 14px;
            line-height: 20px;
        }

        .trending .line a {
            font-size: 15px !important;
            line-height: 1.2;

        }

        .grid-1 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);

        }

        .card-image {
            width: 100%;
            height: 124.09px;
        }

        .card-title {
            font-size: 16px;
height: max-content;
            /* height: 108px; */
            padding-right: 5px;
            word-spacing: 0px;
            line-height: 22px;
            margin: 20px 0px;
        }
        .card-date {

margin: -18px 0px 16px 0px;

}
    }




    @media (max-width:449px) {
        .left-side {
            width: 100%;
        }

        .container {
            padding: 0 0px 0 10px;
            display: flex;
            flex-direction: column;
        }


        .card-date-2 {
            font-size: 12px;
            height: 18px;
            padding-right: 10px;
            margin: 0px 0px 10px 0px;
        }

        .card-title-0 {
            font-size: 13px;
            padding-right: 5px;
            word-spacing: 0px;
            line-height: 13px !important;
            margin: 0px 0px;
        }

        .card-date-0 {
            font-size: 14px;
            font-family: 'Red Hat Display', sans-serif !important;
            overflow: hidden;
            height: 20px;
            color: grey;
            padding-right: 10px;
            margin: 0px 0px 0px 0px;
            padding-top:12px;
      font-weight:400;
        }

        .trending {
            width: 290px;
            margin: 20px;
            padding: 20px;
        }

        .card-image {
            width: 100%;
            height: 75.09px;
        }


    .card-title {
      font-size: 15px;
      height: 80px;
      padding-right: 5px;
      word-spacing: 0px;
      line-height: 16px;
      margin: 20px 0px;
    }

        .card-image-0 img {
            height: 150px !important;
        }

    .heading2 {
      font-size: 26px;
      line-height: 30px;
    }

    }


    .flex-container {
  display: flex;
  flex-wrap: nowrap;

  text-align: center;
}

.flex-item-left {
  padding: 0px;
  flex: 70%;
}

.flex-item-right {
  border:solid;
  padding: 10px;
  flex: 30%;
}

.flex-item-subleft {
  padding: 10px 10px 10px 0px;
  flex:25%;
  text-align:left;
}

.flex-item-subright {

  padding: 10px;
  flex:75%;
  text-align:left;
}

/* Responsive layout - makes a one column-layout instead of a two-column layout */
@media (max-width: 800px) {
  .flex-item-right, .flex-item-left {
    flex: 100%;
  }
}

.playlatestbtn {
  border:1px solid black;
  background-color: white;
  color: black;
  padding: 5px 15px;
  font-size: 13px;
  cursor: pointer;
  font-weight: 100 !important;
  font-family: 'Roboto-Bold';
  width:25%;
}

.allvideosbtn {
  font-family: 'Red Hat Display' !important;
}

/* Green */
.success {
  border-color: #04AA6D;
  color: green;
}

.success:hover {
  background-color: #04AA6D;
  color: white;
}

/* Blue */
.info {
  border-color: #2196F3;
  color: dodgerblue;
}

.info:hover {
  background: #2196F3;
  color: white;
}

/* Orange */
.warning {
  border-color: #ff9800;
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}

/* Red */
.danger {
  border-color: #f44336;
  color: red;
}

.danger:hover {
  background: #f44336;
  color: white;
}

/* Gray */
.default {
  border-color: #e7e7e7;
  color: black;
}

.default:hover {
  background: #e7e7e7;
}
.line2
{
    border:solid; 
  line-height:2px; 
  border-style: dotted;
}


  .videocatetitle{
    font-size: 32px;
      margin: 20px 0px;
  }
  .author .name {
    letter-spacing: 0px !important;
    }
  .author .name1{
    letter-spacing: 0px !important;
    }
  .post-excerpt>p{
    font-size: 18px;
    font-family: 'Red Hat Display', sans-serif !important;
    color: #212529;
    margin: 10px 0px;
    font-weight: 400;
    line-height: 30px;
  }
  #breadcrumbs{
    font-weight: 400;
    letter-spacing: 0px !important;
    line-height: 1.2;
    font-size: 16px;
    font-family: 'Red Hat Display' !important;
  }

  .singlevideosec{
    width:98% !important;
  }






/* 	video section */
  .allvideosec{
    width:24%;
/* 		padding:0px 15px; */
/* 		margin-bottom: 20px; */
  }
  .videocateimgframesec>iframe{
    width: 100%;
    height: auto;
  }

  .imgthumbnailsize{
    width:100%;
    max-height:150px;
  }
  .relatedposttitle{
    font-size: 18px;
    font-family: "Roboto-Bold";
    font-weight: 700;
    overflow: hidden;
    padding-right: 5px;
    word-spacing: 0px;
    line-height: 20px;
    padding-top:10px;
  }

  .videocatepg{
    display:flex;
    flex-wrap: wrap;
    gap:16px;
  }





/* Mobile section start */
  @media screen and (max-width: 481px) {
    .container {
      width: 100%;
      margin-left: 0%;
    }

    .imgthumbnailsize{
      max-height:90px;
    }
    /* text category page */
    .card-image-0 img {
      height: 100px !important;
    }
    .card-date-2 {
      height: 0px;
      margin: 0px;
    }
    .card-title-0 {
      line-height: 15px !important;
    }
    .card-date-0 {
      padding-top: 0px;
    }

    .card-content {
      min-height: 0% !important;
      margin-bottom: 0px;
    }
    .card-title {
      height: 80px;
      margin: 30px 0px 5px 0px;
    }
    .card-date {
      margin: 0px;
    }
    .right-side-normal{
      width:95%;	
    }
    .right-side-normal .trending{
      width:100%;
      margin:0px;	
    }


    .relatedposttitle{
      font-size:15px;
      padding-top:20px;
    }
    /* 	video Category page	*/
    .flex-item-subleft {
      padding: 5px 10px 10px 0px;
      flex: 35%;
    }
    .flex-item-subright {
      flex: 65%;
      padding: 0px;
    }
    .smallheading1 {
      font-size: 12px ! important;
      padding: 5px 0;
    }
    .playlatestbtn {
      padding: 0px 10px;
      font-size: 13px;
      width: 70%;
    }
    .flex-item-left .smallheading {
      padding: 8px 0px 20px 00px;
      margin-top: -25px !important;
    }
    .right-side-single-video-cate{
      width:97%;
    }
    .right-side-single-video-cate .trending {
      width: 100%;
      margin: 0px 0px 0px -5px;
      padding: 20px;
    }

    /* 	Video category Page	 */
    .right-side-vieo-cate{
      width:100%;
    }
    .right-side-vieo-cate .trending {
      width:96%;
      margin:0px 0px 0px 5px;
    }


    /* 		 */
    .allvideosec{
      width: 100%;
      padding: 0px 5px;
    }
    .videocatepg {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
    }



    .page-numbers {
      padding: 4px 12px;
    }
  }
/*  Mobile section end	 */
/*  Tablet section start	 */
  @media screen and (min-device-width: 767px) and (max-device-width:1000px) {
    .container {
      width: 100%;
      margin-left: 0%;
      padding: 0 0px 0 70px;
    }
    .right-side-single-video-cate {
      width: 35%;
    }
    .left-side {
      width: 57%;
    }

    /* text category page */
    .right-side-normal{
      width:33%;	
    }    
    .right-side-normal .trending {
      width: 100%;
    }
    .card-date {
      margin: 0px;
    }
    .card-title {
      height: auto !important;
      margin: -35px 0px 0px 0px !important;
    }
    .card-image-0 img {
      height: 100px !important;
    }
    .card-date-2 {
      height: 0px;
      margin: 0px;
    }
    .card-title-0 {
      line-height: 15px !important;
    }
    .card-date-0 {
      padding-top: 0px;
    }

    .card-content {
      min-height: 0% !important;
      margin-bottom: 0px;
    }
    .card-title {
      height: 80px;
      margin: 20px 0px 5px 0px;
    }

    /* 	video Category page	*/
    .flex-item-subleft {
      padding: 5px 10px 10px 0px;
      flex: 35%;
    }
    .flex-item-subright {
      flex: 65%;
      padding: 0px;
    }
    .smallheading1 {
      font-size: 12px ! important;
      padding: 5px 0;
    }
    .playlatestbtn {
      padding: 0px 10px;
      font-size: 13px;
      width: 70%;
    }
    .flex-item-left .smallheading {
      padding: 8px 0px 12px 00px;
      margin-top: -30px;
    }
    .right-side-single-video-cate{
      width:35%;
    }
    .right-side-single-video-cate .trending {
      width: 100%;
      margin: 0px 0px 0px -5px;
      padding: 20px;
    }

    /* 	Video category Page	 */
    .right-side-vieo-cate{
      width:100%;
    }
    .right-side-vieo-cate .trending {
      width:96%;
      margin:0px 0px 0px 5px;
    }


    /* 		 */
    .allvideosec{
      width: 100%;
      padding: 0px 5px;
    }
    .videocatepg {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
    }
  }
/*  Tablet section end	 */

.post-excerpt>br:not(:last-child), .post-excerpt>ul>br, .post-excerpt>ul>li>br, .post-excerpt>ul>li>ul>br{
    display: none;
}

.avatar1
{
    border-radius: 50%;
    height:35px;
    width:35px;
    padding:5px;
}		

</style>








<script>
        document.addEventListener("DOMContentLoaded", function() {
            const paragraphs = document.querySelectorAll('.post-excerpt p');
            paragraphs.forEach(paragraph => {
                let previousElement = paragraph.previousElementSibling;
                let nextElement = paragraph.nextElementSibling;

                // Show the <br> tag before the <p> tag if it exists
                while (previousElement && previousElement.tagName === 'BR') {
                    previousElement.classList.add('show');
                    break;
                }

                // Show the <br> tag after the <p> tag if it exists
                while (nextElement && nextElement.tagName === 'BR') {
                    nextElement.classList.add('show');
                    break;
                }
            });
        });
</script>


























<?php 
 $website_url=get_site_url();
 ?>
<div class="container">

    <div class="left-side">
        <div class="grid-0">

            <?php 
             $admin_directory1 = get_stylesheet_directory_uri()."/";
            // Get the current category
            $category = get_queried_object();
//echo "cccccccccccc========".$category->term_id;
            // Query posts in the current category
            $args = array(
                'category__in' => array($category->term_id), // Get posts from the current category
                'posts_per_page' => 1, // Display only 1 post

            );

            $c1=$category->term_id;
            $admin_directory1 = get_stylesheet_directory_uri()."/";
            $post_id = get_the_id();
            $featured = get_post_field('featured1', $post_id);

            //echo $args."featured". $featured;

            // get post type1
            $post_type1 = get_post_field('post_type1', $post_id);
            // get post type1

            // echo $post_id;
            //echo $c1;
            // check the sub category is related to video or not
            $video_subcategory = false;
            $result = $wpdb->get_results ( "SELECT * FROM wp_term_taxonomy where parent=6 and taxonomy='category'");  
            foreach ( $result as $print1 )   
            {
                if($print1->term_id==$c1) $video_subcategory = true;
            }
            //echo $video_subcategory;
            // check the sub category is related to video or not

            $query = new WP_Query($args);



            // Check if there are posts
            if ($query->have_posts()) :
                $query->the_post();



            ?>


                <?php if($c1==6 or $post_type1=="video") // parent video page
                { 
                    //echo "ppppppppppppppppp";
                    ?>
                     <div class="row" style="display:none;">
                    <!-- Regular post content -->
                    <?php 
                   //echo "c1=========".$c1;
                        $post_id = get_the_id();
                        //echo $post_id;
            $image_file = get_post_field('image_file', $post_id);
            //echo $image_file;
                        ?>
                         <div class="col-lg-12">
                            <a href="<?php the_permalink(); ?>">
                                <?php //the_post_thumbnail('large'); 
                                //echo  $image_file;
                                ?>
                                <img width="100%" 
                                src="<?php echo get_site_url()."/wp-content/uploads/".$image_file; ?>">
                            </a>
                        </div>



                    <div class="col-lg-12">
                        <div class="card-date-2">
                            <?php
                            $url = $_SERVER['REQUEST_URI']; // Get the URL
                            $segments = explode('/', $url); // Split the URL by "/"
                            $categories = $segments[3];
                            echo $categories;
                            ?>
                        </div>



                        <div class="card-title-0">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <br>
                        <div class="card-date-0">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="card-post">
                            <?php the_excerpt(); ?>
                        </div>
                    </div> 



                </div>
                    <?php
                }
                else
                {
                    ?>
                     <div class="card-0">
                    <!-- Regular post content -->


                    <?php if (has_post_thumbnail()) : ?>

                        <div class="card-image-0">
                          <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); 
                                //echo  $image_file;
                                ?>
              </a>
                        </div>
                    <?php endif; ?>




                    <div class="card-content-0">
                        <div class="card-date-2">
                            <?php
                            $url = $_SERVER['REQUEST_URI']; // Get the URL
                            $segments = explode('/', $url); // Split the URL by "/"
                            $categories = $segments[3];
//                             echo $categories;
              echo str_replace("-"," ",$categories);
                            ?>
                        </div>



                        <div class="card-title-0">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>

                        <div class="card-date-0">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="card-post">
                            <?php the_excerpt(); ?>
                        </div>
                    </div> 



                </div>
                    <?php 
                }




            else :
                // If no posts found
            ?>
                <p>No posts found in this category.</p>
            <?php
            endif;

            // Restore original post data
            wp_reset_postdata();
            ?>
        </div>



<?php 

            if($c1!=6 && !$video_subcategory) // normal category
            {
// 				echo "sec-a";
//                 echo $c1;
?>


        <div class="grid-1">
            <?php
            // Get the current category

            $category = get_queried_object();

            $posts_per_page = 10;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'category__in' => array($category->term_id),
                'posts_per_page' => $posts_per_page,
                'paged' => $paged
            );


            $query = new WP_Query($args);


            // Check if there are posts
            if ($query->have_posts()) :
                $post_counter = 0; // Initialize post counter
                while ($query->have_posts()) : $query->the_post();
                    $post_counter++; // Increment post counter

                    // Skip the first post
                    if ($post_counter == 1) {
                        continue;
                    }
            ?>





                        <div class="card" style="border:none !important;">
                        <!-- Regular post content -->
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>

            <div class="card-content">
                            <div class="card-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>

                            <div class="card-date">
                                <?php echo get_the_date(); ?>
                            </div>
                        </div>
                        </div>
                        <?php endif; ?>








                <?php
                endwhile;

                ?>

        </div>
    <?php
                // Pagination links
                echo paginate_links(array(
                    'total' => $query->max_num_pages
                ));
                // Restore original post data
                wp_reset_postdata();
            else :
                // If no posts found
    ?>
        <p>No posts found in this category.</p>
    <?php


        endif;
        }else if($video_subcategory){


// 			echo "sec0";

      // for sub category // category/videos/focus-videos/   
              //echo "aaaaaaaaaaaaa";

    ?>
                <div>
                <?php 




 $category = get_queried_object();
 $category = $category->term_id;

 $args = array(
    'category__in' => array($category->term_id),
    'posts_per_page' => $posts_per_page,
    'paged' => $paged
);

//echo "aaaaaaaaaaaa".$category;
 //print_r($category);
 $post_type = get_post_field('post_type1', $post_id);
//echo $category_id;


    $query = "SELECT * FROM wp_posts join wp_term_relationships on wp_posts.ID=wp_term_relationships.object_id join wp_term_taxonomy on 
    wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id 

    where wp_posts.post_status='publish' and wp_term_taxonomy.parent=6 and wp_term_taxonomy.term_id=$category
    order by wp_posts.post_date desc limit 1 ";


//echo $query."<br>";
    $print2 = $wpdb->get_row($query);
    if($print2!="")
    {
   //print_r($print2);

   //if(isempty($print2))
   //{
   //echo count($print2);
  // }
//echo $print2->video_file."aaaaaaaaaaa";
//echo $print2->ID."aaaaaaaaaaa";
    //echo $print2->video_file."ssss";
    if($print2->video_file!="")
    {


//echo "ppppppppppppppp";
 ?>

 <div><video
 id='my-video-player'
 class='video-js'

 controls
 preload='auto'
 poster='<?php echo get_site_url()."/wp-content/uploads/".$print2->image_file; ?>'

 width="630"
 height="450"
 data-setup='{}'
 > 
 <source src='<?php echo get_site_url()."/wp-content/uploads/".$print2->video_file;

 // echo $print->guid;

 ?>' type='video/mp4' />
 <source src='MY_VIDEO.webm' type='video/webm' />
 </video></div>
 <?php }
 else{
 ?>

 <iframe class="singlevideosec" width="879" height="500" src="https://www.youtube.com/embed/<?php echo $print2->youtube; ?>"
 title="<?php echo $print2->post_title; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


<?php 
   } 
  // get latest video of subcategory
/*
    // bread
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    // bread
*/
  // title, author and date
?>
  <a href="<?php echo get_permalink($print2->ID); ?>">				
  <h1 class="heading2"><?php echo $print2->post_title; //the_title(); ?></h1>
    </a>

<?php
    /*if(get_the_excerpt()!="")
        { ?>
        <div class="post-excerpt">
            <?php echo get_the_excerpt(); ?>
        </div>
        <?php }*/ 
?>

        <div class="post-excerpt">
            <?php //echo get_the_content(); 

            //echo apply_filters('the_content', $print2->post_content);



         //$content = str_replace("\n", "<br>", htmlentities($print2->post_content,ENT_QUOTES));

         //echo apply_filters('the_content', $content);

         $content = str_replace("\n", "<br>", $print2->post_content);

         echo apply_filters('the_content', stripslashes($content));

         $authors=$print2->post_author;
        $author_u =  get_avatar_url( $authors, array( 'size' => 80 ) );

            ?>
        </div>

        <div class="author">
            <p class="name">
                <?php 
                /*
          // Get the author ID of the current post
          $author_id = get_post_field('post_author', $post_id);

          // Get the display name of the author
          $author_name = get_the_author_meta('display_name', $author_id);
          //$author_name = get_the_author_meta('display_name', 1);
          // Display the author name
          echo  $author_name;*/
                ?>



<a href="<?php echo get_author_posts_url($authors); ?>">  
        <?php 
          //the_author_posts_link();
               // echo     the_author_meta( 'basic_user_avatar' , $author_id );               

                      ?>
<img src="<?php echo $author_u; //the_author_meta( 'avatar' , $authors ); ?> " class="avatar1" alt="<?php echo the_author_meta( 'display_name' , $authors ); ?>" />
<?php the_author_meta( 'display_name' , $authors ); ?> 

<?php //echo get_the_author_link(); 


?>
</a>  
    </p>
<p class="name1"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 
<?php echo get_the_date(); ?></p>



        </div>


    </div>
  </div








        <?php

                }

        }
        else // for parent video category
        {

// 			echo "sec11";
            //echo $c1;
            // select all sub category related to video

        //echo "aaaaaaaaaaaaaaaaaaaaaaa";
          $result = $wpdb->get_results ( "SELECT *
          FROM wp_term_taxonomy where parent=6 and taxonomy='category' order by description asc");
        $sl=1;
        ?>
        <div class="flex-container">  
        <div class="flex-item-left">
        <?php     
//             foreach ( $result as $print1 )   {
      foreach (array_slice($result, 18) as $print1) {
                //echo $print1->term_id."<br>";

            // select latest post from sub category
            $query = "SELECT * FROM wp_posts join wp_term_relationships on wp_posts.ID=wp_term_relationships.object_id join wp_term_taxonomy on 
            wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id 

            where wp_posts.post_status='publish' and wp_term_taxonomy.parent=6 and wp_term_taxonomy.term_id=$print1->term_id
            order by wp_posts.post_date desc limit 1 ";


//echo $query."<br>";
            $print2 = $wpdb->get_row($query);


            ?>



        <div class="flex-container">
            <div class="flex-item-subleft">
                <a href="<?php 
                if($print2->ID!="") {
                echo get_permalink($print2->ID); } else{ echo get_category_link($print1->term_id); } ?>">


                <?php $category_images = $print1->description; 

preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $category_images, $image);
$category_images = $image['src'];

                        ?>

<img src="<?php echo $category_images; ?>" width="100%">

                </a>
                <?php //echo $website_url; ?>
            </div>

      <div class="flex-item-subright heading1" style="display: flex;flex-direction: column;justify-content: space-evenly;padding-top:0px;padding-bottom:0px">
        <a href="<?php echo get_category_link($print1->term_id); ?>">
          <?php echo get_cat_name($print1->term_id); ?>
        </a>
<!-- <br> -->
        <div class="smallheading1" style="">
          <a href="<?php echo get_permalink($print2->ID); ?>">
                        <?php //echo $print2->post_title; ?>
                        <?php $category_des = $print1->description; 
                         $content = preg_replace("/<img[^>]+\>/i", "", $category_des); 
                         echo $content;
                        ?>
                    </a>
        </div>
<!--  <br> -->
        <a href="<?php if($print2->ID!="") { echo get_permalink($print2->ID); } else{ echo get_category_link($print1->term_id); } ?>" 

                class="btn btn-default playlatestbtn">
          <i class="fa fa-play" aria-hidden="true" style="color:#e91e63;padding-right:5px"></i> Latest Video
<!-- 					<input type="button" name="b1" id="b1" value="Play Latest Video" class="btn btn-default playlatestbtn"> -->
        </a>
<!--  <input type="button" name="b1" id="b1" value="Subscribe" class="btn btn-default"> -->
            </div>

        </div>

<!--	<div style="border-bottom:1px dotted"></div>	 -->
            <div align="left" class="smallheading">
        <a class="allvideosbtn" href="<?php echo get_category_link($print1->term_id); ?>">ALL VIDEOS </a>
      </div>
<!--             <div class="line2"></div> -->
            <div style="border-bottom:1px dotted;margin-bottom: 2px;"></div>
            <div style="border-bottom:1px dotted;margin-bottom:20px;"></div>

            <?php 
            }
            ?>
            </div>
            </div>
        <?php     
        }

    ?>

</div>



<!--  -->
      <?php
      if($c1!=6 && !$video_subcategory){
      //     echo "Normal";
      ?>
<!--  -->	

    <div class="right-side right-side-normal">
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
    <div class="trending">
            <h2 class="heading">Trending </h2>
        <?php
        $video_category_id = 6; // "video" category Not Showing in Trending Section
        $args = array(
          'posts_per_page' => 4, /* how many post you need to display */
          'offset' => 0,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post', /* your post type name */
          'post_status' => 'publish',
          'category__not_in' => array($video_category_id)
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            $categories = get_the_category();
            if (!empty($categories)) {
              $first_category = $categories[0];
            ?>
              <div class="line">
                <div class="smallheading"><?php echo esc_html($first_category->name); ?></div>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </div>
            <?php
            }
          endwhile;

        else :
          echo wpautop('Sorry, no posts were found');

        endif;

        wp_reset_postdata();
        ?>
    </div>
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
      </div>

<!--  -->
      <?php
      }else if($video_subcategory){
      //     echo "Video Single category";
      ?>
<!--  -->

</div>
    <div class="right-side right-side-vieo-cate">
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
    <div class="trending">
            <h2 class="heading">Trending </h2>
        <?php
          $video_category_id = 6; // "video" category ID

          $args = array(
            'posts_per_page' => 4, // Number of posts to display
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post', // Post type
            'post_status' => 'publish',
            'category__in' => array($video_category_id) // Only include posts from the "video" category
          );

          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
              // Fetch categories of the current post
              $categories = get_the_category();
              if (!empty($categories)) {
                // Get the first category
                $first_category = $categories[0]->name;
              }
          ?>
              <div class="line">
                <div class="smallheading"><?php echo esc_html($first_category); ?></div>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </div>
          <?php
            endwhile;
          else :
            echo wpautop('Sorry, no posts were found');
          endif;

          wp_reset_postdata();
        ?>
    </div>
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
      </div>

<!--  -->
      <?php
      }else{
      //     echo "Video";
      ?>
<!--  -->

    <div class="right-side right-side-single-video-cate">
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
    <div class="trending">
            <h2 class="heading">Trending </h2>
        <?php
          $video_category_id = 6; // "video" category ID

          $args = array(
            'posts_per_page' => 4, // Number of posts to display
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post', // Post type
            'post_status' => 'publish',
            'category__in' => array($video_category_id) // Only include posts from the "video" category
          );

          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
              // Fetch categories of the current post
              $categories = get_the_category();
              if (!empty($categories)) {
                // Get the first category
                $first_category = $categories[0]->name;
              }
          ?>
              <div class="line">
                <div class="smallheading"><?php echo esc_html($first_category); ?></div>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </div>
          <?php
            endwhile;
          else :
            echo wpautop('Sorry, no posts were found');
          endif;

          wp_reset_postdata();
        ?>
    </div>
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
      </div>


<!--  -->
      <?php
      }
      ?>
<!--  -->







</div>


<!-- line -->
<div class="container">
    <div class="col-md-12" style="border-top: 1px dotted;width: 100%;border-bottom: 1px dotted;height: 5px;"> &ensp; </div>
  </div>
<!-- line -->
 <br>



<?php 
if($video_subcategory) // for sub category // category/videos/focus-videos/
{
    //echo "aaaaaaaaaaaaaaaa";
    ?>

<!--
  <div class="divider-container"></div>
-->



<div class="container">
    <div class="left-side1">

<!-- 		<h2 class="heading-trending">Related- Videos</h2> -->

    <?php  


    $query = "SELECT * FROM wp_posts join wp_term_relationships on wp_posts.ID=wp_term_relationships.object_id join wp_term_taxonomy on 
    wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id 

    where wp_posts.ID!='$post_id' and wp_posts.post_status='publish' and wp_term_taxonomy.parent=6 and 
    wp_term_taxonomy.term_id=$category
    order by wp_posts.post_date desc";
    //echo $query;
    $result = $wpdb->get_results($query);
    ?>

<div class="row videocatepg">
            <?php 
            foreach ( $result as $print )   {  
                //echo "sdsadsad";  
            $image_file = get_post_field('image_file', $print->ID);
            $youtube = get_post_field('youtube', $print->ID);
            $post_url = get_permalink($print->ID);
            ?>
           <!--post-->
        <div class="col-md-4 allvideosec">
      <div class="col-md-12 allvideosecthumb">
        <a href="<?php echo $post_url; ?>" class="videocateimgframesec">
        <?php //echo get_site_url()."/wp-content/uploads/".$image_file; ?>
      <?php if($image_file!="")
        {
          ?>
          <img class="lazyload imgthumbnailsize" data-src="<?php echo get_site_url()."/wp-content/uploads/".$image_file; ?>" src="<?php echo get_site_url()."/wp-content/uploads/".$image_file; ?>">
      <?php 
        }else{
      ?>

        <iframe width="150" height="100" src="https://www.youtube.com/embed/<?php echo  $youtube; ?>" 
          title="" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
      <?php 
        } 
      ?>
        </a>
      </div>

      <div class="col-md-12 allvideosectitle">
        <a href="<?php echo $post_url; ?>">  
        <div class="post-excerpt">
          <h4 class="relatedposttitle">
          <?php
            echo $print->post_title; 
          ?>
          </h4>
                    <p class="smallheading">
                <?php //echo get_the_date($print->ID)
                $date_format = get_option( 'date_format' );
                echo get_the_date( $date_format, $print->ID );

               // echo '<p>'. get_the_category( $print->ID )[0]->name .'</p>';
                ?> 
            </p>
        </div>
        </a>
<!--
        <div class="card-title1">
        <?php 
/*
          $excerpt = $print->post_excerpt;

          $excerpt = substr($excerpt, 0, 80);
          $result = substr($excerpt, 0, strrpos($excerpt, ' '));

          if($excerpt!=""){
            echo $result;
          }else{
            $excerpt = $print->post_content;
            $excerpt = substr($excerpt, 0, 80);
            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
            echo $result;
          }
          //$content = get_the_content( $print->ID );
          //echo $content;
*/
        ?>
        </div>
-->
      </div>

    </div>

<!-- <br> -->
        <!--post-->  

        <?php } ?>		
</div>

    </div>



<!--
    <div class="right-side">
    </div>
-->

  </div>


 <?php } ?> 




<?php
get_footer();
<?php

/**
 * The template for displaying category archives.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    a {
        color: #000;
        text-decoration: none !important;
    }

    .container {
    width: 83.7%;
    margin-left: 8.3%;
    display: flex;
    }

    .post-excerpt {
        overflow: hidden;
        position: relative;
/*         height: 62px; */
        font-family: 'Red Hat Display' !important;
        font-weight: 400 !important;
/*         line-height: 30px !important; */
/*         margin-bottom: 10px !important; */
/*         margin-top: 10px; */
        font-size: 18px;
    }

  .page-numbers {
    font-weight: 400;
    font-size: 12px;
  }

    .heading-trending {
        padding: 20px 0 50px 0;
        font-weight: 800;
        font-size: 32px !important;

    }
    .divider-container {
        padding: 0 110px 0 125px;
    }

    .heading1 {
        font-size: 24px;
        line-height: 28px;
        font-weight: 800;
        font-family: "Roboto-Black" !important;
        margin-bottom: 4px;
        font-weight: 800;
    }

    .heading {
        font-size: 24px;
        line-height: 51px;
        font-weight: 800;
        font-family: "Roboto-Black" !important;
        margin-bottom: 10px;
        font-weight: 800;
    }

    .heading2 {
    font-size: 48px;
    line-height: 51px;
    font-weight: 700;
    font-family: Roboto-Black !important;
    margin: 15px 0px 10px 0px;
    }

    .author {
        display: flex;
        gap: 15px;
        font-size: 14px;
        margin-top: 10px;
    margin-bottom: -10px;
    align-items: center;
    }

    .name {
        font-size: 16px;
        letter-spacing: 2px !important;
        font-family: "Roboto", sans-serif;
        line-height: 1.2;
        font-weight: 600;
    }

    .name1 {
        font-size: 16px;
        letter-spacing: 1px;
        font-family: "Roboto", sans-serif;
        line-height: 1.2;
        letter-spacing: 2px !important;
        font-weight: 400;
    }
    .date1 {
        font-size: 16px;
        letter-spacing: 1px;
        font-family: "Roboto", sans-serif;
        line-height: 1.2;
        letter-spacing: 2px !important;
        font-weight: 400;
        margin-left:12px;
    }
.video-js {
      width: 100%;
      height: 100%;
   }

   #my-video-player {

      width: 100%;
      height: 100%;
      object-fit: cover;
   }
    .left-side {
        width: 75%;
        /* width: vw; */
        /* padding: 20px; */
        /* padding: 15px; */
        /*padding: 15px 15px 15px 0px;*/
        padding: 15px 15px 15px 0px;
    }
    .right-side {
        width: 25%;
        /* width: 30vw; */
        /* padding: 15px; */
        padding: 15px 0px 15px 5px;
    }

    .left-side1 {
        width: 100%;
        padding: 0px;
    }

    .trending {
/*         width: 285px; */
        margin: 0px 0px 10px 10px;
        padding: 20px;
        border: 1px solid black;
        border-top: 8px solid black;
    }


    .trending .heading {
        font-size: 30px;
        line-height: 1.1;
        font-weight: 800;
        font-family: PlayfairDisplay-Bold !important;
    }

    .trending .line .smallheading a {
        font-size: 12px !important;
        font-weight: 700 !important;
        line-height: .8;
        padding: 12px 0;
        color: #000;
    }

  .smallheading{
    font-size: 12px !important;
    font-family: 'Red Hat Display', sans-serif !important;
    height: 20px;
    color: #767676;
    padding-right: 10px;
    margin: 15px 0px 0px 0px !important;
    text-transform: capitalize;
    font-weight: 400;
    line-height:0px !important;
  }

    .smallheading1{
    font-size: 15px ! important;
    line-height: 1.2;
    padding: 5px 0;
    font-family: 'Red Hat Display' !important;
    font-weight:400;
  }


    .trending .line a {
        font-size: 16px !important;
        line-height: 1.1;
        font-weight: 700;
        font-family: PlayfairDisplay-Bold !important;
        color: #000;
    }

    /* .trending  {
    border-top: 1px dotted #000;
    padding: 5px 0;
    position: relative;
    font-size: 15px;
    line-height: 20px;
} */
    .trending .line {
        border-top: 1px dotted #000;
        padding: 5px 0;
        position: relative;
        font-size: 15px;
        line-height: 20px;
    }

    .card-image {
        width: 100%;
        /* height: 160px; */
        /* width: 277.5px; */
        height: 156.09px;
    }

    .card {
        width: 100%;


    }
    .card-content{
        min-height: 35% !important;
        border-bottom: 1px dotted grey;
        margin-bottom: 20px;
    margin-top: 20px;
    }
  .contentimgsize{
    min-height: 30% !important;
    border-bottom: 1px dotted grey;
    margin-bottom: 20px;
    margin-top: 65px;
  }

    .card-title {
        font-size: 18px;
        font-family: "Roboto-Bold";
        font-weight: 700;
        overflow: hidden;
        padding-right: 5px;
        word-spacing: 0px;
        line-height: 20px;
    }
    .card-title1 {
        font-size: 18px;
        font-family: "Roboto-Bold";
        font-weight: normal !important;
        overflow: hidden;
        /* height: 108px; */
        padding-right: 5px;
        word-spacing: 0px;
        line-height: 20px;
/*         margin: 20px 0px; */
    }

    .card-date {
/* 		height: 30px !important; */
    font-size: 12px;
    font-family: 'Red Hat Display', sans-serif !important;
    overflow: hidden;
    height: 20px;
    color: #767676;
    padding-right: 10px;
    margin: 10px 0px 0px 0px;
    /* border-bottom: 1px dotted #111; */
    text-transform: capitalize;
    font-weight: 400;
    }

    .card-0 {
        display: flex;
        gap: 20px;
        margin: 10px 0px 30px 0px;
    }

    .card-image-0 {
        width: 50%;
    }

    .card-content-0 {
        width: 50%;
    }

    .card-date-0 {
        font-size: 14px;
        font-family: 'Red Hat Display', sans-serif !important;
        overflow: hidden;
        height: 20px;
        color: #212529;
        padding-right: 10px;
        margin: 0px 0px 16px 0px;
        /* border-bottom: 1px dotted #111; */
        text-transform: capitalize;
    font-weight:400;
    }

    .card-date-2 {
        font-size: 14px;
        font-family: 'Red Hat Display', sans-serif !important;
        overflow: hidden;
/*         height: 30px; */
        color: #212529;
        padding-right: 10px;
/*         margin: 0px 0px 10px 0px; */
        text-transform: capitalize;
    font-weight:400;

    }

    .card-title-0 {
        font-size: 32px;
        font-family: "Roboto-Black" !important;
        font-weight: 900;
        font-style: normal;
        overflow: hidden;
        height: max-content;
        padding-right: 5px;
        word-spacing: 0px;
        line-height: 35px !important;
        margin: 0px 0px;
    }

    .card-post p {
        /* overflow: hidden; */
        height: 70px;
        margin: 10px 0px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Number of lines to show */
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        width: 94%;
        font-weight: 400;
        /* width: 450px; */
        /* line-height: 22px; */
        font-family: 'Red Hat Display', sans-serif !important;

        border-top: 1px dotted #000;
        border-bottom: 1px dotted #000;
        padding: 5px 0;
        /* position: relative; */
        font-size: 15px;
        line-height: 20px;
    }

    .divider {

        padding: 0 142px 0 120px;
        bottom: 1px;
        height: 1px;

        text-align: center;

        margin: 0px 0 50px 0;
        width: 100%;
        height: 10px;
        border-bottom: 1px dotted #000;
        border-top: 1px dotted #000;

    }

    .card-button a {

        display: inline-block;
        border: 1px solid #888;
        padding: 7px 12px;
        box-shadow: 0 0 0;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 18px;
        letter-spacing: 0;
        background: 0 0;
        color: #111;
        border-color: #888;
        border-radius: 0;
        margin-bottom: 30px;

    }

    .card-button a:hover {
        background: #e1624b;
        color: #fff;
        border-color: #e1624b;
    }

    .grid-1 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 30px;
        row-gap: 30px;
    }

    .page-numbers {
        border: 1px solid grey;
        padding: 4px 10px;



    }

    .page-numbers:hover {
        background: grey;
        color: white;

    }


    @media (max-width:900px) {

        .card-image-0 img {
            height: 150px !important;
        }
        .container {
            padding: 0 0px 0 63px;
        }

        .left-side {
            width: 67%;
        }

        .trending {
            width: 180px;

        }

        .card-date-2 {
            font-size: 12px;
            height: 14px;

        }

        .card-title-0 {
            font-size: 16px;
            line-height: 18px !important;

        }

        .card-post p {
            height: 49px;
            -webkit-line-clamp: 2;
            font-size: 14px;
            line-height: 20px;
        }

        .trending .line a {
            font-size: 15px !important;
            line-height: 1.2;

        }

        .grid-1 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);

        }

        .card-image {
            width: 100%;
            height: 124.09px;
        }

        .card-title {
            font-size: 16px;
height: max-content;
            /* height: 108px; */
            padding-right: 5px;
            word-spacing: 0px;
            line-height: 22px;
            margin: 20px 0px;
        }
        .card-date {

margin: -18px 0px 16px 0px;

}
    }




    @media (max-width:449px) {
        .left-side {
            width: 100%;
        }

        .container {
            padding: 0 0px 0 10px;
            display: flex;
            flex-direction: column;
        }


        .card-date-2 {
            font-size: 12px;
            height: 18px;
            padding-right: 10px;
            margin: 0px 0px 10px 0px;
        }

        .card-title-0 {
            font-size: 13px;
            padding-right: 5px;
            word-spacing: 0px;
            line-height: 13px !important;
            margin: 0px 0px;
        }

        .card-date-0 {
            font-size: 14px;
            font-family: 'Red Hat Display', sans-serif !important;
            overflow: hidden;
            height: 20px;
            color: grey;
            padding-right: 10px;
            margin: 0px 0px 0px 0px;
            padding-top:12px;
      font-weight:400;
        }

        .trending {
            width: 290px;
            margin: 20px;
            padding: 20px;
        }

        .card-image {
            width: 100%;
            height: 75.09px;
        }


    .card-title {
      font-size: 15px;
      height: 80px;
      padding-right: 5px;
      word-spacing: 0px;
      line-height: 16px;
      margin: 20px 0px;
    }

        .card-image-0 img {
            height: 150px !important;
        }

    .heading2 {
      font-size: 26px;
      line-height: 30px;
    }

    }


    .flex-container {
  display: flex;
  flex-wrap: nowrap;

  text-align: center;
}

.flex-item-left {
  padding: 0px;
  flex: 70%;
}

.flex-item-right {
  border:solid;
  padding: 10px;
  flex: 30%;
}

.flex-item-subleft {
  padding: 10px 10px 10px 0px;
  flex:25%;
  text-align:left;
}

.flex-item-subright {

  padding: 10px;
  flex:75%;
  text-align:left;
}

/* Responsive layout - makes a one column-layout instead of a two-column layout */
@media (max-width: 800px) {
  .flex-item-right, .flex-item-left {
    flex: 100%;
  }
}

.playlatestbtn {
  border:1px solid black;
  background-color: white;
  color: black;
  padding: 5px 15px;
  font-size: 13px;
  cursor: pointer;
  font-weight: 100 !important;
  font-family: 'Roboto-Bold';
  width:25%;
}

.allvideosbtn {
  font-family: 'Red Hat Display' !important;
}

/* Green */
.success {
  border-color: #04AA6D;
  color: green;
}

.success:hover {
  background-color: #04AA6D;
  color: white;
}

/* Blue */
.info {
  border-color: #2196F3;
  color: dodgerblue;
}

.info:hover {
  background: #2196F3;
  color: white;
}

/* Orange */
.warning {
  border-color: #ff9800;
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}

/* Red */
.danger {
  border-color: #f44336;
  color: red;
}

.danger:hover {
  background: #f44336;
  color: white;
}

/* Gray */
.default {
  border-color: #e7e7e7;
  color: black;
}

.default:hover {
  background: #e7e7e7;
}
.line2
{
    border:solid; 
  line-height:2px; 
  border-style: dotted;
}


  .videocatetitle{
    font-size: 32px;
      margin: 20px 0px;
  }
  .author .name {
    letter-spacing: 0px !important;
    }
  .author .name1{
    letter-spacing: 0px !important;
    }
  .post-excerpt>p{
    font-size: 18px;
    font-family: 'Red Hat Display', sans-serif !important;
    color: #212529;
    margin: 10px 0px;
    font-weight: 400;
    line-height: 30px;
  }
  #breadcrumbs{
    font-weight: 400;
    letter-spacing: 0px !important;
    line-height: 1.2;
    font-size: 16px;
    font-family: 'Red Hat Display' !important;
  }

  .singlevideosec{
    width:98% !important;
  }






/* 	video section */
  .allvideosec{
    width:24%;
/* 		padding:0px 15px; */
/* 		margin-bottom: 20px; */
  }
  .videocateimgframesec>iframe{
    width: 100%;
    height: auto;
  }

  .imgthumbnailsize{
    width:100%;
    max-height:150px;
  }
  .relatedposttitle{
    font-size: 18px;
    font-family: "Roboto-Bold";
    font-weight: 700;
    overflow: hidden;
    padding-right: 5px;
    word-spacing: 0px;
    line-height: 20px;
    padding-top:10px;
  }

  .videocatepg{
    display:flex;
    flex-wrap: wrap;
    gap:16px;
  }





/* Mobile section start */
  @media screen and (max-width: 481px) {
    .container {
      width: 100%;
      margin-left: 0%;
    }

    .imgthumbnailsize{
      max-height:90px;
    }
    /* text category page */
    .card-image-0 img {
      height: 100px !important;
    }
    .card-date-2 {
      height: 0px;
      margin: 0px;
    }
    .card-title-0 {
      line-height: 15px !important;
    }
    .card-date-0 {
      padding-top: 0px;
    }

    .card-content {
      min-height: 0% !important;
      margin-bottom: 0px;
    }
    .card-title {
      height: 80px;
      margin: 30px 0px 5px 0px;
    }
    .card-date {
      margin: 0px;
    }
    .right-side-normal{
      width:95%;	
    }
    .right-side-normal .trending{
      width:100%;
      margin:0px;	
    }


    .relatedposttitle{
      font-size:15px;
      padding-top:20px;
    }
    /* 	video Category page	*/
    .flex-item-subleft {
      padding: 5px 10px 10px 0px;
      flex: 35%;
    }
    .flex-item-subright {
      flex: 65%;
      padding: 0px;
    }
    .smallheading1 {
      font-size: 12px ! important;
      padding: 5px 0;
    }
    .playlatestbtn {
      padding: 0px 10px;
      font-size: 13px;
      width: 70%;
    }
    .flex-item-left .smallheading {
      padding: 8px 0px 20px 00px;
      margin-top: -25px !important;
    }
    .right-side-single-video-cate{
      width:97%;
    }
    .right-side-single-video-cate .trending {
      width: 100%;
      margin: 0px 0px 0px -5px;
      padding: 20px;
    }

    /* 	Video category Page	 */
    .right-side-vieo-cate{
      width:100%;
    }
    .right-side-vieo-cate .trending {
      width:96%;
      margin:0px 0px 0px 5px;
    }


    /* 		 */
    .allvideosec{
      width: 100%;
      padding: 0px 5px;
    }
    .videocatepg {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
    }



    .page-numbers {
      padding: 4px 12px;
    }
  }
/*  Mobile section end	 */
/*  Tablet section start	 */
  @media screen and (min-device-width: 767px) and (max-device-width:1000px) {
    .container {
      width: 100%;
      margin-left: 0%;
      padding: 0 0px 0 70px;
    }
    .right-side-single-video-cate {
      width: 35%;
    }
    .left-side {
      width: 57%;
    }

    /* text category page */
    .right-side-normal{
      width:33%;	
    }    
    .right-side-normal .trending {
      width: 100%;
    }
    .card-date {
      margin: 0px;
    }
    .card-title {
      height: auto !important;
      margin: -35px 0px 0px 0px !important;
    }
    .card-image-0 img {
      height: 100px !important;
    }
    .card-date-2 {
      height: 0px;
      margin: 0px;
    }
    .card-title-0 {
      line-height: 15px !important;
    }
    .card-date-0 {
      padding-top: 0px;
    }

    .card-content {
      min-height: 0% !important;
      margin-bottom: 0px;
    }
    .card-title {
      height: 80px;
      margin: 20px 0px 5px 0px;
    }

    /* 	video Category page	*/
    .flex-item-subleft {
      padding: 5px 10px 10px 0px;
      flex: 35%;
    }
    .flex-item-subright {
      flex: 65%;
      padding: 0px;
    }
    .smallheading1 {
      font-size: 12px ! important;
      padding: 5px 0;
    }
    .playlatestbtn {
      padding: 0px 10px;
      font-size: 13px;
      width: 70%;
    }
    .flex-item-left .smallheading {
      padding: 8px 0px 12px 00px;
      margin-top: -30px;
    }
    .right-side-single-video-cate{
      width:35%;
    }
    .right-side-single-video-cate .trending {
      width: 100%;
      margin: 0px 0px 0px -5px;
      padding: 20px;
    }

    /* 	Video category Page	 */
    .right-side-vieo-cate{
      width:100%;
    }
    .right-side-vieo-cate .trending {
      width:96%;
      margin:0px 0px 0px 5px;
    }


    /* 		 */
    .allvideosec{
      width: 100%;
      padding: 0px 5px;
    }
    .videocatepg {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
    }
  }
/*  Tablet section end	 */

.post-excerpt>br:not(:last-child), .post-excerpt>ul>br, .post-excerpt>ul>li>br, .post-excerpt>ul>li>ul>br{
    display: none;
}

.avatar1
{
    border-radius: 50%;
    height:35px;
    width:35px;
    padding:5px;
}		

</style>








<script>
        document.addEventListener("DOMContentLoaded", function() {
            const paragraphs = document.querySelectorAll('.post-excerpt p');
            paragraphs.forEach(paragraph => {
                let previousElement = paragraph.previousElementSibling;
                let nextElement = paragraph.nextElementSibling;

                // Show the <br> tag before the <p> tag if it exists
                while (previousElement && previousElement.tagName === 'BR') {
                    previousElement.classList.add('show');
                    break;
                }

                // Show the <br> tag after the <p> tag if it exists
                while (nextElement && nextElement.tagName === 'BR') {
                    nextElement.classList.add('show');
                    break;
                }
            });
        });
</script>


























<?php 
 $website_url=get_site_url();
 ?>
<div class="container">

    <div class="left-side">
        <div class="grid-0">

            <?php 
             $admin_directory1 = get_stylesheet_directory_uri()."/";
            // Get the current category
            $category = get_queried_object();
//echo "cccccccccccc========".$category->term_id;
            // Query posts in the current category
            $args = array(
                'category__in' => array($category->term_id), // Get posts from the current category
                'posts_per_page' => 1, // Display only 1 post

            );

            $c1=$category->term_id;
            $admin_directory1 = get_stylesheet_directory_uri()."/";
            $post_id = get_the_id();
            $featured = get_post_field('featured1', $post_id);

            //echo $args."featured". $featured;

            // get post type1
            $post_type1 = get_post_field('post_type1', $post_id);
            // get post type1

            // echo $post_id;
            //echo $c1;
            // check the sub category is related to video or not
            $video_subcategory = false;
            $result = $wpdb->get_results ( "SELECT * FROM wp_term_taxonomy where parent=6 and taxonomy='category'");  
            foreach ( $result as $print1 )   
            {
                if($print1->term_id==$c1) $video_subcategory = true;
            }
            //echo $video_subcategory;
            // check the sub category is related to video or not

            $query = new WP_Query($args);



            // Check if there are posts
            if ($query->have_posts()) :
                $query->the_post();



            ?>


                <?php if($c1==6 or $post_type1=="video") // parent video page
                { 
                    //echo "ppppppppppppppppp";
                    ?>
                     <div class="row" style="display:none;">
                    <!-- Regular post content -->
                    <?php 
                   //echo "c1=========".$c1;
                        $post_id = get_the_id();
                        //echo $post_id;
            $image_file = get_post_field('image_file', $post_id);
            //echo $image_file;
                        ?>
                         <div class="col-lg-12">
                            <a href="<?php the_permalink(); ?>">
                                <?php //the_post_thumbnail('large'); 
                                //echo  $image_file;
                                ?>
                                <img width="100%" 
                                src="<?php echo get_site_url()."/wp-content/uploads/".$image_file; ?>">
                            </a>
                        </div>



                    <div class="col-lg-12">
                        <div class="card-date-2">
                            <?php
                            $url = $_SERVER['REQUEST_URI']; // Get the URL
                            $segments = explode('/', $url); // Split the URL by "/"
                            $categories = $segments[3];
                            echo $categories;
                            ?>
                        </div>



                        <div class="card-title-0">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <br>
                        <div class="card-date-0">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="card-post">
                            <?php the_excerpt(); ?>
                        </div>
                    </div> 



                </div>
                    <?php
                }
                else
                {
                    ?>
                     <div class="card-0">
                    <!-- Regular post content -->


                    <?php if (has_post_thumbnail()) : ?>

                        <div class="card-image-0">
                          <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); 
                                //echo  $image_file;
                                ?>
              </a>
                        </div>
                    <?php endif; ?>




                    <div class="card-content-0">
                        <div class="card-date-2">
                            <?php
                            $url = $_SERVER['REQUEST_URI']; // Get the URL
                            $segments = explode('/', $url); // Split the URL by "/"
                            $categories = $segments[3];
//                             echo $categories;
              echo str_replace("-"," ",$categories);
                            ?>
                        </div>



                        <div class="card-title-0">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>

                        <div class="card-date-0">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="card-post">
                            <?php the_excerpt(); ?>
                        </div>
                    </div> 



                </div>
                    <?php 
                }




            else :
                // If no posts found
            ?>
                <p>No posts found in this category.</p>
            <?php
            endif;

            // Restore original post data
            wp_reset_postdata();
            ?>
        </div>



<?php 

            if($c1!=6 && !$video_subcategory) // normal category
            {
// 				echo "sec-a";
//                 echo $c1;
?>


        <div class="grid-1">
            <?php
            // Get the current category

            $category = get_queried_object();

            $posts_per_page = 10;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'category__in' => array($category->term_id),
                'posts_per_page' => $posts_per_page,
                'paged' => $paged
            );


            $query = new WP_Query($args);


            // Check if there are posts
            if ($query->have_posts()) :
                $post_counter = 0; // Initialize post counter
                while ($query->have_posts()) : $query->the_post();
                    $post_counter++; // Increment post counter

                    // Skip the first post
                    if ($post_counter == 1) {
                        continue;
                    }
            ?>





                        <div class="card" style="border:none !important;">
                        <!-- Regular post content -->
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>

            <div class="card-content">
                            <div class="card-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>

                            <div class="card-date">
                                <?php echo get_the_date(); ?>
                            </div>
                        </div>
                        </div>
                        <?php endif; ?>








                <?php
                endwhile;

                ?>

        </div>
    <?php
                // Pagination links
                echo paginate_links(array(
                    'total' => $query->max_num_pages
                ));
                // Restore original post data
                wp_reset_postdata();
            else :
                // If no posts found
    ?>
        <p>No posts found in this category.</p>
    <?php


        endif;
        }else if($video_subcategory){


// 			echo "sec0";

      // for sub category // category/videos/focus-videos/   
              //echo "aaaaaaaaaaaaa";

    ?>
                <div>
                <?php 




 $category = get_queried_object();
 $category = $category->term_id;

 $args = array(
    'category__in' => array($category->term_id),
    'posts_per_page' => $posts_per_page,
    'paged' => $paged
);

//echo "aaaaaaaaaaaa".$category;
 //print_r($category);
 $post_type = get_post_field('post_type1', $post_id);
//echo $category_id;


    $query = "SELECT * FROM wp_posts join wp_term_relationships on wp_posts.ID=wp_term_relationships.object_id join wp_term_taxonomy on 
    wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id 

    where wp_posts.post_status='publish' and wp_term_taxonomy.parent=6 and wp_term_taxonomy.term_id=$category
    order by wp_posts.post_date desc limit 1 ";


//echo $query."<br>";
    $print2 = $wpdb->get_row($query);
    if($print2!="")
    {
   //print_r($print2);

   //if(isempty($print2))
   //{
   //echo count($print2);
  // }
//echo $print2->video_file."aaaaaaaaaaa";
//echo $print2->ID."aaaaaaaaaaa";
    //echo $print2->video_file."ssss";
    if($print2->video_file!="")
    {


//echo "ppppppppppppppp";
 ?>

 <div><video
 id='my-video-player'
 class='video-js'

 controls
 preload='auto'
 poster='<?php echo get_site_url()."/wp-content/uploads/".$print2->image_file; ?>'

 width="630"
 height="450"
 data-setup='{}'
 > 
 <source src='<?php echo get_site_url()."/wp-content/uploads/".$print2->video_file;

 // echo $print->guid;

 ?>' type='video/mp4' />
 <source src='MY_VIDEO.webm' type='video/webm' />
 </video></div>
 <?php }
 else{
 ?>

 <iframe class="singlevideosec" width="879" height="500" src="https://www.youtube.com/embed/<?php echo $print2->youtube; ?>"
 title="<?php echo $print2->post_title; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


<?php 
   } 
  // get latest video of subcategory
/*
    // bread
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    // bread
*/
  // title, author and date
?>
  <a href="<?php echo get_permalink($print2->ID); ?>">				
  <h1 class="heading2"><?php echo $print2->post_title; //the_title(); ?></h1>
    </a>

<?php
    /*if(get_the_excerpt()!="")
        { ?>
        <div class="post-excerpt">
            <?php echo get_the_excerpt(); ?>
        </div>
        <?php }*/ 
?>

        <div class="post-excerpt">
            <?php //echo get_the_content(); 

            //echo apply_filters('the_content', $print2->post_content);



         //$content = str_replace("\n", "<br>", htmlentities($print2->post_content,ENT_QUOTES));

         //echo apply_filters('the_content', $content);

         $content = str_replace("\n", "<br>", $print2->post_content);

         echo apply_filters('the_content', stripslashes($content));

         $authors=$print2->post_author;
        $author_u =  get_avatar_url( $authors, array( 'size' => 80 ) );

            ?>
        </div>

        <div class="author">
            <p class="name">
                <?php 
                /*
          // Get the author ID of the current post
          $author_id = get_post_field('post_author', $post_id);

          // Get the display name of the author
          $author_name = get_the_author_meta('display_name', $author_id);
          //$author_name = get_the_author_meta('display_name', 1);
          // Display the author name
          echo  $author_name;*/
                ?>



<a href="<?php echo get_author_posts_url($authors); ?>">  
        <?php 
          //the_author_posts_link();
               // echo     the_author_meta( 'basic_user_avatar' , $author_id );               

                      ?>
<img src="<?php echo $author_u; //the_author_meta( 'avatar' , $authors ); ?> " class="avatar1" alt="<?php echo the_author_meta( 'display_name' , $authors ); ?>" />
<?php the_author_meta( 'display_name' , $authors ); ?> 

<?php //echo get_the_author_link(); 


?>
</a>  
    </p>
<p class="name1"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 
<?php echo get_the_date(); ?></p>



        </div>


    </div>
  </div








        <?php

                }

        }
        else // for parent video category
        {

// 			echo "sec11";
            //echo $c1;
            // select all sub category related to video

        //echo "aaaaaaaaaaaaaaaaaaaaaaa";
          $result = $wpdb->get_results ( "SELECT *
          FROM wp_term_taxonomy where parent=6 and taxonomy='category' order by description asc");
        $sl=1;
        ?>
        <div class="flex-container">  
        <div class="flex-item-left">
        <?php     
//             foreach ( $result as $print1 )   {
      foreach (array_slice($result, 18) as $print1) {
                //echo $print1->term_id."<br>";

            // select latest post from sub category
            $query = "SELECT * FROM wp_posts join wp_term_relationships on wp_posts.ID=wp_term_relationships.object_id join wp_term_taxonomy on 
            wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id 

            where wp_posts.post_status='publish' and wp_term_taxonomy.parent=6 and wp_term_taxonomy.term_id=$print1->term_id
            order by wp_posts.post_date desc limit 1 ";


//echo $query."<br>";
            $print2 = $wpdb->get_row($query);


            ?>



        <div class="flex-container">
            <div class="flex-item-subleft">
                <a href="<?php 
                if($print2->ID!="") {
                echo get_permalink($print2->ID); } else{ echo get_category_link($print1->term_id); } ?>">


                <?php $category_images = $print1->description; 

preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $category_images, $image);
$category_images = $image['src'];

                        ?>

<img src="<?php echo $category_images; ?>" width="100%">

                </a>
                <?php //echo $website_url; ?>
            </div>

      <div class="flex-item-subright heading1" style="display: flex;flex-direction: column;justify-content: space-evenly;padding-top:0px;padding-bottom:0px">
        <a href="<?php echo get_category_link($print1->term_id); ?>">
          <?php echo get_cat_name($print1->term_id); ?>
        </a>
<!-- <br> -->
        <div class="smallheading1" style="">
          <a href="<?php echo get_permalink($print2->ID); ?>">
                        <?php //echo $print2->post_title; ?>
                        <?php $category_des = $print1->description; 
                         $content = preg_replace("/<img[^>]+\>/i", "", $category_des); 
                         echo $content;
                        ?>
                    </a>
        </div>
<!--  <br> -->
        <a href="<?php if($print2->ID!="") { echo get_permalink($print2->ID); } else{ echo get_category_link($print1->term_id); } ?>" 

                class="btn btn-default playlatestbtn">
          <i class="fa fa-play" aria-hidden="true" style="color:#e91e63;padding-right:5px"></i> Latest Video
<!-- 					<input type="button" name="b1" id="b1" value="Play Latest Video" class="btn btn-default playlatestbtn"> -->
        </a>
<!--  <input type="button" name="b1" id="b1" value="Subscribe" class="btn btn-default"> -->
            </div>

        </div>

<!--	<div style="border-bottom:1px dotted"></div>	 -->
            <div align="left" class="smallheading">
        <a class="allvideosbtn" href="<?php echo get_category_link($print1->term_id); ?>">ALL VIDEOS </a>
      </div>
<!--             <div class="line2"></div> -->
            <div style="border-bottom:1px dotted;margin-bottom: 2px;"></div>
            <div style="border-bottom:1px dotted;margin-bottom:20px;"></div>

            <?php 
            }
            ?>
            </div>
            </div>
        <?php     
        }

    ?>

</div>



<!--  -->
      <?php
      if($c1!=6 && !$video_subcategory){
      //     echo "Normal";
      ?>
<!--  -->	

    <div class="right-side right-side-normal">
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
    <div class="trending">
            <h2 class="heading">Trending </h2>
        <?php
        $video_category_id = 6; // "video" category Not Showing in Trending Section
        $args = array(
          'posts_per_page' => 4, /* how many post you need to display */
          'offset' => 0,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post', /* your post type name */
          'post_status' => 'publish',
          'category__not_in' => array($video_category_id)
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            $categories = get_the_category();
            if (!empty($categories)) {
              $first_category = $categories[0];
            ?>
              <div class="line">
                <div class="smallheading"><?php echo esc_html($first_category->name); ?></div>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </div>
            <?php
            }
          endwhile;

        else :
          echo wpautop('Sorry, no posts were found');

        endif;

        wp_reset_postdata();
        ?>
    </div>
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
      </div>

<!--  -->
      <?php
      }else if($video_subcategory){
      //     echo "Video Single category";
      ?>
<!--  -->

</div>
    <div class="right-side right-side-vieo-cate">
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
    <div class="trending">
            <h2 class="heading">Trending </h2>
        <?php
          $video_category_id = 6; // "video" category ID

          $args = array(
            'posts_per_page' => 4, // Number of posts to display
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post', // Post type
            'post_status' => 'publish',
            'category__in' => array($video_category_id) // Only include posts from the "video" category
          );

          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
              // Fetch categories of the current post
              $categories = get_the_category();
              if (!empty($categories)) {
                // Get the first category
                $first_category = $categories[0]->name;
              }
          ?>
              <div class="line">
                <div class="smallheading"><?php echo esc_html($first_category); ?></div>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </div>
          <?php
            endwhile;
          else :
            echo wpautop('Sorry, no posts were found');
          endif;

          wp_reset_postdata();
        ?>
    </div>
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
      </div>

<!--  -->
      <?php
      }else{
      //     echo "Video";
      ?>
<!--  -->

    <div class="right-side right-side-single-video-cate">
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
    <div class="trending">
            <h2 class="heading">Trending </h2>
        <?php
          $video_category_id = 6; // "video" category ID

          $args = array(
            'posts_per_page' => 4, // Number of posts to display
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post', // Post type
            'post_status' => 'publish',
            'category__in' => array($video_category_id) // Only include posts from the "video" category
          );

          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
              // Fetch categories of the current post
              $categories = get_the_category();
              if (!empty($categories)) {
                // Get the first category
                $first_category = $categories[0]->name;
              }
          ?>
              <div class="line">
                <div class="smallheading"><?php echo esc_html($first_category); ?></div>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </div>
          <?php
            endwhile;
          else :
            echo wpautop('Sorry, no posts were found');
          endif;

          wp_reset_postdata();
        ?>
    </div>
    <!-- 	ads	 -->
    <div class="g-ads">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Sidebar New Ad Unit - 300*250 -->
      <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-6328706921937470"
         data-ad-slot="2827057989"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <!-- 	ads	 -->
      </div>


<!--  -->
      <?php
      }
      ?>
<!--  -->







</div>


<!-- line -->
<div class="container">
    <div class="col-md-12" style="border-top: 1px dotted;width: 100%;border-bottom: 1px dotted;height: 5px;"> &ensp; </div>
  </div>
<!-- line -->
 <br>



<?php 
if($video_subcategory) // for sub category // category/videos/focus-videos/
{
    //echo "aaaaaaaaaaaaaaaa";
    ?>

<!--
  <div class="divider-container"></div>
-->



<div class="container">
    <div class="left-side1">

<!-- 		<h2 class="heading-trending">Related- Videos</h2> -->

    <?php  


    $query = "SELECT * FROM wp_posts join wp_term_relationships on wp_posts.ID=wp_term_relationships.object_id join wp_term_taxonomy on 
    wp_term_taxonomy.term_taxonomy_id=wp_term_relationships.term_taxonomy_id 

    where wp_posts.ID!='$post_id' and wp_posts.post_status='publish' and wp_term_taxonomy.parent=6 and 
    wp_term_taxonomy.term_id=$category
    order by wp_posts.post_date desc";
    //echo $query;
    $result = $wpdb->get_results($query);
    ?>

<div class="row videocatepg">
            <?php 
            foreach ( $result as $print )   {  
                //echo "sdsadsad";  
            $image_file = get_post_field('image_file', $print->ID);
            $youtube = get_post_field('youtube', $print->ID);
            $post_url = get_permalink($print->ID);
            ?>
           <!--post-->
        <div class="col-md-4 allvideosec">
      <div class="col-md-12 allvideosecthumb">
        <a href="<?php echo $post_url; ?>" class="videocateimgframesec">
        <?php //echo get_site_url()."/wp-content/uploads/".$image_file; ?>
      <?php if($image_file!="")
        {
          ?>
          <img class="lazyload imgthumbnailsize" data-src="<?php echo get_site_url()."/wp-content/uploads/".$image_file; ?>" src="<?php echo get_site_url()."/wp-content/uploads/".$image_file; ?>">
      <?php 
        }else{
      ?>

        <iframe width="150" height="100" src="https://www.youtube.com/embed/<?php echo  $youtube; ?>" 
          title="" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
      <?php 
        } 
      ?>
        </a>
      </div>

      <div class="col-md-12 allvideosectitle">
        <a href="<?php echo $post_url; ?>">  
        <div class="post-excerpt">
          <h4 class="relatedposttitle">
          <?php
            echo $print->post_title; 
          ?>
          </h4>
                    <p class="smallheading">
                <?php //echo get_the_date($print->ID)
                $date_format = get_option( 'date_format' );
                echo get_the_date( $date_format, $print->ID );

               // echo '<p>'. get_the_category( $print->ID )[0]->name .'</p>';
                ?> 
            </p>
        </div>
        </a>
<!--
        <div class="card-title1">
        <?php 
/*
          $excerpt = $print->post_excerpt;

          $excerpt = substr($excerpt, 0, 80);
          $result = substr($excerpt, 0, strrpos($excerpt, ' '));

          if($excerpt!=""){
            echo $result;
          }else{
            $excerpt = $print->post_content;
            $excerpt = substr($excerpt, 0, 80);
            $result = substr($excerpt, 0, strrpos($excerpt, ' '));
            echo $result;
          }
          //$content = get_the_content( $print->ID );
          //echo $content;
*/
        ?>
        </div>
-->
      </div>

    </div>

<!-- <br> -->
        <!--post-->  

        <?php } ?>		
</div>

    </div>



<!--
    <div class="right-side">
    </div>
-->

  </div>


 <?php } ?> 




<?php
get_footer();
