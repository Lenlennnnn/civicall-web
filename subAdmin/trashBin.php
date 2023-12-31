<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trash Bin Events</title>
    <link rel="icon" type="image/png" href="login/images/icons/civicicon.png" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        .h1-group {
            position: relative;
            bottom: 58px;
            right: 180px;
        }

        .custom-button {
            position: absolute;
            top: 100px;
            left: -165px;
            transform: translate(-50%, -50%);
            cursor: pointer;
            /* Change cursor to pointer */
            /* Other button styling properties */

            /* Transition effect for hover */
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
            z-index: 1;
        }

        .custom-button:hover {
            background-color: #007bff;
            /* Change background color on hover */
            color: #fff;
            /* Change text color on hover */
            transform: translate(-50%, -50%) scale(1.05);
            /* Scale up slightly on hover */
        }


        .back-button:hover {
            background-color: #8c0000;
            /* Change background color on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Add shadow on hover */
            transform: scale(1.1);
            /* Slightly scale up on hover */
        }

        .main {
            background-color: #E1E1E1;
            border-radius: 50% 0px 0px 50%;
        }

        body {
            background-color: #E1E1E1;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .tableHead {
            background-color: #343a40;
        }

        th {
            color: white;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }


        tr {
            background-color: white;
        }

        tr:hover {
            background-color: #ccc;
        }

        .selectAll {
            display: inline-block;
            margin-bottom: 10px;
        }

        .highlight {
            background-color: yellow;
        }

        /* Style for the Delete button */
        button {
            padding: 5px 10px;
            margin-left: 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            /* Add transition properties */
        }

        /* Hover effect for the Delete button */
        button:hover {
            background-color: #c82333;
            /* Change background color on hover */
            transform: scale(1.05);
            /* Slightly scale up on hover */
        }

        /* Style for the Restore button */
        .restore-button {
            padding: 5px 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            /* Add transition properties */
        }

        /* Hover effect for the Restore button */
        .restore-button:hover {
            background-color: green;
            /* Change background color on hover */
            transform: scale(1.05);
            /* Slightly scale up on hover */
        }


        .tableAll {
            position: relative;
            right: 150px;
        }

        .check {
            width: 20px;
        }

        .date {
            color: gray;
        }

        /* delete modal css */
        /* The modal container */


        /* Modal content */
        .modal-content {
            background-color: white;
            width: 300px;
            height: 200px;
            /* Adjust the height as needed */
            margin: auto;
            /* Center both horizontally and vertically */
            position: relative;
            top: 30%;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }



        /* Style for the "Yes, Delete" button */
        #confirmDelete {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
        }

        /* Style for the "Cancel" button */
        #cancelDelete {
            /* Add these styles to center the button horizontally */
            display: block;
            margin: 0 auto;
            margin-top: 15px;
            background-color: #ccc;
            color: #333;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            width: 100px;
        }


        /* restore modal */
        /* Style for the "Yes, Restore" button */
        #confirmRestore {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
        }

        /* Style for the "Cancel" button */
        #cancelRestore {
            display: block;
            margin: 0 auto;
            margin-top: 15px;
            background-color: #ccc;
            color: #333;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            width: 100px;
        }

        /* event modal */
        /* Style for the modal */
        .modalEvent {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content-event {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 60%;
        }

        /* Style for the table row (hover) */
        table tr:hover {
            background-color: #dcdcdc;
            cursor: pointer;
        }

        /* modal report user */
        .modalReport {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content-report {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 60%;
        }

        /* Style for the user profile section */
        .user-profile {
            margin-bottom: 20px;
        }

        .profile-image {
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Style for the report options */
        .report-options {
            margin-top: 20px;
        }

        p {
            text-align: left;
        }

        .scrollable-text {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
            /* Allow vertical resizing */
            height: 300px;
            /* Set the initial height */
            width: 100%;
            /* Allow vertical resizing */
            overflow-y: auto;
            /* Enable vertical scroll when content exceeds height */
            font-size: 14px;
            /* Adjust the font size as needed */
            line-height: 1.5;
        }

        .fixed-height-textarea {
            height: 150px;
            /* Set the desired height */
            width: 100%;
            resize: none;
            /* Prevent resizing by the user */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="topbar">
            <a href="dashboard.php">
                <div class="back-button">
                    <ion-icon name="return-down-back-outline"></ion-icon>
                </div>
            </a>
            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        </div>
        <h1 class="h1-group">Recycle Bin</h1>
        <div class="tableAll">
            <div class="selectAll">
                <input type="checkbox" id="selectAllCheckbox"> <label for="selectAllCheckbox">Select All</label>
                <button class="delete-button">Delete</button>
                <button class="restore-button">Restore</button>
                <a href="trashBin2.php">
                    <button type="button" class="btn btn-secondary">View Accounts</button>
                </a>
            </div>
            <!-- delete modal -->
            <div id="deleteModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close"></span>
                    <p>Are you sure you want to delete the selected item?</p>
                    <button id="confirmDelete">Yes, Delete</button>
                    <button id="cancelDelete">Cancel</button>
                </div>
            </div>

            <!-- restore modal -->
            <!-- The modal -->
            <div id="restoreModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close"></span>
                    <p>Are you sure you want to restore selected item?</p>
                    <button id="confirmRestore">Yes, Restore</button>
                    <button id="cancelRestore">Cancel</button>
                </div>
            </div>


            <table>
                <thead>
                    <tr>
                        <th class="tableHead" colspan="3">Events recently Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="check"><input type="checkbox" class="rowCheckbox"></td>
                        <td class="open-modal-event">The environmental cleaning program has been deleted. <span class="date" style="margin-left: 427px;">2023-03-23</span></td>
                    </tr>
                </tbody>
            </table>
            <!-- Modal event -->
            <div id="myModalEvent" class="modalEvent">
                <div class="modal-content-event">
                    <span class="close" id="closeModalEvent"></span>
                    <div>
                        <div class="event-details">
                            <h1 class="event-title">Sustainable Environmental Cleaning</h1>
                            <p><b>Title:</b> Revitalizing Our World</p>
                            <p><b>Campus:</b> Malvar</p>
                            <p><b>Location:</b> Malvar Batangas</p>
                            <h4>Time & Date:</h4>
                            <p>9:00 am - 9:00 pm<br />April 12, 2023 (Tuesday)</p>
                        </div>
                    </div>
                    <h2>Project Description</h2>
                    <div class="event-description">
                        <div class="description-info">
                            <h3>Introduction</h3>
                            <p>
                                Environmental pollution is a significant issue that affects human
                                health and the planet's ecosystem. The Environmental Cleaning
                                Program aims to create awareness and promote community action
                                towards cleaning up the environment by organizing activities that
                                support the environment's health and hygiene.
                            </p>
                        </div>
                        <div class="description-info">
                            <h3>Objectives</h3>
                            <p>
                                <i> main objectives of the Environmental Cleaning Program are:</i><br /><br />

                                To create awareness about environmental pollution and its effects on
                                human health and the ecosystem. To promote the adoption of
                                environmentally friendly practices in homes, workplaces, and
                                communities. To mobilize communities to participate in activities
                                that promote environmental cleanliness, including cleaning
                                campaigns, waste management, and recycling. To collaborate with
                                local authorities, non-governmental organizations, and other
                                stakeholders to develop and implement policies and programs that
                                promote environmental cleanliness. To evaluate and continuously
                                improve the program's effectiveness and impact.
                            </p>
                        </div>
                        <div class="description-info">
                            <h3>Program Components</h3>
                            <p>
                                The Environmental Cleaning Program consists of several components:
                                Community Education and Awareness: This component involves
                                conducting awareness-raising campaigns, seminars, and training
                                sessions to educate communities on environmental pollution and its
                                effects. It includes topics such as waste management, recycling, and
                                adopting environmentally friendly practices. Environmental Clean-up
                                Activities: This component involves organizing clean-up activities
                                such as community clean-up campaigns, tree planting activities, and
                                recycling initiatives. These activities will be conducted in
                                collaboration with local authorities, non-governmental
                                organizations, and other stakeholders. Waste Management and
                                Recycling: This component involves promoting waste reduction, proper
                                waste disposal, and recycling practices. It includes educating
                                communities on how to sort waste, composting, and the benefits of
                                recycling. Advocacy and Policy Development: This component involves
                                advocating for policies that promote environmental cleanliness and
                                working with local authorities to implement and enforce these
                                policies.
                            </p>
                        </div>
                        <div class="description-info">
                            <h3>Evaluation and Monitoring</h3>
                            <p>
                                The Environmental Cleaning Program will be regularly evaluated to
                                determine its effectiveness and impact. This will involve tracking
                                key performance indicators such as the number of community clean-up
                                campaigns conducted, the amount of waste recycled, and the number of
                                policies implemented. Feedback from program participants and other
                                stakeholders will also be solicited to inform program improvements.
                            </p>
                        </div>
                        <div class="description-info">
                            <h3>Conclusion</h3>
                            <p>
                                The Environmental Cleaning Program aims to create awareness and
                                promote community action towards cleaning up the environment. By
                                organizing activities that support the environment's health and
                                hygiene, promoting environmentally friendly practices, and
                                collaborating with local authorities and other stakeholders, the
                                program aims to create a sustainable and clean environment for all.
                            </p>
                        </div>
                        <div class="description-info">
                            <h3>Members:</h3>
                            <p>
                                Sarah Johnson <br />
                                Michael Lee <br />
                                Ashley Rodriguez <br />
                                Brandon Singh <br />
                                Rachel Chen <br />
                                Jason Patel <br />
                                Melissa Wong <br />
                                Christopher Kim <br />
                                Olivia Martinez <br />
                                William Chen <br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Get the select all checkbox
        const selectAllCheckbox = document.getElementById("selectAllCheckbox");

        // Get all row checkboxes
        const rowCheckboxes = document.querySelectorAll(".rowCheckbox");

        // Add event listener to select all checkbox
        selectAllCheckbox.addEventListener("change", function() {
            const isChecked = this.checked;
            rowCheckboxes.forEach(function(checkbox) {
                checkbox.checked = isChecked;
            });
        });

        /* delete modal js */
        // Get the modal and buttons
        const modal = document.getElementById('deleteModal');
        const confirmButton = document.getElementById('confirmDelete');
        const cancelButton = document.getElementById('cancelDelete');


        // Function to open the modal
        function openModal() {
            modal.style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            modal.style.display = 'none';
        }

        // Event listeners
        confirmButton.addEventListener('click', () => {
            // Add your delete logic here
            console.log('Item deleted');
            closeModal();
        });

        cancelButton.addEventListener('click', closeModal);


        // Show the modal when the Delete button is clicked
        const deleteButton = document.querySelector('.delete-button');
        deleteButton.addEventListener('click', openModal);

        /* restore js */
        // Get the modal and buttons
        const restoreModal = document.getElementById('restoreModal');
        const confirmRestoreButton = document.getElementById('confirmRestore');
        const cancelRestoreButton = document.getElementById('cancelRestore');


        // Function to open the modal
        function openRestoreModal() {
            restoreModal.style.display = 'block';
        }

        // Function to close the modal
        function closeRestoreModal() {
            restoreModal.style.display = 'none';
        }

        // Event listeners
        confirmRestoreButton.addEventListener('click', () => {
            // Add your restoration logic here
            console.log('Item restored');
            closeRestoreModal();
        });

        cancelRestoreButton.addEventListener('click', closeRestoreModal);

        // Show the modal when the Restore button is clicked
        const restoreButton = document.querySelector('.restore-button');
        restoreButton.addEventListener('click', openRestoreModal);

        /* event modal js */
        // Get the modal and the close button
        const modalEvent = document.getElementById("myModalEvent");
        const closeModalEvent = document.getElementById("closeModalEvent");

        // Get the table data that opens the modal
        const openModalEventTrigger = document.querySelector(".open-modal-event");

        // When the user clicks the table data, open the modal
        openModalEventTrigger.addEventListener("click", function() {
            modalEvent.style.display = "block";
        });

        // When the user clicks the close button, close the modal
        closeModalEvent.addEventListener("click", function() {
            modalEvent.style.display = "none";
        });

        // When the user clicks outside the modal, close it
        window.addEventListener("click", function(event) {
            if (event.target === modalEvent) {
                modalEvent.style.display = "none";
            }
        });
    </script>
</body>

</html>