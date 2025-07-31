<?php
include 'page-top.php';

 $_SERVER['REQUEST_METHOD'] . "</h1>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    renderConfirmationSectionSimple($confirmation_success_title, $confirmation_message_text);
} else {
    
    renderSliderSection($slides);
    renderAppointmentForm($appointment_form_data);
    renderTreatmentSection($treatmentData);
    renderTeamSection($teamDoctors);
    renderTestimonialsSection($testimonials);
    renderContactSection($contactData);
}
 include 'page-bottom.php';

?>

