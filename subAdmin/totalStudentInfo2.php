<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Information</title>
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/totalStudents.css" />
    <link rel="stylesheet" href="css/totalStudentInfo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <link rel="icon" type="image/png" href="login/images/icons/civicicon.png" />

    <style>
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
            cursor: not-allowed;
        }

        .main {
            background-color: #E1E1E1;
        }

        body {
            background-color: #E1E1E1;

        }

        .container123 {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="topbar">
            <a href="totalStudents.php">
                <div class="back-button">
                    <ion-icon name="return-down-back-outline"></ion-icon>
                </div>
            </a>
            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        </div>
        <h1 class="h1-group">Student Information</h1>
        <div class="container123">

            <div class="header">
                <img src="img/rr.jpg" alt="Student Photo" class="picture">
            </div>



            <!-- Personal Information -->
            <div class="form-group">
                <h5><u>Personal Information</u></h5>
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" value="Draguin, Sam C." readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Date of birth:</label>
                <input type="text" id="grade-level" name="grade-level" value="April 01, 2000" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Gender:</label>
                <input type="text" id="grade-level" name="grade-level" value="Male" readonly>
            </div>

            <!-- Academic Information -->
            <div class="form-group">
                <h5><u>Academic Information</u></h5>
                <label for="grade-level">Academic Status:</label>
                <input type="text" id="grade-level" name="grade-level" value="Graduated" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Campus:</label>
                <input type="text" id="grade-level" name="grade-level" value="JPLPC Malvar Batangas" readonly>
            </div>
            <div class="form-group">
                <label for="grade-level">SR-CODE:</label>
                <input type="text" id="grade-level" name="grade-level" value="20-54321" readonly>
            </div>
            <div class="form-group">
                <label for="grade-level">Course:</label>
                <input type="text" id="grade-level" name="grade-level" value="Bachelor of Science in Information Tecnology" readonly>
            </div>
            <div class="form-group">
                <label for="grade-level">Gsuit Email:</label>
                <input type="text" id="grade-level" name="grade-level" value="20-54321@g.batstate-u.edu.ph" readonly>
            </div>

            <!-- Parent/Guardian Information -->
            <div class="form-group">
                <h5><u>Relationship Information</u></h5>
                <label for="parent-name">Parent/Guardian Name:</label>
                <input type="text" id="parent-name" name="parent-name" value="Draguin, Ron k." readonly>
            </div>

            <div class="form-group">
                <label for="relationship">Relationship:</label>
                <input type="text" id="relationship" name="relationship" value="Father" readonly>
            </div>

            <div class="form-group">
                <label for="parent-phone">Parent/Guardian Phone:</label>
                <input type="text" id="parent-phone" name="parent-phone" value="0998-765-4321" readonly>
            </div>


        </div>
    </div>
</body>

</html>