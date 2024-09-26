<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor Pengguna - Diskuscuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="user-nav">
                <h2>Diskuscuy</h2>
                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Zulham Adam"
                    class="img-fluid rounded-circle">
                <h3 class="user-name">Zulham Adam</h3>
                <p class="user-email">zulhamadam@gmail.com</p>
                <span class="user-tag">Ambitious</span>
                <div class="user-tags">
                    <div>
                        <strong>Answers</strong>
                        <p>0</p>
                    </div>
                    <div>
                        <strong>Brainlest</strong>
                        <p>0</p>
                    </div>
                    <div>
                        <strong>Thanks</strong>
                        <p>0</p>
                    </div>
                </div>
                <button class="btn btn-edit-profile">Edit Profil</button>
                <div class="profile-details">
                    <p class="level-info">Level: SMA</p>
                    <p class="join-date">Bergabung: 2024-09-23</p>
                    <p class="description">Deskripsi saya: Lorem ipsum dolor sit amet.</p>
                </div>
                <button class="btn btn-logout">Logout</button>
            </div>
            <div class="col-md-9 user-content">
                <!-- Nav tabs -->
                <div class="nav-tabs" id="navTab" role="tablist">
                    <a class="nav-link active" id="answers-tab" href="answers.php" role="tab">Answers</a>
                    <a class="nav-link" id="questions-tab" href="questions.php" role="tab">Questions</a>
                    <a class="nav-link" id="thanks-tab" href="thanks.php" role="tab">Special Thanks</a>
                    <a class="nav-link" id="achievements-tab" href="achievements.php" role="tab">Achievements</a>
                    <a class="nav-link" id="friends-tab" href="friends.php" role="tab">Friends</a>
                </div>


                <!-- Tab panes -->
                <div class="user-content flex-grow-1">
                    <div class="content-box">
                        <p>You haven't answered any questions, yet…</p>
                        <a href="find-questions.php" class="btn-action">Find a Question</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>