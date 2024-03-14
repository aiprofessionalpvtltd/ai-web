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
            <p>Hello {{ $candidateEmail }},</p>

            <p>We hope you are doing well. We have received your recent complaint and would appreciate your feedback to
                help us improve our services. Your input is important to us, and we value your opinion.</p>

            <p>Your Complaint:</p>
            <p>{{ $complaintMessage }}</p>

            <p>Please take a moment to share your feedback on your recent experience. Your comments and suggestions will
                help us serve you better in the future. We are committed to addressing any concerns and making
                improvements based on your feedback.</p>

            <p>Your Feedback:</p>
            <p>{{ $feedbackMessage }}</p>

            <p>Thank you for taking the time to provide your feedback. We look forward to hearing from you.</p>

            <p>Best regards,<br>
                {{ config('app.name') }}</p>
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
