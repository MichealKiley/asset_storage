// Declaring Variables
const allBtn = document.getElementById('allToggle');
const laptopBtn = document.getElementById('laptopToggle');
const pcBtn = document.getElementById('pcToggle');
const monitorBtn = document.getElementById('monitorToggle');
const search = document.getElementById("search-bar");

var sortBtn = null;
var tbody = document.getElementById("asset-tbody");
var allAssetsArray = document.getElementById("allAssetsArray");
console.log(allAssetsArray.innerHTML);


// view all assets on page opening
if (sortBtn == null) {
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
            row.insertCell(8).innerHTML = "<i class='bx bxs-edit' id='edit-btn' onclick=\"editAsset(" + counter + ", 'open')\"></i>";

            if (allAssetsArray[key]["type"].toLowerCase() != "monitor") {
                row.insertCell(9).innerHTML = "<i class='bx bx-desktop' id='edit-btn' onclick=\"remoteLink(" + 
                counter + ",'" + allAssetsArray[key]["user"] + "','" + allAssetsArray[key]["model"] + "'" + ")\"></i>";
            } else {
                row.insertCell(9).innerHTML = ""
            }

            counter += 1;
        }
    })
}

// search sort asset view function
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
            var row = tbody.insertRow();
    
            row.insertCell(0).innerHTML = "TN-" + allAssetsArray[key]["id"];
            row.insertCell(1).innerHTML = allAssetsArray[key]["type"];
            row.insertCell(2).innerHTML = allAssetsArray[key]["make"];
            row.insertCell(3).innerHTML = allAssetsArray[key]["model"];
            row.insertCell(4).innerHTML = allAssetsArray[key]["location"];
            row.insertCell(5).innerHTML = allAssetsArray[key]["user"];
            row.insertCell(6).innerHTML = created.toLocaleDateString('en-US');
            row.insertCell(7).innerHTML = "<i class='bx bxs-check-circle' id='status-btn' style='color:" + color + "'></i>";
            row.insertCell(8).innerHTML = "<i class='bx bxs-edit' id='edit-btn' onclick=\"editAsset(" + counter + ", 'open')\"></i>";

            if (allAssetsArray[key]["type"].toLowerCase() != "monitor") {
                row.insertCell(9).innerHTML = "<i class='bx bx-desktop' id='edit-btn' onclick=\"remoteLink(" + 
                counter + ",'" + allAssetsArray[key]["user"] + "','" + allAssetsArray[key]["model"] + "'" + ")\"></i>";
            } else {
                row.insertCell(9).innerHTML = ""
            }

            counter += 1;
        }
    })
}

// edit asset function
function editAsset(tr,action) {

    // open overlay
    if (tr != undefined && action == "open") { 

        document.getElementsByClassName("overlay-container")[0].style.display = "flex";

        var counter = 0;

        Object.keys(allAssetsArray).forEach(function(key) {
            if (counter == tr) {
                document.getElementById("asset-number-h3").textContent = "TN-" + allAssetsArray[key]["id"];
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

    // close overlay
    if (tr == undefined && action == "close") {
        document.getElementsByClassName("overlay-container")[0].style.display = "none";
    }
}

// function



function remoteLink(tr,username, model) {
    window.open("https://neuco.screenconnect.com/Host#Access/All%20Machines%20by%20Company/" + username + " " + model + "", '_blank');
}

