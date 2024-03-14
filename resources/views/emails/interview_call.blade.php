<!DOCTYPE html>
<head>
    <title>Internship Program Acceptance</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="font-weight-bold">Dear {{$intern->intern_first_name . ' ' . $intern->intern_last_name}},</h3><br>
            <p>
                We hope this email finds you well. We are excited to inform you that we have reviewed your application
                for the intern position at {{$employer->organization_name}}.
            </p>

            <p>
                Your qualifications and experiences have caught our attention, and we would like to invite you for an
                interview to further discuss your potential as a valued member of our team.
            </p>

            <p>During the interview, we aim to learn more about your skills, career goals, and how they align with the
                responsibilities and objectives of the intern position. We also encourage you to use this opportunity to
                ask any questions you may have about our company culture, projects, or any other relevant topics.</p>

            <p>Should you have any questions or require any additional information before the interview, please feel
                free to contact us at {{$employer->focal_person_phone}} or {{$employer->focal_person_email}}.</p>

            <p>We look forward to meeting you and discussing the potential of working together to contribute to your
                growth and development as an intern with {{$employer->organization_name}}.</p>
            <p>Best regards,<br>
                {{$employer->focal_person_first_name . ' ' . $employer->focal_person_last_name}}<br>
                {{$employer->title}}<br>
                {{$employer->organization_name}}<br>
                {{$employer->focal_person_email}}<br>
                {{$employer->focal_person_phone}}<br>
            </p>
        </div>
    </div>
</div>

<!-- Load Bootstrap JS -->
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
