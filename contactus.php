<?php
include "logo1.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <script src="contactus.js">
    </script>
    <link rel="stylesheet" href="contactus.css" />
</head>
<style>
    .hidden{
        display: none;
    }
</style>
<body>
    <div class="contactus">

        <h1 class="c1">Contact Us</h1>
        <h2>Get In Touch</h2>
        <p>Contact us today to discuss your bespoke apparel needs.</p><br>

        <b>Sample Preparation Steps</b><br>
        <p>1. Provide your techpack, colorways, materials, and size requirements for a cost estimate.<br>
            2. We start sampling upon receipt of the sample payment.<br>
            3. We prototype and modify until all details are finalized.<br>
            4. Once approve, samples are signed for production.<br>
        </p>
        <br>
        <b>Production Steps:</b>
        <p>
            1. A 50% downpayment is required to start production.<br>
            2. We handle cutting, sewing, trimming, ironing, and packaging of garments.<br>
            3. You conduct a thorough inspection before loading for shipping.<br>
            4. The 50% balance payment is required before shipment.<br>
        </p>
        <br>
        <br>
        <b>Address</b>
        <br>
        <p>Jannat Asia Trading, 800 Jalan Sentul, 5-22, D7 Offices, Jln Sentul, Sentul, 51000 Kuala Lumpur, Wilayah
            Persekutuan Kuala Lumpur</p>
        <br>
        <b>Phone</b>
        <p><b>Vietnam :</b> +84384411346 (Ms. Mindy)<br>
            <b>Malaysia:</b> +60163391135 (Ms. Cherry)<br>
        </p>
    </div>
    <br>

    <form method="POST" action="sendmail.php" enctype="multipart/form-data">
        <div class='form'>
            <div class="name" style="width: 100%; display: flex; height: 55px; margin-bottom: 10px;">
                <div class="fname" style="float: left;">
                    First Name<br>
                    <input class="fname" name="fname" type="text" placeholder="First Name*" required
                        style="width: 150px; height: 40px; border: 2px black solid; border-radius: 4px; box-shadow: 0.5px 0.5px 0px 0.5px;" />
                </div>
                <div class="lname" style="margin-left: 20px;">
                    Last Name<br>
                    <input class="lname" name="lname" type="text" placeholder="Last Name*" required
                        style="width: 150px; height: 40px; border: 2px black solid; border-radius: 4px; box-shadow: 0.5px 0.5px 0px 0.5px;" />
                </div>
            </div>
            Email<br>
            <input class="email" name="email" type="text" placeholder="Email*" required
                style="width: 320px; height: 40px; border: 2px black solid; border-radius: 4px; box-shadow: 0.5px 0.5px 0px 0.5px;" />

            Your Target Market<br>
            <input class="cus_target" name="cus_target" type="text" placeholder="Your Target Market*" required
                style="width: 320px; height: 40px; border: 2px black solid; border-radius: 4px; box-shadow: 0.5px 0.5px 0px 0.5px;" />

            Category You Wish To Receive A Quote<br>
            <input class="cus_cater" name="cus_cater" type="text" placeholder="Category You Wish To Receive A Quote*"
                required
                style="width: 320px; height: 40px; border: 2px black solid; border-radius: 4px; box-shadow: 0.5px 0.5px 0px 0.5px;" />

            Order Quantity<br>
            <input class="quantitys" name="quantitys" type="number" placeholder="Order Quantity*" required
                style="width: 320px; height: 40px; border: 2px black solid; border-radius: 4px; box-shadow: 0.5px 0.5px 0px 0.5px;" />

            Enter Your Message<br>
            <input class="cust_msg" name="cust_msg" type="text" placeholder="Enter Your Message*"
                style="width: 320px; height: 40px; border: 2px black solid; border-radius: 4px; box-shadow: 0.5px 0.5px 0px 0.5px;" />

            Attach Files Here
            <div class="file-input">
                <section class="container">
                    <div class="mt-2">
                        <div class="mt-1 md:w-1/2 lg:w-1/2">
                            <!-- <h3 class="m1">
                            Upload photo Indentification
                        </h3> -->
                            <!-- <hr style="margin-top: 1.25rem;" /> -->

                            <!-- Documents uploads form and instructions -->
                            <section class="mt-5">
                                <div class="drag-area" dropzone="true">
                                    <i class="fa-sharp fa-solid fa-cloud-arrow-up" id="upload"></i>
                                    <span class="drag-file">Drag files here to upload </span> or
                                    <button style="border-radius: 9999px;" class="file-input-button"
                                        id="file-input-button">
                                        select a file
                                    </button>

                                    from your device
                                    <p class="mt-12">
                                        JPG, PNG or PDF only, maximum file size-5MB
                                    </p>
                                    <input type="file" class="file-input hidden" name="files" />
                                </div>
                            </section>

                            <!-- Images groups - All the selected images will be shown here -->
                            <p class="error hidden" id="filesize-error" >
                                The file size should be less than 5mb
                            </p>
                            <p class="error hidden" id="filetype-error" >
                                The file should be an image or pdf only
                            </p>
                            <!-- No document selected -->
                            <p class="mt-6 hidden" id="input-empty-error"></p>
                            <!-- Showing all the files inside this list -->
                            <ul id="document-images" name="document-images" style="width: 300px;"></ul>
                        </div>
                    </div>
                </section>
                <section style="text-align: center;" class="hidden">
                    <p>Files uploaded successfully</p>
                </section>
            </div>

            <button type="submit" style="background-color: black; color: white; margin-bottom: 20px; margin-left: 45%; margin-right: 20%; padding-top: 10px; padding-bottom: 10px; padding-left: 40px; padding-right: 40px; border-radius: 4px 4px 4px 4px; text-align: center;">Submit</button>
        </div>
    </form>
</body>

<?php
include "footer.php";
?>
</html>