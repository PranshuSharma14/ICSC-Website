<?php
// Enable error reporting (remove later if you want)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Program Committee | ICSC 2027 Conference</title>

    <?php include 'includes.php'; ?>
</head>

<body>

    <!-- Navbar -->
    <section class="z-50">
        <?php include 'navbar.php'; ?>
    </section>

    <!-- Main Content -->
    <div class="relative w-full mx-auto mt-20">

        <section>
            <div class="grid grid-cols-7">

                <!-- Heading -->
                <div class="col-span-7 flex justify-center m-5">
                    <span class="text-3xl font-bold">Track Chairs</span>
                </div>

                <!-- Coming Soon 
                <div class="col-span-7 text-center my-20 flex justify-center">
                    <p class="text-3xl font-semibold text-red-700">Coming Soon</p>
                </div> -->

                <!-- Table -->
                <div class="col-span-7 overflow-x-auto my-5 sm:flex sm:justify-center">
                    <table class="table table-compact table-center text-md border border-gray-400 border-collapse">
                        <thead>
                            <tr class="text-center">
                                <th class="font-bold border border-gray-400">Track Name</th>
                                <th class="font-bold border border-gray-400">Chair</th>
                                <th class="font-bold border border-gray-400">Co-Chair</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td class="font-bold border border-gray-400">Communication</td>
                                <td class="border border-gray-400">Prof. Ghanshyam Chaudhary, MNIT Jaipur, India</td>
                                <td class="border border-gray-400">Prof. Alok Joshi, JIIT Noida, India</td>
                            </tr>
                            <tr>
                                <td class="font-bold border border-gray-400">Signal Processing</td>
                                <td class="border border-gray-400">Prof. Ram Bilas Pachori, IIT Indore, India</td>
                                <td class="border border-gray-400">Dr. Ashish Gupta, JIIT Noida, India</td>
                            </tr>
                            <tr>
                                <td class="font-bold border border-gray-400">
                                    VLSI Technology & <br> Embedded Systems
                                </td>
                                <td class="border border-gray-400">Prof. Sudeb Dasgupta, IIT Roorkee, India</td>
                                <td class="border border-gray-400">Dr. Shruti Kalra, JIIT Noida, India</td>
                            </tr>
                            <tr>
                                <td class="font-bold border border-gray-400">
                                    Intelligent Computing <br> & Machine Learning
                                </td>
                                <td class="border border-gray-400">
                                    Prof. Ghanshyam Singh, University of Johannesburg, SA
                                </td>
                                <td class="border border-gray-400">Dr. Manoj Tolani, JIIT Noida, India</td>
                            </tr>
                            <tr>
                                <td class="font-bold border border-gray-400">Sustainable Energy Systems</td>
                                <td class="border border-gray-400">Prof. Narendra D. Londhe, NIT Raipur, India</td>
                                <td class="border border-gray-400">Dr. Ruby Beniwal, JIIT Noida, India</td>
                            </tr>
                            <tr>
                                <td class="font-bold border border-gray-400">
                                    Human-Centric Assistive Technologies and Intelligent Robotics
                                </td>
                                <td class="border border-gray-400">Prof. Vijay Kumar Gupta, IIIT Jabalpur, India</td>
                                <td class="border border-gray-400">Dr. Satya Narayan Patel, JIIT Noida, India</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- TPC Table Include -->
                <div class="col-span-7 flex justify-center mt-10">
                    <?php include 'tpctable.php'; ?>
                </div>

                <!-- Dynamic JS Data -->
                <div class="col-span-7 flex justify-center mt-6">
                    <div class="overflow-x-auto" id="tpcData25"></div>
                </div>

            </div>
        </section>

        <hr class="w-full my-10" />

        <!-- Footer -->
        <section>
            <?php include 'footer.php'; ?>
        </section>

    </div>

    <!-- Scripts -->
    <script src="./js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (typeof gettpc25 === "function") {
                gettpc25();
            }
        });
    </script>

</body>
</html>