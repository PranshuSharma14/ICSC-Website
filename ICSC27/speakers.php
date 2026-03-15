<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Speakers | ICSC 2027</title>

    <?php include 'includes.php'; ?>

    <style>
        .flip-container {
            position: relative;
            width: 420px;
            height: 480px;
            perspective: 1000px;
            margin: 10px;
        }

        .flipper {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }

        .flip-container:hover .flipper {
            transform: rotateY(180deg);
        }

        .card-front,
        .flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 10px;
        }

        .card-front {
            background: url('https://media.istockphoto.com/id/865577704/photo/blue-abstract-glass-texture-background-or-pattern-creative-design-template.jpg?s=612x612&w=0&k=20&c=F-UBLPZt6XGB97fzjzITYxviW6yUZ_qQ5GmAt4xgBJ4=');
            background-size: cover;
        }

        .flip-back {
            background: url('https://media.istockphoto.com/id/865577704/photo/blue-abstract-glass-texture-background-or-pattern-creative-design-template.jpg?s=612x612&w=0&k=20&c=F-UBLPZt6XGB97fzjzITYxviW6yUZ_qQ5GmAt4xgBJ4=');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 20px;
            transform: rotateY(180deg);
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div class="relative w-full mx-auto">

        <!-- Navbar -->
        <section class="z-50">
            <?php include 'navbar.php'; ?>
        </section>

        <section>
            <h1 class="mt-10 mb-10 text-4xl text-center font-bold">
                Keynote Speakers
            </h1>

            <!-- Coming Soon Text -->
            <div class="text-center my-32">
                <p class="text-3xl font-semibold text-red-700">Coming Soon</p>
            </div>
         
            <?php /*
<div class="mx-12 my-20 flex justify-around flex-wrap">

    <!-- Speaker 1 -->
    <div class="flip-container">
        <div class="flipper">

            <div class="card-front new flex justify-center flex-col rounded-lg">
                <div class="flex justify-center w-full bg-transparent">
                    <img src="img/speakers/dr surya.jpg" alt=""
                        class="w-52 h-52 m-10 rounded-lg">
                </div>

                <div class="justify-center w-full bg-transparent">
                    <div class="text-white text-xl font-bold text-center bg-transparent">
                        Dr. Surya Bhattacharya
                    </div>
                    <div class="text-white text-center bg-transparent p-4 m-4">
                        Director of System in Package (SiP) at A*STAR Institute of
                        Microelectronics (IME), Singapore
                    </div>
                </div>
            </div>

            <div class="flip-back">
                <p>
                    Dr. Surya Bhattacharya (Senior Member IEEE) is Director and Head
                    of System-in-Package at A*STAR Institute of Microelectronics
                    (IME), Singapore. Over the past 30 years, he has worked on CMOS
                    scaling and Package Scaling at fabless companies, integrated
                    device manufacturer (IDM), and leading Research Institute.
                </p>
            </div>

        </div>
    </div>

    <!-- Speaker 2 -->
    <div class="flip-container">
        <div class="flipper">

            <div class="card-front new flex justify-center flex-col rounded-lg">
                <div class="flex justify-center w-full bg-transparent">
                    <img src="img/speakers/prof anajan.jpg" alt=""
                        class="w-52 h-52 m-10 rounded-lg">
                </div>

                <div class="justify-center w-full bg-transparent">
                    <div class="text-white text-xl font-bold text-center bg-transparent">
                        Prof. Ananjan Basu
                    </div>
                    <div class="text-white text-center bg-transparent p-4 m-4">
                        Professor<br>
                        Centre for Applied Research in Electronics<br>
                        IIT Delhi
                    </div>
                </div>
            </div>

            <div class="flip-back">
                <p>
                    Prof. Ananjan Basu received the B.Tech and M.Tech degrees from
                    IIT Delhi and a PhD from UCLA. His specialization includes
                    microwave and millimetre-wave component design, antennas,
                    imaging, and guided wave theory.
                </p>
            </div>

        </div>
    </div>

    <!-- Speaker 3 -->
    <div class="flip-container">
        <div class="flipper">

            <div class="card-front new flex justify-center flex-col rounded-lg">
                <div class="flex justify-center w-full bg-transparent">
                    <img src="img/speakers/drvenkata.png" alt=""
                        class="w-52 h-52 m-10 rounded-lg">
                </div>

                <div class="justify-center w-full bg-transparent">
                    <div class="text-white text-xl font-bold text-center bg-transparent">
                        Dr. L Venkata Subramaniam
                    </div>
                    <div class="text-white text-center bg-transparent p-4 m-4">
                        Quantum India Leader, IBM
                    </div>
                </div>
            </div>

            <div class="flip-back">
                <p>
                    With a PhD from IIT Delhi and 26 years of experience, Dr.
                    Venkata has 34 patents, 150 publications, and the title of IBM
                    Master Inventor, driving India’s quantum computing initiatives.
                </p>
            </div>

        </div>
    </div>

    <!-- Speaker 4 -->
    <div class="flip-container">
        <div class="flipper">

            <div class="card-front new flex justify-center flex-col rounded-lg">
                <div class="flex justify-center w-full bg-transparent">
                    <img src="img/speakers/dr bhim.jpg" alt=""
                        class="w-52 h-52 m-10 rounded-lg">
                </div>

                <div class="justify-center w-full bg-transparent">
                    <div class="text-white text-xl font-bold text-center bg-transparent">
                        Prof. (Dr.) Bhim Singh
                    </div>
                    <div class="text-white text-center bg-transparent p-4 m-4">
                        SERB National Science Chair & Emeritus Professor<br>
                        IIT Delhi
                    </div>
                </div>
            </div>

            <div class="flip-back">
                <p>
                    Prof. Bhim Singh is a Fellow of IEEE, INAE, INSA, NASI, IAS,
                    TWAS and has made pioneering contributions in power electronics
                    and renewable energy systems.
                </p>
            </div>

        </div>
    </div>

    <!-- Speaker 5 -->
    <div class="flip-container">
        <div class="flipper">

            <div class="card-front new flex justify-center flex-col rounded-lg">
                <div class="flex justify-center w-full bg-transparent">
                    <img src="img/speakers/dr manish.jpg" alt=""
                        class="w-52 h-52 m-10 rounded-lg">
                </div>

                <div class="justify-center w-full bg-transparent">
                    <div class="text-white text-xl font-bold text-center bg-transparent">
                        Dr. Manish Kumar Hooda
                    </div>
                    <div class="text-white text-center bg-transparent p-4 m-4">
                        Director, Indian Semiconductor Mission<br>
                        MeitY, India
                    </div>
                </div>
            </div>

            <div class="flip-back">
                <p>
                    Dr. Hooda is a semiconductor process integration specialist
                    leading India’s first exotic compound semiconductor facility
                    and driving national semiconductor R&D initiatives.
                </p>
            </div>

        </div>
    </div>

    <!-- Speaker 6 -->
    <div class="flip-container">
        <div class="flipper">

            <div class="card-front new flex justify-center flex-col rounded-lg">
                <div class="flex justify-center w-full bg-transparent">
                    <img src="img/speakers/prof ramesh.jpg" alt=""
                        class="w-52 h-52 m-10 rounded-lg">
                </div>

                <div class="justify-center w-full bg-transparent">
                    <div class="text-white text-xl font-bold text-center bg-transparent">
                        Prof. Ramesh Bansal
                    </div>
                    <div class="text-white text-center bg-transparent p-4 m-4">
                        University of Sharjah, UAE
                    </div>
                </div>
            </div>

            <div class="flip-back">
                <p>
                    Prof. Bansal has over 25 years of academic experience, 450+
                    publications, and research expertise in renewable energy,
                    smart grids, and microgrids.
                </p>
            </div>

        </div>
    </div>

    <!-- Speaker 7 -->
    <div class="flip-container">
        <div class="flipper">

            <div class="card-front new flex justify-center flex-col rounded-lg">
                <div class="flex justify-center w-full bg-transparent">
                    <img src="img/speakers/prof ravindra.png" alt=""
                        class="w-52 h-52 m-10 rounded-lg">
                </div>

                <div class="justify-center w-full bg-transparent">
                    <div class="text-white text-xl font-bold text-center bg-transparent">
                        Prof. Ravinder Dahiya
                    </div>
                    <div class="text-white text-center bg-transparent p-4 m-4">
                        Northeastern University, USA
                    </div>
                </div>
            </div>

            <div class="flip-back">
                <p>
                    Prof. Dahiya leads the BEST group focusing on flexible
                    electronics and e-skin technologies and has served as IEEE
                    Sensors Council President.
                </p>
            </div>

        </div>
    </div>

</div>
*/ ?>



        </section>

        <hr class="w-full" />

        <section class="mt-auto">
            <?php include 'footer.php'; ?>
        </section>

    </div>

</body>
</html>
