<?php
include('../admin/db_connect.php');
$id = '';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];
}
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $cover_letter = $_POST['cover_letter'];
    // $myfile=$_POST['myfile'];
    $filename = '213_' . $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../admin/assets/uploads/' . $filename;

    $file = $_FILES['myfile']['tmp_name'];
    if (move_uploaded_file($file, $destination)) {

        $query = mysqli_query($conn, "INSERT INTO `application`(`firstname`, `middlename`, `lastname`, `gender`, `email`, `contact`, `address`, `cover_letter`, `position_id`, `resume_path`, `process_id`) VALUES ('$firstname','$middlename','$lastname','$gender','$email','$contact','$address','$cover_letter','$id','$filename',0)");

?>
        <script>
            alert("Data Submitted successfully");
        </script>
<?php

    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Online Recruitment System | Job | Human Resources</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: rgb(33, 34, 34);">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="../index.php">
                <!-- <i class="fa-icon fa-hands-helping"></i> -->
                <!-- <i class="fa-icon fa-hands-helping"></i> -->
                <h1 style="font-size: 1.5rem;">Online Recruitment System</h1>
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="font-size: 1.1rem;">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active" style="color: white">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../aptitude.php">Mock Test</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../contact.php">Contact Us</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div id="content">
        <div class="container-fluid">
            <div class="max-width-container">
                <div id="details_container">

                    <div class="heading_2_4 heading_title">
                        Human Resources (HR) Job at Psyber Incorporation</div>
                    <div class="detail_view">

                        <div class="container-fluid individual_internship visibilityTrackerItem "
                            id="individual_internship_1251941" internshipid="1251941">
                            <div class="internship_meta">
                                <div class="individual_internship_header">
                                    <div class="company">
                                        <div class="heading_4_5 profile">
                                            <span class="profile_on_detail_page">Human Resources (HR) </span>
                                        </div>
                                        <div class="heading_6 company_name">
                                            <a class="link_display_like_text" href="https://psyber.co/">
                                                Psyber Incorporation</a>
                                        </div>
                                    </div>
                                    <div class="internship_logo">
                                        <img src="../img/intership/psyber.png" style="max-height: 25px;" alt="">
                                    </div>
                                </div>
                                <div class="individual_internship_details  individual_internship_internship">
                                    <div id="location_names">
                                        <p class="card-text" style="margin-bottom: 8px; color: black; font-size: 16px;">
                                            <span class="fa fa-map-marker"></span> Bharuch
                                        </p>
                                    </div>
                                    <div class="internship_other_details_container">
                                        <div class="other_detail_item_row">
                                            <div class="other_detail_item ">
                                                <div class="item_heading">
                                                    <i class="fa fa-play-circle"></i>&nbsp
                                                    <span>
                                                        Start Date </span>
                                                </div>
                                                <div class="item_body" id="start-date-first">
                                                    <span class="start_immediately_desktop">Immediately</span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="other_detail_item_row">
                                            <div class="other_detail_item  stipend_container">
                                                <div class="item_heading">
                                                    <i class="fa fa-money"></i>
                                                    &nbsp<span>
                                                        CTC </span>
                                                </div>
                                                <div class="item_body">
                                                    <span class="stipend"><i class="ic-16-currency-inr"></i> Rs.
                                                        4 - 6 LPA</span>
                                                </div>
                                            </div>
                                            <div class="other_detail_item  apply_by">
                                                <div class="item_heading">
                                                    <i class="fa fa-hourglass-end"></i>
                                                    &nbsp<span>Apply By</span>
                                                </div>
                                                <div class="item_body">30 April '21</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button_container">
                                <div class="tags_container">
                                    <div class="label_container label_container_desktop">
                                        Fresher Job </div>


                                </div>
                            </div>
                            <div class="button_container">
                                <div class="applications_message_container">
                                    <div class="application_icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="applications_message">&nbsp100 applicants</div>
                                </div>
                                <input type="text" class="form-control" value="" id="link" name="link" hidden="">
                                <div class="dropdown-menu-container copy_button_popover">
                                    <span class="share_link_for_mobile btn-group">
                                        <button class="btn" data-toggle="dropdown" aria-expanded="false"><i
                                                class="fa fa-share-alt" style="font-size: 19px;"></i> </button>
                                        <div class="dropdown-menu dropdown-menu-right menu-right">
                                            <a class="wp_share" href="#" target="_blank">
                                                <button class="dropdown-item">
                                                    <i class="ic-24-whatsapp"></i>Share on WhatsApp
                                                </button>
                                            </a>
                                            <a class="li_share" href="#" target="_blank">
                                                <button class="dropdown-item">
                                                    <i class="ic-24-linkedin"></i>Share on LinkedIn
                                                </button>
                                            </a>
                                            <a class="fb_share" href="#" target="_blank">
                                                <button class="dropdown-item">
                                                    <i class="ic-24-facebook"></i>Share on Facebook
                                                </button>
                                            </a>
                                            <a class="tw_share" href="#" target="_blank">
                                                <button class="dropdown-item">
                                                    <i class="ic-24-twitter"></i>Share on Twitter
                                                </button>
                                            </a>
                                            <a class="cp_link" id="cp_link" href="#">
                                                <button class="dropdown-item cpy_button">
                                                    <i class="ic-24-link"></i>Copy link
                                                </button>
                                            </a>
                                        </div>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="internship_details">
                            <div class="section_heading heading_5_5">
                                About Psyber Incorporation</div>
                            <div class="text-container website_link">
                                <a href="https://psyber.co/" target="_blank" rel="nofollow noopener noreferrer">Website
                                    <i class="fa fa-external-link"></i></a>
                            </div>
                            <div class="text-container">
                                Psyber Incorporation is a full-service interactive media agency (social media, digital
                                marketing, branding) with a tight-knit team of creators, doers, organizers, and overall
                                talented souls. We offer a full range of digital marketing services like email
                                marketing, social media marketing, search engine optimization, pay-per-click management,
                                and web and app building services.</div>
                            <div class="section_heading heading_5_5">About the Job</div>
                            <div class="text-container">

                                Selected candidate's day-to-day responsibilities include: <br>
                                <br>
                                1. Hire interns and other full-time or contract profiles<br>
                                2. Explain the project and take the assessment test code from the applicant to share
                                with our team for QA via the GitHub branch<br>
                                3. Get feedback from the internal team and convey the result to the candidate<br>
                                4. Manage the standard paperwork and share the joining date letter, etc. and take the
                                details we need<br>
                                5. Make sure the candidate joins on the date, is performing at peak levels, and is happy
                                working with the company
                            </div>
                            <div class="section_heading heading_5_5">Skill(s) required</div>
                            <div class="round_tabs_container">
                                <span class="round_tabs">English Proficiency (Written)</span>

                            </div>

                            <div class="section_heading heading_5_5">Who can apply</div>
                            <div class="text-container who_can_apply">
                                Only those candidates can apply who:<br>
                                1. are available for the candidate residing in Bharuch and nearby<br>
                                2. can start the job between 16th Apr'21 and 21st May'21<br>
                                3. have relevant skills and interests

                            </div>
                            <div class="section_heading heading_5_5">Salary</div>
                            <div class="text-container who_can_apply">
                                CTC: Rs. 4 - 6 LPA<br>
                                CTC breakup<br>
                                1. Fixed component: 80%<br>

                                2. Variable component: 15%<br>

                                3. Other incentives: 5%<br>

                            </div>
                            <div class="section_heading heading_5_5">Perks</div>
                            <div class="round_tabs_container">
                                <span class="round_tabs">Certificate</span>
                                <span class="round_tabs">Flexible Work Hours</span>
                                <span class="round_tabs">5 days a week</span>
                                <span class="round_tabs">Letter of Recommendation</span>
                            </div>
                            <div class="section_heading heading_5_5">Number of openings</div>
                            <div class="text-container">
                                5 </div>
                            <div class="buttons_container">
                                <input type="hidden" id="status" value="active">
                                
                                    <button type="button" class="btn btn-large" data-toggle="modal"
                                        data-target="#exampleModalScrollable">
                                        Apply now
                                    </button>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Application Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="" class="control-label">First Name</label>
                                    <input type="text" class="form-control" name="firstname" autocomplete="off" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="control-label">Middle Name</label>
                                    <input type="text" class="form-control" name="middlename" autocomplete="off" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="control-label">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="" class="control-label">Gender</label>
                                    <select name="gender" id="" class="custom-select browser-default" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="control-label">Email Id</label>
                                    <input type="email" class="form-control" name="email" autocomplete="off" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="control-label">Contact No.</label>
                                    <input type="number" class="form-control" minlength="10" maxlength="10" name="contact" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="" class="control-label">LinkedIn Profile Link</label>
                                    <input type="email" class="form-control" name="linkedIn" autocomplete="off">
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="control-label">Github Profile Link</label>
                                    <input type="text" class="form-control" name="github" autocomplete="off">
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="control-label">Working Preference (if required)</label>
                                    <select name="preference" id="" class="custom-select browser-default">
                                        <option>Work form Home</option>
                                        <option>In-Office</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="" class="control-label">Contact Address</label>
                                    <textarea name="address" id="" cols="30" rows="2" required class="form-control" name="address" autocomplete="off" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="" class="control-label">Cover Letter</label>
                                    <textarea name="cover_letter" id="" cols="30" rows="2" placeholder="(Optional)" name="cover_latter" class="form-control" autocomplete="off"></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="input-group col-md-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Resume</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="resume" name="myfile" required>
                                        <label class="custom-file-label" for="resume">Choose file</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section id="footer">
            <div class="footer container">
                <div class="brand">
                    <h2>Online Recruitment System</h2>
                    <h6 style="color: white;text-align: center; margin-bottom: 20px; ">All Rights Reserved | © Copyright
                        2021
                    </h6>
                </div>
                <div class="social-icon">
                    <div class="social-item">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
                    </div>
                    <div class="social-item">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
                    </div>
                </div>

            </div>
        </section>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>

</html>