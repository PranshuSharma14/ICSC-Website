<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICSC 2027 Conference</title>


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="path/to/owl.carousel.css" rel="stylesheet">
    <link href="path/to/owl.theme.default.css" rel="stylesheet">
    <link href="styles/home.css" rel="stylesheet">



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <?php include 'includes.php' ?>
</head>
<style>
    


   .highlight-carousel .owl-item img {
    height: 260px;              /* ⬆️ slightly bigger */
    width: 100%;
    object-fit: contain;
    background: #f5f5f5;
    border-radius: 12px;
}

    /* ===== Move Owl Nav BELOW carousel ===== */
    .highlight-carousel .owl-nav {
        position: static;             
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 20px;             
    }


    .highlight-carousel .owl-nav button {
        background: #003399 !important;   
        color: #fff !important;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        font-size: 32px !important;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    
    .highlight-carousel .owl-nav button:hover {
        background: #001f66 !important;
        transform: scale(1.1);
    }

    
    .highlight-carousel .owl-nav button:focus {
        outline: none;
    }

    /* Continuous subtle highlight (breathing glow) */
    @keyframes gentlePulse {
        0% {
            box-shadow: 0 0 0 rgba(37, 99, 235, 0.15);
            background-color: #eff6ff;
        }
        50% {
            box-shadow: 0 0 20px rgba(37, 99, 235, 0.35);
            background-color: #e0edff;
        }
        100% {
            box-shadow: 0 0 0 rgba(37, 99, 235, 0.15);
            background-color: #eff6ff;
        }
    }

    .acknowledgment-highlight {
        animation: gentlePulse 4.5s ease-in-out infinite;
    }

    /* Subtle text highlight animation */
    @keyframes textEmphasis {
        0% {
            color: #1f2937;         
            opacity: 0.95;
        }
        50% {
            color: #1e40af;          
            opacity: 1;
        }
        100% {
            color: #1f2937;
            opacity: 0.95;
        }
    }

    .acknowledgment-text-highlight {
        animation: textEmphasis 4.5s ease-in-out infinite;
    }

</style>

<body>
  

    <div class="relative w-full  mx-auto pb-4">

        <section class="z-50">
            <?php include 'navbar.php' ?>
        </section>


        <section class="py-12 border-b border-gray-300">
            <h2 class="text-3xl font-bold text-center mb-8">
                 Conference Highlights
            </h2>

            <div class="owl-carousel highlight-carousel px-10">
                <?php
                    for ($i = 1; $i <= 21; $i++) {
                          echo '
                        <div class="p-2">
                        <img src="img/indexpage/' . $i . '.jpg"
                            class="w-full h-40 object-contain rounded-lg shadow"
                             alt="highlight ' . $i . '">
                         </div>';
                    }
                ?>
            </div>
        </section>

        
    <!--

        <div class="grid grid-cols-7">
            <div class="col-span-7 my-10 flex justify-center">
                <span class="text-3xl font-bold text-center">Sponsoring Organization</span>

            </div>
            <div></div>
            <div class="col-span-5 overflow-hidden">

                <div class="overflow-x-auto">
                    <div class="sponsor w-auto mx-auto flex justify-center items-center">

                        <img class="w-1/5" src="img/ants logo.jpg" alt="QR code">

                    </div>

                    <br><br>
                    <div class="divider"></div>
                </div>
            </div>
        </div>

        <div class="px-[5%] m-10">
            <h1 class="text-3xl text-center font-bold mb-5">Chief Guest</h1>
            <div class="chief-container w-[100%] h-[75vh] m-auto flex lg:w-[80%] lg:h-[50vh] justify-between rounded-lg flex-wrap">
                <div class="bg-transparent flex-1">
                    <div class="flex h-full justify-center bg-transparent  md:p-10 md:pl-20 md:mt-0">
                        <img src="img/chief_guest2025.jpeg" alt="" class="h-[50vh] w-[80%] lg:h-[90%] lg:w-[80%] m-5% mx-auto  rounded-lg">
                    </div>

                </div>


                <div class="flex-1 bg-transparent flex flex-col ">
                    <div class="flex h-full justify-center align-center bg-transparent pr-[15%]">
                        <div class="bg-transparent text-white my-[25%]">
                            <h1 class="text-3xl font-bold align-center">Sunil Kumar Barnwal</h1><br>
                            <p class="text-sm text-justify z-100 leading-relaxed">Additional Secretary Department of Higher Education, Ministry of Education, Government of India<br>
                                Indian Administrative Service(IAS) - Government of India. Lee Kuan Yew School of Public Policy<br>
                                New Delhi, Delhi, India</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    -->

        <section class="border-b border-gray-300">
            <div class="flex flex-col md:flex-row items-start justify-around">
                <div class="pt-8 card-body">
                    <h2 class="text-2xl font-bold card-title">Latest News and Announcements</h2>
                    <ol class="flex flex-col space-y-4 mx-8 mt-4 list-decimal">
                        <li class="flex flex-col space-y-1 animate-pulse">
                            <span class="text-red-500 font-bold">Accepted papers will be submitted for inclusion into IEEE Xplore subject to meeting IEEE Xplore’s scope and quality requirements</span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Program Plan <span class="text-blue-600 text-sm font-bold ml-2"> COMING SOON </span> </h6> 
                    
                        </li>

                        <!--
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Session Plan</h6>
                            <span>For more details please click <a class="text-primary" href="resources/ICSC 2025 FULL Session Plan.pdf" download="resources/ICSC 2025 FULL Session Plan.pdf">HERE</a></span>

                        </li>
                        -->
                        
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Session Plan <span class="text-blue-600 text-sm font-bold ml-2"> COMING SOON </span> </h6> 
                    
                        </li>

                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Inaguration Invitation <span class="text-blue-600 text-sm font-bold ml-2"> TO BE UPDATED </span> </h6> 
                    
                        </li>

                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Latest Updates</h6>
                            <!-- <span>Visit our facebook page for latest updates! <a class="text-primary" href="https://www.facebook.com/profile.php?id=100079333816857" target="_blank">HERE</a></span> -->
                            <!-- <span>Coming soon</span> -->

                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">IEEE Conference Calender</h6>
                            <!-- <span>Find us on official calender, please click<a class="text-primary" target="_blank" href="https://conferences.ieee.org/conferences_events/conferences/conferencedetails/60394">HERE</a></span> -->
                            <!-- <span>Coming soon</span> -->
                        </li>

                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Previous ICSC Conferences</h6>
                            <span>For more details please click <a class="text-primary" href="about.php#previous">HERE</a></span>

                        </li>

                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Call for Papers <span class="text-blue-600 text-sm font-bold ml-2"> COMING SOON </span> </h6> 
                    
                        </li>

                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Instructions for the Authors</h6>
                            <span>For more details please click <a class="text-primary" href="instruction.php">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">List of Distinguished TPC Members</h6>
                            <span>For more details please click <a class="text-primary" href="tpc.php">HERE</a></span>
                        </li>
                        <!-- <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Instructions for Attendees</h6>
                            <span><a href="#" class="text-primary" >Coming soon</a></span>
                            <span>For more details please click <a class="text-primary" href="http://localhost/icsc2023-updated/instruction.php" >HERE</a></span> 
                        </li> -->
                    </ol>
                </div>
                <div class="card-body text-justify">
                    <h2 class="card-title text-2xl font-bold">Important Deadlines</h2>
                    <hr>
                    <table class="table table-compact w-full">
                        <tbody>
                            <tr>
                                <td class="text-sm md:text-xl">Paper Submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    16 August 2026
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Notification of acceptance</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">16 September 2026</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Accepted Paper Registration Date</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">16 September 2026</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Final Paper(Camera Ready) submission Date</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    1 October 2026
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Link to paper submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    TO BE UPDATED
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="flex flex-col card-body">
            <h2 class="card-title text-3xl">Conference Organizers</h2>
            <hr class="w-full" />
            <div class="flex flex-col lg:flex-row justify-between items-start space-y-4 lg:space-y-0">
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Chief Patron</h6>
                    <ul>
                        <li>Sh. Jaiprakash Gaur Ji</li>
                        <li>Sh. Manoj Gaur Ji</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Patron</h6>
                    <ul>
                        <li>Prof. S. C. Saxena</li>
                        <li>Sh. Manu Bhaskar Gaur</li>

                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">General Chair</h6>
                    <ul>
                        <li>Prof. Shweta Srivastava</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Conference Chair</h6>
                    <ul>
                        <li>Prof. Arti Noor</li>
                        <li>Prof. Jitendra Mohan</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Organizing Secretary</h6>
                    <ul>
                        <li>Prof. Vivek Dwivedi </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Organizing Co-Secretary</h6>
                    <ul>
                        <li>Dr. Pankaj Yadav</li>
                    </ul>
                </div>
            </div>
        </section>
        <hr class="w-full" />

       <section class="card-body mt-6">
            <h2 class="card-title text-2xl font-bold">CMT Acknowledgment</h2>
            <hr class="w-full mb-4" />

            <div class="bg-blue-50 border-l-4 border-blue-600 p-5 rounded-md shadow-sm acknowledgment-highlight">
                <p class="text-justify leading-relaxed acknowledgment-text-highlight">
                    The Microsoft CMT service was used for managing the peer-reviewing process for this conference.
                    This service was provided for free by Microsoft and they bore all expenses, including costs for
                    Azure cloud services as well as for software development and support.
                </p>
            </div>
        </section>


        <?php include 'footer.php' ?>
    </div>

    <script src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".highlight-carousel").owlCarousel({
                loop: true,
                margin: 15,
                autoplay: true,
                autoplayTimeout: 2500,
                autoplayHoverPause: true,
                nav: true,
                dots: false,
                responsive: {
                    0: { items: 2 },
                    640: { items: 3 },
                    1024: { items: 5 }
                }
            });
        });
    </script>


</body>

</html>