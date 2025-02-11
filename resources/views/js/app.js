{/* <script>
    // Btn
    const allBtn = document.getElementById('allToggle');
    const laptopBtn = document.getElementById('laptopToggle');
    const pcBtn = document.getElementById('pcToggle');
    const monitorBtn = document.getElementById('monitorToggle');
    const search = document.getElementById("search-bar");

    document.getElementsByClassName("edit-popup").style.display = "none";
    document.getElementsByClassName("edit-form").style.display = "none";

    console.log(document.getElementsByClassName("edit-form"));

    var sortBtn = null;
    var tbody = document.getElementById("asset-tbody");
    // var allAssetsArray = <?php echo json_encode($all); ?>;


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
                row.insertCell(7).innerHTML = "<i class='bx bxs-edit' id='edit-box' onclick='editAsset(" + counter + ")'></i>";

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
                row.insertCell(7).innerHTML = "<i class='bx bxs-edit' id='edit-box' onclick='editAsset(" + counter + ")'></i>";

                counter += 1;
            }
        })
    }

    function editAsset(tr) {
        var table = document.getElementsByClassName("assets-table")[0];
    }

</script> */}