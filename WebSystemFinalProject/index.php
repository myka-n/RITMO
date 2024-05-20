<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE='>
    <title>Ritmo</title>
    <link rel="icon" type="image/x-icon" href="assets/img/FAVICON2.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="description" content="Want to know more about Filipino music? Earn more knowledge about Filipino Music in Ritmo.">
    <meta name="keywords" content="OPM, Pinoy Music, Filipino Music, Tagalog Music, Original Pilipino Music">
    <link rel='stylesheet' type='text/css' media='screen' href='assets/styles/styles.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="logs.js"></script>
</head>

<body>
    <header id="header" class="header">
        <nav>
    
            <a href="index.html">
                <img src="assets/img/RITMO1.png" class="logo" alt="logo">
            </a>
    
            <ul class="nav-links">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a class="active" href="pages/Artists/artists.html">Artist</a></li>
                <li><a class="active" href="pages/Genre/genre.html">Genre</a></li>
                <li><a class="active" href="pages/Philippine Music Awards/phmusicawards.html">Music Awards</a></li>
                <li><a class="active" href="pages/Articles/Articles.html">Articles</a></li>
                <li><a class="active" href="pages/Future plans/futureplan.html">Future Plans</a></li>
                <li><a class="active" href="pages/About Us/About Us.html">About</a></li>
            </ul>

            <div class="nav-toggle">
                <button class="sidebar">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>


    <div class="content">
        <section id="welcome" >
            <img src="assets/img/music.png">
                Embracing the <i>vibrant melodies</i><br>
                and <i>soulful sounds</i>,<br>
                where rhythms dance and <br>
                every note echoes in the<br>
                thousand islands of the <br>
                Philippines<br>
                Now! Why don't you harmonize your talent,<br>
                and amplify your reach?<br>
                Tune in and...<br>
            </p>
            <button class="scroll-button" onclick="document.getElementById('hidden-section').scrollIntoView()"><i>Feel the vibe</i></button>
        </section>

        <section id="hidden-section" class="hidden-section">
            <div class="card-container">
            <div class="card">
                <div class="image">
                    <img src="assets/img/musicartists.jpg">
                </div>
                
                <div class="content">
                    <h1>OPM Artists</h1>
                    <p>Discover the legends who shaped Filipino music and fall in love with the emerging talents that are taking the industry by storm. 
                    </p>
                    <button class="button" onclick="window.location.href='pages/Artists/artists.html'">
                        Read more
                    </button>
                </div>
            </div>
          
            <div class="card">
                <div class="image">
                    <img src="assets/img/musicgenre.png">
                </div>
                
                <div class="content">
                    <h1>Genre</h1>
                    <p>Learn and know the sub-genre of OPM.</p>
                    <button class="button" onclick="window.location.href='pages/Genre/genre.html'">
                        Read more
                    </button>
                </div>
            </div>
          
            <div class="card">
                <div class="image">
                    <img src="assets/img/musicartists.jpg">
                </div>
                
                <div class="content">
                    <h1>Music Awards</h1>
                    <p>Here are some award-giving bodies that recognize and honor Filipino artists.</p>
                    <button class="button" onclick="window.location.href='pages/Philippine Music Awards/phmusicawards.html'">
                        Read more
                    </button>
                </div>
            </div>
          
            <div class="card">
                <div class="image">
                    <img src="assets/img/musicartists.jpg">
                </div>
                
                <div class="content">
                    <h1>Articles</h1>
                    <p>Related articles about Original Pilipino Music.</p>
                    <button class="button" onclick="window.location.href='pages/Articles/Articles.html'">
                        Read more
                    </button>
                </div>
            </div>
            </div>
        </section>
    </div>
    
    <div class="comment-container">
        <div class="comment-card">
            <h1>Comments</h1>
            <form action="C:\Users\User\WebSystemFinalProject\WebSystemFinalProject\assets\php\submit_comment.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" required></textarea><br><br>
                <button type="submit">Submit</button>
            </form>
            <h2>Comments:</h2>
            <?php include 'C:\Users\User\WebSystemFinalProject\WebSystemFinalProject\assets\php\display_comments.php'; ?>
            <a href="C:\Users\User\WebSystemFinalProject\WebSystemFinalProject\assets\php\submit_comment.php">View All Comments</a>
        </div>
    </div>    
    
    <div class="bottom-links">
        <a href="#header">BACK TO TOP <i class="fas fa-arrow-up"></i></a>
    </div>

    <footer class="footer">
        <div class="footer-top">
            <div class="links">
                <p>Quick links</p>
                <ul class="box">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="pages/Artists/artists.html">Artists</a></li>
                    <li><a href="pages/Genre/genre.html">Genre</a></li>
                    <li><a href="pages/Philippine Music Awards/phmusicawards.html">Music Awards</a></li>
                    <li><a href="pages/Articles/Articles.html">Articles</a></li>
                    <li><a href="pages/Future plans/futureplan.html">Future Plans</a></li>
                    <li><a href="pages/About Us/About Us.html">About Us</a></li>
                </ul>
            </div>
            <div class="contact">
                <p>Contact Us</p>
                <ul class="box">
                    <li><i class="fa fa-envelope"></i><a href="mailto:ritmoofficial@gmail.com">ritmoofficial@gmail.com</a></li>
                    <li><i class="fa fa-phone"></i><a href="#">7888-2221-222</a></li>
                </ul>
            </div>
            <div class="social-media">
                <p>Social Media Accounts</p>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i> </a>
                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i> </a>
                <a href="https://www.twitter.com"><i class="fab fa-x-twitter"></i> </a>
                <a href="https://www.tiktok.com"><i class="fab fa-tiktok"></i> </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 RITMO. All Rights Reserved.</p>
        </div>
    </footer>
        <script>
            const navToggle = document.querySelector('.nav-toggle button.sidebar');
const navLinks = document.querySelector('.nav-links');

navToggle.addEventListener('click', (event) => {
  event.preventDefault(); 
  navLinks.classList.toggle('show');
});

function scrollToSection() {
  const header = document.getElementById('header');
  const hiddenSection = document.getElementById('hidden-section');
  const headerRect = header.getBoundingClientRect();
  const hiddenSectionRect = hiddenSection.getBoundingClientRect();

  if (hiddenSectionRect.top < headerRect.bottom) {
    window.scrollTo({ top: headerRect.top, behavior: 'smooth' });
  } else {
    window.scrollTo({ top: hiddenSectionRect.top + window.pageYOffset, behavior: 'smooth' });
  }

  if (navLinks.classList.contains('show')) {
    navLinks.classList.remove('show');
  }
}

        </script>
</body>
</html>