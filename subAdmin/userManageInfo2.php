<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User's Information</title>
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

        .main {
            background-color: #E1E1E1;
        }

        body {
            background-color: #E1E1E1;

        }

        .container123 {
            background-color: white;
        }

        /* for modal */
        /* Add your CSS styles for the modal and menu icon here */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border-radius: 5px;
            width: 70%;
        }

        .close-modal {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }

        /* Add any additional styles for the menu icon if needed */
    </style>
</head>

<body>
    <div class="main">
        <div class="topbar">
            <a href="userManagement.php">
                <div class="back-button">
                    <ion-icon name="return-down-back-outline"></ion-icon>
                </div>
            </a>
            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        </div>
        <h1 class="h1-group">User Information</h1>
        <div class="container123">

            <div class="header">
                <img src="img/rr.jpg" alt="Student Photo" class="picture">
            </div>

            <!-- Menu Button -->
            <div class="menu-button">
                <ion-icon name="menu-outline" id="menu-icon"></ion-icon>
                <div id="menu-modal" class="modal">
                    <div class="modal-content">
                        <span class="close-modal" id="close-icon">&times;</span>
                        <h2>Menu</h2>
                        <!-- Add your menu items here -->
                        <ul>
                            <li><a href="#">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                            <li><a href="#">Item 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Personal Information -->
            <div class="form-group">
                <h5><u>Personal Information</u></h5>
                <label for="full-name">Full Name: <i>(Lastname, Firstname, Middle Name)</i></label>
                <input type="text" id="full-name" name="full-name" value="Draguin, Sam C." readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Gender:</label>
                <input type="text" id="grade-level" name="grade-level" value="Male" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Date of birth: <i>(Month Day, Year)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="April 01, 2000" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Address: <i>(House Number, Street/Building Name, Barangay, City, Province)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="256 Barangay Lodlod Malvar Batangas" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Contact Number: <i>(09XX-XXX-XXXX)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="09987654321" readonly>
            </div>

            <!-- Academic Information -->
            <div class="form-group">
                <h5><u>Academic Information</u></h5>
                <label for="grade-level">SR-CODE: <i>(20-XXXXX)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="20-54321" readonly>
            </div>

            <div class="form-group">
                <label for="grade-level">Gsuit Email: <i>(20-XXXXX@g.batstate-u.edu.ph)</i></label>
                <input type="text" id="grade-level" name="grade-level" value="20-54321@g.batstate-u.edu.ph" readonly>
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
                <label for="grade-level">Academic Status:</label>
                <input type="text" id="grade-level" name="grade-level" value="Graduated" readonly>
            </div>

            <!--  records/credentials -->
            <div class="form-group">
                <h5><u>Records</u></h5>
                <label for="proofOfEnrollment">Transcript of Records:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="TOR.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
            </div>

            <div class="form-group">
                <label for="proofOfEnrollment">Diploma:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="Diploma.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
            </div>

            <div class="form-group">
                <label for="proofOfEnrollment">Certificates Received:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="Certificate.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
            </div>

            <div class="form-group">
                <label for="grade-level">Credits Earned:</label>
                <input type="text" id="grade-level" name="grade-level" value="5690 Active points" readonly>
            </div>

            <!-- Parent/Guardian Information -->
            <div class="form-group">
                <h5><u>Relationship Information</u></h5>
                <label for="parent-name">Parent/Guardian Name: <i>(Lastname, Firstname, Middle Name)</i></label>
                <input type="text" id="parent-name" name="parent-name" value="Draguin, Ron K." readonly>
            </div>

            <div class="form-group">
                <label for="relationship">Relationship:</label>
                <input type="text" id="relationship" name="relationship" value="Father" readonly>
            </div>

            <div class="form-group">
                <label for="parent-phone">Parent/Guardian Phone: <i>(09XX-XXX-XXXX)</i></label>
                <input type="text" id="parent-phone" name="parent-phone" value="0998-765-4321" readonly>
            </div>

            <div class="form-group">
                <label for="parent-phone">Address: <i>(House Number, Street/Building Name, Barangay, City, Province)</i></label>
                <input type="text" id="parent-phone" name="parent-phone" value="0980 Barangay Lodlod Malvar Batangas" readonly>
            </div>

            <div class="form-group">
                <label for="proofOfEnrollment">Parent Concent:</label>
                <input type="text" id="proofOfEnrollment" name="proofOfEnrollment" value="parentalConcent.pdf" readonly>
                <a href="#" id="viewProofButton" style="color: #dc3545;;">View the file</a>
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

            /* for modal */
            // Get references to the menu icon and the modal
            const menuIcon = document.getElementById("menu-icon");
            const menuModal = document.getElementById("menu-modal");
            const closeIcon = document.getElementById("close-icon");

            // Function to open the modal
            function openModal() {
                menuModal.style.display = "block";
            }

            // Function to close the modal
            function closeModal() {
                menuModal.style.display = "none";
            }

            // Event listeners for opening and closing the modal
            menuIcon.addEventListener("click", openModal);
            closeIcon.addEventListener("click", closeModal);

            // Close the modal if the user clicks outside of it
            window.addEventListener("click", (event) => {
                if (event.target === menuModal) {
                    closeModal();
                }
            });
        </script>
</body>

</html>