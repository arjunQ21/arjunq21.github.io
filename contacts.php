<?php ?>
<div class="buttons">
  <?php
  $contacts = [

    [
      'text' => 'github.com/arjunQ21',
      'icon' => 'fa fa-github',
      'color' => '#000',
      'href' => 'https://github.com/arjunq21',
      'newWindow' => 1,
      'title' => 'Github Profile'
    ],
 
    [
      'text' => 'linkedin.com/in/arjunq21/',
      'icon' => 'fa fa-twitter',
      'color' => '#0966c2',
      'href' => 'https://twitter.com/arjunq21_',
      'newWindow' => 1,
      'title' => 'Twitter Profile'
    ],
    [
      'text' => 'arjunq21@gmail.com',
      'icon' => 'fa fa-envelope-open-o',
      'color' => '#B83426',
      'href' => 'mailto:arjunq21@gmail.com',
      'id' => 'mailButton',
      'newWindow' => 1,
      'title' => 'Email Address, Click to see'
    ],
  
    [
      'text' => 'facebook.com/arjunq21',
      'icon' => 'fa fa-facebook-f',
      'color' => '#4368B1',
      'href' => 'https://www.facebook.com/arjunq21',
      'newWindow' => 1,
      'title' => 'Facebook Profile'
    ],
    [
      'text' => '977 9866008814',
      'icon' => 'fa fa-phone',
      'color' => 'seagreen',
      'href' => 'tel:009779866008814',
      'id' => 'callButton',
      'newWindow' => 0,
      'title' => "Phone Number, click to see"
    ],
    
  ];
  ?>
  <?php foreach ($contacts as $contact) { ?>
    <div class="icon_texts">
      <a href="<?= $contact['href'] ?> " <?php if (isset($contact['id'])) echo " id = '" . $contact['id'] . "' " ?> <?php if ($contact['newWindow'] == 1) echo " target = '_blank' " ?> title="<?= $contact['title']  ?>">
        <div class="it_icon">
          <i class="<?= $contact['icon'] ?>" <?php if ($contact['color']) echo " style='color: " . $contact['color'] . ";'" ?>></i>
        </div>
        <div class="it_text">
          <span>
            <?= $contact['text'] ?>
          </span>
        </div>
      </a>
    </div>
  <?php } ?>
</div>