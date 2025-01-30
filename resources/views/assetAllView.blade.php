<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>

<body>
    <h1>Assets</h1>

    <button class='toggleBtn' id="allToggle">All</button>
    <button class='toggleBtn' id="laptopToggle">Laptop</button>
    <button class='toggleBtn' id="pcToggle">PC</button>
    <button class='toggleBtn' id="monitorToggle">Monitor</button>


    <table>
        <thead>
            <td>Type</td>
            <td>Make</td>
            <td>Model</td>
            <td>Location</td>
            <td>User</td>
        </thead>
        <tbody id='all'>
            {{-- All assets --}}
            @foreach ($all as $all)
                <tr>
                    <td>{{$all->type}}</td>
                    <td>{{$all->make}}</td>
                    <td>{{$all->model}}</td>
                    <td>{{$all->location}}</td>
                    <td>{{$all->user}}</td>
                </tr>
            @endforeach
        </tbody>

        <tbody id='laptop'>
            {{-- Laptops --}}
            @foreach ($laptop as $laptop)
                <tr>
                    <td>{{$laptop->type}}</td>
                    <td>{{$laptop->make}}</td>
                    <td>{{$laptop->model}}</td>
                    <td>{{$laptop->location}}</td>
                    <td>{{$laptop->user}}</td>
                </tr>
            @endforeach
        </tbody>

        <tbody id='pc'>
            {{-- Pc's --}}
            @foreach ($pc as $pc)
                <tr>
                    <td>{{$pc->type}}</td>
                    <td>{{$pc->make}}</td>
                    <td>{{$pc->model}}</td>
                    <td>{{$pc->location}}</td>
                    <td>{{$pc->user}}</td>
                </tr>
            @endforeach
        </tbody>

        <tbody id='monitor'>
            {{-- Monitors --}}
            @foreach ($monitor as $monitor)
                <tr>
                    <td>{{$monitor->type}}</td>
                    <td>{{$monitor->make}}</td>
                    <td>{{$monitor->model}}</td>
                    <td>{{$monitor->location}}</td>
                    <td>{{$monitor->user}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        const allBtn = document.getElementById('allToggle');
        const laptopBtn = document.getElementById('laptopToggle');
        const pcBtn = document.getElementById('pcToggle');
        const monitorBtn = document.getElementById('monitorToggle');

        document.getElementById('all').style.display = "none";
        document.getElementById('laptop').style.display = "none";
        document.getElementById('pc').style.display = "block";
        document.getElementById('monitor').style.display = "none";

        const btnClass = document.getElementsByClassName('toggleBtn');

        allBtn.addEventListener("click", e => {
            // Array.from(btnClass).forEach(btn => {
            //     if (btn.id == "all")
            // })
        })

        laptopBtn.addEventListener("click", e => {
            console.log(laptopBtn.id);
        })

        



    </script>
</body>
</html>