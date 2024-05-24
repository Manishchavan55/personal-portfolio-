<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Portfolio</title>
    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="svg.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        @media (max-width: 768px) {
            .home .home-content a {
                display: none;
            }
            .home-content h3 {
             font-size: 24px;
              padding: 0.6rem 0 1rem 1rem;
             }

            .download .botao {
                display: block;
            }

            .about p {

                font-size: 14px;
                overflow: hidden;
                height: 62vw;
                text-align: justify;
            }
        }

        .botao {

            width: 125px;
            height: 45px;
            border-radius: 20px;
            border: none;
            box-shadow: 1px 1px rgba(107, 221, 215, 0.37);
            padding: 5px 10px;
            background-color: rgb(59, 190, 230);
            color: #fff;
            font-family: Roboto, sans-serif;
            font-weight: 505;
            font-size: 16px;
            line-height: 1;
            cursor: pointer;
            filter: drop-shadow(0 0 10px rgba(59, 190, 230, 0.568));
            transition: 0.5s linear;
            display: none;
        }

        .botao .mysvg {
            display: none;
        }

        .botao:hover {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            transition: 0.5s linear;
        }

        .texto {
            color: white;
             
        }

        .botao:hover .texto {
            display: none;
        }

        .botao:hover .mysvg {
            display: inline;
        }

        .botao:hover::after {
            content: "";
            position: absolute;
            width: 16px;
            height: 3px;
            background-color: rgb(59, 190, 230);
            margin-left: -20px;
            animation: animate 0.9s linear forwards;
        }

        .botao:hover::before {
            content: "";
            position: absolute;
            top: -3px;
            left: -3px;
            width: 100%;
            height: 100%;
            border: 3.5px solid transparent;
            border-top: 3.5px solid #fff;
            border-right: 3.5px solid #fff;
            border-radius: 50%;
            animation: animateC 2s linear infinite;
            animation-delay: 2s;
        }

        @keyframes animateC {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(20px);
            }
        }
    </style>
</head>

<body>
    <header class="header">

        <a href="" class="logo">SAU<span>R</span>ABH</a>
        <i class="bx bx-menu" id="logo"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#skill">Skill</a>
            <a href="#Project">Project</a>
            <a href="#contact">Contact</a>
        </nav>

    </header>
    <section class="home" id="home">
        <div class="phone-media">
            <div class="buttons">
                <button class="main-button">
                    <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.75 5.125a3.125 3.125 0 1 1 .754 2.035l-8.397 3.9a3.124 3.124 0 0 1 0 1.88l8.397 3.9a3.125 3.125 0 1 1-.61 1.095l-8.397-3.9a3.125 3.125 0 1 1 0-4.07l8.397-3.9a3.125 3.125 0 0 1-.144-.94Z">
                        </path>
                    </svg>
                </button>


                <button class="messenger-button button"
                    style="transition-delay: 0.3s, 0s, 0.3s; transition-property: translate, background, box-shadow;">
                    <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <a href="https://www.messenger.com/t/100028450540589/">
                            <path
                                d="M2 11.7C2 6.126 6.366 2 12 2s10 4.126 10 9.7c0 5.574-4.366 9.7-10 9.7-1.012 0-1.982-.134-2.895-.384a.799.799 0 0 0-.534.038l-1.985.877a.8.8 0 0 1-1.122-.707l-.055-1.779a.799.799 0 0 0-.269-.57C3.195 17.135 2 14.615 2 11.7Zm6.932-1.824-2.937 4.66c-.281.448.268.952.689.633l3.156-2.395a.6.6 0 0 1 .723-.003l2.336 1.753a1.501 1.501 0 0 0 2.169-.4l2.937-4.66c.283-.448-.267-.952-.689-.633l-3.156 2.395a.6.6 0 0 1-.723.003l-2.336-1.754a1.5 1.5 0 0 0-2.169.4v.001Z">
                            </path>
                        </a>
                    </svg>
                </button>
                <button class="whatsapp-button button"
                    style="transition-delay: 0.7s, 0s, 0.7s; transition-property: translate, background, box-shadow;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="30"
                        width="30">
                        <a href="https://wa.me/+918208136708">
                            <path
                                d="M19.001 4.908A9.817 9.817 0 0 0 11.992 2C6.534 2 2.085 6.448 2.08 11.908c0 1.748.458 3.45 1.321 4.956L2 22l5.255-1.377a9.916 9.916 0 0 0 4.737 1.206h.005c5.46 0 9.908-4.448 9.913-9.913A9.872 9.872 0 0 0 19 4.908h.001ZM11.992 20.15A8.216 8.216 0 0 1 7.797 19l-.3-.18-3.117.818.833-3.041-.196-.314a8.2 8.2 0 0 1-1.258-4.381c0-4.533 3.696-8.23 8.239-8.23a8.2 8.2 0 0 1 5.825 2.413 8.196 8.196 0 0 1 2.41 5.825c-.006 4.55-3.702 8.24-8.24 8.24Zm4.52-6.167c-.247-.124-1.463-.723-1.692-.808-.228-.08-.394-.123-.556.124-.166.246-.641.808-.784.969-.143.166-.29.185-.537.062-.247-.125-1.045-.385-1.99-1.23-.738-.657-1.232-1.47-1.38-1.716-.142-.247-.013-.38.11-.504.11-.11.247-.29.37-.432.126-.143.167-.248.248-.413.082-.167.043-.31-.018-.433-.063-.124-.557-1.345-.765-1.838-.2-.486-.404-.419-.557-.425-.142-.009-.309-.009-.475-.009a.911.911 0 0 0-.661.31c-.228.247-.864.845-.864 2.067 0 1.22.888 2.395 1.013 2.56.122.167 1.742 2.666 4.229 3.74.587.257 1.05.408 1.41.523.595.19 1.13.162 1.558.1.475-.072 1.464-.6 1.673-1.178.205-.58.205-1.075.142-1.18-.061-.104-.227-.165-.475-.29Z">
                            </path>
                        </a>
                    </svg>
                </button>
                <button class="instagram-button button"
                    style="transition-delay: 0.5s, 0s, 0.5s; transition-property: translate, background, box-shadow;">
                    <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <a href="https://www.instagram.com/manish_chavan55/">
                            <path
                                d="M12 2c-2.714 0-3.055.013-4.121.06-1.066.05-1.793.217-2.429.465a4.896 4.896 0 0 0-1.771 1.154A4.909 4.909 0 0 0 2.525 5.45c-.248.635-.416 1.362-.465 2.425C2.013 8.944 2 9.284 2 12.001c0 2.715.013 3.055.06 4.121.05 1.066.217 1.792.465 2.428a4.91 4.91 0 0 0 1.154 1.771 4.88 4.88 0 0 0 1.77 1.154c.637.247 1.362.416 2.427.465 1.068.047 1.408.06 4.124.06 2.716 0 3.055-.012 4.122-.06 1.064-.05 1.793-.218 2.43-.465a4.893 4.893 0 0 0 1.77-1.154 4.91 4.91 0 0 0 1.153-1.771c.246-.636.415-1.363.465-2.428.047-1.066.06-1.406.06-4.122s-.012-3.056-.06-4.124c-.05-1.064-.219-1.791-.465-2.426a4.907 4.907 0 0 0-1.154-1.771 4.888 4.888 0 0 0-1.771-1.154c-.637-.248-1.365-.416-2.429-.465-1.067-.047-1.406-.06-4.123-.06H12Zm-.896 1.803H12c2.67 0 2.987.008 4.04.057.975.044 1.505.208 1.858.344.466.181.8.399 1.15.748.35.35.566.683.747 1.15.138.352.3.882.344 1.857.049 1.053.059 1.37.059 4.039 0 2.668-.01 2.986-.059 4.04-.044.974-.207 1.503-.344 1.856a3.09 3.09 0 0 1-.748 1.149 3.09 3.09 0 0 1-1.15.747c-.35.137-.88.3-1.857.345-1.053.047-1.37.059-4.04.059s-2.987-.011-4.041-.059c-.975-.045-1.504-.208-1.856-.345a3.097 3.097 0 0 1-1.15-.747 3.1 3.1 0 0 1-.75-1.15c-.136-.352-.3-.882-.344-1.857-.047-1.054-.057-1.37-.057-4.041 0-2.67.01-2.985.057-4.039.045-.975.208-1.505.345-1.857.181-.466.399-.8.749-1.15a3.09 3.09 0 0 1 1.15-.748c.352-.137.881-.3 1.856-.345.923-.042 1.28-.055 3.144-.056v.003Zm6.235 1.66a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0-2.4ZM12 6.865a5.136 5.136 0 1 0-.16 10.272A5.136 5.136 0 0 0 12 6.865Zm0 1.801a3.334 3.334 0 1 1 0 6.668 3.334 3.334 0 0 1 0-6.668Z">
                            </path>
                        </a>
                    </svg>
                </button>
                <button class="snapchat-button button"
                    style="transition-delay: 0.6s, 0s, 0.6s; transition-property: translate, background, box-shadow;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="30"
                        width="30">
                        <a href="https://www.snapchat.com/add/manish_chavan55?share_id=eeZisLd5hEQ&locale=en-US">
                            <path
                                d="M21.929 16.407c-.139-.378-.404-.58-.705-.748a1.765 1.765 0 0 0-.154-.08l-.273-.139c-.94-.499-1.674-1.127-2.183-1.872a4.234 4.234 0 0 1-.375-.664c-.043-.125-.04-.195-.01-.259a.424.424 0 0 1 .121-.125l.44-.289a14.1 14.1 0 0 0 .464-.306c.386-.27.656-.558.825-.878a1.745 1.745 0 0 0 .086-1.45c-.256-.672-.891-1.09-1.661-1.09-.206 0-.41.027-.609.082.008-.46-.002-.947-.043-1.424-.146-1.68-.734-2.56-1.347-3.263a5.367 5.367 0 0 0-1.368-1.1C14.204 2.27 13.15 2 11.998 2c-1.15 0-2.2.27-3.131.801-.515.29-.978.663-1.371 1.104-.613.703-1.2 1.584-1.347 3.263-.041.477-.05.965-.045 1.422a2.288 2.288 0 0 0-.608-.081c-.77 0-1.405.418-1.66 1.091a1.747 1.747 0 0 0 .083 1.451c.17.32.44.608.825.877.103.072.263.174.464.307l.424.276c.054.036.1.083.136.138.033.066.034.137-.015.271a4.204 4.204 0 0 1-.369.65c-.497.729-1.21 1.346-2.12 1.84-.481.255-.982.425-1.193 1-.16.435-.055.929.35 1.344.148.156.32.287.51.387a5.54 5.54 0 0 0 1.25.5c.09.023.176.061.253.113.148.13.128.325.324.61.099.147.225.275.37.375.413.286.876.303 1.369.322.444.018.947.038 1.521.225.238.08.486.233.773.41.687.423 1.63 1.003 3.207 1.003s2.525-.583 3.22-1.008c.284-.175.53-.325.761-.401.575-.19 1.079-.21 1.523-.226.491-.019.955-.038 1.369-.323.172-.12.315-.277.42-.46.142-.24.137-.409.27-.525a.783.783 0 0 1 .238-.108 5.552 5.552 0 0 0 1.268-.506c.2-.108.382-.25.536-.42l.005-.006c.38-.406.475-.886.32-1.309Zm-1.401.753c-.855.473-1.424.421-1.866.706-.375.242-.153.763-.425.95-.337.233-1.327-.015-2.607.408-1.056.349-1.73 1.352-3.629 1.352-1.898 0-2.556-1.001-3.63-1.355-1.277-.422-2.27-.175-2.604-.406-.273-.188-.052-.71-.427-.951-.442-.285-1.011-.234-1.865-.704-.545-.3-.236-.488-.055-.575 3.098-1.499 3.592-3.813 3.613-3.985.027-.207.056-.371-.173-.582-.221-.206-1.202-.813-1.475-1.003-.45-.315-.65-.629-.502-1.015.102-.268.351-.369.612-.369.083 0 .166.01.247.028.495.107.975.356 1.252.422a.477.477 0 0 0 .103.014c.147 0 .2-.075.19-.244-.033-.541-.11-1.596-.024-2.582.117-1.355.555-2.028 1.074-2.622.25-.286 1.42-1.525 3.662-1.525 2.24 0 3.415 1.234 3.664 1.52.52.593.957 1.265 1.073 2.622.085.985.012 2.04-.023 2.581-.013.178.042.244.19.244a.442.442 0 0 0 .102-.013c.278-.067.759-.316 1.253-.422a1.14 1.14 0 0 1 .246-.029c.262 0 .511.102.612.369.147.386-.05.7-.5 1.015-.273.19-1.255.797-1.476 1.002-.23.212-.2.375-.174.583.023.175.517 2.489 3.613 3.986.184.091.492.278-.051.58Z">
                            </path>
                        </a>
                    </svg>
                </button>

            </div>
        </div>
        <div class="home-content">
            <h3>Hello, It's me</h3>
            <h1>Saurabh Chavan</h1>
            <h3>I'm a <span class="multiple-text"></span></h3>
            <p> I'm a recent graduate from Deogiri College, Sambhajinagar, with a Bachelor's in Computer Science (BCS).
                Professionally, I'm a versatile Full Stack Developer with a focus on Java technologies, especially
                Spring Boot...!</p>

            <div class="social-media">
                <a href="https://wa.me/+918208136708" target="_blank"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100037448570702" target="_blank"><i
                        class="bx bxl-facebook"></i></a>
                <a href="tel: 8208136708" target="_blank"><i class='bx bxs-phone-call'></i></a>
                <a href="https://www.instagram.com/manish_chavan55/" target="_blank"><i
                        class="bx bxl-instagram"></i></a>
                <a href="mailto:sbchavan7167@gmail.com" target="_blank"><i class='bx bxl-gmail'></i></a>
                <a href="https://www.linkedin.com/in/saurabh-chavan-a4891b238/"><i class="bx bxl-linkedin"></i></a>
            </div>

            <div class="download">
                <button class="botao" id="download_resume_btn">
                    <svg class="mysvg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24px"
                        width="24px">
                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                        <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="Interface / Download">
                                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#f1f1f1"
                                    d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" id="Vector"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="texto">Download</span>
                </button>

            </div>

            <a href="saurabh_resume_CV.pdf" class="btn CVbutton" style="margin-top: 25px;">Download CV</a>
        </div>
        <div class="home-img">
            <img src="manish5.jpg" alt="" class="jumping-img">
        </div>
    </section>
    <!-- About section -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="manish!.png" alt="">
        </div>
        <div class="about-content">
            <h2 class="headding">About <span>Me</span></h2>
            <h3>Full Stack Developer</h3>
            <p>Hey there! 🙋‍♂️ <br>

                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;I'm a recent graduate from Deogiri College,
                Sambhajinagar, with a Bachelor's in Computer Science (BCS). Professionally, I'm a versatile Full Stack
                Developer with a focus on Java technologies, especially Spring Boot. However, I love exploring different
                tech stacks.

                One of the most satisfying parts of my job is making pages look great on any device. I enjoy the
                challenge of learning new algorithms, too.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                My skills include Java, Spring Boot, HTML, CSS, JavaScript, Bootstrap, React, PHP, Apache, and MySQL.
                I'm always adding new tools to my kit.

                Quick learning, problem-solving, and teamwork are my specialties. I love collaborating to create solid
                solutions.
            </p>
            <a href="https://www.linkedin.com/in/saurabh-chavan-a4891b238/" class="btn">Read More</a>
        </div>
    </section>
    <!-- skill section -->
    <section class="skill" id="skill">
        <h2 class="headding">My<span>S</span>kill</h2>
        <div class="skill-container">
            <div class="skill-box">
                <i class='bx bxl-java'></i>
                <h3>Core Java</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-spring-boot'></i>
                <h3>Spring Boot</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-html5'></i>
                <h3>HTML 5</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-css3'></i>
                <h3>CSS 3</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-javascript'></i>
                <h3>JavaScript</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-nodejs'></i>
                <h3>Node JS</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-bootstrap'></i>
                <h3>Bootstrap</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-tailwind-css'></i>
                <h3>Tailwind-css</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-react'></i>
                <h3>React</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-postgresql'></i>
                <h3>MySql</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-php'></i>
                <h3>PHP</h3>

            </div>
            <div class="skill-box">
                <i class='bx bxl-c-plus-plus'></i>
                <h3>C,C++</h3>

            </div>

        </div>
    </section>

    <section class="Project" id="Project" style="background: #323946;">
        <h2 class="headding">Latest <span>Project</span></h2>
        <div class="project-container">
            <div class="project-box">
                <img src="Project Images/personal-portfolio.png" alt="">
                <div class="project-layer">
                    <h4> Web Design</h4>

                    <div class="project-links">
                        <a href="https://github.com/manishff87/Personal-Portfolio" target="_blank"> <i class='bx bx-code-alt'></i></a>
                        <a href=""><i class='bx bxl-go-lang'></i></a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact" id="contact">
        <h2 class="headding">Contact <span>Me!</span></h2>
        <p style="color: white; font-size: 20px;"><?php echo @$message; ?></p>
        <form id="contact-form" action="" method="POST" class="contact-form">
            <div class="input-box">
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="tel" name="mobile_number" placeholder="Mobile Number" required>
                <input type="text" name="email_subject" placeholder="Email Subject" required>
            </div>
            <textarea name="message" cols="20" rows="7" placeholder="Message"></textarea>
            <input type="submit" value="Send Message" class="btn" name="btnSubmit">
        </form>
    </section>

<?php if (isset($submitted) && $submitted): ?>
    <script>window.scrollTo(0, 0);</script>
<?php endif; ?>

    <?php
    
      $con = mysqli_connect("sql113.infinityfree.com", "if0_36607606", "tofp3gquEVuv7", "if0_36607606_Contact");
 
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }  
    
    
    
    
    if (isset($_POST['btnSubmit'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];
        $email_subject = $_POST['email_subject'];
        $message = $_POST['message'];
     
        $full_name = mysqli_real_escape_string($con, $full_name);
        $email = mysqli_real_escape_string($con, $email);
        $mobile_number = mysqli_real_escape_string($con, $mobile_number);
        $email_subject = mysqli_real_escape_string($con, $email_subject);
        $message = mysqli_real_escape_string($con, $message);
    
        $query = "INSERT INTO `contact-data` (`Full_name`, `Email`, `Contact_no`, `Email_sub`, `Message`) VALUES ('$full_name', '$email', '$mobile_number', '$email_subject', '$message')";
    
        if (mysqli_query($con, $query)) {
            echo "<script>alert('Thanks for visiting ! 🙏 I will get back to you shortly.🚸 🧋');</script>";
            $submitted = true; 
        }  
    }
     
    

?>


 
    <footer class="footer">
        <div class="footer-text">
            <p>Copyrights &copy; 2023 by <span>S</span>aurabh | All Rights Reserved.</p>
        </div>
        <div class="footer-icon-Top">
            <a href="#home">
                <i class='bx bx-up-arrow-alt'></i>
            </a>
        </div>
    </footer>
    <script src="script.js"></script>

    <script>
          
        document.addEventListener("DOMContentLoaded", function () {
              function downloadResume() {
                  var resumeUrl = "saurabh_resume_CV.pdf";  

                  var link = document.createElement("a");
                link.href = resumeUrl;
                link.download = 'saurabh_resume_CV.pdf';  

                  document.body.appendChild(link);

                  link.click();

                  document.body.removeChild(link);
            }

              document.getElementById("download_resume_btn").addEventListener("click", function () {
                downloadResume();
            });
        });
    </script>

</body>

</html>