<?php
$name = "Наталья";
$profession = "Специалист в области ЖКХ";
$city = "Челябинск";
$email = "pauls88@yandex.ru";
$telephone = 89080513816;
$avatar = "https://psiola-center.ru/wp-content/uploads/9/f/8/9f84f46f4bddf8bacd42ef03cc306448.jpeg";
$skills = [
	[
    	'name' => "Фотошоп",
        'value' => 30
    ],
    [
    	'name' => "Фотография",
        'value' => 20
    ],
     [
    	'name' => "Текст",
        'value' => 60
    ]
 ];
?>
<?php
$job = [
'job_name' => ['ООО "Азбука сервиса"', 'ТСЖ "Меридиан"', 'ТСЖ "НКР"'],
'job_data' => ['2014-настоящее время', '2009-2014', '2009-2005'],
'job_desc' => ['Расчет и начисление платы за услуги ЖКХ', 'Ведение бухучета и расчетов по жилищным и коммунальным услугам', 'Расчеты с населением за услуги ЖКХ'],
]
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src=<?=$avatar?> style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-red">
            <h2><?=$name?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profession?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$city?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$email?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$telephone?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          
        
       <?php foreach($skills as $key => $skill): ?> 
        <p><?=$skill['name']?> <?php if ($key==0):?>- Первый<?php endif;?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?=$skill['value']?>%"><?=$skill['value']?>%</div>
          </div>
          
          <?php endforeach; ?>
    
          

         
         
         <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:60%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:15%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:10%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
    <div class="w3-container w3-card w3-white w3-margin-bottom">
<h2 class="w3-text-grey w3-padding-16"><i
class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
<div class="w3-container">
<h5 class="w3-opacity"><b>
<?php echo $job['job_name'][0]; ?>
</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_data'][0]; ?>
</h6>
<p>
<?php echo $job['job_desc'][0]; ?>
</p>
<hr>
</div>
<div class="w3-container">
<h5 class="w3-opacity"><b>
<?php echo $job['job_name'][1]; ?>
</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_data'][1]; ?>
</h6>
<p>
<?php echo $job['job_desc'][1]; ?>
</p>
<hr>
</div>
<div class="w3-container">
<h5 class="w3-opacity"><b>
<?php echo $job['job_name'][2]; ?>
</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
<?php echo $job['job_data'][2]; ?>
</h6>
<p>
<?php echo $job['job_desc'][2]; ?>
</p><br>
</div>
</div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
