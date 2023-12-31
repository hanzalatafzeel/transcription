<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcription </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Trans<span>cription</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="adminpannel.php" class="menu-btn">Admin</a></li>
                <li><a href="userpannel.php" class="menu-btn">User Pannel </a></li>
                <li><a href="#about" class="menu-btn">About Us</a></li>
                <li><a href="#pricing" class="menu-btn">Pricing</a></li>
                <li><a href="#tutorials" class="menu-btn">Tutorials</a></li>
                <li><a href="#services" class="menu-btn">Our Services</a></li>
                <li><a href="#contact" class="menu-btn">Contact Us</a></li>
                <span class="nnavbar">
                <?php if (isset($_SESSION['logged'])) { ?>
    <li><a  href="logout.php">Log Out</a></li>
    <?php } else {
        //  header("location: sign_up.php")
         ?>
                    <li><a class="cd-signin"  >Sign in</a></li>
                    <li><a class="cd-signup"  >Sign up</a></li>
                    <?php } ?>
                </span>
                <!-- <li><a href="#reg-log" class="menu-btn">Register/Login</a></li> -->
                <li><a href="#qna" class="menu-btn">Q&A</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Your Name</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <!-- <a href="#">Hire me</a> -->
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Us</h2>
            <div class="about-content">
                <div class="column left">
                    <!-- <img src="portfolioimg/myimg.jpeg" alt=""> //here you can put your image -->
                </div>
                <div class="column right">
                    <div class="text">I'm Yourname and I'm a <span class="typing-2"></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quidem repellat aperiam ullam
                        vitae mollitia dolore, quis odio, fugit minima adipisci vero maxime itaque sint repudiandae
                        nesciunt recusandae blanditiis eaque facilis deserunt rerum, nam quae. Deleniti repellat
                        provident, laboriosam temporibus, atque eum facere officiis sit, deserunt cumque dicta debitis
                        quod itaque libero soluta repellendus vel voluptate ipsam sed adipisci! Rem maiores accusamus
                        suscipit, atque ipsum inventore necessitatibus similique ullam. Debitis omnis minus corrupti ad
                        quo nam, necessitatibus voluptates iste deleniti recusandae ratione sapiente iusto voluptatem
                        adipisci non nihil dignissimos assumenda cum quas illum itaque. Error, deserunt! Consectetur
                        doloremque nihil, unde earum voluptate perferendis placeat eum, repellat dolorem deserunt
                        exercitationem veniam nisi assumenda. Molestiae aperiam ullam unde! Voluptates doloribus,
                        tempore aliquid laboriosam ipsam ea, qui, nesciunt quo voluptatum aut ex beatae cum iste! Odit
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- pricing section start  -->

    <section class="services" id="pricing">
        <div class="max-width">
            <h2 class="title">Pricing</h2>
            <div class="serv-content">

                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Basic Plan</div>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem, ipsum.</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Regular Plan</div>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Premium Plan</div>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem, ipsum </p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>
                        <p>Lorem ipsum dor Lorem. fa</p>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- turorial section start -->
    <section class="skills" id="tutorials">
        <div class="max-width">
            <h2 class="title">Tutorials</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text"> How to use</div>
                    <p>Here you can put the information about how to use this website Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Eos ex, voluptas sunt repellendus id impedit neque illum
                        temporibus quibusdam modi!</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    here you can put the video tutorial
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our services</h2>
            <div class="serv-content">
                <!-- <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">painting</div>
                        <p>I love to do painting, calligraphy and I'm also an avid fan of Photography. I've been drawing for years.</p>
                        <p>Acrylic painting, pouring - Fluid art or liquid painting, mini canvas</p>
                        <p>Oil pastel</p>
                        <p>Arabic Calligraphy</p>
                    </div>
                </div> -->
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Translation</div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae animi aliquam optio
                            enim aperiam rem obcaecati harum minus deserunt fugit corrupti doloremque eos nesciunt
                            perspiciatis ratione voluptatem sequi, accusamus fugiat magnam. Nemo, impedit magnam ab
                            mollitia sapiente quisquam facilis, qui reiciendis, unde aut debitis deleniti. Cupiditate
                            assumenda quidem vero temporibus.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Transcription</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, itaque fugiat
                            recusandae repellendus quas adipisci quos neque dolor! Expedita deleniti suscipit illo velit
                            nisi quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolor!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, veniam? Lorem ipsum dolor
                            sit amet consectetur adipisicing elit. Reiciendis, laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- skills section start -->
    <!-- <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>
                    <ul>
                        <li>Working on a product based site with my team.</li>
                        <li>Web Developer intern</li>
                        <li>Working as a Web Designing intern at FTK-CIT Jamia Millia Islamia</li>
                        <li>Campus Ambassador </li>
                    </ul>
                    </p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>40%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>30%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p></p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Your Name</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Your Address</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">youremail@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- qna -->

    <section class="qna" id="qna">

        <div class="w3-center ws-black w3-animate-zoom" style="margin-top: -1px;">
            <div class="w3-center w3-content">
                <div class="faq w3-center w3-content" style="padding-top: 40px;">
                    <h2 class="title"><b>Frequently Asked Questions</b></h2>
                    <button class="accordion" style="display: flex; flex-direction: row;"><img class="faq-icon"
                            src="https://cdn.jsdelivr.net/gh/linuxguist/faqa@main/chevron-down.svg"> &nbsp; &nbsp; <b
                            style="padding-top: 2px;">What is an FAQ page?</b></button>
                    <div class="panel" style="display: none;">
                        <div class="paragraphs" id="myDiv_id1"></div>
                        <p id="paragraph_id1" style="display: none;">Frequently Asked Questions (FAQ) pages contain a list of commonly asked questions and answers on a website about topics such as hours,shipping and handling, product information, and return policies. Sure there are chatbots, support lines, and customer reviews to help shoppers on their path to purchase, but there’s one forgotten customer service tactic that is cost-effective and streamlined. That tactic is an FAQ page.
                        </p>
                    </div>
                    <button class="accordion" style="display: flex; flex-direction: row;"><img class="faq-icon"
                            src="https://cdn.jsdelivr.net/gh/linuxguist/faqa@main/chevron-down.svg"> &nbsp; &nbsp; <b
                            style="padding-top: 2px;">Why you should make an FAQ page?</b></button>
                    <div class="panel" style="display: none;">
                        <div class="paragraphs" id="myDiv_id2"></div>
                        <p id="paragraph_id2" style="display: none;">An FAQ page is a time-saving customer service tactic that provides the most commonly asked questions and answers for current or potential customers. Before diving into how to make an FAQ page, you need to know why having one is so important. There are so many reasons beyond improving the customer experience for perfecting your FAQ page. Keep in mind the importance of an FAQ page when developing your own e-commerce website so you can make sure it increases sales and not the other way around.
                        </p>
                    </div>
                    <button class="accordion" style="display: flex; flex-direction: row;"><img class="faq-icon"
                            src="https://cdn.jsdelivr.net/gh/linuxguist/faqa@main/chevron-down.svg"> &nbsp; &nbsp; <b
                            style="padding-top: 2px;">How to make an FAQ page?</b></button>
                    <div class="panel" style="display: none;">
                        <div class="paragraphs" id="myDiv_id3"></div>
                        <p id="paragraph_id3" style="display: none;">There are seven simple steps to make the perfect FAQ page for your business. The design of an FAQ page is crucial for an easy-to-use customer                               experience. Follow these steps and your customer success team will thank you.
                            1. Determine the questions
                            2. Categorize the questions
                            3. Highlight or link the most popular questions
                            4. Include a search bar
                            5. Align with your brand look and feel
                            6. Update regularly
                            7. Track and improve
                        </p>
                    </div>
                    <button class="accordion" style="display: flex; flex-direction: row;"><img class="faq-icon"
                            src="https://cdn.jsdelivr.net/gh/linuxguist/faqa@main/chevron-down.svg"> &nbsp; &nbsp; <b
                            style="padding-top: 2px;">What are the most frequently asked questions?</b></button>
                    <div class="panel" style="display: none;">
                        <div class="paragraphs" id="myDiv_id4"></div>
                        <p id="paragraph_id4" style="display: none;">A good FAQ is general enough to address many issues. There are questions that just about every company answers on their FAQ page, so if you’re struggling to get started use these as your starting point. If they’re relevant to your company, of course.

                            1. What is the return policy?
                            2. What are the shipping options?
                            3. What do I do if I never received my order?
                            4. When will I receive my order?
                            5. How do I make sure I order the right size?
                            6. Where are you located?
                            7. Can I make changes to an order I already placed?
                            8. How do I get a new password?
                        </p>
                    </div>
                    <button class="accordion" style="display: flex; flex-direction: row;"><img class="faq-icon"
                            src="https://cdn.jsdelivr.net/gh/linuxguist/faqa@main/chevron-down.svg"> &nbsp; &nbsp; <b
                            style="padding-top: 2px;">How to answer your FAQs?</b></button>
                    <div class="panel" style="display: none;">
                        <div class="paragraphs" id="myDiv_id5"></div>
                        <p id="paragraph_id5" style="display: none;">When crafting the answers to your FAQs, involve someone from PR. It’s unlikely you have an entire PR team on your staff, which is OK, but there are plenty of freelance PR specialists who can give input while writing these answers. It will highly benefit you to consider hiring one for a week or two. Some of these questions could cause you to expose shortcomings of your product or service, so it is imperative that you position these answers in a positive light while remaining truthful.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- login/signup  -->


	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a  >Sign in</a></li>
				<li><a  >New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form" action="log_in.php" method="POST">
					<p class="fieldset">
						<!-- <label class="image-replace cd-email" for="signin-email">E-mail</label> -->
						<input class="full-width has-padding has-border" id="signin-email" name="email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<!-- <label class="image-replace cd-password" for="signin-password">Password</label> -->
						<input class="full-width has-padding has-border" id="signin-password" name="password" type="text"  placeholder="Password">
						<a   class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding " name="login" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a  >Forgot your password?</a></p>
				<!-- <a   class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form" action="sign_up.php" method="post" enctype="plain/text">
					
                    <p class="fieldset">
						<!-- <label class="image-replace cd-email" for="signup-email">E-mail</label> -->
						<input class="full-width has-padding has-border" id="signup-name" name="signup-name" type="text" placeholder="John Smith">
						<span class="cd-error-message" id="email_error">Error message here!</span>
					</p>
                    <p class="fieldset">
						<!-- <label class="image-replace cd-email" for="signup-email">E-mail</label> -->
						<input class="full-width has-padding has-border" id="signup-email" name="signup-email" type="email" placeholder="example@gmail.com">
						<span class="cd-error-message" id="email_error">Error message here!</span>
					</p>

					<p class="fieldset">
						<!-- <label class="image-replace cd-password" for="signup-password">Password</label> -->
						<input class="full-width has-padding has-border" id="signup-password" type="text" name="signup-password" placeholder="password" >
						<a   class="hide-password">Hide</a>
						<span class="cd-error-message" id="password_error">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms" required>
						<label for="accept-terms">I agree to the <a  >Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding hide" type="submit" name="signup" id="signup" value="Create account" enabled>
					</p>
				</form>

				<!-- <a   class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a  >Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a   class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
    

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="com">Fahad Ansari & Hanzala Tafzeel</a> | <span class="far fa-copyright"></span> 2023 All rights
            reserved.</span>
    </footer>

    <script src="script.js"></script>
    <script src="validate.js"></script>
</body>

</html>