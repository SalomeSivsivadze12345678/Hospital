<?php
$navLinks = [
  ["title" => "Home", "href" => "index.php"],
  ["title" => "About", "href" => "about.php"],
  ["title" => "Treatment", "href" => "treatment.php"],
  ["title" => "Doctors", "href" => "doctor.php"],
  ["title" => "Testimonial", "href" => "testimonial.php"],
  ["title" => "Contact Us", "href" => "contact.php"]
];

$logoSrc = "images/logo.png";



$slides = [
  [
    'title' => 'Mico',
    'subtitle' => 'Hospital',
    'text' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
    'image' => 'images/slider-img.jpg',
  ],
  [
    'title' => 'Mico',
    'subtitle' => 'Hospital',
    'text' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
    'image' => 'images/slider-img.jpg',
  ],
  [
    'title' => 'Mico',
    'subtitle' => 'Hospital',
    'text' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
    'image' => 'images/slider-img.jpg',
  ],
];


$treatmentData = [
  'side_image' => 'images/treatment-side-img.jpg',
  'title' => 'Hospital',
  'highlight' => 'Treatment',
  'items' => [
    [
      'image' => 'images/t1.png',
      'title' => 'Nephrologist Care',
      'description' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
      'link' => '#'
    ],
    [
      'image' => 'images/t2.png',
      'title' => 'Eye Care',
      'description' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
      'link' => '#'
    ],
    [
      'image' => 'images/t3.png',
      'title' => 'Pediatrician Clinic',
      'description' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
      'link' => '#'
    ],
    [
      'image' => 'images/t4.png',
      'title' => 'Parental Care',
      'description' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
      'link' => '#'
    ],
  ]
];
 
$aboutData = [
  'image' => 'images/about-img.jpg',
  'title' => 'About',
  'highlight' => 'Hospital',
  'description' => "has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors have a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors",
  'link' => '#',
  'linkText' => 'Read More'
];


$teamDoctors = [
  [
    'image' => 'images/team1.jpg',
    'name' => 'Hennry',
    'degree' => 'MBBS',
    'socials' => [
      'facebook' => '#',
      'twitter' => '#',
      'linkedin' => '#',
      'instagram' => '#'
    ]
  ],
  [
    'image' => 'images/team2.jpg',
    'name' => 'Jenni',
    'degree' => 'MBBS',
    'socials' => [
      'facebook' => '#',
      'twitter' => '#',
      'linkedin' => '#',
      'instagram' => '#'
    ]
  ],
  [
    'image' => 'images/team3.jpg',
    'name' => 'Morco',
    'degree' => 'MBBS',
    'socials' => [
      'facebook' => '#',
      'twitter' => '#',
      'linkedin' => '#',
      'instagram' => '#'
    ]
  ],
];


$testimonials = [
  [
    'name' => 'Morijorch',
    'role' => 'Default model text',
    'text' => "editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
  ],
  [
    'name' => 'Rochak',
    'role' => 'Default model text',
    'text' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
  ],
  [
    'name' => 'Brad Johns',
    'role' => 'Default model text',
    'text' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
  ],
];


$contactData = [
  'heading' => 'Get In Touch',
  'fields' => [
    ['type' => 'text', 'placeholder' => 'Full Name', 'name' => 'full_name'],
    ['type' => 'email', 'placeholder' => 'Email', 'name' => 'email'],
    ['type' => 'text', 'placeholder' => 'Phone Number', 'name' => 'phone'],
    ['type' => 'text', 'placeholder' => 'Message', 'class' => 'message-box', 'name' => 'message'],
  ],
  'buttonText' => 'SEND',
  'image' => 'images/contact-img.jpg'
];

$infoData = [
  'logo' => 'images/logo.png',
  'subscribeText' => 'Subscribe',
  'contact' => [
    'location' => 'Location',
    'phone' => '+01 1234567890',
    'email' => 'demo@gmail.com',
  ],
  'socials' => [
    'facebook' => '',
    'twitter' => '',
    'linkedin' => '',
    'instagram' => '',
  ],
  'links' => [
    ['title' => 'Home', 'url' => 'index.html'],
    ['title' => 'About', 'url' => 'about.html'],
    ['title' => 'Treatment', 'url' => 'treatment.html'],
    ['title' => 'Doctors', 'url' => 'doctor.html'],
    ['title' => 'Testimonial', 'url' => 'testimonial.html'],
    ['title' => 'Contact us', 'url' => 'contact.html'],
  ],
  'latestPosts' => [
    ['image' => 'images/post1.jpg', 'text' => 'Normal distribution'],
    ['image' => 'images/post2.jpg', 'text' => 'Normal distribution'],
  ],
  'news' => [
    ['image' => 'images/post3.jpg', 'text' => 'Normal distribution'],
    ['image' => 'images/post4.png', 'text' => 'Normal distribution'],
  ],
];



$appointment_form_data = [
  'title' => 'BOOK',
  'highlight' => 'APPOINTMENT',
  'doctor_options' => [
    'Dr. John Smith',
    'Dr. Jane Doe',
    'Dr. Alice Johnson',
  ],
  'department_options' => [
    'Cardiology',
    'Neurology',
    'Orthopedics',
  ],
  'submit_text' => 'Submit Now',
];
?>


<?php
$confirmation_success_title = "Thank you! We will get back to you";
$confirmation_message_text = "You will be redirected to this confirmation page with the submitted information.";
?>


