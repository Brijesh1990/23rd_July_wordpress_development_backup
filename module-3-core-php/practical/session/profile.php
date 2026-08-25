<?php 
include("header.php");
if(!isset($_SESSION["email"]))
{
 header("location:index.php");
}
?>
<!-- CONTENT -->
<main class="pt-20 p-4 md:p-8 bg-gray-100 min-h-screen">

<?php
$email = $_SESSION["email"];
$name = rtrim($email, "@gmail.com");
?>

<div class="max-w-5xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">

    <!-- Profile Header -->
    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6 md:p-10 text-white">
        <div class="flex flex-col md:flex-row items-center gap-6">

            <!-- Avatar -->
            <div class="w-24 h-24 md:w-28 md:h-28 rounded-full bg-white text-blue-600 
                        flex items-center justify-center text-3xl font-bold shadow-lg">
                <?php echo strtoupper(substr($name,0,1)); ?>
            </div>

            <!-- Name & Email -->
            <div class="text-center md:text-left">
                <h2 class="text-2xl md:text-3xl font-bold">
                    <?php echo ucfirst($name); ?>
                </h2>
                <p class="opacity-90"><?php echo $email; ?></p>
            </div>

        </div>
    </div>

    <!-- Profile Body -->
    <div class="p-6 md:p-10 grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Personal Details -->
        <div>
            <h3 class="text-xl font-semibold mb-4 border-b pb-2">
                Personal Details
            </h3>

            <div class="space-y-3 text-gray-700">
                <p><span class="font-medium">Full Name:</span> <?php echo ucfirst($name); ?></p>
                <p><span class="font-medium">Mobile:</span> <?php echo $_SESSION["mobile"] ?? "Not Provided"; ?></p>
                <p><span class="font-medium">Gender:</span> <?php echo $_SESSION["gender"] ?? "Not Provided"; ?></p>
                <p><span class="font-medium">Date of Birth:</span> <?php echo $_SESSION["dob"] ?? "Not Provided"; ?></p>
                <p><span class="font-medium">City:</span> <?php echo $_SESSION["city"] ?? "Not Provided"; ?></p>
            </div>
        </div>

        <!-- Account Details -->
        <div>
            <h3 class="text-xl font-semibold mb-4 border-b pb-2">
                Account Details
            </h3>

            <div class="space-y-3 text-gray-700">
                <p><span class="font-medium">Email:</span> <?php echo $email; ?></p>
                <p><span class="font-medium">Account Type:</span> Student</p>
                <p><span class="font-medium">Member Since:</span> <?php echo $_SESSION["created_at"] ?? "N/A"; ?></p>
                <p><span class="font-medium">Status:</span> 
                    <span class="text-green-600 font-semibold">Active</span>
                </p>
            </div>
        </div>

    </div>

    <!-- Action Buttons -->
    <div class="p-6 md:px-10 md:pb-10 flex flex-col sm:flex-row gap-4 justify-end">

        <a href="edit-profile.php"
           class="px-6 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition text-center">
            Edit Profile
        </a>

       

    </div>

</div>

</main>