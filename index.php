<!DOCTYPE html>
<html>
<head>
<title>M4rc3110</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="images/logo.ico">
<link rel="stylesheet" href="css/styles.css">

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="images/LogoBlack.png" id="logo" style="width:60%; margin: 10px;">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#grades" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>GRADES</p>
  </a>
  <a href="#video" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-video-camera w3-xxlarge"></i>
    <p>VIDEO</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#grades" class="w3-bar-item w3-button" style="width:25% !important">GRADES</a>
    <a href="#video" class="w3-bar-item w3-button" style="width:25% !important">VIDEO</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-16 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm </span>M4rc3110<span class="w3-hide-small">.</span></h1>
    <p>Definitely not a Web Designer</p>
    <img src="images/LogoBlack.png" id="logo" alt="Logo" class="w3-image">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey" id="about">
    <h2 class="w3-text-light-grey">About</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Programming</p>
    <div class="w3-white">
      <div class="w3-dark-grey bars" id="programming-bar"></div>
    </div>
    <p class="w3-wide">Web Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey bars" id="web-design-bar"></div>
    </div>
    <p class="w3-wide">Systems of Two Linear Inequations With Two Unknown Variables</p>
    <div class="w3-white">
      <div class="w3-dark-grey bars" id="inquations-bar"></div>
    </div><br>
    
    <h3 class="w3-padding-16 w3-text-light-grey">Rainbow Six Siege Stats</h3>
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge" id="r6-level"></span><br>
        Level
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge"><span id="r6-win-rate"></span>%</span><br>
        Win Rate
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge" >0.<span id="r6-kd"></span></span><br>
        K/D
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge"><span id="r6-tk"></span>+</span><br>
        Team Kills
      </div>
    </div>
  </div>
  
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="grades">
    <!-- Table for all grades -->
    <?php
      $conn = mysqli_connect("127.0.0.1", "root", "", "exams_db");
      if (!$conn) die("Connnection database server failed: " . mysqli_connect_error());

      if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['subject']) && isset($_POST['date']) && isset($_POST['grade'])){
        $subject = htmlspecialchars($_POST['subject']);
        $date = htmlspecialchars($_POST['date']);
        $credits = htmlspecialchars($_POST['credits']);
        $grade = htmlspecialchars($_POST['grade']);
        $prStmt = mysqli_prepare($conn, "INSERT INTO exams(subject, date, credits, grade) VALUES(?, ?, ?, ?);");
        mysqli_stmt_bind_param($prStmt, 'ssis', $subject, $date, $credits, $grade);
        mysqli_stmt_execute($prStmt);
      }
    ?>

    <h2 class="w3-text-light-grey" id="grades">My Grades</h2>
    <hr style="width:200px" class="w3-opacity">
    <table class="w3-table w3-bordered w3-centered">
      <thread>
        <tr class="w3-light-grey">
          <th class="subject-column">Subject</th>
          <th class="date-column">Date</th>
          <th class='credits-column'>Credits</th>
          <th class="grade-column">Grade</th>
        </tr>
      </thread>
      <tbody>
        <?php
          $query = "SELECT * FROM exams ORDER BY date DESC;";
          $data = mysqli_query($conn, $query);
          $total_exam_values = 0;
          $total_credits = 0;

          function get_grade_value($grade){
            switch($grade){
              case "A": return 1;
              case "B": return 1.5;
              case "C": return 2;
              case "D": return 2.5;
              case "E": return 3;
              case "F": return 4;
            }
          }

          while($exam = mysqli_fetch_array($data, MYSQLI_ASSOC)){
            $total_exam_values += (get_grade_value($exam['grade']) * $exam['credits']);
            $total_credits += $exam['credits'];
            echo "<tr>";
            echo "<td>".$exam['subject']."</td>";
            echo "<td>".date("d-m-Y", strtotime($exam['date']))."</td>";
            echo "<td>".$exam['credits']."</td>";
            echo "<td>".$exam['grade']."</td>";
            echo "</tr>";
          }
		  if($total_credits == 0) $average = 0;
          else $average = $total_exam_values / $total_credits;
        ?>
      </tbody>
    </table>
    <!-- End grade table -->
    <h3 class="w3-padding-24 w3-text-light-grey">Wighted Grade Point Average: <b><?php echo round($average, 2, PHP_ROUND_HALF_UP); ?></b></h3>
    <h3 class="w3-padding-24 w3-text-light-grey">Best Grade</h3>
    <table class="w3-table w3-bordered w3-centered">
      <thread>
        <tr class="w3-light-grey">
          <th class="subject-column">Subject</th>
          <th class="date-column">Date</th>
          <th class='credits-column'>Credits</th>
          <th class="grade-column">Grade</th>
        </tr>
      </thread>
      <tbody>
        <?php
          $query = "SELECT * FROM exams WHERE grade = (SELECT MIN(grade) FROM exams) ORDER BY date DESC;";
          $data = mysqli_query($conn, $query);

          while($exam = mysqli_fetch_array($data, MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>".$exam['subject']."</td>";
            echo "<td>".date("d-m-Y", strtotime($exam['date']))."</td>";
            echo "<td>".$exam['credits']."</td>";
            echo "<td>".$exam['grade']."</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>

    <h3 class="w3-padding-24 w3-text-light-grey">Worst Grade</h3>  
    <table class="w3-table w3-bordered  w3-centered">
      <thread>
        <tr class="w3-light-grey">
          <th class="subject-column">Subject</th>
          <th class="date-column">Date</th>
          <th class='credits-column'>Credits</th>
          <th class="grade-column">Grade</th>
        </tr>
      </thread>
      <tbody>
      <?php
          $query = "SELECT * FROM exams WHERE grade = (SELECT MAX(grade) FROM exams) ORDER BY date DESC;";
          $data = mysqli_query($conn, $query);

          while($exam = mysqli_fetch_array($data, MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>".$exam['subject']."</td>";
            echo "<td>".date("d-m-Y", strtotime($exam['date']))."</td>";
            echo "<td>".$exam['credits']."</td>";
            echo "<td>".$exam['grade']."</td>";
            echo "</tr>";
          }
          mysqli_close($conn);
      ?>
      </tbody>
    </table>

    <h3 class="w3-padding-24 w3-text-light-grey">Add Exam</h3>

    <form method="POST" action="index.php#grades" id="add-exam-form">
      <p>
        <label for="subject-picker">Subject name</label>
        <input class="w3-input w3-padding-16" id="subject-picker" type="text" placeholder="Enter name of the subject" required name="subject">
      </p>
      <p>
        <label for="date-picker">Date of the exam</label>
        <input class="w3-input w3-padding-16" type="date" id="date-picker" required name="date">
      </p>
      <p>
        <label for="credits-picker">Credits for subject</label>
        <input class="w3-input w3-padding-16" type="number" id="credits-picker" required name="credits">
      </p>
      <p>
        <label for="grade-picker">Grade</label>
        <select class="w3-input w3-padding-16" id="grade-picker" name="grade">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
      </p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          ADD
        </button>
      </p>
    </form>
  <!-- End About Section -->
  </div>

  <div class="w3-content w3-justify w3-text-grey" id="video">
    <h2 class="w3-text-light-grey">My video</h2>
    <hr style="width:200px" class="w3-opacity">
    <div class="aspect-ratio">
      <iframe style="display:block; margin:0 auto;" width="840" height="472" src="https://www.youtube.com/embed/TntGC4O0TsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <button class="w3-button w3-light-grey w3-padding-medium w3-small" id="ip-button">What's my IP</button>
    <br>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

<script src="js/animations.js"></script>
<script src="js/script.js"></script>
</body>
</html>