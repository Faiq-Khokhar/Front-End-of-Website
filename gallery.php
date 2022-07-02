<?php
session_start();
if (empty($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
  header('Location: Website/login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gallery Of Civil Rights</title>
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
      <h2 class="animate__animated animate__bounce"><a style="color:white" href="http://localhost/website/homepage.php">Social Fiesta</a></h2>
    </header>
	<div class="container">
  <ul class="gallery">
    <li>
      <div class="flip">
        <div class="front-side"></div>
        <div class="back-side">
          <a href="https://en.wikipedia.org/wiki/Human_rights_in_Muslim-majority_countries">
            <div class="content">
              <div class="loader"></div>
              <div class="text">
                <h3><b>Equal Rights</b> for <b>Muslims</b> all over the World</h3>
                <p>As our ISLAM teaches Equal Rights , every Muslim all over the world should be given Equal Rights in religion & in every aspect of Life.<br>In <b>INDIA , ISRAEL & other countries of World</b>, Civil Rights of Muslims are compromised. They are not allowed to offer their religious duties. They are continously tortured :-(  </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li>
      <div class="flip">
        <div class="front-side"></div>
        <div class="back-side">
          <a href="https://guides.ll.georgetown.edu/c.php?g=592919&p=4106389">
            <div class="content">
              <div class="loader"></div>
              <div class="text">
                <h3><b>Civil Rights</b> For <b>Disabled Persons</b></h3>
                <p><b>Disability rights</b> are Human Rights. This civil rights law seeks to eliminate discrimination against people based on their disabilities in employment, state and local government services, privately operated public accommodations (hotels, restaurants, stores, museums, etc.), transportation, and telecommunications.<br>The rights persons with disabilities have include; equality before the law, freedom of speech, respect for privacy, the right to both marriage and family, the right to education, the right to health, and much more.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </li>
    <li>
      <div class="flip">
        <div class="front-side"></div>
        <div class="back-side">
          <a href="https://en.wikipedia.org/wiki/Women%27s_rights">
            <div class="content">
              <div class="loader"></div>
              <div class="text">
                <h3><b>Civil Rights</b> for <b>Women</b></h3>
                <p>Every Woman should be given Proper & Equal Rights.They should be given equal access to education and employment, equality within marriage, and a married woman's right to her own property and wages, custody over her children and control over her own body.They are allowed to make their own reproductive decisions.<br>The Goals of the women's rights movement was to improve women's roles in society.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </li>
  </ul>
</div>
</body>
 
 <script>
    var Gallery = (function() {
    var colors = ['#34495E', '#2E4053', '#283747', '#212F3C', '#1B2631', '#2C3E50', '#273746'];
    var scrollTimeId;
    var posLeft = 0;

    function Gallery(config) {
        this.list = $(config.list);
        this.items = this.list.find('li');
        this.itemWidth = this.items.outerWidth();
    };

    Gallery.prototype = {
        constructor: Gallery,

        init: function() {
            this.setGalleryWidth();
            this.setItemsColor();
            this.eventManager();

            return this;
        },

        eventManager: function() {
            var _this = this;

            $("html, body").on('mousewheel', function(event) {
                clearTimeout(scrollTimeId);
                scrollTimeId = setTimeout(onScrollEventHandler.bind(this, event, _this.itemWidth), 0);
            });
        },

        getRandomColor: function() {
            return colors[Math.floor(Math.random() * colors.length)];
        },

        setItemsColor: function() {
            var _this = this;

            $.each(this.items, function(index, item) {
                 item.style.backgroundColor = _this.getRandomColor();
            });
        },

        setGalleryWidth: function() {
            this.list.css('width', this.getGalleryWidth());
        },

        getGalleryWidth: function() {
            var width = 0;

            this.items.each(function(index, item) {
                width += $(this).outerWidth();
            });

            return width;
        }
    };

    function onScrollEventHandler(event, width) {
      if (event.deltaY > 0) {
        this.scrollLeft -= width / 2;
      } else {
        this.scrollLeft += width / 2;
      }
        event.preventDefault();
    };

    return Gallery;
})();


$(document).ready(function() {
    var gallery = new Gallery({
        list: '.gallery'
    }).init();
});</script>
</html>
