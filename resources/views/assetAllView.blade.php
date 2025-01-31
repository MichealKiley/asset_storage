<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assets</title>

    <script>

        function searchBar() {
            var searchBar = document.getElementById('search-bar');
        

        ////////////// NEED TO PARSE THROUGH PHP ARRAY IN JS AND HIDE ALL OTHER ASSETS
            
        }
    </script>
</head>


<body>
    <h1>Assets</h1>

    {{-- Sorting tools --}}
    <button class='toggleBtn' id="allToggle">All</button>
    <button class='toggleBtn' id="laptopToggle">Laptop</button>
    <button class='toggleBtn' id="pcToggle">PC</button>
    <button class='toggleBtn' id="monitorToggle">Monitor</button>
    <input type="search" id="search-bar" placeholder="Search for Asset" value="" onchange="searchBar()"></input>



    {{-- all assets --}}
    <table id='all'>
        <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Make</th>
                <th scope="col">Model</th>
                <th scope="col">Location</th>
                <th scope="col">User</th>
            </tr>
        </thead>
        @foreach ($all as $all)

            <tr>
                <td>{{$all["type"]}}</td>
                <td>{{$all["make"]}}</td>
                <td>{{$all["model"]}}</td>
                <td>{{$all["location"]}}</td>
                <td>{{$all["user"]}}</td>
            </tr>
        @endforeach
    </table>

    {{-- Laptops --}}
    <table id='laptop'>
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
    <table id='pc'>
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
    <table id='monitor'>
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


    <script>
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