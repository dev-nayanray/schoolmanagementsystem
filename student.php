<?php include 'header.php';?>

<main class="container">
        <section class="profile">
            <div class="profile-image">
                <!-- User's profile photo -->
                <img src="asset/1.jpg" alt="User Photo">
            </div>
            <div class="profile-details">
                <!-- User's basic information -->
                <h1>User's Name</h1>
                <p>Email: user@email.com</p>
                <p>Contact: +123456789</p>
            </div>
        </section>

        <section class="tabs">
            <!-- Tabs or sections to organize information neatly -->
            <ul>
                <li><a href="#education">Educational History</a></li>
                <li><a href="#personal">Personal Details</a></li>
            </ul>
        </section>

        <section id="education" class="profile-section">
            <!-- Educational history section -->
            <h2>Educational History</h2>
            <p>School/University: XYZ School</p>
            <p>Degree: Bachelor's in Science</p>
            <p>Graduation Year: 2020</p>
        </section>

        <section id="personal" class="profile-section">
            <!-- Personal details section -->
            <h2>Personal Details</h2>
            <p>Date of Birth: January 1, 1990</p>
            <p>Address: 123 Main St, City</p>
            <!-- Add more personal details as needed -->
        </section>

        <section class="edit-profile">
            <!-- Link to edit profile page -->
            <a href="edit.php">Edit Profile</a>
        </section>
    </main>
    <?php include 'footer.php';?> 