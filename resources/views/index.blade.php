<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('scss/app.css')}}">
    <title>Tutor</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ URL('images/logo.png')}}" id="logo" class="img-fluid" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="containter-fluid">

        <div class="row intro">
            <div class="col introPosition">
                <p id="tutorIntro">
                    Christopher Phan
                </p>


                <p id="mathsIntro">
                    Maths Tutor
                </p>
            </div>
        </div>

    </div>
    <div class="col introPosition">

        <img src="{{ URL('images/tutor.jpg')}}" id="tutorImg" class="img-fluid" alt="tutor">

    </div>

    </div>
    </div>



    <div class="container-fluid" id="tutorDiv">
        <p class="heading" id="about">
            About Me
        </p>
        <p>
            Hi, I'm Christopher Phan, and I teach Maths. I've been teaching for the last 25 years.
            I'm based in North London, but I can easily travel to any part.
        </p>

        <p>
            I have extensive experience teaching in some of the UK's top schools and offer unparalleled
            insight into and each and every stage of a student's development.
        </p>
        <p>
            After graduating with a Mathematics degree from Oxford University, I went on to complete my
            Teach First qualification at Berkshire Primary School, specialising in teaching Maths to Years 5 and 6.
            I was selected as part of Teach First’s Associate Tutor team, delivering professional development sessions
            to Teach First participants. I am a highly experienced 7+, 11+, 13+, GCSE, A-Level and university entrance
            tutor.
        </p>
    </div>

    <div class="container-fluid" id="testimonialDiv">
        <p class="heading" id="testimonials">
            Testimonials
        </p>
        <p>
            "We have never known David to actually look forward to working, and have never met someone who can
            get the best out of him like Christopher does - he has been taught so much but always in a
            light-hearted, fun way. His approach is brilliant and it has really paid off!"
            — Claire, David's mother
        </p>
        <p>
            "Christopher is a complete super star! He's the only person Tracy will listen to!
            The feedback I'm getting from Tracy is that he has massively helped her with her Maths."
            — Terry, Tracy's father
        </p>
    </div>
    <div class="contianer-fluid" id="contactDiv">
        <p class="heading" id="contact">
            Contact Me
        </p>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class=" container-fluid footer-basic">
        <footer>
            <p id="copyright">mathstutorchris.com © 2022</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>