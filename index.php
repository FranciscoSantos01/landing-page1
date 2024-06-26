<?php
include_once("/var/www/_templates/config/public/config-medicare.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" description="noindex,nofollow,noarchive">
    <title>
        <?php echo (($domainName == "Dental Benefit Finder") ? "Benefits For Seniors" : $domainName) ?>

    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <a href="https://cdn.sppoints.xyz/click" class="hidden" id="rtRef"></a>
    <nav class="bg-red-500 p-3 mt-0 w-full">
        <div class="container mx-auto flex items-center justify-between align-middle md:px-48">
            <div class="flex text-white font-extrabold">
                <?php echo (($domainName == "Dental Benefit Finder") ? "Benefits For Seniors" : $domainName) ?>
            </div>
        </div>
    </nav>
    <div id="mainContainer" class="mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl text-center container">
    <section id="hero">
            <h1 class="font-black text-center break-normal text-base md:text-2xl mx-auto">
                [STATE] Seniors: 2024 Medicare Advantage Plans can help you save Thousands in Additional Benefits.Check Your Eligibility Now
            </h1>
            <img class="mx-auto my-2 w-full" src="./assets/images/hero1.png" id="heroImage" />
            <p class="my-2 md:text-xl">
                Millions of Seniors are rushing the hotlines to secure their 2024 Medicare Advantage benefit.
            </p>
            <p class="my-2 md:text-xl">
                <strong>Benefit plans and options are always chanching.</strong>,so speak to our licensed sales agents and choose the right Medicare Advantage plan before enrollment ends
            </p>
        </section>
        <div>
            <div id="display1" class="md:mt-8 mt-4">
                <h3 class="font-bold text-center md:text-3xl text-2xl my-8">
                    Tap your Age
                </h3>
                <div class="grid grid-cols-1  gap-6">
                    <button id="btn-2" class="flex justify-center bg-blue-500 hover:bg-blue-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-blue-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">65 to 74</button>
                    <button id="btn-3" class="flex justify-center bg-blue-500 hover:bg-blue-500  tracking-wide text-white font-bold rounded-2xl md:w-3/4 w-1/2 mx-auto border-b-2 border-blue-500 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">Over 75</button>
                </div>
            </div>
            <div id="display2" class="md:mt-8 mt-4 hidden">
                <h3 class="font-bold text-balance text-center md:text-3xl md:text-center text-4xl my-8">
                    Are You On Medicare Part A or Part B?
                </h3>
                <div class="grid grid-cols-1 gap-6">
                    <button id="btn-yes" class="cursor-pointer transition-all bg-green-500 text-white px-6 py-4 rounded-lg
                    border-green-600
                    border-b-[4px]
                    active:border-b-[2px] active:brightness-90 active:translate-y-[2px] text-base  md:w-3/4 w-1/2 mx-auto" >Yes</button>
                    <button id="btn-no" class="cursor-pointer transition-all bg-green-500 text-white px-6 py-4 rounded-lg
                    border-green-600
                    border-b-[4px]
                    active:border-b-[2px] active:brightness-90 active:translate-y-[2px] text-base  md:w-3/4 w-1/2 mx-auto">No</button>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div id="display4" class="hidden hidden mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl container">
        <div class="p-6  mt-4 bg-white text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-green-500">
                Congratulations!
            </h2>
            <p class="mt-2 text-xl md:text-2xl font-bold  capitalize font-bold">
                You may be eligible for additional benefits and saving that may include:
            </p>
            <section class="  my-4 font-bold  text-md md:text-2xl">
                <div class="flex justify-center items-center gap-5 my-2 w-full">
                    <img src="./assets/images/checked.png" width="40" height="40" alt="">
                    <div class="flex flex-col">
                        <span>Dental Hearing</span>
                        <span>and Visual Care</span>
                    </div>
                    </div>
              <div class="flex justify-center items-center gap-5 my-2 w-full">
              <img src="./assets/images/checked.png" width="40" height="40" alt="">
              <span>Groceries</span>
              </div>
               <div class="flex justify-center items-center my-2 gap-5 w-full">
               <img src="./assets/images/checked.png" class="self-start" width="40" height="40" alt="">
               <span>Prescriptions</span>
              </div>
             </section>
            <a href="tel:" id="callButton">
                <button class="cursor-pointer mt-5 transition-all bg-green-500 text-white px-6 py-4 rounded-lg
                border-green-600
                text-3xl
                border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px]
                active:border-b-[2px] active:brightness-90 active:translate-y-[2px]">
                    CALL (XXX)XXX-XXXX
                </button>
            </a>
            <p class="text-center text-balance my-6">
               <span class="w-fit bg-yellow-300">Make a <strong>quick call</strong> to our licensed sales agents to learn more before enroll.</span>
            </p>
            <div id="countdown" class="border-2 border-red-500 border-dashed w-max px-6 py-2 mx-auto">
                <span class="text-red-500" id="time"></span>
            </div>
        </div>
    </div>

    <footer class="footer mt-12 footer-center p-4 mt-12 mb-2 text-center max-w-6xl mx-auto text-xs">
        <div>
            <p>By clicking the above button and submitting this form, I agree that I am 18+ years old and I provide my signature expressly consenting to receive emails, calls, postal mail, text messages and other forms of marketing communication regarding Medicare and Health Insurance, or other offers from <?php echo $currentDomain; ?> and agents to the number(s) I provided, including a mobile phone, even if I am on a state or federal Do Not Call and/or Do Not Email registry. The list of companies participating are subject to change. I will receive calls and/or texts from multiple companies in the list and/or <?php echo $currentDomain; ?>. Such calls and text messages may use automated telephone dialing systems, artificial or pre-recorded voices. I understand my wireless carrier may impose charges for calls or texts. I understand that my consent to receive communications is not a condition of purchase and I may revoke my consent at any time. </p>
        </div>
        <div class="mb-4">
            <p>
                This information is for educational purposes only and not endorsed by
                Facebook , Instagram YouTube or any news publication.
            </p>
        </div>
        <div class="grid grid-flow-col gap-3 md:w-1/3 mx-auto my-8">
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/terms"> Terms & Conditions </a>
            <p class="text-blue-500">|</p>
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/privacy"> Privacy Policy </a>

            <p class="text-blue-500">|</p>
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/privacy.php#caresidents"> CCPA </a>
        </div>
        <div class="mt-8">
            <p>Copyright © 2024 - All right reserved
                <?php echo $domainName ?>
            </p>
        </div>
    </footer>
    <script src="https://cdn.sppoints.xyz/track.js?rtkcmpid=<?php echo $rtkCmpId; ?>"></script>
    <script>
        const domainName = "<?php echo $domainName; ?>";
        const cdnPath = "<?php echo $cdnPath; ?>";
        const ringbaNumberPrimary = "<?php echo $ringbaNumberPrimary; ?>";
        const ringbaNumberPrimaryTel = "<?php echo $ringbaNumberPrimaryTel; ?>";
        const rtkCmpId = "<?php echo $rtkCmpId; ?>";
        const mbOfferSite = "<?php echo $mbOfferSite; ?>";
        const ringbaScriptPrimary = "<?php echo $ringbaScriptPrimary; ?>";
        const currentDomain = "<?php echo $currentDomain; ?>";

        document.getElementById("pageTitle").innerText = (domainName === "Dental Benefit Finder") ? "Benefits For Seniors" : domainName;
        document.getElementById("navTitle").innerText = (domainName === "Dental Benefit Finder") ? "Benefits For Seniors" : domainName;
        document.getElementById("footerText").innerText = "By clicking the above button and submitting this form, I agree that I am 18+ years old and I provide my signature expressly consenting to receive emails, calls, postal mail, text messages and other forms of marketing communication regarding Medicare and Health Insurance, or other offers from " + currentDomain + " and agents to the number(s) I provided, including a mobile phone, even if I am on a state or federal Do Not Call and/or Do Not Email registry. The list of companies participating are subject to change. I will receive calls and/or texts from multiple companies in the list and/or " + currentDomain + ". Such calls and text messages may use automated telephone dialing systems, artificial or pre-recorded voices. I understand my wireless carrier may impose charges for calls or texts. I understand that my consent to receive communications is not a condition of purchase and I may revoke my consent at any time.";
        document.getElementById("copyright").innerText = "Copyright © 2024 - All right reserved " + domainName;

        const setRtClickId = () => {
            var anchorTag = document.getElementById("rtRef");
            var anchorUrl = new URL(anchorTag.href);
            var anchorParams = new URLSearchParams(anchorUrl.search);

            var windowUrl = new URL(window.location.href);
            var windowParams = new URLSearchParams(windowUrl.search);

            windowUrl.searchParams.set('age', '64');
            window.history.pushState({ path: windowUrl.toString() }, '', windowUrl.toString());

            for (let pair of anchorParams.entries()) {
                windowParams.append(pair[0], pair[1]);
            }

            windowUrl.search = windowParams.toString();
            history.replaceState({}, "", windowUrl.toString());
        }

        const loadRingba = () => {
            var script = document.createElement("script");
            script.src = ringbaScriptPrimary;
            document.head.appendChild(script);
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        const runCountdownTimer = () => {
            var now = new Date().getTime();
            var countDownDate = new Date(now + 3 * 60000).getTime();

            setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("time").innerHTML = minutes + ":" + seconds;

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("time").innerHTML = "EXPIRED";
                }
            }, 500);
        }
       const heroContainer = document.getElementById("hero")
        const btn2 = document.getElementById("btn-2");
        const btn3 = document.getElementById("btn-3");
        const btnYes = document.getElementById("btn-yes");
        const btnNo = document.getElementById("btn-no");
        const btnYes1 = document.getElementById("btn-yes1");
        const btnNo1 = document.getElementById("btn-no1");
        const display1 = document.getElementById("display1");
        const display2 = document.getElementById("display2");
        const display4 = document.getElementById("display4");

        btn2.addEventListener("click", () => {
            display1.style.display = "none";
            heroContainer.style.display = "none"
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '64');
            window.history.pushState({ path: newUrl.href }, '', newUrl.href);
            setRtClickId();
        });

        btn3.addEventListener("click", () => {
            display1.style.display = "none";
            heroContainer.style.display = "none"
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '76');
            window.history.pushState({ path: newUrl.href }, '', newUrl.href);
            setRtClickId();
        });

        btnYes.addEventListener("click", () => {
            display2.style.display = "none";
            display4.style.display= "block";
        });

        btnNo.addEventListener("click", () => {
            display2.style.display = "none";
            window.location.href = mbOfferSite;
            display5.style.display = "block";
        });

    </script>
</body>

</html>