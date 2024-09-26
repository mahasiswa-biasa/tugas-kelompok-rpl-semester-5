<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum Diskuscuy</title>
  <link href="assets/css/forum-style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <!-- Left Sidebar -->
    <div class="sidebar-left">
      <!-- Section 1: Home and Popular -->
      <ul class="nav flex-column">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Popular</a></li>
      </ul>
      <hr>

      <!-- Section 2: Recent -->
      <ul class="nav flex-column">
        <li class="nav-item nav-link">
          <h4>Recent</h4>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">Apa itu Bug ?</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Sejarah G30SPKI</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Mahatma Gandi</a></li>
        <li class="nav-item nav-link"> <a href="#" class="see-more">See more</a></li>
      </ul>

      <hr>

      <!-- Section 3: Topics -->
      <ul class="nav flex-column">
        <li class="nav-item nav-link">
          <h4>Topics</h4>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">CyberSecurity</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Developer</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Code</a></li>
        <li class="nav-item nav-link"> <a href="#" class="see-more">See more</a></li>
      </ul>
      <hr>

      <!-- Section 4: Resources -->
      <ul class="nav flex-column">
        <li class="nav-item nav-link">
          <h4>Resources</h4>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">About Diskuscuy</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Help</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
      </ul>
      <hr>

      <!-- Section 5: Policies -->
      <ul class="nav flex-column">
        <li class="nav-item nav-link">
          <h4>Policies</h4>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">Content Policy</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Agreements</a></li>
      </ul>
    </div>


    <!-- Main Content Area -->
    <div class="main-content">
      <!-- Form Pencarian -->
      <div class="search-container">
        <input type="text" placeholder="Cari topik..." class="search-bar">
        <!-- <span class="search-icon"><i class="fas fa-search"></i></span> -->
      </div>

      <!-- Topik Ramai Dibahas -->
      <div class="hot-topics">
        <div class="topic-card">
          <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="Topik">
          <div class="topic-info">
            <h5>Pembahasan Cybersecurity</h5>
            <p>Diposting oleh Alice 1 jam yang lalu</p>
            <p class="username">Alice</p>
          </div>
        </div>
        <div class="topic-card">
          <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="Topik">
          <div class="topic-info">
            <h5>Pembahasan Cybersecurity</h5>
            <p>Diposting oleh Alice 1 jam yang lalu</p>
            <p class="username">Alice</p>
          </div>
        </div>
        <div class="topic-card">
          <img src="https://randomuser.me/api/portraits/men/9.jpg" alt="Topik">
          <div class="topic-info">
            <h5>Pembahasan Cybersecurity</h5>
            <p>Diposting oleh Alice 1 jam yang lalu</p>
            <p class="username">Alice</p>
          </div>
        </div>
        <div class="topic-card">
          <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Topik">
          <div class="topic-info">
            <h5>Pembahasan Cybersecurity</h5>
            <p>Diposting oleh Alice 1 jam yang lalu</p>
            <p class="username">Alice</p>
          </div>
        </div>
        <!-- Ulangi untuk 3 topik lainnya -->
      </div>
      <hr>

      <!-- Postingan Diskusi Terbaru -->
      <div class="discussion-posts">
        <div class="post">
          <div class="post-header">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
            <div class="user-info">
              <h5>John Doe</h5>
              <p class="post-time">Diposting 10 menit yang lalu</p>
            </div>
          </div>
          <p class="post-question">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quo sequi consequuntur
            dolorum rem provident facere dolore</p>
          <div class="post-actions">
            <a href="#" class="btn btn-action">Answer</a>
            <a href="#" class="btn btn-outline">Report</a>
          </div>
        </div>
        <hr>
        <div class="post">
          <div class="post-header">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
            <div class="user-info">
              <h5>John Doe</h5>
              <p class="post-time">Diposting 10 menit yang lalu</p>
            </div>
          </div>
          <p class="post-question">Bagaimana cara mengamankan server?</p>
          <div class="post-actions">
            <a href="#" class="btn btn-action">Answer</a>
            <a href="#" class="btn btn-outline">Report</a>
          </div>
        </div>
        <hr>
        <!-- Ulangi untuk lebih banyak post -->
      </div>

    </div>

    <!-- Right Sidebar -->
    <!-- Right Sidebar -->
    <div class="sidebar-right">
      <!-- User Profile -->
      <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="User Image" class="profile-img">
      <h4>Joko Said</h4>
      <p>Some time i hacking.</p>
      <hr>

      <!-- Related Tags -->
      <div class="related-tags">
        <h5>Related Tags</h5>
        <ul>
          <li>#CyberSecurity</li>
          <li>#DataProtection</li>
          <li>#CloudComputing</li>
          <li>See more...</li>
        </ul>
      </div>
      <hr>

      <!-- Top Responders -->
      <div class="top-responders">
        <h5>Top Responders</h5>
        <div class="responder">
          <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Responder Image">
          <div class="responder-info">
            <h5>Mary Johnson</h5>
            <p>Responded 2 days ago</p>
          </div>
        </div>
        <div class="responder">
          <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Responder Image">
          <div class="responder-info">
            <h5>Mary Johnson</h5>
            <p>Responded 2 days ago</p>
          </div>
        </div>
        <div class="responder">
          <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Responder Image">
          <div class="responder-info">
            <h5>Mary Johnson</h5>
            <p>Responded 2 days ago</p>
          </div>
        </div>
        <!-- Repeat for more responders -->
      </div>
    </div>

  </div>

</body>

</html>