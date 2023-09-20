<?php  
 include('../lib/helper.php'); 
 include('../layout/header.php'); 
 
session_start();

	include("../login/connection.php");
	include("../login/functions.php");

	$user_data = check_login($con);

?>
    <p class="text-2xl uppercase">User:
<?php echo  $user_data['user_name']; ?>
</p>

<?php

$db = new db();
  $db->table_name ='patient' ;
?>
   

   <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="border border-black rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-green-600">
                                            <i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                    </div>

                                    <div class="flex-1 text-right md:text-center">
                                        <a href="../department/index.php">
                                        <h2 class="font-bold uppercase text-gray-600">Department</h2>
                                        <p class="font-bold text-3xl"><span class="text-green-500"><i
                                                    class="fas fa-caret-up"></i></span></p>
                                                </a>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="border border-black rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-pink-600"><i
                                                class="fas fa-users fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                    <a href="../doctors/index.php">
                                        <h2 class="font-bold uppercase text-gray-600">Doctors</h2>
                                        <p class="font-bold text-3xl"><span class="text-pink-500"><i
                                        class="fas fa-caret-up"></i></span></p>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="border border-black rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-yellow-600"><i
                                                class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                    <a href="../patient/index.php">
                                        <h2 class="font-bold uppercase text-gray-600">Patients</h2>
                                        <p class="font-bold text-3xl"><span class="text-yellow-600"><i
                                                    class="fas fa-caret-up"></i></span></p>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="border border-black rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-red-600"><i
                                                class="fas fa-inbox fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                    <a href="../appointment/index.php">
                                        <h2 class="font-bold uppercase text-gray-600">Appointments</h2>
                                        <p class="font-bold text-3xl"><span class="text-red-500"><i
                                                    class="fas fa-caret-up"></i></span></p>
                                    </a>         
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="border border-black rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-blue-600"><i
                                                class="fas fa-server fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Server Uptime</h2>
                                        <p class="font-bold text-3xl">365 days</p>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        
                    </div>


                    


                    <div class="flex flex-row flex-wrap flex-grow mt-2">

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div
                                    class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h2 class="font-bold uppercase text-gray-600">Graph</h2>
                                </div>
                                <div class="p-5">
                                    <canvas id="chartjs-0" class="chartjs" width="undefined"
                                        height="undefined"></canvas>
                                    <script>
                                        new Chart(document.getElementById("chartjs-0"), {
                                            "type": "line",
                                            "data": {
                                                "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                                "datasets": [{
                                                    "label": "Analytics",
                                                    "data": [65, 59, 80, 81, 56, 55, 40],
                                                    "fill": false,
                                                    "borderColor": "rgb(75, 192, 192)",
                                                    "lineTension": 0.1
                                                }]
                                            },
                                            "options": {}
                                        });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>



                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div
                                    class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                                </div>
                                <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined"
                                        height="undefined"></canvas>
                                    <script>
                                        new Chart(document.getElementById("chartjs-4"), {
                                            "type": "doughnut",
                                            "data": {
                                                "labels": ["Patients", "Appointments", "Doctors"],
                                                "datasets": [{
                                                    "label": "Issues",
                                                    "data": [200, 100, 100],
                                                    "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                                }]
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>