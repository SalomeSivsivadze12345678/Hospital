<?php
function renderHeaderBottom($navLinks, $logoSrc = "images/logo.png")
{
    $navItems = '';
    foreach ($navLinks as $index => $link) {
        $active = $index === 0 ? ' active' : '';
        $navItems .= '
      <li class="nav-item' . $active . '">
        <a class="nav-link" href="' . $link['href'] . '">' . $link['title'] . '</a>
      </li>';
    }

    return '
  <header class="header_section">
    <div class="header_bottom container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <img src="' . $logoSrc . '" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            ' . $navItems . '
          </ul>
          <div class="quote_btn-container d-flex align-items-center">
            <a href="#">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Login</span>
            </a>
            <a href="#">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Sign Up</span>
            </a>
            <form class="form-inline ml-3">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>';
}


function renderSliderSection($slides)
{
    ?>
  <section class="slider_section">
    <div class="dot_design">
      <img src="images/dots.png" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php foreach ($slides as $index => $slide): ?>
          <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button><i class="fa fa-play" aria-hidden="true"></i></button>
                    </div>
                    <h1><?= htmlspecialchars($slide['title']) ?><br>
                      <span><?= htmlspecialchars($slide['subtitle']) ?></span>
                    </h1>
                    <p><?= htmlspecialchars($slide['text']) ?></p>
                    <a href="">Contact Us</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?= htmlspecialchars($slide['image']) ?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <img src="images/prev.png" alt="">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <img src="images/next.png" alt="">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <?php
}

function renderAboutSection($data)
{
    ?>
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?= htmlspecialchars($data['image']) ?>" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <?= htmlspecialchars($data['title']) ?> <span><?= htmlspecialchars($data['highlight']) ?></span>
              </h2>
            </div>
            <p>
              <?= nl2br(htmlspecialchars($data['description'])) ?>
            </p>
            <a href="<?= htmlspecialchars($data['link']) ?>">
              <?= htmlspecialchars($data['linkText']) ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
}


function renderTreatmentSection($data)
{
    ?>
  <section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="<?= htmlspecialchars($data['side_image']) ?>" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <?= htmlspecialchars($data['title']) ?> <span><?= htmlspecialchars($data['highlight']) ?></span>
        </h2>
      </div>
      <div class="row">
        <?php foreach ($data['items'] as $item): ?>
          <div class="col-md-6 col-lg-3">
            <div class="box">
              <div class="img-box">
                <img src="<?= htmlspecialchars($item['image']) ?>" alt="">
              </div>
              <div class="detail-box">
                <h4><?= htmlspecialchars($item['title']) ?></h4>
                <p><?= htmlspecialchars($item['description']) ?></p>
                <a href="<?= htmlspecialchars($item['link']) ?>">Read More</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php
}


function renderTeamSection($doctors)
{
    ?>
  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <?php foreach ($doctors as $doctor): ?>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?= htmlspecialchars($doctor['image']) ?>" alt="">
              </div>
              <div class="detail-box">
                <h5><?= htmlspecialchars($doctor['name']) ?></h5>
                <h6><?= htmlspecialchars($doctor['degree']) ?></h6>
                <div class="social_box">
                  <?php foreach ($doctor['socials'] as $platform => $url): ?>
                    <a href="<?= htmlspecialchars($url) ?>">
                      <i class="fa fa-<?= htmlspecialchars($platform) ?>" aria-hidden="true"></i>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <?php
}

function renderTestimonialsSection($testimonials)
{
    ?>
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2><span>Testimonial</span></h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5><?= htmlspecialchars($testimonial['name']) ?></h5>
                    <h6><?= htmlspecialchars($testimonial['role']) ?></h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p><?= htmlspecialchars($testimonial['text']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php
}

function renderContactSection($data)
{
    ?>
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2><?= htmlspecialchars($data['heading']) ?></h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="" method="post">
              <?php foreach ($data['fields'] as $field): ?>
                <div>
                  <input
                    type="<?= htmlspecialchars($field['type']) ?>"
                    name="<?= htmlspecialchars($field['name']) ?>"
                    placeholder="<?= htmlspecialchars($field['placeholder']) ?>"
                    <?= isset($field['class']) ? 'class="'.htmlspecialchars($field['class']).'"' : '' ?>
                  />
                </div>
              <?php endforeach; ?>
              <div class="btn_box">
                <button type="submit"><?= htmlspecialchars($data['buttonText']) ?></button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="<?= htmlspecialchars($data['image']) ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
}


function renderInfoSection($data)
{
    ?>
  <section class="info_section">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="<?= htmlspecialchars($data['logo']) ?>" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button><?= htmlspecialchars($data['subscribeText']) ?></button>
          </form>
        </div>
      </div>

      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <!-- Address -->
          <div class="col-md-6 col-lg-3">
            <h5>Address</h5>
            <div class="info_contact">
              <a href="#"><i class="fa fa-map-marker"></i><span><?= htmlspecialchars($data['contact']['location']) ?></span></a>
              <a href="#"><i class="fa fa-phone"></i><span>Call <?= htmlspecialchars($data['contact']['phone']) ?></span></a>
              <a href="#"><i class="fa fa-envelope"></i><span><?= htmlspecialchars($data['contact']['email']) ?></span></a>
            </div>
            <div class="social_box">
              <?php foreach ($data['socials'] as $platform => $url): ?>
                <a href="<?= htmlspecialchars($url) ?>"><i class="fa fa-<?= htmlspecialchars($platform) ?>"></i></a>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Useful Links -->
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>Useful link</h5>
              <div class="info_links_menu">
                <?php foreach ($data['links'] as $link): ?>
                  <a href="<?= htmlspecialchars($link['url']) ?>"><?= htmlspecialchars($link['title']) ?></a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <!-- Latest Posts -->
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>LATEST POSTS</h5>
              <?php foreach ($data['latestPosts'] as $post): ?>
                <div class="post_box">
                  <div class="img-box"><img src="<?= htmlspecialchars($post['image']) ?>" alt=""></div>
                  <p><?= htmlspecialchars($post['text']) ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- News -->
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>News</h5>
              <?php foreach ($data['news'] as $post): ?>
                <div class="post_box">
                  <div class="img-box"><img src="<?= htmlspecialchars($post['image']) ?>" alt=""></div>
                  <p><?= htmlspecialchars($post['text']) ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <?php
}


function renderFooterSection()
{
    ?>
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <?php
}


function renderAppointmentForm($data)
{
    ?>
  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="post">
            <h4>
              <?php echo $data['title']; ?> <span><?php echo $data['highlight']; ?></span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name</label>
                <input type="text" class="form-control" id="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="doctor" class="form-control wide" id="inputDoctorName">
                  <?php foreach ($data['doctor_options'] as $doctor): ?>
                    <option value="<?php echo htmlspecialchars($doctor); ?>"><?php echo htmlspecialchars($doctor); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="department" class="form-control wide" id="inputDepartmentName">
                  <?php foreach ($data['department_options'] as $dept): ?>
                    <option value="<?php echo htmlspecialchars($dept); ?>"><?php echo htmlspecialchars($dept); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" class="form-control" id="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date</label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn"><?php echo $data['submit_text']; ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php
}



function renderConfirmationSectionSimple($titleText, $messageText)
{
    ?>
  <section class="confirmation_section layout_padding">
    <div class="container">
      <h2><?php echo htmlspecialchars($titleText); ?></h2>

      <hr>
      <div class="confirmation-message" style="margin-top: 20px; padding: 15px; background: #eef7ff; border-left: 4px solid #007bff;">
        <?php echo htmlspecialchars($messageText); ?>
      </div>
    </div>
  </section>
  <?php
}



