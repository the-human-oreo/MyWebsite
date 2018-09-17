<?php

$page_title = "Oliver Robinson's Web Presence";
$page_description = "Oliver Robinson - Wannabe Developer from Cardiff Metropolitan University. Trying to start a career some kind of development. Come and see where we go from here.";
$page_author = "Oliver Robinson";
$page_keywords = "Designer, Developer, Cardiff, Cardiff Metropolitan University, Java, Manchester, Portfolio, Programming, Project, Python, Visual Basic, Visual Studio";

include 'prefab/header.php';
?>

    <style>

    </style>

<?php
include 'prefab/nav.php';
?>



    <section id="home">

        <p>
            Welcome to my website!
            <br>
            <br>
            This website was created on the 10th of January 2018 as an attempt to diversify my skill set, maybe it will
            work, maybe it won't, only time will tell!
            <br>
            <br>
            Finally brought to the internet for real on the 9th on September 2018, no pressure and all that.
            <br>
            <br>
            Can you tell I'm not a web developer?
        </p>

    </section>

    <section id="about">

        <h2>About Me</h2>

        I'm a bit of technophile, bit of a retro lover, a bit afraid of over-development, and a whole lot of "quirky"

    </section>

    <section id="education">

        <h2>Education</h2>

        All the stuff I've 'officially' been 'taught'

    </section>

    <section id="skills">

        <h2>Skills</h2>

        This section is for my skills... I swear it's not always this empty here.

    </section>

    <section id="experience">

        <h2>Experience</h2>

        All the places I've done business things at, whether or not they wanted me to or paid me for them.

    </section>

    <section id="projects">

        <h2>Projects</h2>

        Space for any projects I feel are noteworthy, even if they're completely out of my current skill-set and ability
        to complete.
        <br>
        <br>
        Currently I'm designing this website (obviously), working on a Java application that does stuff, and continuing
        development on a discord bot in python.

    </section>

    <section id="contact">

        <h2>Contact</h2>

        <form action="mailto:oliver.robinson@devwork.co.uk" method="post">

            <label for="name"><h3>Name</h3></label>
            <input type="text" id="name" placeholder="Your name here.">
            <p></p>

            <label for="emailAddress">Email Address</label>
            <input type="email" id="emailAddress" placeholder="Your email here." required>
            <p></p>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Your message here." required></textarea>
            <p></p>

            <input type="submit" name="submit" value="Submit">

        </form>

    </section>

<?php
include 'prefab/footer.php';
?>