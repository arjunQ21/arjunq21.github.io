  <?php 
  $size = "150x150" ;
  $tools = [
    tool("Node.js", "images/$size/nodejs.png"),
    tool("Flutter","images/$size/flutter.png" ),
    tool("Laravel", "images/$size/laravel.png"),
    tool("React.js", "images/$size/ReactIcon.png"),
    tool("HTML", "images/$size/html.png"),
    tool("CSS", "images/$size/css.png"),
    tool("jQuery", "images/$size/jquery.png"),
    tool("Vue Js", "images/$size/vue.png"),
    tool("PHP", "images/$size/php.png"),
    tool("MySQL", "images/$size/mysql.png"),
    tool("MongoDB", "images/$size/mongodb-logo.png"),
    tool("WordPress", "images/$size/wordpress.png"),

    tool("PhotoShop", "images/$size/photoshop.png"),
    tool("Github", "images/$size/github.png"), 
    // tool("Adobe XD", "images/$size/xd.png"),
  ];
  function tool($name, $image){
    return ['name'=>$name, 'image'=>$image] ;
  }
?>      <span class="smallTitleText">
          I work with ...
        </span>
        <div class="tools">
          <?php foreach($tools as $tool){ ?>
            <div class="tool">
              <div class="t_img">
                <img src="<?= $tool['image'] ?>" alt="<?= $tool['name']."'s Logo" ?>">
              </div>
              <div class="t_name">
                <?= $tool['name'] ?>
              </div>
            </div>
          <?php } ?>
        </div> 
        <?php if(isset($otherTools)){ ?>
          <span class="smallTitleText">
            Some other tools I use
          </span>
          <div class="tools">
            <?php foreach($otherTools as $tool){ ?>
              <div class="tool">
                <div class="t_img">
                  <img src="<?= $tool['image'] ?>" alt="<?= $tool['name']."'s Logo" ?>">
                </div>
                <div class="t_name">
                  <?= $tool['name'] ?>
                </div>
              </div>
            <?php } ?>
          <?php } ?> 
        </div> 