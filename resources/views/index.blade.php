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
                Christopher Phan
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


    <div class="container-fluid px-0" id="landingDiv">
        <img src="{{ URL('images/maths.jpg')}}" alt="maths image" id="maths">
    </div>

    <div class="container-fluid px-0" id="introDiv">
        <section>
            <div class="row">
                <div class="col">
                    <p class="heading" id="about">
                        About Me
                    </p>

                    <p id="tutorIntro">
                        Hi, I'm Christopher Phan, and I teach Maths. I've been teaching for the last 25 years.
                        I'm based in North London, but I can easily travel to any part. I have extensive experience
                        teaching in some of the UK's top schools and offer unparalleled
                        insight into and each and every stage of a student's development.
                    </p>
                    <p id="tutorIntro">
                        After graduating with a Mathematics degree from Oxford University, I went on to complete my
                        Teach First qualification at Berkshire Primary School, specialising in teaching Maths to Years 5 and 6.
                        I was selected as part of Teach First's Associate Tutor team, delivering professional development sessions
                        to Teach First participants. I am a highly experienced 7+, 11+, 13+, GCSE, A-Level and university entrance
                        tutor.
                    </p>
                </div>


                <div class="col tutorDiv">
                    <img src="{{ URL('images/tutor.jpg')}}" id="tutorImg" class="img-fluid" alt="tutor">
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluid px-0" id="aboutDiv">
        <section id="aboutTutor">

            <p id="tutorIntro">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ipsum lorem, dignissim eget est vel, feugiat
                iaculis magna. Nulla hendrerit congue turpis, sit amet tristique quam consectetur at. Pellentesque sagittis
                molestie dolor, vitae dictum lectus posuere non. Nam cursus commodo euismod. Donec vel semper justo.
                Suspendisse nec velit venenatis, commodo mauris luctus, dignissim nisi. Suspendisse eu mauris dui.
            </p>
            <p id="tutorIntro">
                Donec et pellentesque erat, at viverra justo. Mauris vel tristique eros, at interdum tortor. Ut at rutrum ante.
                Morbi commodo aliquet nisi vitae ornare. Cras scelerisque tincidunt erat sed tempor. Sed lacus felis, sodales a
                pretium vel, venenatis sit amet nunc. Vivamus id consectetur quam. Nam pulvinar, ipsum ornare lacinia cursus,
                massa arcu vehicula dui, efficitur egestas risus tortor id tortor. Integer est diam, tempor non fermentum vitae,
                accumsan sed quam. Aliquam commodo congue urna, a porta risus porttitor sed.
            </p>
        </section>
    </div>

    <div class="container-fluid px-0" id="testimonialsDiv">
        <section>
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
            <p>
                Nunc quis sapien et sem euismod vulputate. Etiam fermentum turpis quis sapien vestibulum scelerisque. Donec laoreet
                vitae lectus et aliquet. Maecenas odio nulla, varius quis sapien quis, varius congue erat. Etiam porttitor turpis sem,
                a lobortis leo aliquet in. Phasellus vitae sapien et elit scelerisque dignissim. Nulla facilisi. Sed rhoncus nisi ac
                magna cursus, vitae blandit justo laoreet. Quisque commodo tristique laoreet. Proin aliquet vestibulum lacus, quis sagittis
                nisi dictum ut. Suspendisse ac velit augue. Mauris elementum consequat consectetur. Duis interdum neque nec vestibulum varius.
                Donec consequat id odio vel aliquet.
            </p>
            <p>
                Quisque aliquet est ut malesuada egestas. Etiam ut leo pellentesque, lobortis ante maximus, placerat nulla. Quisque ornare
                vulputate libero, non vehicula felis mattis nec. Curabitur bibendum sapien sit amet sagittis maximus. Vestibulum ante ipsum
                primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec a massa ultricies, condimentum nunc ac, fermentum dui.
                Suspendisse gravida lobortis pulvinar. Quisque a dui suscipit, interdum orci sit amet, tincidunt tellus. Quisque euismod neque
                ut scelerisque convallis. Quisque et viverra turpis.
            </p>
        </section>
    </div>

    <div class="container-fluid px-0" id="contactDiv">
        <section>
            <p class="heading" id="contact">
                Contact Me
            </p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" id="name" />

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" />
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn" id="submitButton">Submit</button>
            </form>
        </section>
    </div>

    <div class="container-fluid px-0" id="footerDiv">
        <section>
            <footer>
                <p id="copyright">mathstutorchris.com © 2022</p>
            </footer>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>