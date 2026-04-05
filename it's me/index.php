<?php include 'header.php'; ?>

<section class="hero">
    <h1>Welcome to Nishant's Website</h1>
    <p>Creative Developer | Designer | Innovator</p>
    <button onclick="scrollToForm()">Contact Me</button>
</section>

<section class="about">
    <h2>About Nishant</h2>

<?php
$name = "Nishant";
$skill = "Full Stack Web Developer";

echo "<p>Hello! My name is <b>$name</b>. I am a passionate $skill who loves creating modern websites.</p>";
?>

</section>

<section class="services">

<h2>My Services</h2>

<div class="cards">

<div class="card">
<h3>Web Development</h3>
<p>Modern responsive websites using latest technologies.</p>
</div>

<div class="card">
<h3>UI Design</h3>
<p>Creative and user friendly interfaces.</p>
</div>

<div class="card">
<h3>SEO Optimization</h3>
<p>Boost your website ranking on Google.</p>
</div>

</div>

</section>

<section class="contact" id="contact">

<h2>Contact Nishant</h2>

<form action="form.php" method="POST">

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Your Email" required>

<textarea name="message" placeholder="Your Message"></textarea>

<button type="submit">Send Message</button>

</form>

</section>

<?php include 'footer.php'; ?>