<head>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="/css/style.css">

  <?php
$url_art = "data/articles.json";
$json_art = file_get_contents($url_art);
$json_article = json_decode($json_art, true);
$Art_Array = $json_article; 
 
$url_ev = "data/events.json";
$json_ev = file_get_contents($url_ev);
$json_ev = json_decode($json_ev, true);
$Ev_Array = $json_ev;   
  ?>
  

</head>

<body class="page">
  <div class="row">
    <div class="col-md-8 left-col">
      <div class="page_header">Articles</div>
      <?php foreach ($Art_Array as $key => $value) {
    echo 
      '<div class="col-md-6 art_block">
       <div class="title">' . wordwrap(($value[title]), 36, " <span style='display:none;'> ")  .'</span></div>
       <div class="image"><a href="' . $value[url] . '" target= "_blank">' . '<img src="' . $value[image] . '"/>' . '</a></div>
       <div class="description">' .  wordwrap(($value[content]), 100, " <span style='display:none;'> ")  .'</span></div>
       </div>
      ';
  }
?>
    </div>
    <div class="col-md-4 right-col">
      <div class="col-md-12 header_ev_section">Events</div>
      <div class="col-md-12">
        <?php foreach ($Ev_Array as $key => $value) {
    echo 
      '<div class="col-md-12 block_ev">
      <div class="title_ev_block"><b>' . $value[title] . '</b></div>
      <div class="desc_ev"> <b>Location:</b> ' .$value[location] . '</div>
      <div class="desc_ev"><b>Date:</b> ' . $value[date] .'</div>
      </div>
      ';
  }
?>
      </div>
    </div>
  </div>
</body>
