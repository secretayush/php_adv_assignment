<!DOCTYPE html>
<html>
<head>
  <title>API assignment</title>
  <style>
    .container{
      
    }
  </style>
</head>
<body>
  <?php

    /**
     * Data to fetch using api
     */
    class Data{
      private $api_url,$json_data,$response_data;
      public $user_data;

      public $info;
      public $image;

      function __construct($api_url){
        $this->api_url = $api_url;
        $this->image = "";
        $this->info = "";

        // Decode JSON data into PHP array
        $this->response_data = json_decode(file_get_contents($this->api_url));

        // All user data exists in 'data' object
        $this->user_data = $this->response_data->data;
      }
      public function get_data(){
        // website
        $this->info .= $this->user_data[15]->attributes->field_secondary_title->value;
        $this->info .= $this->user_data[15]->attributes->field_services->processed;

        // Drupal
        $this->info .= $this->user_data[12]->attributes->field_secondary_title->value;
        $this->info .= $this->user_data[12]->attributes->field_services->processed;

        // Mobile
        $this->info .= $this->user_data[13]->attributes->title;
        $this->info .= $this->user_data[13]->attributes->field_services->processed;
        
        // ecommerse
        $this->info .= $this->user_data[14]->attributes->field_secondary_title->value;
        $this->info .= $this->user_data[14]->attributes->field_services->value;
      }
      public function get_image($image){
        $this->image = $image;
      }

      public function show_data(){
        return $this->info;
      }
      public function show_image(){
        return "<img src='".$this->image."'><br>";
      }
    }
    echo "Innoraft has been successfully delivering web and mobile solutions to esteemed global clientele. Our key solutions include 
    website design and development, Drupal development and 
    maintenance, mobile app design and development, and 
    E-Commerce solutions. The quality-driven processes for all
     these services is our USP and we live by them every single
      day. We love to work with startups, small, medium, and
       large scale enterprises in the same way i.e. as partners.
       <br><br>";
    
    $response = new Data('https://www.innoraft.com/jsonapi/node/services');
    //get data from api
    $response->get_data();
    //show data
    echo $response->show_data();
    

    //Images main
    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/img-3_0.jpg');
    echo $response->show_image();


    $response->get_image('https://www.innoraft.com/sites/default/files/2020-11/online-shopping.png');
    echo $response->show_image();

    

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/drupal%20commerce.jpeg');
    echo $response->show_image();


    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/icon-g8_1.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/icon-g7_1.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/icon-g9_1.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2019-08/imgration-drupal.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/icon-f7_0.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/woo.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-08/1200px-Shopify_logo_2018%20%282%29.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/icon-j1_1.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/icon-c8_0.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com//sites/default/files/2020-07/icon-g3_0.png');
    echo $response->show_image();



    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/img-2.jpg');
    echo $response->show_image();


    $response->get_image('https://www.innoraft.com/sites/default/files/2019-09/headless_drupal.png');
    echo $response->show_image();


    $response->get_image('https://www.innoraft.com/sites/default/files/2020-08/H9IAAYru_400x400.png');
    echo $response->show_image();



    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/icon-g6.png');
    echo $response->show_image();


    $response->get_image('https://www.innoraft.com/sites/default/files/2020-08/H9IAAYru_400x400%20%281%29.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/2020-07/icon-g7_0.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-08/H9IAAYru_400x400%20%282%29.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-07/icon-d1_0.png');
    echo $response->show_image();

    $response->get_image('https://www.innoraft.com/sites/default/files/styles/thumbnail_small/public/2020-07/icon-g4.png');
    echo $response->show_image();

  ?>
  
</body>
</html>
