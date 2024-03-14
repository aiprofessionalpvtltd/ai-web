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
            <h1 class="font-weight-bold">Congratulations!</h1>
            <p>Dear {{ ShowFullName($intern->intern_first_name , $intern->intern_last_name) }},</p>

            <p>
                We are thrilled to announce that your application for the internship program has been accepted by the
                Prime Minister's Ba-Ikhtiyar Naujawan Internship Program (PM's BNIP). We are pleased to offer you an
                internship aligned with your qualifications and skills in the relevant field.
            </p>

            <p>
                To access further details, kindly log in to the BNIP portal, where you will find information about your
                placement. Additionally, please be aware that your host organization will reach out to you in the coming
                days. It is essential to follow their instructions and actively participate in the onboarding process.
                Should you encounter any challenges, do not hesitate to reach out to us at queries@bnip.gov.pk.
            </p>
            <p>
                We look forward to your valuable contribution during the internship and wish you a successful and
                enriching experience.

            </p>

            <p>Best regards,<br>
                TEAM BNIP
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
