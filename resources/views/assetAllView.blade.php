<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asset List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    {{-- <script src="{{ asset('js/app.js') }}"></script>; --}}

    <script>

        function searchBar() {
            var searchBar = document.getElementById('search-bar');
        

        ////////////// NEED TO PARSE THROUGH PHP ARRAY IN JS AND HIDE ALL OTHER ASSETS
            
        }
    </script>

    <style>
        * {
            font-family: "Rubik", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .header {
            width: 100%;
            height: 15%;
            color: rgb(29, 30, 99);
            text-align: center;
            font-weight: bold;
            align-content: center
        }

        .header h1 {
            font-size: 50px;
            text-align: center;
            margin-top: auto;
            margin-bottom: auto;
        }

        .toggleBtn{
            display: flex;
            flex-direction: row;
            margin-top: 25px;
        }

        .toggleBtn button {
            margin-top: 0px;
            width: 75px;
            height: 35px;
            margin-left: 5px;
            font-size: 15px;
            border: none;
            outline: none;
            border-radius: 10px;
            background-color: rgb(29, 30, 99);
            color: white;
        }

        .search-bar{
            width: 350px;
            height: 35px;
            margin-top: 10px;
            margin-bottom: 0px;
            margin-left: 5px;
            font-size: 15px;
            border: none;
            outline: none;
            border-radius: 10px;
            background-color: rgb(29, 30, 99);
        }

        .search-bar input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgb(255, 255, 255);
            border-radius: 10px;
            font-size: 18px;
            text-align: center;
            color: white;
        }

        .search-bar input::placeholder {
            color: rgb(206, 206, 206);
        }

        input[type="search"]::-webkit-search-cancel-button {
            filter: brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(0%) hue-rotate(93deg) brightness(103%) contrast(103%);
            margin-right: 10px;
        }


        .table-wrapper {
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .table-wrapper .assets-table {
            border-collapse: collapse;
            font-size: 17px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 25px;
        }

        .assets-table td {
            padding: 15px;
        }

        .assets-table thead tr {
            color: rgb(255, 255, 255);
            background-color: rgb(29, 30, 99);
            text-align: left;
            font-weight: bold;
        }

        .assets-table tbody tr:nth-of-type(even) {
            background-color: rgb(240, 240, 240);
        }

        .assets-table tbody tr:nth-of-type(odd) {
            background-color: rgb(255, 255, 255);
        }

        .assets-table tbody tr:last-of-type {
            border-bottom: 5px solid rgb(29, 30, 99);
        }

        .assets-table td {
            padding: 9px;
        }

        .assets-table th {
            padding: 7px;
        }

        #status-box {
            display: flex;
            justify-content: center;
            font-size: 20px;
        }

        #edit-box {
            display: flex;
            justify-content: center;
            font-size: 20px;
            color: grey
        }

        .edit-popup {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .edit-popup .edit-form {
            height: 500px;
            width: 500px;
            flex-direction: column;
            background-color: aqua;
            border-radius: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .edit-form #text-field {
            display: flex;
            flex-direction: column;
            text-align: center;
            padding-bottom: 15px;
        }


    </style>

    <?php $all = $all ?>

</head>


<body>

    {{-- <div class="header">
        <h1>Assets</h1>
    </div> --}}

    {{-- Sorting tools --}}
    {{-- <div class="toggleBtn">
        <button id="allToggle">All</button>
        <button id="laptopToggle">Laptop</button>
        <button id="pcToggle">PC</button>
        <button id="monitorToggle">Monitor</button>
    </div>

    <div class="search-bar">
        <input type="search" id="search-bar" placeholder="Search for Asset" value=""></input>
    </div>

    <div class="table-wrapper"> --}}

        {{-- <table class="assets-table">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Location</th>
                    <th>User</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="asset-tbody">

            </tbody>
        </table> --}}

    </div>

    <div class="edit-popup">
        <form action="" class="edit-form">
            <div id="text-field">
                <label for="edit-type">Type</label>
                <input type="text" name="type" id="edit-type" placeholder="Type">
            </div>
            <div id="text-field">
                <label for="edit-type">Make</label>
                <input type="text" name="make" id="edit-make" placeholder="Make">
            </div>
            <div id="text-field">
                <label for="edit-type">Model</label>
                <input type="text" name="model" id="edit-model" placeholder="Model">
            </div>
            <div id="text-field">
                <label for="edit-type">Location</label>
                <input type="text" name="location" id="edit-location" placeholder="Location">
            </div>
            <div id="text-field">
                <label for="edit-type">User</label>
                <input type="text" name="user" id="edit-user" placeholder="User">
            </div>
            <div id="text-field">
                <label for="edit-type">Status</label>
                <input type="text" name="status" id="edit-status" placeholder="Status">
            </div>
        </form>
    </div>


    <script>

        // Btn
        const allBtn = document.getElementById('allToggle');
        const laptopBtn = document.getElementById('laptopToggle');
        const pcBtn = document.getElementById('pcToggle');
        const monitorBtn = document.getElementById('monitorToggle');
        const search = document.getElementById("search-bar");
        
        var sortBtn = null;
        var tbody = document.getElementById("asset-tbody");
        var allAssetsArray = <?php echo json_encode($all); ?>;

        if (sortBtn == null) {
            sortBtn = "all";
            displayAssetsSort(sortBtn);
        }

        allBtn.addEventListener("click", e => {
            if (sortBtn != "all") {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "all";
                displayAssetsSort(sortBtn);
            }
        })

        laptopBtn.addEventListener("click", e => {
            if (sortBtn != "laptop") {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "laptop";
                displayAssetsSort(sortBtn);
            }
        })

        pcBtn.addEventListener("click", e => {
            if (sortBtn != "pc") {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "pc";
                displayAssetsSort(sortBtn);
            }
        })

        monitorBtn.addEventListener("click", e => {
            if (sortBtn != "monitor") {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "monitor";
                displayAssetsSort(sortBtn);
            }
        })


        search.addEventListener("input", e=> {

            if (search.value == '') {
                sortBtn = "all";
                displayAssetsSort(sortBtn);
            } else {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "search";
                displayAssetsSearch(search.value.toLowerCase());
            }
        })


        function displayAssetsSort(sortBtn) {
            var counter = 0;
        
            Object.keys(allAssetsArray).forEach(function(key) {

                if (allAssetsArray[key]["type"].toLowerCase() == sortBtn || sortBtn == "all"){

                    if (allAssetsArray[key]["status"] == "active") {
                        var color = "green";
                    }

                    if (allAssetsArray[key]["status"] == "inactive") {
                        var color = "firebrick";
                    }

                    if (allAssetsArray[key]["status"] == "not in use") {
                        var color = "gray";
                    }

                    var created = new Date(allAssetsArray[key]["created_at"]);
                    var row = tbody.insertRow(counter);
            
                    row.insertCell(0).innerHTML = allAssetsArray[key]["type"];
                    row.insertCell(1).innerHTML = allAssetsArray[key]["make"];
                    row.insertCell(2).innerHTML = allAssetsArray[key]["model"];
                    row.insertCell(3).innerHTML = allAssetsArray[key]["location"];
                    row.insertCell(4).innerHTML = allAssetsArray[key]["user"];
                    row.insertCell(5).innerHTML = created.toLocaleDateString('en-US');
                    row.insertCell(6).innerHTML = "<i class='bx bxs-check-circle' id='status-box' style='color:" + color + "'></i>";
                    row.insertCell(7).innerHTML = "<i class='bx bxs-edit' id='edit-box' ></i>";

                    counter += 1;
                }
            })
        }

        function displayAssetsSearch(searchQuery) {
            var counter = 0;
        
            Object.keys(allAssetsArray).forEach(function(key) {

                if (allAssetsArray[key]["type"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["make"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["model"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["location"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["user"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["created_at"].toLowerCase().includes(searchQuery)
                ){

                    if (allAssetsArray[key]["status"] == "active") {
                        var color = "green";
                    }

                    if (allAssetsArray[key]["status"] == "inactive") {
                        var color = "firebrick";
                    }

                    if (allAssetsArray[key]["status"] == "not in use") {
                        var color = "gray";
                    }

                    var created = new Date(allAssetsArray[key]["created_at"]);
                    var row = tbody.insertRow(counter);
            
                    row.insertCell(0).innerHTML = allAssetsArray[key]["type"];
                    row.insertCell(1).innerHTML = allAssetsArray[key]["make"];
                    row.insertCell(2).innerHTML = allAssetsArray[key]["model"];
                    row.insertCell(3).innerHTML = allAssetsArray[key]["location"];
                    row.insertCell(4).innerHTML = allAssetsArray[key]["user"];
                    row.insertCell(5).innerHTML = created.toLocaleDateString('en-US');
                    row.insertCell(6).innerHTML = "<i class='bx bxs-check-circle' id='status-box' style='color:" + color + "'></i>";
                    row.insertCell(7).innerHTML = "<i class='bx bxs-edit' id='edit-box ></i>";

                    counter += 1;
                }
            })
        }
    </script>
</body>
</html>