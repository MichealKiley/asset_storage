<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asset List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    {{-- <script src="{{ asset('js/assets.js') }}"></script>; --}}


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

        .container {
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
            position: relative;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .create-asset-btn{
            display: flex;
            flex-direction: row;
        }

        .create-asset-btn button {
            position: absolute;
            top: 0;
            right: 0;
            border: none;
            outline: none;
            border-radius: 10px;
            color: rgb(29, 30, 99);
            background-color: transparent;
            text-align: center;   
            width: 35px;
            height: 35px;
            font-size: 30px;
        }

        .table-wrapper .assets-table {
            border-collapse: collapse;
            font-size: 17px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 35px;
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

        .assets-table th i {
            background-color: transparent;
            color: transparent;
        }

        .assets-table th:hover i {
            background-color: transparent;
            color:rgb(255, 255, 255);
        }


        #status-btn {
            display: flex;
            justify-content: center;
            font-size: 20px;
        }

        #edit-btn {
            display: flex;
            justify-content: center;
            font-size: 20px;
            color: grey
        }


        .overlay-container {
            position: fixed;
            display: none;
            justify-content: center;
            flex-direction: column;
            align-items:center;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        .asset-form  {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 40%;
            height: 65%;
            background-color: white;
            border-radius: 25px;
            padding: 10px;
        }


        .edit-text-wrapper {
            display: flex;
            flex-direction: column;
            text-align: center;
            margin: 5px;
        }

        .edit-select-wrapper {
            display: flex;
            flex-direction: row;
            text-align: center;
            margin: 5px;
        }

        .edit-btn-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
        }


        #edit-text-field {
            display: flex;
            flex-direction: column;
            text-align: center;
            margin: 5px;
        }

        #edit-select-field {
            display: flex;
            flex-direction: column;
            text-align: center;
            margin: 5px;
        }

        #edit-btn-field {
            display: flex;
            flex-direction: row;
            text-align: center;
            margin-top: 15px;
        }


        #edit-text-field input {
            border: none;
            outline: none;
            border-radius: 10px;
            background-color: rgb(29, 30, 99);
            color: white;
            text-align: left;
            padding: 15px;
            width: 350px;
            height: 35px;
            font-size: 15px;
        }

        #edit-text-field input::placeholder {
            color: rgb(206, 206, 206);
        }

        #edit-select-field select {
            border: none;
            outline: none;
            border-radius: 10px;
            background-color: rgb(29, 30, 99);
            color: white;
            text-align: center;   
            width: 100px;
            height: 30px;
            font-size: 15px;
        }

        #blue-btn {
            border: none;
            outline: none;
            border-radius: 10px;
            background-color: rgb(29, 30, 99);
            color: white;
            text-align: center;   
            width: 125px;
            height: 35px;
            margin: 5px;
            font-size: 15px;
        }

        #grey-btn {
            border: none;
            outline: none;
            border-radius: 10px;
            color: rgb(29, 30, 99);
            text-align: center;   
            width: 125px;
            height: 35px;
            margin: 5px;
            font-size: 15px;
        }

        #delete-asset-btn {
            display: block;
        }

        #delete-asset-btn button{
            border: none;
            outline: none;
            border-radius: 10px;
            color: rgb(255, 0, 0);
            text-align: center;   
            background-color: transparent;
            width: 50px;
            height: 40px;
            margin: 10px;
            font-size: 25px;
        }

        #close-overlay button {
            position: absolute;
            top: 0;
            right: 0;
            border: none;
            outline: none;
            background-color: transparent;
            color: rgb(29, 30, 99);
            margin: 10px;
            font-size: 45px;
        }

        .delete-asset-overlay {
            position: fixed;
            display: none;
            justify-content: center;
            flex-direction: column;
            align-items:center;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .3);
            z-index: 2;
        }

        #delete-asset-wrapper  {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 35%;
            height: 20%;
            background-color: white;
            border-radius: 25px;
            padding: 10px;
        }

    </style>

    <?php $all = $all; ?>

</head>


<body>

    {{-- edit popup --}}
    
    <div class="overlay-container">
        <form action="/post-asset" method="POST" class="asset-form">

            @csrf

            <input type="text" id="request-type" name="request-type" value="" hidden> 
            <input type="text" id="delete-asset" name="delete-asset" value="no" hidden> 
            <input type="text" id="asset-id" name="id" value="" hidden>
            <h3 id="asset-id-display"></h3>

            <div id="close-overlay">
                <button type="button" onclick="editAsset(undefined,'close')"><i class='bx bx-x'></i></button>
            </div>

            <div class="edit-select-wrapper">
                <div id="edit-select-field">
                    <label>Type</label>
                    <select name="type" id="edit-type">
                        <option value="Laptop">Laptop</option>
                        <option value="PC">PC</option>
                        <option value="Monitor">Monitor</option>
                    </select>
                </div>
                <div id="edit-select-field">
                    <label>Status</label>
                    <select name="status" id="edit-status">
                        <option value="active">Active</option>
                        <option value="not in use">Not in use</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>

            <div class="edit-text-wrapper">
                <div id="edit-text-field">
                    <label>Make</label>
                    <input type="text" name="make" id="edit-make" placeholder="Make">
                </div>
                <div id="edit-text-field">
                    <label>Model</label>
                    <input type="text" name="model" id="edit-model" placeholder="Model">
                </div>
                <div id="edit-text-field">
                    <label>Location</label>
                    <input type="text" name="location" id="edit-location" placeholder="Location">
                </div>
                <div id="edit-text-field">
                    <label>User</label>
                    <input type="text" name="user" id="edit-user" placeholder="User">
                </div>
            </div>

            <div class="edit-btn-wrapper">
                <div id="edit-btn-field">
                    <button type="submit" name="save-changes" id="blue-btn">Save</button>
                    <button type="button" name="cancel-changes" id="grey-btn" onclick="editAsset(undefined,'close',undefined)">Cancel</button>
                </div>
            </div>

            <div id="delete-asset-btn">
                <button type="button" onclick="editAsset(undefined,'delete-open',undefined,undefined)"><i class='bx bx-trash'></i></button>
            </div>

            <div class="delete-asset-overlay">
                <div id="delete-asset-wrapper">
                    <h2>Confirm asset deletion</h2>
                    <div class="edit-btn-wrapper">
                        <div id="edit-btn-field">
                            <button type="button" id="blue-btn" onclick="editAsset(undefined,undefined,undefined,'yes')">Yes</button>
                            <button type="button" id="grey-btn" onclick="editAsset(undefined,'delete-close',undefined,undefined)">No</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>

    <div class="container">

        {{-- Sorting tools --}}
        <div class="toggleBtn">
            <button id="allToggle">All</button>
            <button id="laptopToggle">Laptop</button>
            <button id="pcToggle">PC</button>
            <button id="monitorToggle">Monitor</button>
        </div>

        <div class="search-bar">
            <input type="search" id="search-bar" placeholder="Search for Asset" value=""></input>
        </div>



        <div class="table-wrapper">

            <div class="create-asset-btn">
                <button onclick="editAsset(undefined,'open','add')"><i class='bx bxs-plus-square' ></i></button>
            </div>

            <table class="assets-table">
                <thead>
                    <tr>
                        <th onclick="sortTable('id')"> Key <i id="th-id" class='bx bxs-chevron-down' ></i></th>
                        <th onclick="sortTable('type')">Type <i id="th-type" class='bx bxs-chevron-down' ></i></th>
                        <th onclick="sortTable('make')">Make <i id="th-make" class='bx bxs-chevron-down' ></i></th>
                        <th onclick="sortTable('model')">Model <i id="th-model" class='bx bxs-chevron-down' ></i></th>
                        <th onclick="sortTable('location')">Location <i id="th-location" class='bx bxs-chevron-down' ></i></th>
                        <th onclick="sortTable('user')">User <i id="th-user" class='bx bxs-chevron-down' ></i></th>
                        <th onclick="sortTable('created')">Created <i id="th-created" class='bx bxs-chevron-down' ></i></th>
                        <th onclick="sortTable('status')">Status <i id="th-status" class='bx bxs-chevron-down' ></i></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="asset-tbody">

                </tbody>
            </table>

        </div>
    </div>

    
    <script>
        // Declaring Variables
        const allBtn = document.getElementById('allToggle');
        const laptopBtn = document.getElementById('laptopToggle');
        const pcBtn = document.getElementById('pcToggle');
        const monitorBtn = document.getElementById('monitorToggle');
        const search = document.getElementById("search-bar");
    
        var sortBtn = null;
        var tbody = document.getElementById("asset-tbody");
        allAssetsArray = <?php echo json_encode($all); ?>;


        // sort table function
        function sortTable($key, $order) {

            $icon = document.getElementById("th-" + $key).className;

            if ($order == undefined) {
                
                if ($icon == "bx bxs-chevron-down") {
                    $order = "ascend";
                    $icon.className = "bx bxs-chevron-up";
                }

                if ($icon == "bx bxs-chevron-up") {
                    $order = "descend";
                    $icon.className = "bx bxs-chevron-down";
                }
            }


            // clearing table
            document.getElementById("asset-tbody").innerHTML = "";   
            console.log($key + " : " + $order)
            

            // sorting non-number key
            if (isNaN(allAssetsArray[0][$key])) {
                if ($order == "ascend") {
                    keySort = (a,b) => a[$key].localeCompare(b[$key]);
                }
                if ($order == "descend") {
                    keySort = (a,b) => b[$key].localeCompare(a[$key]);
                }
            }

             // sorting number key
            if (!isNaN(allAssetsArray[0][$key])) {
                if ($order == "ascend") {
                    keySort = (a,b) => a[$key] - b[$key];
                }
                if ($order == "descend") {
                    keySort = (a,b) => b[$key] - a[$key];
                }
            }

            // sorting table and pulling data
            allAssetsArray.sort(keySort);
            displayAssetsSort(sortBtn);
        }


        // default page sorting
        if (sortBtn == null) {
            sortTable("id","descend");
            sortBtn = "all";
            displayAssetsSort(sortBtn);
        }


        // all button view
        allBtn.addEventListener("click", e => {
            if (sortBtn != "all") {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "all";
                displayAssetsSort(sortBtn);
            }
        })
    
        // laptop button view
        laptopBtn.addEventListener("click", e => {
            if (sortBtn != "laptop") {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "laptop";
                displayAssetsSort(sortBtn);
            }
        })
    
        // pc button view
        pcBtn.addEventListener("click", e => {
            if (sortBtn != "pc") {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "pc";
                displayAssetsSort(sortBtn);
            }
        })
    
        // monitor button view
        monitorBtn.addEventListener("click", e => {
            if (sortBtn != "monitor") {
                document.getElementById("asset-tbody").innerHTML = "";          
                sortBtn = "monitor";
                displayAssetsSort(sortBtn);
            }
        })
    
    
        // search asset view
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
    
    
        // button sort asset view function
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
                    var row = tbody.insertRow();

                    row.insertCell(0).innerHTML = "TN-" + allAssetsArray[key]["id"];
                    row.insertCell(1).innerHTML = allAssetsArray[key]["type"];
                    row.insertCell(2).innerHTML = allAssetsArray[key]["make"];
                    row.insertCell(3).innerHTML = allAssetsArray[key]["model"];
                    row.insertCell(4).innerHTML = allAssetsArray[key]["location"];
                    row.insertCell(5).innerHTML = allAssetsArray[key]["user"];
                    row.insertCell(6).innerHTML = created.toLocaleDateString('en-US');
                    row.insertCell(7).innerHTML = "<i class='bx bxs-check-circle' id='status-btn' style='color:" + color + "'></i>";
                    row.insertCell(8).innerHTML = "<i class='bx bxs-edit' id='edit-btn' onclick=\"editAsset(" + counter + ", 'open', 'edit')\"></i>";
    
                    counter += 1;
                }
            })
        }
    
        // search sort asset view function
        function displayAssetsSearch(searchQuery) {
            var counter = 0;
    
            Object.keys(allAssetsArray).forEach(function(key) {

                var assetId = 'TN-' + allAssetsArray[key]["id"];
    
                // converting items to lowercase
                if (assetId.toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["type"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["make"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["model"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["location"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["user"].toLowerCase().includes(searchQuery) ||
                    allAssetsArray[key]["created_at"].toLowerCase().includes(searchQuery)
                ){
    
                    // styling status button
                    if (allAssetsArray[key]["status"] == "active") {
                        var color = "green";
                    }
    
                    if (allAssetsArray[key]["status"] == "inactive") {
                        var color = "firebrick";
                    }
    
                    if (allAssetsArray[key]["status"] == "not in use") {
                        var color = "gray";
                    }
    
                    // creating table rows
                    var created = new Date(allAssetsArray[key]["created_at"]);
                    var row = tbody.insertRow();
            
                    row.insertCell(0).innerHTML = "TN-" + allAssetsArray[key]["id"];
                    row.insertCell(1).innerHTML = allAssetsArray[key]["type"];
                    row.insertCell(2).innerHTML = allAssetsArray[key]["make"];
                    row.insertCell(3).innerHTML = allAssetsArray[key]["model"];
                    row.insertCell(4).innerHTML = allAssetsArray[key]["location"];
                    row.insertCell(5).innerHTML = allAssetsArray[key]["user"];
                    row.insertCell(6).innerHTML = created.toLocaleDateString('en-US');
                    row.insertCell(7).innerHTML = "<i class='bx bxs-check-circle' id='status-btn' style='color:" + color + "'></i>";
                    row.insertCell(8).innerHTML = "<i class='bx bxs-edit' id='edit-btn' onclick=\"editAsset(" + counter + ", 'open', 'edit')\"></i>";
    
                    counter += 1;
                }
            })
        }
        
        // edit asset function
        function editAsset(tr,action,type,assetDelete) {

            // open edit overlay
            if (action == "open" && type == 'edit') { 

                document.getElementsByClassName("overlay-container")[0].style.display = "flex";
                document.getElementById("request-type").setAttribute("value","edit");

                var counter = 0;

                // populate existing values
                Object.keys(allAssetsArray).forEach(function(key) {
                    if (counter == tr) {
                        document.getElementById("asset-id-display").textContent = "TN-" + allAssetsArray[key]["id"];
                        document.getElementById("asset-id").setAttribute("value", allAssetsArray[key]["id"]);
                        document.getElementById("edit-type").value = allAssetsArray[key]["type"];
                        document.getElementById("edit-make").value = allAssetsArray[key]["make"];
                        document.getElementById("edit-model").value = allAssetsArray[key]["model"];
                        document.getElementById("edit-location").value = allAssetsArray[key]["location"];
                        document.getElementById("edit-user").value = allAssetsArray[key]["user"];
                        document.getElementById("edit-status").value = allAssetsArray[key]["status"];
                    } 

                    counter += 1;
                })
            }


            // open add overlay
            if (action == "open" && type == 'add') {

                // open popup and populate header
                document.getElementsByClassName("overlay-container")[0].style.display = "flex";
                document.getElementById("delete-asset-btn").style.display = "none";
                document.getElementById("asset-id-display").textContent = "Add Asset";
                document.getElementById("request-type").setAttribute("value","add");

                // clearing data for new asset
                document.getElementById("edit-type").value = "";
                document.getElementById("edit-make").value = "";
                document.getElementById("edit-model").value = "";
                document.getElementById("edit-location").value = "";
                document.getElementById("edit-user").value = "";
                document.getElementById("edit-status").value = "";
            }


            // delete asset open popup
            if (action == 'delete-open') {
                document.getElementsByClassName("delete-asset-overlay")[0].style.display = "flex";
            }

            // delete asset confirmation
            if (assetDelete == 'yes') {
                    document.getElementById("delete-asset").setAttribute("value","yes");
                    document.getElementsByClassName("asset-form")[0].submit();
                }

            // delete asset cancel 
            if (action == 'delete-close') {
                document.getElementsByClassName("delete-asset-overlay")[0].style.display = "none";
            }



            // close overlay
            if (action == "close") {
                document.getElementsByClassName("overlay-container")[0].style.display = "none";
                document.getElementById("request-type").setAttribute("value","");
            }
        }
        
    </script>

</body>
</html>