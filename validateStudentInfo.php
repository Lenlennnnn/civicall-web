<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student's Validation</title>
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

        .menu-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #fff;
            /* Change this to your preferred background color */
            padding: 5px 10px;
            cursor: pointer;
        }

        /* Apply initial styles to the icon */
        ion-icon[name="menu-outline"] {
            font-size: 30px;
            /* Set your desired initial size */
            transition: transform 0.3s;
            /* Add a smooth scaling transition effect */
        }

        /* Apply the hover effect to enlarge the icon */
        ion-icon[name="menu-outline"]:hover {
            transform: scale(1.2);
            /* Enlarge the icon on hover (adjust the scale factor as needed) */
        }

        /* font label */
        i {
            font-weight: 300;
        }

        .dateJoin {
            margin-left: 570px;
        }

        /* for button */
        /* Style for the Approved button */
        #approveButton {
            background-color: #28a745;
            /* Green background color */
            color: #fff;
            /* White text color */
            border: none;
            /* Remove button border */
            padding: 10px 20px;
            /* Add padding for better appearance */
            cursor: pointer;
            /* Change cursor to pointer on hover */
        }

        /* Style for the Decline button */
        #declineButton {
            background-color: #dc3545;
            /* Red background color */
            color: #fff;
            /* White text color */
            border: none;
            /* Remove button border */
            padding: 10px 20px;
            /* Add padding for better appearance */
            cursor: pointer;
            /* Change cursor to pointer on hover */
        }

        /* Hover effect for both buttons */
        #approveButton:hover,
        #declineButton:hover {
            opacity: 0.8;
            /* Reduce opacity on hover for visual feedback */
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

        a {
            text-decoration: none !important;
            color: inherit !important;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="topbar">
            <a href="validateStudent.php">
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
                <img src="img/dean2.jpg" alt="Student Photo" class="picture">
            </div>

            <!-- Personal Information -->
            <div class="form-group">
                <h5><u>Personal Information</u> <i class="dateJoin" style="font-size: small;">Date Joined: 2023-01-15</i></h5>
                <label for="full-name">Full Name: <i>(Lastname, Firstname, Middle Name)</i></label>
                <input type="text" id="full-name" name="full-name" value="Cruz, Juan Dela" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Gender:</label>
                <input type="text" id="grade-level" name="grade-level" value="Male" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Date of birth: <i>(Month Day, Year)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="May 27, 2001" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Address: <i>(House Number, Street/Building Name, Barangay, City, Province)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="0980 Barangay Silo Malvar Batangas" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Contact Number: <i>(09XX-XXX-XXXX)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="09123456789" readonly>
            </div>

            <!-- Academic Information -->
            <div class="form-group">
                <h5><u>Academic Information</u></h5>
                <label for="grade-level">SR-CODE: <i>(20-XXXXX)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="20-12345" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Gsuit Email: <i>(20-XXXXX@g.batstate-u.edu.ph)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="20-12345@g.batstate-u.edu.ph" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Campus:</label>
                <input type="text" id="grade-level" name="grade-level" value="JPLPC Malvar Batangas" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Course:</label>
                <input type="text" id="grade-level" name="grade-level" value="Bachelor Of Science in Information Technology" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Major:</label>
                <input type="text" id="grade-level" name="grade-level" value="Service Management" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Year and Section:</label>
                <input type="text" id="grade-level" name="grade-level" value="4th Year - 4102" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Academic Advisor:</label>
                <input type="text" id="grade-level" name="grade-level" value="Mr. Dean G. Winchester" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Academic Status:</label>
                <input type="text" id="grade-level" name="grade-level" value="Regular Student" readonly>
            </div>

            <!--  records/credentials -->
            <div class="form-group">
                <h5><u>Records</u></h5>
                <label for="proofOfEnrollment">Certificate of Registration:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="COR.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
            </div>

            <div class="form-group">
                <label for="proofOfEnrollment">Transcript of Records:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="TOR.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
            </div>

            <div class="form-group">
                <label for="proofOfEnrollment">Class Schedule:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="Schedule.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
            </div>

            <div class="form-group">
                <label for="proofOfEnrollment">Certificate of Registration:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="Dela Cruz, Juan G.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
            </div>

            <!-- Parent/Guardian Information -->
            <div class="form-group">
                <h5><u>Relationship Information</u></h5>
                <label for="parent-name">Parent/Guardian Name: <i>(Lastname, Firstname, Middle Name)</i></label>
                <input type="text" id="parent-name" name="parent-name" value="Cruz, Anna Dela" readonly>
            </div>

            <div class="form-group">
                <label for="relationship">Relationship:</label>
                <input type="text" id="relationship" name="relationship" value="Mother" readonly>
            </div>

            <div class="form-group">
                <label for="parent-phone">Parent/Guardian Phone: <i>(09XX-XXX-XXXX)</i></label>
                <input type="text" id="parent-phone" name="parent-phone" value="0955-987-6543" readonly>
            </div>

            <div class="form-group">
                <label for="parent-phone">Address: <i>(House Number, Street/Building Name, Barangay, City, Province)</i></label>
                <input type="text" id="parent-phone" name="parent-phone" value="0980 Barangay Silo Malvar Batangas" readonly>
            </div>

            <div class="form-group">
                <label for="proofOfEnrollment">Parent Concent:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="parentalConcent.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
            </div>

            <div class="form-group">

                <a href="validateStudent.php">
                    <button type="button" class="btn btn-success" id="approveButton">Approved</button>
                </a>


                <button type="button" class="btn btn-danger" id="declineButton">Decline</button>
            </div>

        </div>
        <script>
            const clickableRows = document.querySelectorAll(".clickable-row");
            clickableRows.forEach((row) => {
                row.addEventListener("click", () => {
                    const href = row.getAttribute("data-href");
                    if (href) {
                        window.location.href = href;
                    }
                });
            });
        </script>
</body>

</html>