<!--Below the other php files such as the database connection footers have been linked to allow the 
full function of the web application-->
<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>
<?php
$cache_file = 'data.json';
if(file_exists($cache_file)){
  $data = json_decode(file_get_contents($cache_file));
}else{
  /*The link below is the source of the API that we hav incorporated into the web application
   This will include all the individual aspects of the API such as the dates of the week and the days of the week */
  $api_url = 'https://content.api.nytimes.com/svc/weather/v2/current-and-seven-day-forecast.json';
  $data = file_get_contents($api_url);
  file_put_contents($cache_file, $data);
  $data = json_decode($data);
}
//Here the weather API will generate the weather forecast for the specific days we are dealing with
$current = $data->results->current[0];
$forecast = $data->results->seven_day_forecast;

?>
<style>
  body{
    background-color:#aaa!important;
  }
  .wrapper .single{
    color:black;
    width:100%;
    padding:10px;
    text-align:center;
    margin-bottom:10px;
  }
  .aqi-value{
    font-family : "Noto Serif","Palatino Linotype","Book Antiqua","URW Palladio L";
    font-size:40px;
    font-weight:bold;
  }
  h1{
    text-align: center;
    font-size:3em;
  }
  .forecast-block{
    background-color: blanchedalmond!important;
    width:20% !important;
    text-align: center;
  }
  .title{
    background-color:blanchedalmond;
    width: 100%;
    color:black;
    margin-bottom:0px;
    padding-top:10px;
    padding-bottom: 10px;
  }
  .bordered{
    border:1px solid black;
  }
  .weather-icon{
    width:40%;
    font-weight: bold;
    background-color: blanchedalmond;
    padding:10px;
    border: 1px solid black;
  }
</style>

<?php
  //Here the conversions from fahrenheit to degress celsius will be made
  function convert2cen($value,$unit){
    if($unit=='C'){
      return $value;
    }else if($unit=='F'){
      $cen = ($value - 32) / 1.8;
        return round($cen,2);
      }
  }
?>
<!--The formating of the user interface will be desined here -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <br>
  
  <div class="row">
    <h3 class="title text-center bordered">Weather Report for <?php echo $current->city.' ('.$current->country.')';?></h3>
    <div class="col-md-12" style="padding-left:0px;padding-right:0px;">
      <div class="single bordered" style="padding-bottom:25px;background:url('back.jpg') no-repeat ;border-top:0px;background-size: cover;">
        <div class="row">
          <div class="col-sm-9" style="font-size:20px;text-align:left;padding-left:70px;">
            <p class="aqi-value"><?php echo convert2cen($current->temp,$current->temp_unit);?> °C</p>
            <p class="weather-icon" >
              <img style="margin-right:-10px;" src="<?php echo $current->image;?>">
              <?php echo $current->description;?>
            </p>
            <div class="weather-icon">
              <p><strong>Wind Speed : </strong><?php echo $current->windspeed;?> <?php echo $current->windspeed_unit;?></p>
              <p><strong>Pressue : </strong><?php echo $current->pressure;?> <?php echo $current->pressure_unit;?></p>
              <p><strong>Visibility : </strong><?php echo $current->visibility;?> <?php echo $current->visibility_unit;?></p>
            </div>
          </div>
        </div>
          </div>
    </div>
  </div>
  <br><br>
  <div class="row">
    <h3 class="title text-center bordered">5 Days Weather Forecast for <?php echo $current->city.' ('.$current->country.')';?></h3>
    <?php $loop=0; foreach($forecast as $f){ $loop++;?>
      <div class="title text-center bordered">
        <h3><?php echo $f->day;?></h3>
        <p style="font-size:1em;" class="aqi-value"><?php echo convert2cen($f->low,$f->low_unit);?> °C - <?php echo convert2cen($f->high,$f->high_unit);?> °C</p>
        <hr style="border-bottom:1px solid #fff;">
        <img src="<?php echo $f->image;?>">
        <p><?php echo $f->phrase;?></p>
      </div>
    <?php } ?>
  </div>
</div>
<?php include 'theme/foot.php'; ?>