<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asset List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href='{{asset('css/stations.css')}}' rel='stylesheet'>
    <?php $all = $all; ?>

</head>


<body>

    {{-- edit popup --}}
    
    <div class="overlay-container">
        
    </div>

    <div class="container">

        {{-- Sorting tools --}}
        <div class="toggleBtn">

        </div>

        <div class="search-bar">
            <input oninput="sortSearch(document.getElementById('search-bar').value)" type="search" id="search-bar" placeholder="Search for Asset" value=""></input>
        </div>



        <div class="table-wrapper">

            <div class="create-asset-btn">
                <button onclick="editAsset(undefined,'open','add')"><i class='bx bxs-plus-square' ></i></button>
            </div>

            <table class="assets-table">
                <thead>
                    <tr>
                        <th onclick="sortTable('type')">Workstation <i id="th-location" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('make')">Monitors <i id="th-make" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('model')">Dock<i id="th-model" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('location')">Mnk<i id="th-location" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('user')">User<i id="th-user" class='bx bxs-chevron-down'></i></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="asset-tbody">

                </tbody>
            </table>

        </div>
    </div>

    

    {{-- <script> window.allAssetsArray = <?php echo json_encode($all); ?>;</script>
    <script type="text/javascript" src="js/stations.js"></script> --}}

</body>
</html>