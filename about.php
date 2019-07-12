<?php 
 include("includes/header.php");
 include("includes/navbar.php");
?>

  <!-- Start About area -->
  <div class="about-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Kelly</h2>
          </div>
        </div>
      </div>

      <div class="row">
          <!-- single-well start: kelly picture-->
          <div class="col-md-2 col-sm-2 col-xs-12"></div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="well-left">
              <div class="single-well" style="text-align: center;">
                  <img src="img/about/kelly.jpg" class="w3-circle img-fluid" alt="Kelly Kropman">
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-12"></div>
        </div> <!-- row-->
        <!-- single-well end-->
        <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12"></div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="well-middle">
              <div class="single-well justify">
                <p>
                  Kelly Kropman is an attorney with a strict sense of integrity.
                  She is determined and dedicated to her work, making her efficient and
                  effective at every task that she takes on.
                </p>
                <p>Kelly has always had a passion for helping people.
                  She knows that the work she does for underrepresented people can indeed
                  serve to benefit them through empowering using the law as a tool for
                  social justice.
                </p>
              </div>
            </div>
          </div> <!-- col-->
          <div class="col-md-2 col-sm-2 col-xs-12"></div>
      </div> <!-- row-->

    </div> <!-- container-->
  </div> <!-- about-->

  <!-- Kelly Experience area start -->
  <div class="faq-area area-padding" id="kellyExperience">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Experience</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start: experience picture-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#kellyExperience">
                <img src="img/about/1.jpg" alt="" id="experienceImg">
              </a>
            </div>
          </div>
        </div>
        <!-- experience tabs -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab" style="font-family: Montserrat, Arial, Sans Serif;">Volunteering</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab" style="font-family: Montserrat, Arial, Sans Serif;">Education</a>
              </li>
              <li>
                <a href="#p-view-3" role="tab" data-toggle="tab" style="font-family: Montserrat, Arial, Sans Serif;">Career</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <!-- <h4>Details</h4> -->
                  <p>
                    <b>Subcommittee Chair</b>
                    for Student Learning for Students for Law & Social Justice at Wits
                    (2014)
                  </p>
                  <p>
                    <b>Field Researcher</b>
                    for European Union & Coram Children’s Legal Centre
                  </p>
                  <p>
                    <b>Youth Ambassador</b>
                    for the United Nations, Association of USA's HERO Campaign (2006)
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <!-- <h4>Details</h4> -->
                  <p>
                    <b>LLM Human Rights Law</b>, Queen Mary’s College-University of London (current)
                  </p>
                  <p>
                    <b>LLB</b>, University of the Witwatersrand (2014)
                  </p>
                  <p>
                    <b>Bachelor of Education</b> in Senior Phase Life Orientation, UJ (2010)
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <!-- mobileHeadings, has no effect in the h4 here -->
                  <!-- <h4>Details</h4> -->
                  <p>
                    <b>Independant Attorney</b>, at Kropman Attorneys & Legal Consultancy (current)
                  </p>
                  <p>
                    <b>In-house Legal Advisor</b>, Corruption Watch
                  </p>
                  <p>
                    <b>Attorney</b>, Legal Resources Centre, a client-based, non-profit public interest law clinic
                  </p>
                  <p>
                    <b>Candidate Attorney</b>, Legal Resources Centre
                  </p>
                  <p>
                    <b>Intern</b>, Equal Education Law Centre and Lawyers for Human Rights
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Kelly Experience Area -->

  <?php
  //footer area
        include("includes/footer.php");
        include("includes/scripts.php");