<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Information</title>
  <link rel="stylesheet" href="css/eventInfo.css" />
  <link rel="icon" type="image/png" href="login/images/icons/civicicon.png" />


  <style>
    #main-info {
      background-color: white;
    }

    body {
      background-color: #E1E1E1;
    }
  </style>
</head>

<body>
  <div id="main-info">
    <div class="event-info">
      <div class="edit-button">
        <a href="#" id="editButton">
          <ion-icon name="pencil-outline"></ion-icon>
        </a>
      </div>
      <div class="event-image">
        <img src="img/LTS.jpg" alt="Event Image" />
      </div>
      <a href="pendingAct.php">
        <div class="back-button">
          <ion-icon name="return-down-back-outline"></ion-icon>
        </div>
      </a>
      <!-- ====== ionicons ======= -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <div class="event-details">
        <h1 class="event-title">Lesson Learned</h1>
        <p><b>Title:</b> Never Stop Learning</p>
        <p><b>Campus:</b> Malvar</p>
        <p><b>Location:</b> Malvar Batangas</p>
        <h4>Set Time & Date:</h4>
        <div class="time-date">
          <label for="event-time"><ion-icon name="time-outline" class="time-icon"></ion-icon> Time:
            &nbsp;</label>
          <input type="time" id="event-time" name="event-time" required />
        </div>
        <div class="time-date">
          <label for="event-date"><ion-icon name="calendar-outline" class="calendar-icon"></ion-icon>
            Date: &nbsp;</label>
          <input type="date" id="event-date" name="event-date" required />
        </div>
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

        <h3>Evaluation and Monitoring</h3>
        <p>
          The Environmental Cleaning Program will be regularly evaluated to
          determine its effectiveness and impact. This will involve tracking
          key performance indicators such as the number of community clean-up
          campaigns conducted, the amount of waste recycled, and the number of
          policies implemented. Feedback from program participants and other
          stakeholders will also be solicited to inform program improvements.
        </p>

        <h3>Conclusion</h3>
        <p>
          The Environmental Cleaning Program aims to create awareness and
          promote community action towards cleaning up the environment. By
          organizing activities that support the environment's health and
          hygiene, promoting environmentally friendly practices, and
          collaborating with local authorities and other stakeholders, the
          program aims to create a sustainable and clean environment for all.
        </p>

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
      <div class="launch-button">
        <a href="dashboard.php" class="launch-link">
          <ion-icon name="rocket"></ion-icon>
          <span>Launch Event</span>
        </a>
      </div>
    </div>
  </div>
  <script>
    const editButton = document.getElementById("editButton");
    const contentElements = document.querySelectorAll(".description-info p");
    let isEditing = false;

    editButton.addEventListener("click", () => {
      isEditing = !isEditing;
      contentElements.forEach((element) => {
        element.contentEditable = isEditing;
        element.style.border = isEditing ? "1px solid #000" : "none";
      });

      // Toggle the edit button's style based on the editing state
      if (isEditing) {
        editButton.classList.add("editing");
      } else {
        editButton.classList.remove("editing");
      }
    });
  </script>
</body>

</html>