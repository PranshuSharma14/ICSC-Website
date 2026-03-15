<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizing Committees | ICSC 2027</title>
    <?php include 'includes.php' ?>
</head>

<body>
    <!-- Navbar begins -->

    <!-- Navbar ends -->

    <div class="relative w-full  mx-auto">
        <section class="z-50">
            <?php include 'navbar.php' ?>
        </section>
        <section>
            <div class="flex items-center flex-col">
                <div class="flex justify-center m-5">
                    <span class="text-3xl font-bold dark: capitalize">Organizing Committee Members</span>
                </div>

                <div></div>

                <div class="flex flex-col text-justify">

                    <div class="divider"></div>
                    <div class="flex flex-col">
                        <div class="my-2 flex justify-center items-start space-x-32">
                            <div class="flex flex-col border border-black p-10 shadow-xl overflow-visible rounded-lg">
                                <b class="text-md mb-1">General Chair:</b>

                                <a href="http://www.jiit.ac.in/prof-shweta-srivastava" target="_blank" class="underline mt-3">Prof. Shweta Srivastava</a>
                                <span>Jaypee Institute of Information Technology,<br /> Noida, India</span>
                            </div>
                            <div class="flex flex-col border border-black p-10 shadow-xl overflow-visible rounded-lg">
                                <b class="text-md mb-1">Organizing Secretary:</b>
                                <a href="https://www.jiit.ac.in/prof-vivek-dwivedi" target="_blank" class="underline">Prof. Vivek Dwivedi</a>
                                <span>Jaypee Institute of Information Technology,<br /> Noida, India</span>
                                <br />
                                <b class="text-md mb-1">Co-organizing Secretary:</b>
                                <a href="" target="_blank" class="underline">Dr. Pankaj Yadav </a>
                                <span>Jaypee Institute of Information Technology,<br /> Noida, India</span>
                            </div>
                     
                        </div>
                        <div class="divider"></div>
                    </div>
                    <div id="organizingTable" class="mt-5 pt-5">
                        <?php include 'organisingTable.php' ?>
                    </div>
                </div>
                <div></div>
                <div class="mt-5"></div>
            </div>
        </section>
        <hr class="w-full" />
        <section>
            <?php include 'footer.php' ?>
        </section>
    </div>

    <!-- Footer begins -->

    <!-- Footer ends -->
</body>

</html>