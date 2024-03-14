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
                We are thrilled to inform you that you have been successfully placed in an Internship Position with our organization  {{$employer->organization_name}}.
            </p>

            <p>
                We believe that your skills and talents will be a valuable addition to our team, and we look forward to having you on board.
            </p>

            <h4>Next Steps:</h4>

            <p>1. <b>Portal Login: </b> Please log in to our portal using your credentials.</p>
            <p>2. <b>Intern Placement Tab:</b> Once logged in, navigate to the "Intern Placement" tab to view the details of the organization where you are placed.</p>

            <p>Congratulations once again on your placement, {{$intern->intern_first_name . ' ' . $intern->intern_last_name}}! We look forward to working with you and wish you a successful internship journey.</p>

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
