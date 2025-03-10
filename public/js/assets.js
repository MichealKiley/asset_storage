// Declaring Variables
var sortBtn = null;
var tbody = document.getElementById("asset-tbody");
var allAreasArray = allAreasArray;
var allLocationsArray = allLocationsArray;
var allAssetsArray = allAssetsArray;


// formatting arrays to replace foreign keys with values
formattedAssetArray = [];


Object.keys(allAssetsArray).forEach(function(key) {

    // replacing null fields with empty string
    nullFieldChecker = ['id','type','make','model','areas_id','locations_id','user','created_at','status']
    nullFieldChecker.forEach(item => {
        if (allAssetsArray[key][item] == null) {
            allAssetsArray[key][item] = "";
        }
    })

    // writing results to array
    formattedAssetArray.push({
        id : allAssetsArray[key]["id"],
        type : allAssetsArray[key]["type"],
        make : allAssetsArray[key]["make"],
        model : allAssetsArray[key]["model"],
        area : allAssetsArray[key]["areas"]["area"],
        location : allAssetsArray[key]["locations"]["location"],
        user : allAssetsArray[key]["user"],
        created_at : allAssetsArray[key]["created_at"],
        status : allAssetsArray[key]["status"]
    });
})





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////// Sorting Table Data /////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



// sort table function
function sortTable(key, order, type) {


    // if key is a foreign column
    if (type == "foreign") {

        keySort = undefined
        

        // keySort = [{
        //     "key" : key,
        //     "order" : order,
        // }]

        // sending data to be displayed
        if (sortBtn == "search") {
            displayAssetsSort(sortBtn,keySort,searchData.toLowerCase(), "foreign");
        } else {
            displayAssetsSort(sortBtn,keySort, undefined, "foreign");
        }
    }


    // if key is not a foreign column
    else if (type == undefined) {

        // handling sort direction
        if (order == undefined) {
            var icon = document.getElementById("th-" + key).className;

            if (icon == "bx bxs-chevron-down") {
                order = "ascend";
            } 
            else  if (icon == "bx bxs-chevron-up") {
                order = "descend";
            }
        }

        // changing icon
        if (order == "descend") {
            document.getElementById("th-" + key).className = "bx bxs-chevron-down";
        }

        else if (order == "ascend") {
            document.getElementById("th-" + key).className = "bx bxs-chevron-up";
        }
        

        // clearing table
        document.getElementById("asset-tbody").innerHTML = "";   

        // sorting non-number key
        if (isNaN(formattedAssetArray[0][key])) {
            if (order == "ascend") {
                keySort = (a,b) => a[key].localeCompare(b[key]);
            }
            if (order == "descend") {
                keySort = (a,b) => b[key].localeCompare(a[key]);
            }
        }

            // sorting number key
        if (!isNaN(formattedAssetArray[0][key])) {
            if (order == "ascend") {
                keySort = (a,b) => a[key] - b[key];
            }
            if (order == "descend") {
                keySort = (a,b) => b[key] - a[key];
            }
        }

        // sending data to be displayed
        if (sortBtn == "search") {
            displayAssetsSort(sortBtn,keySort,searchData.toLowerCase());
        } else {
            displayAssetsSort(sortBtn,keySort);
        }

    }

}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////// Default page view, quick sort, and search functions /////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



// default page sorting
if (sortBtn == null) {
    sortTable("id","descend");
    sortBtn = "all";
    displayAssetsSort(sortBtn,keySort);
}

// sort buttons
function sortToggle(sortBy) {
    document.getElementById("asset-tbody").innerHTML = "";          
    sortBtn = sortBy;
    displayAssetsSort(sortBtn,keySort);
}

// search field
function sortSearch(searchData) {
    window.searchData = searchData;

    if (searchData == '') {
        document.getElementById("asset-tbody").innerHTML = "";
        sortBtn = 'all';
        displayAssetsSort(sortBtn,keySort);
    } else {
        document.getElementById("asset-tbody").innerHTML = "";          
        sortBtn = "search";
        displayAssetsSort(sortBtn,keySort,searchData.toLowerCase());
    }
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// Table Build Function /////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////



function buildAssetTable(sortedAssetArray) {
    
    var counter = 0;

    Object.keys(sortedAssetArray).forEach(function(key) {

        formattedAsset = sortedAssetArray[key];
        status = formattedAsset["status"];


        // Styling status
        var statusStyle = [];

        if (status == "active") {
            var color = "green";
            var icon = "bx bxs-check-circle";
        }
        if (status == "inactive") {
            var color = "firebrick";
            var icon ='bx bxs-x-circle'
        }
        if (status == "not in use") {
            var color = "gray";
            var icon = 'bx bxs-minus-circle'
        }

        statusStyle["icon"] = icon;
        statusStyle["color"] = color;


        // Creating tr
        var created = new Date(formattedAsset["created_at"]);
        var row = tbody.insertRow();

        //Populating td
        row.insertCell(0).innerHTML = "TN-" + formattedAsset["id"];
        row.insertCell(1).innerHTML = formattedAsset["type"];
        row.insertCell(2).innerHTML = formattedAsset["make"];
        row.insertCell(3).innerHTML = formattedAsset["model"];
        row.insertCell(4).innerHTML = formattedAsset["area"];
        row.insertCell(5).innerHTML = formattedAsset["location"];
        row.insertCell(6).innerHTML = formattedAsset["user"];
        row.insertCell(7).innerHTML = created.toLocaleDateString('en-US');
        row.insertCell(8).innerHTML = "<i class='" + statusStyle["icon"] + "' id='status-btn' style='color:" + statusStyle["color"] + "'></i>";
        row.insertCell(9).innerHTML = "<i class='bx bxs-edit' id='edit-btn' onclick=\"editAsset(" + counter + ", 'open', 'edit')\"></i>";

        counter += 1;

    })
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// Display Sort/Search Assets //////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////



function displayAssetsSort(sortBtn,sort,searchQuery,type) {

    // setting variables
    var sortedAssetArray = []

    /////////// sorting through assets for quick sort feature ///////////
    if (sortBtn != "search"){
        Object.keys(formattedAssetArray).forEach(function(key) {



            // checking for sort buttons
            if (formattedAssetArray[key]["type"].toLowerCase() == sortBtn || sortBtn == "all"){


                // writing results to array
                sortedAssetArray.push({
                    id : formattedAssetArray[key]["id"],
                    type : formattedAssetArray[key]["type"],
                    make : formattedAssetArray[key]["make"],
                    model : formattedAssetArray[key]["model"],
                    area : formattedAssetArray[key]["area"],
                    location : formattedAssetArray[key]["location"],
                    user : formattedAssetArray[key]["user"],
                    created_at : formattedAssetArray[key]["created_at"],
                    status : formattedAssetArray[key]["status"]
                });
            }
        })
    }


    /////////// sorting through assets for search feature ///////////
    else if (sortBtn == "search") {
        Object.keys(formattedAssetArray).forEach(function(key) {

            // setting variables
            var assetId = 'TN-' + formattedAssetArray[key]["id"];

            // converting items to lowercase and checking for partial match
            if (assetId.toLowerCase().includes(searchQuery) ||
                formattedAssetArray[key]["type"].toLowerCase().includes(searchQuery) ||
                formattedAssetArray[key]["make"].toLowerCase().includes(searchQuery) ||
                formattedAssetArray[key]["model"].toLowerCase().includes(searchQuery) ||
                formattedAssetArray[key]["area"].toLowerCase().includes(searchQuery) ||
                formattedAssetArray[key]["location"].toLowerCase().includes(searchQuery) ||
                formattedAssetArray[key]["user"].toLowerCase().includes(searchQuery) ||
                formattedAssetArray[key]["created_at"].toLowerCase().includes(searchQuery)
            ){
                // writing results to array
                sortedAssetArray.push({
                    id : formattedAssetArray[key]["id"],
                    type : formattedAssetArray[key]["type"],
                    make : formattedAssetArray[key]["make"],
                    model : formattedAssetArray[key]["model"],
                    area : formattedAssetArray[key]["area"],
                    location : formattedAssetArray[key]["location"],
                    user : formattedAssetArray[key]["user"],
                    created_at : formattedAssetArray[key]["created_at"],
                    status : formattedAssetArray[key]["status"]
                });
            }
        })
    }

    buildAssetTable(sortedAssetArray);
    window.sortedAssetArray = sortedAssetArray;
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////// Edit and delete assets /////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////



// populating location field based on the contents of the area field
function setAreaField(field) {

    //clearing locations field
    document.getElementById("edit-locations_id").innerHTML = "";

    // only displaying location options that are tied to the chosen area
    Object.keys(allLocationsArray).forEach(function(key) {

        if (allLocationsArray[key]["areas"]["area"] == field) {
            var locationOption = document.createElement("option");
            locationOption.text = allLocationsArray[key]["location"];
            locationOption.value = allLocationsArray[key]["location"];
            document.getElementById("edit-locations_id").add(locationOption);
        }
    });
}


// edit asset function
function editAsset(tr,action,type,assetDelete) {

    
    // populating area option fields
    allAreasArray.sort((a,b) => a['area'].localeCompare(b['area']));

    Object.keys(allAreasArray).forEach(function(key) {
        var areaOption = document.createElement("option");
        areaOption.text = allAreasArray[key]["area"];
        areaOption.value = allAreasArray[key]["area"];
        document.getElementById("edit-areas_id").add(areaOption);
    });
    

    /////// open edit overlay ////////
    if (action == "open" && type == 'edit') { 

        // changing popup display to flex
        document.getElementsByClassName("overlay-container")[0].style.display = "flex";
        document.getElementById("request-type").setAttribute("value","edit");

        // setting variables
        var counter = 0;

        // populate existing values
        Object.keys(sortedAssetArray).forEach(function(key) {

            // setting variables
            formattedAsset = sortedAssetArray[key];

            // filling form with existing values
            if (counter == tr) {

                document.getElementById("asset-id-display").textContent = "TN-" + formattedAsset["id"];
                document.getElementById("asset-id").setAttribute("value", formattedAsset["id"]);
                document.getElementById("edit-type").value = formattedAsset["type"];
                document.getElementById("edit-make").value = formattedAsset["make"];
                document.getElementById("edit-model").value = formattedAsset["model"];
                document.getElementById("edit-areas_id").value = formattedAsset["area"];
                document.getElementById("edit-user").value = formattedAsset["user"];
                document.getElementById("edit-status").value = formattedAsset["status"];
                
                setAreaField(document.getElementById("edit-areas_id").value);

            } 

            counter += 1;
        })


    }


    /////// open add overlay ////////
    if (action == "open" && type == 'add') {

        // open popup and populate header
        document.getElementsByClassName("overlay-container")[0].style.display = "flex";
        document.getElementById("delete-asset-btn").style.display = "none";
        document.getElementById("asset-id-display").textContent = "Add Asset";
        document.getElementById("request-type").setAttribute("value","add");

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

        // clearing fields after close
        document.getElementById("edit-type").value = "";
        document.getElementById("edit-make").value = "";
        document.getElementById("edit-model").value = "";
        document.getElementById("edit-areas_id").innerHTML = "";
        document.getElementById("edit-locations_id").innerHTML = "";
        document.getElementById("edit-user").value = "";
        document.getElementById("edit-status").value = "";
    }
}
