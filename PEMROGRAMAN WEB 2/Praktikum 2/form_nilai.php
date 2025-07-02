<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Grade Form STT-NF</title>
    <style>
        body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 8px;
        }
        .col-form-label {
            padding-right: 5px;
        }
        .btn {
            width: 100%;
        }
    </style>
</head>
<body>
<h3>Student Grade Report</h3><hr>
<br>
<form method="post">
  <div class="form-group row">
    <label for="name" class="col-6 col-form-label">Full Name</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="name" name="name" placeholder="Text here" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="course" class="col-6 col-form-label">Course</label> 
    <div class="col-6">
      <select id="course" name="course" class="custom-select">
        <option value="Web Programming 1">Web Programming 1</option>
        <option value="Web Programming 2">Web Programming 2</option>
        <option value="Databases">Databases</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="me" class="col-6 col-form-label">Midterm Exam</label> 
    <div class="col-6">
      <input id="me" name="me" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="fe" class="col-6 col-form-label">Final Exam</label> 
    <div class="col-6">
      <input id="fe" name="fe" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="score" class="col-6 col-form-label">Score</label> 
    <div class="col-6">
      <input id="score" name="score" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-6 col-6">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<br><hr>

    <?php
        //ngambil data form
        if (isset($_POST["submit"]))  {
        $name = $_POST["name"];
        $course = $_POST["course"];
        $me = $_POST["me"];
        $fe = $_POST["fe"];
        $score = $_POST["score"];
        $average = ($me * 0.3)+($fe * 0.4)+($score * 0.3);
        $adverb = adverb($average);
        $grade = grade($average);

        //manggil variabel
        echo "Full Name : $name <br>";
        echo "Course : $course <br>";
        echo "Midterm Exam : $me <br>";
        echo "Final Exam : $fe <br>";
        echo "Score : $score <br>";
        echo "Average : $average <br>";
        echo "Adverb : $adverb <br>";
        echo "Grade : $grade <br>";
        }

        //menentukan kelulusan
        function adverb ($average): string{
            if ($average >= 80) {
                return "Pass";
            }
            else {
                return "Failed";
            }
        }

        //menentukan grade
        function grade ($average){
          if ($average >= 85 && $average <=100) {
            return "A (Excellent)";
          }
          elseif ($average >= 60 && $average <= 84) {
            return "B (Good)";
          }
          elseif ($average >= 40 && $average <= 59) {
            return "C (Fair)";
          }
          elseif ($average >= 20 && $average <= 39) {
            return "D (Poor)";
          }
          elseif ($average >= 0 && $average <= 19) {
            return "E (Very Poor)";
          }
          else  {
            return "Failed";
          }
        }
    ?>
</body>
</html>