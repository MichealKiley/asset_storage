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
            /* background-color: rgb(234, 234, 234) */
        }

        .header {
            width: 100%;
            height: 15%;
            color: rgb(29, 30, 99);
            /* background-color: rgb(29, 30, 99); */
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
            padding-top: 25px;
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


    </style>
</head>


<body>

    <div class="header">
        <h1>Assets</h1>
    </div>

    {{-- Sorting tools --}}
    <div class="toggleBtn">
        <button id="allToggle">All</button>
        <button id="laptopToggle">Laptop</button>
        <button id="pcToggle">PC</button>
        <button id="monitorToggle">Monitor</button>
    </div>

    <div class="search-bar">
        <input type="search" id="search-bar" placeholder="Search for Asset" value="" onchange="searchBar()"></input>
    </div>

    <div class="table-wrapper">

        {{-- all assets --}}
        <table id='all' class="assets-table">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Location</th>
                    <th scope="col">User</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $all)

                    <tr>
                        <td>{{$all["type"]}}</td>
                        <td>{{$all["make"]}}</td>
                        <td>{{$all["model"]}}</td>
                        <td>{{$all["location"]}}</td>
                        <td>{{$all["user"]}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Laptops --}}
        <table id='laptop' class="assets-table">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Location</th>
                    <th scope="col">User</th>
                </tr>
            </thead>
            @foreach ($laptop as $laptop)
                <tr>
                    <td>{{$laptop["type"]}}</td>
                    <td>{{$laptop["make"]}}</td>
                    <td>{{$laptop["model"]}}</td>
                    <td>{{$laptop["location"]}}</td>
                    <td>{{$laptop["user"]}}</td>
                </tr>
            @endforeach
        </table>

        {{-- Pc's --}}
        <table id='pc' class="assets-table">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Location</th>
                    <th scope="col">User</th>
                </tr>
            </thead>
            @foreach ($pc as $pc)
                <tr>
                    <td>{{$pc["type"]}}</td>
                    <td>{{$pc["make"]}}</td>
                    <td>{{$pc["model"]}}</td>
                    <td>{{$pc["location"]}}</td>
                    <td>{{$pc["user"]}}</td>
                </tr>
            @endforeach
        </table>

        {{-- Monitors --}}
        <table id='monitor' class="assets-table">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Location</th>
                    <th scope="col">User</th>
                </tr>
            </thead>
            @foreach ($monitor as $monitor)
                <tr>
                    <td>{{$monitor["type"]}}</td>
                    <td>{{$monitor["make"]}}</td>
                    <td>{{$monitor["model"]}}</td>
                    <td>{{$monitor["location"]}}</td>
                    <td>{{$monitor["user"]}}</td>
                </tr>
            @endforeach
        </table>

    </div>


    <script>

        var allAssetsArray = <?php echo json_encode($all); ?>;

        Object.keys(allAssetsArray).forEach(function(key) {
            console.log('Key : ' + key + ', Value : ' + allAssetsArray[key])
        })
        

        // Btn
        const allBtn = document.getElementById('allToggle');
        const laptopBtn = document.getElementById('laptopToggle');
        const pcBtn = document.getElementById('pcToggle');
        const monitorBtn = document.getElementById('monitorToggle');

        // Hiding text
        document.getElementById('all').style.display = "block";
        document.getElementById('laptop').style.display = "none";
        document.getElementById('pc').style.display = "none";
        document.getElementById('monitor').style.display = "none";


        // all btn
        allBtn.addEventListener("click", e => {
            document.getElementById('all').style.display = "block";
            document.getElementById('laptop').style.display = "none";
            document.getElementById('pc').style.display = "none";
            document.getElementById('monitor').style.display = "none";
        })

        // laptop btn
        laptopBtn.addEventListener("click", e => {
            document.getElementById('all').style.display = "none";
            document.getElementById('laptop').style.display = "block";
            document.getElementById('pc').style.display = "none";
            document.getElementById('monitor').style.display = "none";
        })

        // pc btn
        pcBtn.addEventListener("click", e => {
            document.getElementById('all').style.display = "none";
            document.getElementById('laptop').style.display = "none";
            document.getElementById('pc').style.display = "block";
            document.getElementById('monitor').style.display = "none";
        })

        // monitor btn
        monitorBtn.addEventListener("click", e => {
            document.getElementById('all').style.display = "none";
            document.getElementById('laptop').style.display = "none";
            document.getElementById('pc').style.display = "none";
            document.getElementById('monitor').style.display = "block";
        })
    </script>
</body>
</html>