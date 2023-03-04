<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="py-5 px-5">
        <div class="col-md-8">
            <h3>Sending email using PHPMailer</h3>
            <div class="container bg-success">
                <div class="row">
                    <form action="mail.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="email">Enter Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="message">Message</label>
                            <input type="text" name="message" id="message" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Send" class="btn btn-primary" name="send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>